<?php
$module_name = 'a_Budget';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
            'label' => 'LBL_CODE_NAME',
            'customCode' => '{include file="custom/modules/a_Budget/tpls/budgetNO.tpl"}',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'class_name',
            'label' => 'LBL_CN',
          ),
          1 => 
          array (
            'name' => 'user_name',
            'label' => 'LBL_APPROVE',
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
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
