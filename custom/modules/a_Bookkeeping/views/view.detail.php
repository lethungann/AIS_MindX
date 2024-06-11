<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class a_BookkeepingViewDetail extends ViewDetail
{
    public function display()
    {
        if($this->bean->id != null) {
            $this->ss->assign("bookkeeping_id", $this->bean->id);
        }

        //đến đây
        parent::display();
    }
}