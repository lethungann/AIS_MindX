<?php
$popupMeta = array (
    'moduleMain' => 'a_Suppliers',
    'varName' => 'a_Suppliers',
    'orderBy' => 'a_suppliers.name',
    'whereClauses' => array (
  'name' => 'a_suppliers.name',
  'code_name' => 'a_suppliers.code_name',
  'code_tax' => 'a_suppliers.code_tax',
  'phone' => 'a_suppliers.phone',
  'mail' => 'a_suppliers.mail',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'code_name',
  5 => 'code_tax',
  6 => 'phone',
  7 => 'mail',
),
    'searchdefs' => array (
  'code_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODE_NAME',
    'width' => '10%',
    'name' => 'code_name',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'code_tax' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODE_TAX',
    'width' => '10%',
    'name' => 'code_tax',
  ),
  'phone' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'name' => 'phone',
  ),
  'mail' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MAIL',
    'width' => '10%',
    'name' => 'mail',
  ),
),
);
