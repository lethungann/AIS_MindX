<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_PaymentViewEdit extends ViewEdit
{
    public function display()
    {
        if($this->bean->name != null) {
            $this->ss->assign("paymentNO", $this->bean->name);
        } else {
            $this->ss->assign("paymentNO", 'No data...');
        }

        parent::display();
    }
}