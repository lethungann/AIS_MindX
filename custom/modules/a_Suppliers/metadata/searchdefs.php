<?php
$module_name = 'a_Suppliers';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'code_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'code_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'mail' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'mail',
      ),
      'phone' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone',
      ),
    ),
    'advanced_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'code_name' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'code_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'code_tax' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE_TAX',
        'width' => '10%',
        'default' => true,
        'name' => 'code_tax',
      ),
      'phone' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone',
      ),
      'address' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS',
        'width' => '10%',
        'default' => true,
        'name' => 'address',
      ),
      'mail' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'mail',
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
