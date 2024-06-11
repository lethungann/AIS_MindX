<?php
// created: 2023-12-05 11:20:32
$subpanel_layout['list_fields'] = array (
  'code_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_CODE_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '12%',
    'default' => true,
  ),
  'pirce' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_PIRCE',
    'width' => '10%',
    'default' => true,
  ),
  'depreciation_rate' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_DEPRECIATION_RATE',
    'width' => '10%',
    'default' => true,
  ),
  'use_time' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_USE_TIME',
    'width' => '10%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
  ),
  'debit' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_DEBIT',
    'width' => '10%',
    'default' => true,
  ),
  'credit' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_CREDIT',
    'width' => '10%',
    'default' => true,
  ),
  'deprection' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_DEPRECTION',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'a_Asset',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'a_Asset',
    'width' => '5%',
    'default' => true,
  ),
);