<?php
$module_name = 'a_Asset';
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
            'customCode' => '{include file="custom/modules/a_Asset/tpls/codeAsset.tpl"}',
          ),
          1 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'supplier_name',
            'label' => 'LBL_SUPNAME',
          ),
          1 => 
          array (
            'name' => 'status',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pirce',
            'label' => 'LBL_PIRCE',
          ),
          1 => 
          array (
            'name' => 'depreciation_rate',
            'label' => 'LBL_DEPRECIATION_RATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'debit',
            'label' => 'LBL_DEBIT',
          ),
          1 => 
          array (
            'name' => 'use_time',
            'label' => 'LBL_USE_TIME',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'credit',
            'label' => 'LBL_CREDIT',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'deprection',
            'label' => 'LBL_DEPRECTION',
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
