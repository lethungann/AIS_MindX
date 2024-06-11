<?php
$dictionary['a_Contracts']['fields']['student_id'] = array(
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
$dictionary['a_Contracts']['fields']['student_name'] = array(
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
$dictionary['a_Contracts']['fields']['student_link'] = array(
    'name' => 'student_link',
    'type' => 'link',
    'relationship' => 'contract_student',
    'module' => 'a_Students',
    'bean_name' => 'a_Students',
    'source' => 'non-db',
    'vname' => 'LBL_STUDENT_NAME',
);
//đổi tên

//$dictionary['a_Contracts']['fields']['date_start']['type'] = 'datetime';
//$dictionary['a_Contracts']['fields']['date_end']['type'] = 'datetime';
$dictionary['a_Contracts']['fields']['amount'] = array(
    'name' => 'amount',
    'vname' => 'LBL_AMOUNT',
    'type' => 'decimal',
    'len' => '26,0',
    'default' => '0',
);
$dictionary["a_Contracts"]["fields"]["invoice_id"] = array (
    'name' => 'invoice_id',
    'vname' => 'LBL_IURL',
    'type' => 'id',
    'studio' => true,
);
$dictionary["a_Contracts"]["fields"]["data_class"] = array (
    'name' => 'data_class',
    'vname' => 'LBL_DATA_CLASS',
    'type' => 'text',
);
$dictionary["a_Contracts"]["fields"]['date_end']['help'] = "LBL_HELP_DATE_END";