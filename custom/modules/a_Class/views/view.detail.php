<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_ClassViewDetail extends ViewDetail
{
    public function display()
    {
        global $current_language, $sugar_config;
        $thead = array(
            'Code_Student' => 'Mã học viên',
            'Name' => 'Họ tên',
            'Phone' => 'Số điện thoại',
            'Email' => 'Email',
            'Actions' => 'Thao tác',
            'View' => 'Xem chi tiết',
            'Remove' => 'Loại bỏ',
        );
        if($current_language == "en_us") {
            $thead = array(
                'Code_Student' => 'Code Student',
                'Name' => 'Full Name',
                'Phone' => 'Phone',
                'Email' => 'Email',
                'Actions' => 'Actions',
                'View' => 'View Detail',
                'Remove' => 'Remove',
            );
        }
        if(!empty($this->bean->list_students)) {
            $list = json_decode(html_entity_decode($this->bean->list_students), true);
            $list_student = array();
            foreach ($list as $value) {
                $s1 = "SELECT id, code_student, name, phone, mail
                    FROM a_students WHERE id = '{$value}' AND deleted = 0";
                $r1 = $GLOBALS['db']->fetchOne($s1);
                $url = $sugar_config['site_url'] . "/index.php?module=a_Students&action=DetailView&record=" . $r1['id'];
                $list_student[] = array(
                    'id' => $r1['id'],
                    'code_student' => $r1['code_student'],
                    'name' => $r1['name'],
                    'phone' => $r1['phone'],
                    'mail' => $r1['mail'],
                    'url' => $url,
                );
            }
        }

        $this->ss->assign("list", $list_student);
        $this->ss->assign("thead", $thead);
        $this->ss->assign("current_language", $current_language);
        $this->ss->assign("class_id", $this->bean->id);
        parent::display();
    }
}