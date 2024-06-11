<?php
$dictionary['a_Asset']['fields']['supplier_id'] = array(
    'name' => 'supplier_id',
    'rname' => 'name',
    'vname' => 'LBL_SUPNAME',
    'type' => 'id',
    'table' => 'a_suppliers',
    'isnull'            => 'true',
    'module'            => 'a_Suppliers',
    'dbType'            => 'id',
    'duplicate_merge'   => 'disabled',
);

$dictionary['a_Asset']['fields']['supplier_name'] = array(
    'required' => true,
    'name' => 'supplier_name',
    'source' => 'non-db',
    'vname' => 'LBL_SUPNAME',
    'type' => 'relate',
    'rname' => 'name',
    'id_name' => 'supplier_id',
    'join_name' => 'a_Suppliers',
    'link' => 'supplier_link',
    'table' => 'a_suppliers',
    'isnull' => 'true',
    'module' => 'a_Suppliers',
);
$dictionary['a_Asset']['fields']['supplier_link'] = array(
    'name' => 'supplier_link',
    'type' => 'link',
    'relationship' => 'supplier_asset',
    'module' => 'a_Suppliers',
    'bean_name' => 'a_Suppliers',
    'source' => 'non-db',
    'vname' => 'LBL_SUPNAME',
);
