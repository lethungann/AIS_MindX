<?php
$module_name = 'a_Asset';
$listViewDefs [$module_name] = 
array (
  'CODE_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODE_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SUPPLIER_NAME' =>
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SUPNAME',
    'id' => 'SUPPLIER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'PIRCE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_PIRCE',
    'width' => '10%',
    'default' => true,
  ),
  'DEPRECIATION_RATE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_DEPRECIATION_RATE',
    'width' => '10%',
    'default' => true,
  ),
  'USE_TIME' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_USE_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
   // 'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'type'=>'html',
  ),
  'DEBIT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DEBIT',
    'width' => '10%',
    'default' => false,
  ),
  'CREDIT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CREDIT',
    'width' => '10%',
    'default' => false,
  ),
  'DEPRECTION' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DEPRECTION',
    'width' => '10%',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);
?>
