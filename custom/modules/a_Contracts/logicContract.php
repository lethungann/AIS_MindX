<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicContract
{
    public function handleBeforeSave(&$bean, $event, $arguments) {
        global $mod_strings;
        $st_id = $bean->student_id;
        $student = BeanFactory::getBean('a_Students', $bean->student_id);
        if(empty($student->class_id)) {
            die($mod_strings['LBL_ERR_EMPTY_CLASS']);
        } else {
            $class = BeanFactory::getBean('a_Class', $student->class_id);
            $data = array(
                'id' => $class->id,
                'name' => $class->name,
                'code_class' => $class->code_class,
                'date_start' => $class->date_start,
            );
            $bean->data_class = json_encode($data);
        }


        if(empty($bean->name)) {
            $code_field = 'name'; // tên field cần add code (kiểm tra ở trên câu if nữa)
            $year       = date('ym'); //2311
            $table      = $bean->table_name;
            $first_pad  = '0000';
            $padding    = 4;
            $str_code   = 'C' . $year . '-'; // I2311-
            $query = "SELECT $code_field FROM $table WHERE ( $code_field <> '' AND $code_field IS NOT NULL) AND id != '{$bean->id}' AND (LEFT($code_field, ".strlen($str_code).") = '".$str_code."') AND deleted=0 ORDER BY RIGHT($code_field, $padding) DESC LIMIT 1";
            $result = $GLOBALS['db']->query($query);
            if($row = $GLOBALS['db']->fetchByAssoc($result))
                $last_code = $row[$code_field];
            else
                $last_code = $str_code. $first_pad;
            $num = substr($last_code, -$padding, $padding);
            $num++;
            $pads = $padding - strlen($num);
            $new_code = $str_code;
            for($i=0; $i < $pads; $i++)
                $new_code .= "0";
            $new_code .= $num;
            $bean->$code_field = $new_code; //I2311-0001
        }

        if($bean->status == "DaKy") {
            if(empty($bean->invoice_id)) {
                $invoice = BeanFactory::getBean('a_Invoice');
                $invoice->status = 'Nhap';
                $invoice->description = 'Thanh toán cho hợp đồng ' . $bean->name . ' với nội dung: ' . $bean->description;
                $invoice->receivable = $bean->amount;
                $invoice->amount = '0';
                $invoice->student_id = $bean->student_id;
                $invoice->save();
                $bean->invoice_id = $invoice->id;
            }
        }
    }

    public function handleAfterRetrieve(&$bean, $event, $arguments) {
        global $mod_strings;
        $data = json_decode(html_entity_decode($bean->data_class), true);
        $html = '<p>'. $mod_strings['LBL_DATA_CLASS_ARRAY']['code_class'] . ': '.$data['code_class'].'</p>';
        $html .= '<p>'. $mod_strings['LBL_DATA_CLASS_ARRAY']['name'] . ': '.$data['name'].'</p>';
        $html .= '<p>'. $mod_strings['LBL_DATA_CLASS_ARRAY']['enrollment_date'] . ': '.$data['date_start'].'</p>';
        $html .= '<p>'. $mod_strings['LBL_DATA_CLASS_ARRAY']['end_date'] . ': '.$data['date_end'].'</p>';
        $bean->data_class = $html;
    }
    public function handleContract(&$bean, $event, $arguments) {
        global $app_list_strings;
        $list_status = $app_list_strings['status_list'];
        if($bean->status == 'ChuaKy') {
            $bean->status = '<span style="color: #821c1c;">' .$list_status['ChuaKy'].'</span>';
        } elseif($bean->status == 'DaKy') {
            $bean->status = '<span style="color: #0c900c;">' .$list_status['DaKy'].'</span>';
        }
        elseif($bean->status == 'DaHetHan') {
            $bean->status = '<span style="color: black;">' .$list_status['DaHetHan'].'</span>';
        }
    }
}