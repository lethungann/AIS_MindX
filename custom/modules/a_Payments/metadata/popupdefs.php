<?php
$popupMeta = array (
    'moduleMain' => 'a_Payments',
    'varName' => 'a_Payments',
    'orderBy' => 'a_payments.name',
    'whereClauses' => array (
  'name' => 'a_payments.name',
  'amount' => 'a_payments.amount',
  'date_payment' => 'a_payments.date_payment',
  'assigned_user_id' => 'a_payments.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'amount',
  5 => 'date_payment',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
    'name' => 'amount',
  ),
  'date_payment' => 
  array (
    'label' => 'Date Payment',
    'type' => 'date',
    'width' => '10%',
    'name' => 'date_payment',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
