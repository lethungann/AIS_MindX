<?php
$popupMeta = array (
    'moduleMain' => 'a_Budget',
    'varName' => 'a_Budget',
    'orderBy' => 'a_budget.name',
    'whereClauses' => array (
  'name' => 'a_budget.name',
  'code_name' => 'a_budget.code_name',
  'status' => 'a_budget.status',
  'class_name' => 'a_budget.class_name',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'code_name',
  6 => 'class_name',
),
    'searchdefs' => array (
  'code_name' => 
  array (
    'type' => 'varchar',
    'label' => 'Code Budget',
    'width' => '10%',
    'name' => 'code_name',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'class_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'Class Name',
    'id' => 'CLASS_ID',
    'width' => '10%',
    'name' => 'class_name',
  ),
  'status' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
),
);
