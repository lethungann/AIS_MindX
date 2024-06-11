<?php
$popupMeta = array (
    'moduleMain' => 'a_ChartOfAccount',
    'varName' => 'a_ChartOfAccount',
    'orderBy' => 'a_chartofaccount.name',
    'whereClauses' => array (
  'name' => 'a_chartofaccount.name',
  'parent' => 'a_chartofaccount.parent',
  'account_group' => 'a_chartofaccount.account_group',
  'account_name' => 'a_chartofaccount.account_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'parent',
  5 => 'account_group',
  6 => 'account_name',
),
    'searchdefs' => array (
  'parent' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PARENT',
    'width' => '10%',
    'name' => 'parent',
  ),
  'account_group' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ACCOUNT_GROUP',
    'width' => '10%',
    'name' => 'account_group',
  ),
  'account_name' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ACCOUNT_NAME',
    'width' => '10%',
    'name' => 'account_name',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
),
);
