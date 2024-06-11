<?php
$module_name = 'a_Budget';
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
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
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
      'class_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CN',
        'width' => '10%',
        'default' => true,
        'id' => 'CLASS_ID',
        'name' => 'class_name',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'width' => '10%',
        'name' => 'status',
      ),
      'user_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_APPROVE',
        'id' => 'USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'user_name',
      ),
      'date_approval' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_APPROVAL',
        'width' => '10%',
        'default' => true,
        'name' => 'date_approval',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
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
