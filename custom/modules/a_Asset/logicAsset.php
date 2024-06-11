<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicAsset
{
    public function handleBeforeSave(&$bean, $event, $arguments) {
        if(empty($bean->code_name)) {
            $code_field = 'code_name'; // tên field cần add code (kiểm tra ở trên câu if nữa)
            $year       = date('ym'); //2311
            $table      = $bean->table_name;
            $first_pad  = '0000';
            $padding    = 4;
            $str_code   = 'B' . $year . '-'; // I2311-
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
    public function handleprocessrecord(&$bean, $event, $arguments) {
        global $app_list_strings;
        $list_status = $app_list_strings['asset_status_list'];
        if($bean->status == 'ChuaSuDung') {
            $bean->status = '<span style="color: #b64040;">' .$list_status['ChuaSuDung'].'</span>';
        } elseif($bean->status == 'DangSuDung') {
            $bean->status = '<span style="color: green;">' .$list_status['DangSuDung'].'</span>';
        } elseif($bean->status == 'HetHan') {
            $bean->status = '<span style="color: #6f6cf5;">' .$list_status['HetHan'].'</span>';
        } elseif($bean->status == 'Huy') {
            $bean->status = '<span style="color: black;">' .$list_status['Huy'].'</span>';
        }
    }
}