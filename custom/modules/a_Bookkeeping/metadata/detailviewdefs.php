<?php
$module_name = 'a_Bookkeeping';
$viewdefs [$module_name] =
    array(
        'DetailView' =>
            array(
                'templateMeta' =>
                    array(
                        'form' =>
                            array(
                                'buttons' =>
                                    array(
                                        0 => 'EDIT',
                                        1 => 'DUPLICATE',
                                        2 => 'DELETE',
                                        3 => 'FIND_DUPLICATES',
                                    ),
                            ),
                        'maxColumns' => '2',
                        'widths' =>
                            array(
                                0 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array(
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'useTabs' => false,
                        'tabDefs' =>
                            array(
                                'DEFAULT' =>
                                    array(
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                    ),
                'panels' =>
                    array(
                        'default' =>
                            array(
                                0 =>
                                    array(
                                        0 => 'name',
                                        1 =>
                                            array(
                                                'name' => 'account_number',
                                                'label' => 'Account Number',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'type',
                                                'studio' => 'visible',
                                                'label' => 'LBL_TYPE',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'status',
                                                'label' => 'Status',
                                            ),
                                    ),
                                2 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'date_start',
                                                'label' => 'Date Start',
                                            ),
                                        1 =>
                                            array(
                                                'name' => 'date_end',
                                                'label' => 'Date End',
                                            ),
                                    ),
                                3 =>
                                    array(
                                        0 => 'description',
                                    ),
                                4 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'data',
                                                'studio' => 'visible',
                                                'label' => 'LBL_DATA',
                                                'customCode' => '{include file="custom/modules/a_Bookkeeping/tpls/dataBookkeping.tpl"}',
                                            ),
                                    ),
                                5 =>
                                    array(
                                        0 => 'date_entered',
                                        1 => 'date_modified',
                                    ),
                                6 =>
                                    array(
                                        0 =>
                                            array(
                                                'name' => 'created_by_name',
                                                'label' => 'LBL_CREATED',
                                            ),
                                        1 => '',
                                    ),
                            ),
                    ),
            ),
    );
?>
