<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_AccountReceivableViewEdit extends ViewEdit
{
    public function display()
    {
        if($this->bean->name != null) {
            $this->ss->assign("AccountReceivableNO", $this->bean->name);
        } else {
            $this->ss->assign("AccountReceivableNO", 'No data...');
        }

        parent::display();
    }
}