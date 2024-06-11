<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_BookkeepingViewEdit extends ViewEdit
{
    public function display()
    {
        //code từ đây
        if($this->bean->name != null) {
            $this->ss->assign("CodeBookkeeping", $this->bean->name);
        } else {
            $this->ss->assign("CodeBookkeeping", 'No data...');
        }

        //đến đây
        parent::display();
    }
}