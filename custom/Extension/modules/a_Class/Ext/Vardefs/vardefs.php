<?php
$dictionary["a_Class"]["relationships"]["student_class"] = array (
    'lhs_module' => 'a_Class',
    'lhs_table' => 'a_class',
    'lhs_key' => 'id',
    'rhs_module' => 'a_Students',
    'rhs_table' => 'a_students',
    'rhs_key' => 'class_id',
    'relationship_type' => 'one-to-many'
);


$dictionary["a_Class"]["relationships"]["class_budget"] = array(
    'lhs_module' => 'a_Class',
    'lhs_table' => 'a_class',
    'lhs_key' => 'id',
    'rhs_module' => 'a_Budget',
    'rhs_table' => 'a_budget',
    'rhs_key' => 'class_id',
    'relationship_type' => 'one-to-many'
);
$dictionary["a_Class"]['fields']['students'] = array(
    'name' => 'students',
    'type' => 'link',
    'relationship' => 'student_class',
    'vname' => 'LBL_STUDENT',
    'source' => 'non-db',
);
$dictionary["a_Class"]['fields']['budget'] = array(
    'name' => 'budget',
    'type' => 'link',
    'relationship' => 'class_budget',
    'vname' => 'LBL_BUDGET',
    'source' => 'non-db',
);
$dictionary["a_Class"]['fields']['list_students'] = array(
    'name' => 'list_students',
    'type' => 'text',
    'vname' => 'LBL_LIST_STUDENTS',
);

