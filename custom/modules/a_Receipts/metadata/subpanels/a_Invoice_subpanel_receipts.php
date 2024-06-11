<?php
// created: 2023-12-05 15:12:00
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'amount' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_AMOUNT',
    'width' => '10%',
    'default' => true,
  ),
  'payment_method' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PAYMENT_METHOD',
    'width' => '10%',
  ),
  'date_receipt' => 
  array (
    'type' => 'date',
    'vname' => 'Date Receipt',
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
    'module' => 'a_Receipts',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'a_Receipts',
    'width' => '5%',
    'default' => true,
  ),
);