<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_ContractsViewEdit extends ViewEdit
{
    public function display()
    {
        if($this->bean->name != null) {
            $this->ss->assign("contractNO", $this->bean->name);
        } else {
            $this->ss->assign("contractNO", 'No data...');
        }

        parent::display();
    }
}