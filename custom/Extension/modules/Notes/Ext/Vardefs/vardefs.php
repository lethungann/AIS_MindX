<?php
$dictionary['Note']['fields']['bookkeeping'] = array(
    'name' => 'bookkeeping',
    'type' => 'link',
    'relationship' => 'bookkeeping_notes',
    'source' => 'non-db',
    'vname' => 'LBL',
);
$dictionary['Note']['fields']['parent_name']['options'] = "parent_type_display_mindx";
$dictionary['Note']['fields']['parent_name']['parent_type'] = "parent_type_display_mindx";
$dictionary['Note']['fields']['parent_type']['options'] = "parent_type_display_mindx";
$dictionary['Note']['fields']['file_name'] = array(
    'name' => 'file_name',
    'type' => 'varchar',
    'len' => '100',
    'vname' => 'LBL_FILE_NAME',
);