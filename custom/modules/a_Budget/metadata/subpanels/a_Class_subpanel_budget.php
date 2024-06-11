<?php
// created: 2023-12-05 11:23:13
$subpanel_layout['list_fields'] = array (
  'code_name' => 
  array (
    'type' => 'varchar',
    'vname' => 'Code Budget',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'amount_budget' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_AMOUNT_BUDGET',
    'width' => '10%',
    'default' => true,
  ),
  'actual_expenses' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_ACTUAL_EXPENSES',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'date_approval' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_DATE_APPROVAL',
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
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'a_Budget',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'a_Budget',
    'width' => '5%',
    'default' => true,
  ),
);