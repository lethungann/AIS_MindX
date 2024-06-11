<?php
$module_name = 'a_Receipts';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'INVOICE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CODE_INVOICE',
    'id' => 'INVOICE_ID',
    'width' => '10%',
    'default' => true,
  ),
  'AMOUNT' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'PAYMENT_METHOD' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAYMENT_METHOD',
    'width' => '10%',
  ),
  'DATE_RECEIPT' => 
  array (
    'label' => 'LBL_DATE_RECEIPT',
    'type' => 'date',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    //'type' => 'enum',
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
);
?>
