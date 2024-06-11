<?php
$dictionary["Users"]["relationships"]["user_budget"] = array(
    'lhs_module' => 'Users',
    'lhs_table' => 'a_users',
    'lhs_key' => 'id',
    'rhs_module' => 'a_Budget',
    'rhs_table' => 'a_budget',
    'rhs_key' => 'user_id',
    'relationship_type' => 'one-to-many'
);