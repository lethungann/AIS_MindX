<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicStudent
{
    public function handleBeforeSave(&$bean, $event, $arguments) {
        if(empty($bean->code_student)) {
            $code_field = 'code_student'; // tên field cần add code (kiểm tra ở trên câu if nữa)
            $year       = date('ym'); //2311
            $table      = $bean->table_name;
            $first_pad  = '0000';
            $padding    = 4;
            $str_code   = 'S' . $year . '-'; // I2311-
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
        if(!empty($bean->class_id)) {
            $class = BeanFactory::getBean('a_Class', $bean->class_id);
            if(empty($class->list_students)) {
                $data[] = $bean->id;
                $class->list_students = json_encode($data);
                $class->save();
            } else {
                $data = json_decode(html_entity_decode($class->list_students), true);
                if(!in_array($bean->id, $data)) {
                    $data[] = $bean->id;
                    $class->list_students = json_encode($data);
                    $class->save();
                }
            }
        }
    }

    public function handleAfterDelete(&$bean, $event, $arguments) {
        if(!empty($bean->class_id)) {
            $class = BeanFactory::getBean('a_Class', $bean->class_id);
            $data = json_decode(html_entity_decode($class->list_students), true);
            $key = array_search($bean->id, $data);
            if ($key !== false) {
                unset($data[$key]);
            }
            $class->list_students = json_encode($data);
            $class->save();
        }
    }
    public function handleStudents (&$bean, $event, $arguments) {
        global $app_list_strings;
        $list_status = $app_list_strings['student_status_list'];
        if($bean->status == 'DangDoiLop') {
            $bean->status = '<span style="color: #e57842;">' .$list_status['DangDoiLop'].'</span>';
        } elseif($bean->status == 'KetThuc') {
            $bean->status = '<span style="color: black;">' .$list_status['KetThuc'].'</span>';
        } elseif($bean->status == 'DangHoc') {
            $bean->status = '<span style="color: #0c900c;">' .$list_status['DangHoc'].'</span>';
        }
        elseif($bean->status == 'DaHuy') {
            $bean->status = '<span style="color: black;">' .$list_status['DaHuy'].'</span>';
        }
    }


}