<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1, // mặc định
    'logic Bookkeeping', // Tên tự đặt gợi nhớ
    'custom/modules/a_Bookkeeping/logicBookkeeping.php', // ĐƯờng dẫn đến file logichook
    'logicBookkeeping', // Tên class trong file có đường dẫn trên
    'handleBeforeSave', // Tên function trong class đó
);
$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    1,
    'logic Bookkeeping Data',
    'custom/modules/a_Bookkeeping/logicBookkeeping.php',
    'logicBookkeeping',
    'handleAfterSave',
);
$hook_array['process_record'] = array();
$hook_array['process_record'][] = array(
    1,
    'logic Bookkeeping',
    'custom/modules/a_Bookkeeping/logicBookkeeping.php',
    'logicBookkeeping',
    'handleProce',
);