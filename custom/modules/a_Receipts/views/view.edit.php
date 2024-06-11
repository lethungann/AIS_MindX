<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_ReceiptsViewEdit extends ViewEdit
{
    public function display()
    {
        if($this->bean->name != null) {
            $this->ss->assign("receiptNO", $this->bean->name);
        } else {
            $this->ss->assign("receiptNO", 'No data...');
        }

        parent::display();
    }
}