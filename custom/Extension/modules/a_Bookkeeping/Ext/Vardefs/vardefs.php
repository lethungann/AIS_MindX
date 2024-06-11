<?php
//đổi tên

$dictionary['a_Bookkeeping']['fields']['date_start'] = array(
    'required' => true,
    'name' => 'date_start',
    'vname' => 'LBL_DATESTART',
    'type' => 'date',
);
$dictionary['a_Bookkeeping']['fields']['date_end'] = array(
    'required' => true,
    'name' => 'date_end',
    'vname' => 'LBL_DATEEND',
    'type' => 'date',
);
$dictionary['a_Bookkeeping']['fields']['status'] = array(
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'options' => 'bookkeeping_status_list',
);
$dictionary['a_Bookkeeping']['fields']['data']['rows'] = 2;
$dictionary['a_Bookkeeping']['fields']['data']['cols'] = 80;
$dictionary['a_Bookkeeping']['fields']['data']['required'] = false;

$dictionary['a_Bookkeeping']['fields']['account_number'] = array(
    'required' => true,
    'name' => 'account_number',
    'vname' => 'LBL_ACCOUNTNUMBER',
    'type' => 'int',
);
$dictionary['a_Bookkeeping']['fields']['export_to_file'] = array(
    'name' => 'export_to_file',
    'vname' => 'LBL_EXPORT_TO_FILE',
    'type' => 'enum',
    'dbType' => 'varchar',
    'len' => '50',
    'options' => 'export_to_file_list',
);
$dictionary['a_Bookkeeping']['relationships']['bookkeeping_notes'] = array(
    'lhs_module' => 'a_Bookkeeping',
    'lhs_table' => 'a_bookkeeping',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column'=>'parent_type',
    'relationship_role_column_value'=>'Bookkeeping'
);
$dictionary["a_Bookkeeping"]['fields']['notes'] = array(
    'name' => 'notes',
    'type' => 'link',
    'relationship' => 'bookkeeping_notes',
    'vname' => 'LBL_NOTES',
    'source' => 'non-db',
);