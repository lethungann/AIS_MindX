<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicAR
{
    public function handleBeforeSave(&$bean, $event, $arguments) {
        if(empty($bean->name)) {
            $code_field = 'name'; // tên field cần add code (kiểm tra ở trên câu if nữa)
            $year       = date('ym'); //2311
            $table      = $bean->table_name;
            $first_pad  = '0000';
            $padding    = 4;
            $str_code   = 'AR' . $year . '-'; // I2311-
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

        if(intval($bean->amount) == 0) {
            $bean->status = "DaHoanThanh";
        } elseif (intval($bean->amount) < 0) {
            $bean->status = "ThanhToanQuaMuc";
        } elseif (intval($bean->amount) > 0) {
            $currentDateTime = new DateTime();
            $currentDateTime = $currentDateTime->format('Y-m-d');
            $date_end = $bean->date_end;
            if($currentDateTime>$date_end) {
                $bean->status = "QuaHan";
            } else {
                $bean->status = "ChuaHoanThanh";
            }
        }
    }

    function handleGetList(&$bean, $event, $arguments) {
        global $app_list_strings;
        $list_status = $app_list_strings['account_receipt_status_list'];
        if($bean->status == 'ChuaHoanThanh') {
            $bean->status = '<span style="color: #902020;">' .$list_status['ChuaHoanThanh'].'</span>';
        } elseif($bean->status == 'DaHoanThanh') {
            $bean->status = '<span style="color: green;">' .$list_status['DaHoanThanh'].'</span>';
        } elseif($bean->status == 'DaHuy') {
            $bean->status = '<span style="color: black;">' .$list_status['DaHuy'].'</span>';
        }
    }
}