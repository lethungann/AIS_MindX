<?php
$module_name = 'a_Students';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'code_student' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE_STUDENT',
        'width' => '10%',
        'default' => true,
        'name' => 'code_student',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone',
      ),
      'mail' => 
      array (
        'type' => 'varchar',
        'label' => 'Email',
        'width' => '10%',
        'default' => true,
        'name' => 'mail',
      ),
      'class_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CODE_CLASS',
        'id' => 'CLASS_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'class_name',
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
      'code_student' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE_STUDENT',
        'width' => '10%',
        'default' => true,
        'name' => 'code_student',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone',
      ),
      'mail' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'mail',
      ),
      'class_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_CODE_CLASS',
        'width' => '10%',
        'default' => true,
        'id' => 'CLASS_ID',
        'name' => 'class_name',
      ),
      'gender' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_GENDER',
        'width' => '10%',
        'name' => 'gender',
      ),
      'address' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS',
        'width' => '10%',
        'default' => true,
        'name' => 'address',
      ),
      'birthdate' => 
      array (
        'type' => 'date',
        'label' => 'LBL_BIRTHDATE',
        'width' => '10%',
        'default' => true,
        'name' => 'birthdate',
      ),
      'current_user_only' => 
      array (
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
        'name' => 'current_user_only',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
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
