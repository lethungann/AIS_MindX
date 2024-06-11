<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_InvoiceViewEdit extends ViewEdit
{
    public function display()
    {
        if($this->bean->name != null) {
            $this->ss->assign("invoiceNO", $this->bean->name);
        } else {
            $this->ss->assign("invoiceNO", 'No data...');
        }
        $this->ss->assign("amount", number_format($this->bean->amount, 0, '.', ','));

        parent::display();
    }
}