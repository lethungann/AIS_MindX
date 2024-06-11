<?php
$module_name = 'a_Receipts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'invoice_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CODE_INVOICE',
        'id' => 'INVOICE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'invoice_name',
      ),
      'date_receipt' => 
      array (
        'label' => 'LBL_DATE_RECEIPT',
        'type' => 'date',
        'width' => '10%',
        'default' => true,
        'name' => 'date_receipt',
      ),
    ),
    'advanced_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'amount' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_AMOUNT',
        'width' => '10%',
        'default' => true,
        'name' => 'amount',
      ),
      'invoice_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CODE_INVOICE',
        'width' => '10%',
        'default' => true,
        'id' => 'INVOICE_ID',
        'name' => 'invoice_name',
      ),
      'date_receipt' => 
      array (
        'label' => 'LBL_DATE_RECEIPT',
        'type' => 'date',
        'width' => '10%',
        'default' => true,
        'name' => 'date_receipt',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
