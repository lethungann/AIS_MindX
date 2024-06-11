<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_ContractsViewDetail extends ViewDetail
{
    public function display()
    {
        if($this->bean->invoice_id != null) {
            $url = '<a href="' . $GLOBALS['sugar_config']['site_url'] . '/index.php?module=a_Invoice&action=DetailView&record=' . $this->bean->invoice_id . '">Xem hóa đơn tại đây</a>';
            $this->ss->assign("url_invoice", $url);
        } else {
            $this->ss->assign("url_invoice", '');
        }

        parent::display();
    }
}