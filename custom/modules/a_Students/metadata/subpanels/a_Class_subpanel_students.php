<?php
// created: 2023-12-05 15:07:57
$subpanel_layout['list_fields'] = array (
  'code_student' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_CODE_STUDENT',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '11%',
    'default' => true,
  ),
  'gender' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_GENDER',
    'width' => '10%',
  ),
  'birthdate' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_BIRTHDATE',
    'width' => '10%',
    'default' => true,
  ),
  'phone' => 
  array (
    'type' => 'phone',
    'vname' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'mail' => 
  array (
    'type' => 'varchar',
    'vname' => 'Email',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'a_Students',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'a_Students',
    'width' => '5%',
    'default' => true,
  ),
);