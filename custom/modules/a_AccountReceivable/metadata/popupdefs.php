<?php
$popupMeta = array (
    'moduleMain' => 'a_AccountReceivable',
    'varName' => 'a_AccountReceivable',
    'orderBy' => 'a_accountreceivable.name',
    'whereClauses' => array (
  'name' => 'a_accountreceivable.name',
),
    'searchInputs' => array (
  0 => 'a_accountreceivable_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'INVOICE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_INO',
    'id' => 'INVOICE_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'invoice_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MODIFIED_NAME',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10%',
    'default' => true,
    'name' => 'modified_by_name',
  ),
  'DUE_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DUE_DATE',
    'width' => '10%',
    'default' => true,
    'name' => 'due_date',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'DEBIT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_DEBIT',
    'width' => '10%',
    'default' => true,
    'name' => 'debit',
  ),
  'CREDIT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_CREDIT',
    'width' => '10%',
    'default' => true,
    'name' => 'credit',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
    'name' => 'created_by_name',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
    'name' => 'date_modified',
  ),
),
);
