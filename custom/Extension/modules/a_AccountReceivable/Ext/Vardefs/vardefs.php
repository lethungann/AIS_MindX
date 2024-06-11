<?php
$dictionary['a_AccountReceivable']['fields']['student_id'] = array(
    'name' => 'student_id',
    'rname' => 'name',
    'vname' => 'LBL_SN',
    'type' => 'id',
    'table' => 'a_students',
    'isnull'            => 'true',
    'module'            => 'a_Students',
    'dbType'            => 'id',
    'duplicate_merge'   => 'disabled',
);

$dictionary['a_AccountReceivable']['fields']['student_name'] = array(
    'required' => true,
    'name' => 'student_name',
    'source' => 'non-db',
    'vname' => 'LBL_SN',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'student_id',
    'join_name' => 'a_Students',
    'link' => 'student_link',
    'table' => 'a_students',
    'isnull' => 'true',
    'module' => 'a_Students',
);
$dictionary['a_AccountReceivable']['fields']['student_link'] = array(
    'name' => 'student_link',
    'type' => 'link',
    'relationship' => 'student_accountreceivable',
    'module' => 'a_Students',
    'bean_name' => 'a_Students',
    'source' => 'non-db',
    'vname' => 'LBL_SN',
);
// công nợ hóa đơn
$dictionary['a_AccountReceivable']['fields']['invoice_id'] = array(
    'name' => 'invoice_id',
    'rname' => 'name',
    'vname' => 'LBL_INO',
    'type' => 'id',
    'table' => 'a_invoice',
    'isnull'            => 'true',
    'module'            => 'a_Invoice',
    'dbType'            => 'id',
    'duplicate_merge'   => 'disabled',
);

$dictionary['a_AccountReceivable']['fields']['invoice_name'] = array(
    'required' => true,
    'name' => 'invoice_name',
    'source' => 'non-db',
    'vname' => 'LBL_INO',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'invoice_id',
    'join_name' => 'a_Invoice',
    'link' => 'invoice_link',
    'table' => 'a_invoice',
    'isnull' => 'true',
    'module' => 'a_Invoice',
);
$dictionary['a_AccountReceivable']['fields']['invoice_link'] = array(
    'name' => 'invoice_link',
    'type' => 'link',
    'relationship' => 'invoice_accountreceivable',
    'module' => 'a_Invoice',
    'bean_name' => 'a_Invoice',
    'source' => 'non-db',
    'vname' => 'LBL_INO',
);

// đổi tên
$dictionary['a_AccountReceivable']['fields']['name']['vname'] = "AR NO";
$dictionary['a_AccountReceivable']['fields']['amount'] = array(
    'name' => 'amount',
    'vname' => 'Amount',
    'type' => 'decimal',
    'len' => '26,0',
);
