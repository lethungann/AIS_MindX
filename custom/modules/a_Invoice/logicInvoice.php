<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicInvoice
{
    public function handleBeforeSave(&$bean, $event, $arguments) {
        if(empty($bean->name)) {
            $code_field = 'name'; // tên field cần add code (kiểm tra ở trên câu if nữa)
            $year       = date('ym'); //2311
            $table      = $bean->table_name;
            $first_pad  = '0000';
            $padding    = 4;
            $str_code   = 'I' . $year . '-'; // I2311-
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
    }

    public function handleAfterSave(&$bean, $event, $arguments) {
        global $db;
        if($bean->status == "DaHuy") {
            global $db;
            $s1 = "UPDATE a_receipts SET status = 'Huy' WHERE invoice_id = '$bean->id' AND deleted = 0";
            $db->query($s1);
            $s4 = "UPDATE a_accountreceivable SET status = 'DaHuy' WHERE invoice_id = '$bean->id' AND deleted = 0";
            $db->query($s4);
        }
        if($bean->status != "DaHuy" && $bean->status != "Nhap") {
            $s2 = "SELECT id FROM a_accountreceivable WHERE invoice_id = '{$bean->id}' AND deleted = 0";
            $row = $db->fetchOne($s2);
            if(empty($row) || $row == false) {
                $ar = BeanFactory::getBean('a_AccountReceivable');
                $ar->invoice_id = $bean->id;
                $ar->status = "ChuaHoanThanh";
                $ar->student_id = $bean->student_id;
                $ar->amount = intval($bean->receivable) - intval($bean->amount);

                $s3 = "SELECT date_end FROM a_contracts WHERE invoice_id = '{$bean->id}' AND deleted = 0";
                $row2 = $db->fetchOne($s3);
                $ar->due_date = $row2['date_end'];
                $ar->save();
            } elseif($row != false) {
                $ar = BeanFactory::getBean('a_AccountReceivable', $row['id']);
                $ar->amount = intval($bean->receivable) - intval($bean->amount);
                if($ar->amount <= 0) $ar->status = "DaHoanThanh";
                else $ar->status = "ChuaHoanThanh";
                $ar->save();
            }

        }
    }
    public function handleInvoice (&$bean, $event, $arguments) {
        global $app_list_strings;
        $list_status = $app_list_strings['invoice_status_list'];
        if($bean->status == 'TraGop') {
            $bean->status = '<span style="color: #902020;">' .$list_status['TraGop'].'</span>';
        } elseif($bean->status == 'DaTraHet') {
            $bean->status = '<span style="color: #0c900c;">' .$list_status['DaTraHet'].'</span>';
        }
        elseif($bean->status == 'DaHuy') {
            $bean->status = '<span style="color: black;">' .$list_status['DaHuy'].'</span>';
        }
        elseif($bean->status == 'Nhap') {
            $bean->status = '<span style="color: #000000;">' .$list_status['Nhap'].'</span>';
        }
    }
}