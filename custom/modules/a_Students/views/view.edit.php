<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_StudentViewEdit extends ViewEdit
{
    public function display()
    {
        //code từ đây
        if($this->bean->code_student != null) {
            $this->ss->assign("CodeStudent", $this->bean->code_student);
        } else {
            $this->ss->assign("CodeStudent", 'No data...');
        }

        //đến đây
        parent::display();
    }
}