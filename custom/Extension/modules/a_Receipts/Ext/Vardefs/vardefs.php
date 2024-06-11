<?php
$dictionary['a_Receipts']['fields']['invoice_id'] = array(
    'name' => 'invoice_id',
    'rname' => 'name',
    'vname' => 'LBL_CODE_INVOICE',
    'type' => 'id',
    'table' => 'a_invoice',
    'isnull'            => 'true',
    'module'            => 'a_Invoice',
    'dbType'            => 'id',
    'duplicate_merge'   => 'disabled',
);

$dictionary['a_Receipts']['fields']['invoice_name'] = array(
    'required' => true,
    'name' => 'invoice_name',
    'source' => 'non-db',
    'vname' => 'LBL_CODE_INVOICE',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'invoice_id',
    'join_name' => 'a_Invoice',
    'link' => 'invoice_link',
    'table' => 'a_invoice',
    'isnull' => 'true',
    'module' => 'a_Invoice',
);
$dictionary['a_Receipts']['fields']['invoice_link'] = array(
    'name' => 'invoice_link',
    'type' => 'link',
    'relationship' => 'invoice_receipt',
    'module' => 'a_Invoice',
    'bean_name' => 'a_Invoice',
    'source' => 'non-db',
    'vname' => 'LBL_CODE_INVOICE',
);
//đổi tên


$dictionary['a_Receipts']['fields']['date_receipt'] = array(
    'name' => 'date_receipt',
    'label' => 'LBL_DATE_RECEIPT',
    'type' => 'date',
);