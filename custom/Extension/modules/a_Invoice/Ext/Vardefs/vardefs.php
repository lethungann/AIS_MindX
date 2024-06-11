<?php
$dictionary["a_Invoice"]["relationships"]["invoice_receipt"] = array (
    'lhs_module' => 'a_Invoice',
    'lhs_table' => 'a_invoice',
    'lhs_key' => 'id',
    'rhs_module' => 'a_Receipts',
    'rhs_table' => 'a_receipts',
    'rhs_key' => 'invoice_id',
    'relationship_type' => 'one-to-many'
);

$dictionary['a_Invoice']['fields']['student_id'] = array(
    'name' => 'student_id',
    'rname' => 'name',
    'vname' => 'LBL_STUDENT_NAME',
    'type' => 'id',
    'table' => 'a_students',
    'isnull'            => 'true',
    'module'            => 'a_Students',
    'dbType'            => 'id',
    'duplicate_merge'   => 'disabled',
);
$dictionary['a_Invoice']['fields']['student_name'] = array(
    'required' => true,
    'name' => 'student_name',
    'source' => 'non-db',
    'vname' => 'LBL_STUDENT_NAME',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'student_id',
    'join_name' => 'a_Students',
    'link' => 'student_link',
    'table' => 'a_students',
    'isnull' => 'true',
    'module' => 'a_Students',
);
$dictionary['a_Invoice']['fields']['student_link'] = array(
    'name' => 'student_link',
    'type' => 'link',
    'relationship' => 'invoice_student',
    'module' => 'a_Students',
    'bean_name' => 'a_Students',
    'source' => 'non-db',
    'vname' => 'LBL_STUDENT_NAME',
);
//đổi tên

$dictionary['a_Invoice']['fields']['name']['required'] = false;

$dictionary["a_Invoice"]["relationships"]["invoice_accountreceivable"] = array (
    'lhs_module' => 'a_Invoice',
    'lhs_table' => 'a_invoice',
    'lhs_key' => 'id',
    'rhs_module' => 'a_AccountReceivable',
    'rhs_table' => 'a_accountreceivable',
    'rhs_key' => 'invoice_id',
    'relationship_type' => 'one-to-many'
);
$dictionary["a_Invoice"]['fields']['receipts'] = array(
    'name' => 'receipts',
    'type' => 'link',
    'relationship' => 'invoice_receipt',
    'vname' => 'LBL_RE',
    'source' => 'non-db',
);

$dictionary["a_Invoice"]['fields']['accountreceivable'] = array(
    'name' => 'accountreceivable',
    'type' => 'link',
    'relationship' => 'invoice_accountreceivable',
    'vname' => 'LBL_AR ',
    'source' => 'non-db',
);
//$dictionary['a_Invoice']['fields']['contract_id'] = array(
//    'name' => 'contract_id',
//    'rname' => 'name',
//    'vname' => 'Contract NO',
//    'type' => 'id',
//    'table' => 'a_contracts',
//    'isnull'            => 'true',
//    'module'            => 'a_Contracts',
//    'dbType'            => 'id',
//    'duplicate_merge'   => 'disabled',
//);
//$dictionary['a_Invoice']['fields']['contract_name'] = array(
//    'required' => true,
//    'name' => 'contract_name',
//    'source' => 'non-db',
//    'vname' => 'Contract NO',
//    'type' => 'relate',
//    'rname' => 'name',
//    'id_name' => 'contract_id',
//    'join_name' => 'a_Contracts',
//    'link' => 'contract_link',
//    'table' => 'a_contracts',
//    'isnull' => 'true',
//    'module' => 'a_Contracts',
//);
//$dictionary['a_Invoice']['fields']['contract_link'] = array(
//    'name' => 'contract_link',
//    'type' => 'link',
//    'relationship' => 'invoice_contract',
//    'module' => 'a_Contracts',
//    'bean_name' => 'a_Contracts',
//    'source' => 'non-db',
//    'vname' => 'Contract NO',
//);