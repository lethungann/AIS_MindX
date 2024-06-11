<?php
$module_name = 'a_ChartOfAccount';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'parent' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PARENT',
        'width' => '10%',
        'default' => true,
        'name' => 'parent',
      ),
      'account_group' => 
      array (
        'type' => 'int',
        'label' => 'LBL_ACCOUNT_GROUP',
        'width' => '10%',
        'default' => true,
        'name' => 'account_group',
      ),
      'account_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ACCOUNT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'account_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'parent' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PARENT',
        'width' => '10%',
        'default' => true,
        'name' => 'parent',
      ),
      'account_group' => 
      array (
        'type' => 'int',
        'label' => 'LBL_ACCOUNT_GROUP',
        'width' => '10%',
        'default' => true,
        'name' => 'account_group',
      ),
      'account_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ACCOUNT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'account_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
