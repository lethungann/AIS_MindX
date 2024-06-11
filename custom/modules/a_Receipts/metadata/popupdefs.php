<?php
$popupMeta = array (
    'moduleMain' => 'a_Receipts',
    'varName' => 'a_Receipts',
    'orderBy' => 'a_receipts.name',
    'whereClauses' => array (
  'name' => 'a_receipts.name',
  'invoice_name' => 'a_receipts.invoice_name',
  'amount' => 'a_receipts.amount',
  'date_receipt' => 'a_receipts.date_receipt',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'invoice_name',
  5 => 'amount',
  6 => 'date_receipt',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'invoice_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'Code Invoice',
    'id' => 'INVOICE_ID',
    'width' => '10%',
    'name' => 'invoice_name',
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'name' => 'amount',
  ),
  'date_receipt' => 
  array (
    'label' => 'Date Receipt',
    'type' => 'date',
    'width' => '10%',
    'name' => 'date_receipt',
  ),
),
);
