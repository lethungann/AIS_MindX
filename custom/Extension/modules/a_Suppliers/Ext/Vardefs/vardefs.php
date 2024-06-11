<?php
$dictionary["a_Suppliers"]["relationships"]["supplier_asset"] = array (
    'lhs_module' => 'a_Suppliers',
    'lhs_table' => 'a_suppliers',
    'lhs_key' => 'id',
    'rhs_module' => 'a_Asset',
    'rhs_table' => 'a_asset',
    'rhs_key' => 'supplier_id',
    'relationship_type' => 'one-to-many'
);
$dictionary["a_Suppliers"]['fields']['assets'] = array(
    'name' => 'assets',
    'type' => 'link',
    'relationship' => 'supplier_asset',
    'vname' => 'LBL_ASSETS',
    'source' => 'non-db',
);