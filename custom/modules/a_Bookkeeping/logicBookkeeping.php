<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicBookkeeping
{
    public function handleBeforeSave(&$bean, $event, $arguments) {
        if(empty($bean->name)) {
            $code_field = 'name'; // tên field cần add code (kiểm tra ở trên câu if nữa)
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

        if(!empty($bean->account_number) || $bean->status != "DaHuy") {
            if($bean->type == "NhatKyChiTien") {
                $data = array();
                $data['title'] = "NHẬT KÍ CHI TIỀN";
                $data['account_number'] = $bean->account_number;
                $data['data'] = array();
                $data['list_debit'] = array();
                $s1 = "SELECT date_payment, name, description, amount, credit, debit, status, tax, debit_tax
                    FROM a_payments WHERE deleted = 0 AND credit = " . $bean->account_number . " AND 
                    status = 'DaChi' AND (date_payment BETWEEN '{$bean->date_start}' AND '{$bean->date_end}')
                    ORDER BY date_payment ASC";
                $r1= $GLOBALS['db']->query($s1);
                $i = 0;
                $total = 0;
                while($row = $GLOBALS['db']->fetchByAssoc($r1)) {
                    $data['data'][$i]['date'] = $row['date_payment'];
                    $data['data'][$i]['no'] = $row['name'];
                    $data['data'][$i]['description'] = $row['description'];
                    $data['data'][$i]['credit'] = $row['credit'];
                    $data['data'][$i]['amount'] = $row['amount'];
                    $data['data'][$i]['debit_type'] = $row['debit'];
                    $data['data'][$i]['tax'] = $row['tax'];
                    $data['data'][$i]['debit_tax'] = $row['debit_tax'];
                    if(!in_array($row['debit'], $data['list_debit'])) {
                        $data['list_debit'][] = $row['debit'];
                    }
                    $total += intval($row['amount']);
                    $i++;
                }
                $data['total_amount'] = $total;
                $bean->data = json_encode($data);
            } elseif ($bean->type == "NhatKyThuTien") {
                $data = array();
                $data['title'] = "NHẬT KÍ THU TIỀN";
                $data['account_number'] = $bean->account_number;
                $data['data'] = array();
                $s1 = "SELECT date_receipt, name, description, amount, credit, debit
                    FROM a_receipts WHERE deleted = 0 AND debit = " . $bean->account_number . " AND 
                    status = 'DaThu' AND (date_receipt BETWEEN '{$bean->date_start}' AND '{$bean->date_end}')
                    ORDER BY date_receipt ASC";
                $r1= $GLOBALS['db']->query($s1);
                $i = 0;
                $total = 0;
                while($row = $GLOBALS['db']->fetchByAssoc($r1)) {
                    $data['data'][$i]['date'] = $row['date_receipt'];
                    $data['data'][$i]['no'] = $row['name'];
                    $data['data'][$i]['description'] = $row['description'];
                    $data['data'][$i]['credit'] = $row['credit'];
                    $data['data'][$i]['amount'] = $row['amount'];
                    $data['data'][$i]['debit'] = $row['debit'];
                    $total += intval($row['amount']);
                    $i++;
                }
                $data['total_amount'] = $total;
                $bean->data = json_encode($data);
            } elseif ($bean->type == "NhatKyChung") {
                $data = array();
                $data['title'] = "NHẬT KÍ CHUNG";
                $data['data'] = array();
                $s1 = "
                    SELECT date_payment, name, description, amount, credit, debit, status, tax, debit_tax
                    FROM a_payments WHERE deleted = 0  AND 
                    status = 'DaChi' AND (date_payment BETWEEN '{$bean->date_start}' AND '{$bean->date_end}')
                    ORDER BY date_payment ASC";
                $r1= $GLOBALS['db']->query($s1);
                $i = 0;
                while($row = $GLOBALS['db']->fetchByAssoc($r1)) {
                    $data['data'][$i]['date'] = $row['date_payment'];
                    $data['data'][$i]['no'] = $row['name'];
                    $data['data'][$i]['description'] = $row['description'];
                    $data['data'][$i]['credit'] = $row['credit'];
                    $data['data'][$i]['amount'] = $row['amount'];
                    $data['data'][$i]['debit'] = $row['debit'];
                    if(!empty($row['tax']) && !empty($row['debit_tax'])
                        && $row['tax'] != '0' && $row['debit_tax'] != '0') {
                        $data['data'][$i]['tax'] = $row['tax'];
                        $data['data'][$i]['debit_tax'] = $row['debit_tax'];
                    }
                    $i++;
                }
                $s2 = "SELECT date_receipt, name, description, amount, credit, debit
                    FROM a_receipts WHERE deleted = 0 AND 
                    status = 'DaThu' AND (date_receipt BETWEEN '{$bean->date_start}' AND '{$bean->date_end}')
                    ORDER BY date_receipt ASC";
                $r2 = $GLOBALS['db']->query($s2);
                while($row = $GLOBALS['db']->fetchByAssoc($r2)) {
                    $data['data'][$i]['date'] = $row['date_receipt'];
                    $data['data'][$i]['no'] = $row['name'];
                    $data['data'][$i]['description'] = $row['description'];
                    $data['data'][$i]['credit'] = $row['credit'];
                    $data['data'][$i]['amount'] = $row['amount'];
                    $data['data'][$i]['debit'] = $row['debit'];
                    $i++;
                }
                $bean->data = json_encode($data);
            }
        }
    }
    public function handleAfterSave(&$bean, $event, $arguments) {

    }
    public function handleProce(&$bean, $event, $arguments) {
        global $app_list_strings;
        $list_status = $app_list_strings['bookkeeping_status_list'];
        if($bean->status == 'ChuaDuyet') {
            $bean->status = '<span style="color: #821c1c;">' .$list_status['ChuaDuyet'].'</span>';
        } elseif($bean->status == 'DaDuyet') {
            $bean->status = '<span style="color: green;">' .$list_status['DaDuyet'].'</span>';
        } elseif($bean->status == 'DaHuy') {
            $bean->status = '<span style="color: black;">' .$list_status['DaHuy'].'</span>';
        }
    }

}