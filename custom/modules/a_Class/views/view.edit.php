<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_ClassViewEdit extends ViewEdit
{
    public function display()
    {
        //code từ đây
        if($this->bean->code_class != null) {
            $this->ss->assign("CodeClass", $this->bean->code_class);
        } else {
            $this->ss->assign("CodeClass", 'No data...');
        }

        //đến đây
        parent::display();
    }
}