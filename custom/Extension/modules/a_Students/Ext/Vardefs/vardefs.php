<?php
$dictionary["a_Students"]["relationships"]["contract_student"] = array (
    'lhs_module' => 'a_Students',
    'lhs_table' => 'a_students',
    'lhs_key' => 'id',
    'rhs_module' => 'a_Contracts',
    'rhs_table' => 'a_contracts',
    'rhs_key' => 'student_id',
    'relationship_type' => 'one-to-many'
);

$dictionary['a_Students']['fields']['class_id'] = array(
    'name' => 'class_id',
    'rname' => 'name',
    'vname' => 'LBL_CODE_CLASS',
    'type' => 'id',
    'table' => 'a_class',
    'isnull'            => 'true',
    'module'            => 'a_Class',
    'dbType'            => 'id',
    'duplicate_merge'   => 'disabled',
);

$dictionary['a_Students']['fields']['class_name'] = array(
    'required' => true,
    'name' => 'class_name',
    'source' => 'non-db',
    'vname' => 'LBL_CODE_CLASS',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'class_id',
    'join_name' => 'a_Class',
    'link' => 'class_link',
    'table' => 'a_class',
    'isnull' => 'true',
    'module' => 'a_Class',
);
$dictionary['a_Students']['fields']['class_link'] = array(
    'name' => 'class_link',
    'type' => 'link',
    'relationship' => 'student_class',
    'module' => 'a_Class',
    'bean_name' => 'a_Class',
    'source' => 'non-db',
    'vname' => 'LBL_CODE_CLASS',
);

$dictionary["a_Students"]["relationships"]["student_accountreceivable"] = array (
    'lhs_module' => 'a_Students',
    'lhs_table' => 'a_students',
    'lhs_key' => 'id',
    'rhs_module' => 'a_AccountReceivable',
    'rhs_table' => 'a_accountreceivable',
    'rhs_key' => 'student_id',
    'relationship_type' => 'one-to-many'
);

$dictionary["a_Students"]["relationships"]["invoice_student"] = array (
    'lhs_module' => 'a_Students',
    'lhs_table' => 'a_students',
    'lhs_key' => 'id',
    'rhs_module' => 'a_Invoice',
    'rhs_table' => 'a_invoice',
    'rhs_key' => 'student_id',
    'relationship_type' => 'one-to-many'
);
$dictionary["a_Students"]["fields"]["mail"] = array (
    'name'=>'mail',
    'vname' => 'LBL_EMAIL',
    'type'=>'varchar',
    'len'=>'100',
);

$dictionary["a_Students"]['fields']['contracts'] = array(
    'name' => 'contracts',
    'type' => 'link',
    'relationship' => 'contract_student',
    'vname' => 'LBL_CONTRACTS',
    'source' => 'non-db',
);
$dictionary["a_Students"]['fields']['invoice'] = array(
    'name' => 'invoice',
    'type' => 'link',
    'relationship' => 'invoice_student',
    'vname' => 'LBL_INVOICE',
    'source' => 'non-db',
);

$dictionary["a_Students"]["fields"]["status"] = array (
    'name'=>'status',
    'vname' => 'LBL_STATUS',
    'type'=>'enum',
    'dbType' => 'varchar',
    'len'=>'100',
    'options' => 'student_status_list',
    'massupdate' => true,
);
$dictionary["a_Students"]["fields"]["class_name"]["required"] = false;
