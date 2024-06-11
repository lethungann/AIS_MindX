<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once 'include/PHPExcel-1.8/Classes/PHPExcel.php';

switch ($_POST['type']) {
    case 'exportBookkeping':
        $result = json_encode(getFileBookkeeping($_POST['id'], $_POST['file']));
        echo $result;
        break;
    case 'deleteFileBookkeeping':
        $result = json_encode(read_deleteFileBookkeeping($_POST['path']));
        echo $result;
        break;
    default:
}

function read_deleteFileBookkeeping($path = '') {
    if (file_exists($path)) {
        if (unlink($path)) {
            return array(
                'success' => 1,
            );
        }
    }
    return array(
        'success' => 0,
    );
}

function getFileBookkeeping($id = '', $file = '') {
    global $mod_strings, $current_user;
    if(empty($id))
        return array(
            'success' => 0,
            'error' => 'Data ID not found',
        );
    elseif (empty($file))
        return array(
            'success' => 0,
            'error' => 'File type not found',
        );
    $bkp = BeanFactory::getBean('a_Bookkeeping', $id);
    if($bkp->status == "DaHuy") {
        return array(
            'success' => 0,
            'error' => 'Bookkeeping cancelled',
        );
    }
    if(empty($bkp->id)) {
        return array(
            'success' => 0,
            'error' => 'Bookkeeping not found',
        );
    } elseif (empty($bkp->data)) {
        return array(
            'success' => 0,
            'error' => 'Empty data of Bookkeeping',
        );
    }
    $data = json_decode(html_entity_decode($bkp->data), true);
    if($file == "Excel" && $bkp->type == "NhatKyChiTien") {
        //Tạo đối tượng Excel
        $obj = new PHPExcel();
        //Set độ rộng
        $obj->getActiveSheet()->getColumnDimension('A')->setWidth(15);
        $obj->getActiveSheet()->getColumnDimension('B')->setWidth(12);
        $obj->getActiveSheet()->getColumnDimension('C')->setWidth(40);
        $obj->getActiveSheet()->getColumnDimension('D')->setWidth(15);
        $obj->getActiveSheet()->getColumnDimension('E')->setWidth(15);
        $obj->getActiveSheet()->getColumnDimension('F')->setWidth(15);
        $obj->getActiveSheet()->getColumnDimension('G')->setWidth(15);
        $obj->getActiveSheet()->getColumnDimension('H')->setWidth(15);
        $obj->getActiveSheet()->getColumnDimension('I')->setWidth(15);
        $obj->getActiveSheet()->getColumnDimension('J')->setWidth(12);
        //Set dòng 1
        $obj->getActiveSheet()->mergeCells('A1:J1');
        $obj->setActiveSheetIndex(0)->setCellValue('A1', 'NHẬT KÍ CHI TIỀN');
        $st_A1 = $obj->getActiveSheet()->getStyle('A1');
        $font_A1 = $st_A1->getFont();
        $font_A1->setBold(true);
        $st_A1->getFont()->setSize(14);
        $align_A1 = $st_A1->getAlignment();
        $align_A1->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $align_A1->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        //Set dòng 2
        $obj->setActiveSheetIndex(0)->setCellValue('F2', 'Số hiệu:');
        $obj->setActiveSheetIndex(0)->setCellValue('G2', $bkp->account_number);
        $st_F2 = $obj->getActiveSheet()->getStyle('F2');
        $font_F2 = $st_F2->getFont();
        $font_F2->setBold(true);
        //Set dòng 4  5  6
        $st_A4_J6 = $obj->getActiveSheet()->getStyle('A4:J6');
        $font_A4_J6 = $st_A4_J6->getFont();
        $font_A4_J6->setBold(true);
        $align_A4_J6 = $st_A4_J6->getAlignment();
        $align_A4_J6->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $align_A4_J6->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $obj->getActiveSheet()->mergeCells('A4:B4');
        $obj->setActiveSheetIndex(0)->setCellValue('A4', 'Chứng từ');
        $obj->getActiveSheet()->mergeCells('E4:J4');
        $obj->setActiveSheetIndex(0)->setCellValue('E4', 'Ghi nợ các tài khoản');
        $obj->getActiveSheet()->mergeCells('A5:A6');
        $obj->getActiveSheet()->mergeCells('B5:B6');
        $obj->getActiveSheet()->mergeCells('C4:C6');
        $obj->getActiveSheet()->mergeCells('D4:D6');
        $obj->getActiveSheet()->mergeCells('E5:E6');
        $obj->getActiveSheet()->mergeCells('F5:F6');
        $obj->getActiveSheet()->mergeCells('G5:G6');
        $obj->getActiveSheet()->mergeCells('H5:H6');
        $obj->getActiveSheet()->mergeCells('H5:H6');
        $obj->getActiveSheet()->mergeCells('I5:J5');
        $obj->getActiveSheet()->mergeCells('I5:J5');
        $obj->setActiveSheetIndex(0)->setCellValue('A5', 'Ngày');
        $obj->setActiveSheetIndex(0)->setCellValue('B5', 'Số');
        $obj->setActiveSheetIndex(0)->setCellValue('C4', 'Diễn giải');
        $obj->setActiveSheetIndex(0)->setCellValue('D4', 'Ghi có TK ' . $bkp->account_number);
        $obj->setActiveSheetIndex(0)->setCellValue('E5', '141');
        $obj->setActiveSheetIndex(0)->setCellValue('F5', '331');
        $obj->setActiveSheetIndex(0)->setCellValue('G5', '334');
        $obj->setActiveSheetIndex(0)->setCellValue('H5', '642');
        $obj->setActiveSheetIndex(0)->setCellValue('H5', '642');
        $obj->setActiveSheetIndex(0)->setCellValue('I5', 'Tài khoản');
        $obj->setActiveSheetIndex(0)->setCellValue('I6', 'Số tiền');
        $obj->setActiveSheetIndex(0)->setCellValue('J6', 'Số hiệu');
        //Set dòng 7
        $st_A7_J7 = $obj->getActiveSheet()->getStyle('A7:J7');
        $align_A7_J7 = $st_A7_J7->getAlignment();
        $align_A7_J7->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $align_A7_J7->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $obj->setActiveSheetIndex(0)->setCellValue('A7', '[1]');
        $obj->setActiveSheetIndex(0)->setCellValue('B7', '[2]');
        $obj->setActiveSheetIndex(0)->setCellValue('C7', '[3]');
        $obj->setActiveSheetIndex(0)->setCellValue('D7', '[4]');
        $obj->setActiveSheetIndex(0)->setCellValue('E7', '[5]');
        $obj->setActiveSheetIndex(0)->setCellValue('F7', '[6]');
        $obj->setActiveSheetIndex(0)->setCellValue('G7', '[7]');
        $obj->setActiveSheetIndex(0)->setCellValue('H7', '[8]');
        $obj->setActiveSheetIndex(0)->setCellValue('I7', '[9]');
        $obj->setActiveSheetIndex(0)->setCellValue('J7', '[10]');
        //Set data từ dòng 8
        $i = 8;
        $total = 0;
        $total_E = 0;
        $total_F = 0;
        $total_G = 0;
        $total_H = 0;
        $total_I = 0;
        foreach($data['data'] as $value) {
            $total += intval($value['amount']);
            if($value['debit_type'] == '141') {
                $total_E += intval($value['amount']);
            } elseif ($value['debit_type'] == '331') {
                $total_F += intval($value['amount']);
            } elseif ($value['debit_type'] == '334') {
                $total_G += intval($value['amount']);
            } elseif ($value['debit_type'] == '642') {
                $total_H += intval($value['amount']);
            }
            $obj->setActiveSheetIndex(0)->setCellValue('A' . $i, $value['date']);
            $obj->setActiveSheetIndex(0)->setCellValue('B' . $i, $value['no']);
            $obj->setActiveSheetIndex(0)->setCellValue('C' . $i, $value['description']);
            $obj->setActiveSheetIndex(0)->setCellValue('D' . $i, $value['amount']);
            $obj->setActiveSheetIndex(0)->setCellValue('E' . $i, ($value['debit_type'] == '141' && $value['tax'] == 0) ? $value['amount'] : '0');
            $obj->setActiveSheetIndex(0)->setCellValue('F' . $i, ($value['debit_type'] == '331' && $value['tax'] == 0) ? $value['amount'] : '0');
            $obj->setActiveSheetIndex(0)->setCellValue('G' . $i, ($value['debit_type'] == '334' && $value['tax'] == 0) ? $value['amount'] : '0');
            $obj->setActiveSheetIndex(0)->setCellValue('H' . $i, ($value['debit_type'] == '642' && $value['tax'] == 0) ? $value['amount'] : '0');
            $obj->setActiveSheetIndex(0)->setCellValue('I' . $i, '0');
            $obj->setActiveSheetIndex(0)->setCellValue('J' . $i, '0');
            $i++;
            if(!empty($value['tax']) && !empty($value['debit_tax'])
                && $value['tax'] != '0' && $value['debit_tax'] != '0') {
                $obj->setActiveSheetIndex(0)->setCellValue('A' . $i, $value['date']);
                $obj->setActiveSheetIndex(0)->setCellValue('B' . $i, $value['no']);
                $obj->setActiveSheetIndex(0)->setCellValue('C' . $i, $value['description']);
                $obj->setActiveSheetIndex(0)->setCellValue('D' . $i, $value['tax']);
                $obj->setActiveSheetIndex(0)->setCellValue('E' . $i, '0');
                $obj->setActiveSheetIndex(0)->setCellValue('F' . $i, '0');
                $obj->setActiveSheetIndex(0)->setCellValue('G' . $i, '0');
                $obj->setActiveSheetIndex(0)->setCellValue('H' . $i, '0');
                $obj->setActiveSheetIndex(0)->setCellValue('I' . $i, $value['tax']);
                $obj->setActiveSheetIndex(0)->setCellValue('J' . $i, $value['debit_tax']);
                $total_I += intval($value['tax']);
                $i++;
            }
        }
        $obj->setActiveSheetIndex(0)->setCellValue('C' . $i, 'Tổng');
        $obj->setActiveSheetIndex(0)->setCellValue('D' . $i, $total);
        $obj->setActiveSheetIndex(0)->setCellValue('E' . $i, $total_E);
        $obj->setActiveSheetIndex(0)->setCellValue('F' . $i, $total_F);
        $obj->setActiveSheetIndex(0)->setCellValue('G' . $i, $total_G);
        $obj->setActiveSheetIndex(0)->setCellValue('H' . $i, $total_H);
        $obj->setActiveSheetIndex(0)->setCellValue('I' . $i, $total_I);

        $objW = PHPExcel_IOFactory::createWriter($obj, 'Excel2007');
        $file_name = $bkp->name . '.xlsx';
        $path = "upload/bookkeeping";
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
            chmod($path, 0777);
        }
        $objW->save($path . '/' . $file_name);

        $note = BeanFactory::getBean('Notes');
        $note->name = 'Nhật kí chi tiền (' . $bkp->name . ')';
        if(file_exists($path . '/' . $file_name)) {
            $note->file_mime_type = mime_content_type($path . '/' . $file_name);
            $note->filename = basename($path . '/' . $file_name);
        }
        $note->parent_type = 'Bookkeeping';
        $note->parent_id = $bkp->id;
        $note->assigned_user_id = $_SESSION['authenticated_user_id'];
        $note->save();

        rename($path . '/' . $file_name, $path . '/' . $note->id);

        return array(
            'success' => 1,
            'url_download' => 'index.php?entryPoint=download&id='.$note->id.'&type=Notes',
        );
    } elseif ($file == "Excel" && $bkp->type == "NhatKyThuTien") {

    }
}