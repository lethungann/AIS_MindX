<?php

switch ($_POST['type']) {
    case 'RemoveStudent':
        $result = json_encode(RemoveStudent($_POST['studentId'], $_POST['class_id']));
        header('Content-Type: application/json');
        echo $result;
        break;
    default:
}

function RemoveStudent($sId = '', $class_id = '') {
    $class = BeanFactory::getBean('a_Class', $class_id);
    $data = json_decode(html_entity_decode($class->list_students), true);
    $resultArray = array_diff($data, array($sId));
    $class->save();
    return array(
        'success' => 1,
    );
}