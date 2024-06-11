<?php
$module_name = 'a_Budget';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'code_name',
            'label' => 'Code Budget',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'class_name',
            'label' => 'Class Name',
          ),
          1 => 
          array (
            'name' => 'user_name',
            'label' => 'Approver',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'date_approval',
            'label' => 'LBL_DATE_APPROVAL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'amount_budget',
            'label' => 'LBL_AMOUNT_BUDGET',
          ),
          1 => 
          array (
            'name' => 'actual_expenses',
            'label' => 'LBL_ACTUAL_EXPENSES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'debit',
            'label' => 'LBL_DEBIT',
          ),
          1 => 
          array (
            'name' => 'credit',
            'label' => 'LBL_CREDIT',
          ),
        ),
        5 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        7 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
