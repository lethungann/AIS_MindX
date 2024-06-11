<?php
$module_name = 'a_ChartOfAccount';
$listViewDefs [$module_name] = 
array (
  'PARENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARENT',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_GROUP' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ACCOUNT_GROUP',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNT_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_NAME',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
?>
