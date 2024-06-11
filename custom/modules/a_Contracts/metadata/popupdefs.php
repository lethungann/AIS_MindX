<?php
$popupMeta = array (
    'moduleMain' => 'a_Contracts',
    'varName' => 'a_Contracts',
    'orderBy' => 'a_contracts.name',
    'whereClauses' => array (
  'name' => 'a_contracts.name',
  'student_name' => 'a_contracts.student_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'student_name',
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
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'STUDENT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'Student Name',
    'id' => 'STUDENT_ID',
    'width' => '15%',
    'default' => true,
    'name' => 'student_name',
  ),
  'DATE_START' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_START',
    'width' => '10%',
    'default' => true,
    'name' => 'date_start',
  ),
  'DATE_END' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_END',
    'width' => '10%',
    'default' => true,
    'name' => 'date_end',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'name' => 'status',
  ),
),
);
