<?php
$popupMeta = array (
    'moduleMain' => 'a_Bookkeeping',
    'varName' => 'a_Bookkeeping',
    'orderBy' => 'a_bookkeeping.name',
    'whereClauses' => array (
  'name' => 'a_bookkeeping.name',
  'date_start' => 'a_bookkeeping.date_start',
  'date_end' => 'a_bookkeeping.date_end',
  'status' => 'a_bookkeeping.status',
  'type' => 'a_bookkeeping.type',
  'account_number' => 'a_bookkeeping.account_number',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'date_start',
  5 => 'date_end',
  6 => 'type',
  7 => 'account_number',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'account_number' => 
  array (
    'type' => 'int',
    'label' => 'Account Number',
    'width' => '10%',
    'name' => 'account_number',
  ),
  'type' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'type',
  ),
  'date_start' => 
  array (
    'type' => 'date',
    'label' => 'Date Start',
    'width' => '10%',
    'name' => 'date_start',
  ),
  'date_end' => 
  array (
    'type' => 'date',
    'label' => 'Date End',
    'width' => '10%',
    'name' => 'date_end',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'label' => 'Status',
    'width' => '10%',
    'name' => 'status',
  ),
),
);
