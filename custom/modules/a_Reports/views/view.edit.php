<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_ReportViewEdit extends ViewEdit
{
    public function display()
    {
        //code từ đây
        if($this->bean->name != null) {
            $this->ss->assign("CodeReport", $this->bean->name);
        } else {
            $this->ss->assign("CodeReport", 'No data...');
        }

        //đến đây
        parent::display();
    }
}