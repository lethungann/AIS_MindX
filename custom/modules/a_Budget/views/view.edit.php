<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_BudgetViewEdit extends ViewEdit
{
    public function display()
    {
        //code từ đây
        if($this->bean->code_name != null) {
            $this->ss->assign("CodeBudget", $this->bean->code_name);
        } else {
            $this->ss->assign("CodeBudget", 'No data...');
        }

        if($this->bean->date_start != null) {
            $this->ss->assign("dateStart", $this->bean->date_start);
        } else {
            $this->ss->assign("dateStart", '');
        }
        //đến đây
        parent::display();
    }
}