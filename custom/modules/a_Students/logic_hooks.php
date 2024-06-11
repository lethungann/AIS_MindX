<?php

$hook_version = 1;
$hook_array = Array();
$hook_array['before_save'] = array();
$hook_array['before_save'][] = array(
    1, // mặc định
    'logic Student', // Tên tự đặt gợi nhớ
    'custom/modules/a_Students/logicStudent.php', // ĐƯờng dẫn đến file logichook
    'logicStudent', // Tên class trong file có đường dẫn trên
    'handleBeforeSave', // Tên function trong class đó
);
$hook_array['after_save'] = array();
$hook_array['after_save'][] = array(
    1, // mặc định
    'logic Student', // Tên tự đặt gợi nhớ
    'custom/modules/a_Students/logicStudent.php', // ĐƯờng dẫn đến file logichook
    'logicStudent', // Tên class trong file có đường dẫn trên
    'handleAfterSave', // Tên function trong class đó
);

$hook_array['after_delete'] = array();
$hook_array['after_delete'][] = array(
    1, // mặc định
    'logic Student', // Tên tự đặt gợi nhớ
    'custom/modules/a_Students/logicStudent.php', // ĐƯờng dẫn đến file logichook
    'logicStudent', // Tên class trong file có đường dẫn trên
    'handleAfterDelete', // Tên function trong class đó
);
$hook_array['process_record'] = array();
$hook_array['process_record'][] = array(
    1, // mặc định
    'logic ', // Tên tự đặt gợi nhớ
    'custom/modules/a_Students/logicStudent.php', // ĐƯờng dẫn đến file logichook
    'logicStudent', // Tên class trong file có đường dẫn trên
    'handleStudents', // Tên function trong class đó
);