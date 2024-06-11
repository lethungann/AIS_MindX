<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1,
    'logic Notes',
    'custom/modules/Notes/logicNotes.php',
    'logicNotes',
    'handleBeforeSave',
);
$hook_array['process_record'] = array();
$hook_array['process_record'][] = array(
    1,
    'logic Notes',
    'custom/modules/Notes/logicNotes.php',
    'logicNotes',
    'handleProcessRecord',
);
$hook_array['before_delete'] = array();
$hook_array['before_delete'][] = array(
    1,
    'logic Notes',
    'custom/modules/Notes/logicNotes.php',
    'logicNotes',
    'handleBeforeDelete',
);
$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    1,
    'logic Notes',
    'custom/modules/Notes/logicNotes.php',
    'logicNotes',
    'handleAfterSave',
);