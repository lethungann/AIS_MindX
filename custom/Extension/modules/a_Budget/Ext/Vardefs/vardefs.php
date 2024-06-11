<?php
// dự chi lớp học
$dictionary['a_Budget']['fields']['class_id'] = array(
    'name' => 'class_id',
    'rname' => 'name',
    'vname' => 'LBL_CN',
    'type' => 'id',
    'table' => 'a_class',
    'isnull'            => 'true',
    'module'            => 'a_Class',
    'dbType'            => 'id',
    'duplicate_merge'   => 'disabled',
);

$dictionary['a_Budget']['fields']['class_name'] = array(
    'required' => true,
    'name' => 'class_name',
    'source' => 'non-db',
    'vname' => 'LBL_CN',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'class_id',
    'join_name' => 'a_Class',
    'link' => 'class_link',
    'table' => 'a_class',
    'isnull' => 'true',
    'module' => 'a_Class',
);
$dictionary['a_Budget']['fields']['class_link'] = array(
    'name' => 'class_link',
    'type' => 'link',
    'relationship' => 'class_budget',
    'module' => 'a_Class',
    'bean_name' => 'a_Class',
    'source' => 'non-db',
    'vname' => 'LBL_CN',
);


$dictionary['a_Budget']['fields']['user_id'] = array(
    'name' => 'user_id',
    'rname' => 'name',
    'vname' => 'LBL_APPROVE',
    'type' => 'id',
    'table' => 'users',
    'isnull'            => 'true',
    'module'            => 'Users',
    'dbType'            => 'id',
    'duplicate_merge'   => 'disabled',
);

$dictionary['a_Budget']['fields']['user_name'] = array(
    'required' => true,
    'name' => 'user_name',
    'source' => 'non-db',
    'vname' => 'LBL_APPROVE',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'user_id',
    'join_name' => 'Users',
    'link' => 'user_link',
    'table' => 'users',
    'isnull' => 'true',
    'module' => 'Users',
);
$dictionary['a_Budget']['fields']['user_link'] = array(
    'name' => 'user_link',
    'type' => 'link',
    'relationship' => 'user_budget',
    'module' => 'Users',
    'bean_name' => 'Users',
    'source' => 'non-db',
    'vname' => 'LBL_APPROVE',
);