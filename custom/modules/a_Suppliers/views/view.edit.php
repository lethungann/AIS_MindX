<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_SupplierViewEdit extends ViewEdit
{
    public function display()
    {
        //code từ đây
        if($this->bean->code_name != null) {
            $this->ss->assign("CodeSupplier", $this->bean->code_name);
        } else {
            $this->ss->assign("CodeSupplier", 'No data...');
        }

        //đến đây
        parent::display();
    }
}