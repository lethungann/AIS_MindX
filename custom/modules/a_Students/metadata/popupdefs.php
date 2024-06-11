<?php
$popupMeta = array (
    'moduleMain' => 'a_Students',
    'varName' => 'a_Students',
    'orderBy' => 'a_students.name',
    'whereClauses' => array (
  'name' => 'a_students.name',
  'code_student' => 'a_students.code_student',
  'phone' => 'a_students.phone',
  'mail' => 'a_students.mail',
  'class_name' => 'a_students.class_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'code_student',
  5 => 'phone',
  6 => 'mail',
  7 => 'class_name',
),
    'searchdefs' => array (
  'code_student' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODE_STUDENT',
    'width' => '10%',
    'name' => 'code_student',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'phone' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'name' => 'phone',
  ),
  'mail' => 
  array (
    'type' => 'varchar',
    'label' => 'Email',
    'width' => '10%',
    'name' => 'mail',
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
),
    'listviewdefs' => array (
  'CODE_STUDENT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODE_STUDENT',
    'width' => '10%',
    'default' => true,
    'name' => 'code_student',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
    'name' => 'phone',
  ),
  'MAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'Email',
    'width' => '10%',
    'default' => true,
    'name' => 'mail',
  ),
  'CLASS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'Class Name',
    'id' => 'CLASS_ID',
    'width' => '20%',
    'default' => true,
    'name' => 'class_name',
  ),
),
);
