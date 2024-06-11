<?php
$popupMeta = array (
    'moduleMain' => 'a_Invoice',
    'varName' => 'a_Invoice',
    'orderBy' => 'a_invoice.name',
    'whereClauses' => array (
  'name' => 'a_invoice.name',
  'student_name' => 'a_invoice.student_name',
  'receivable' => 'a_invoice.receivable',
  'amount' => 'a_invoice.amount',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'student_name',
  5 => 'receivable',
  6 => 'amount',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'student_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'Student Name',
    'id' => 'STUDENT_ID',
    'width' => '10%',
    'name' => 'student_name',
  ),
  'receivable' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_RECEIVABLE',
    'width' => '10%',
    'name' => 'receivable',
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'name' => 'amount',
  ),
),
);
