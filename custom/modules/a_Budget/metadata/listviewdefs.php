<?php
$module_name = 'a_Budget';
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
    'width' => '25%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CLASS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CN',
    'id' => 'CLASS_ID',
    'width' => '10%',
    'default' => true,
  ),
  'AMOUNT_BUDGET' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT_BUDGET',
    'width' => '10%',
    'default' => true,
  ),
  'ACTUAL_EXPENSES' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_ACTUAL_EXPENSES',
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
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_APPROVAL' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_APPROVAL',
    'width' => '10%',
    'default' => false,
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
  'USER_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_APPROVE',
    'id' => 'USER_ID',
    'width' => '10%',
    'default' => false,
  ),
);
?>
