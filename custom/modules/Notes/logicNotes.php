<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class logicNotes
{
    public function handleBeforeSave(&$bean, $event, $arguments) {
        $bean->file_name = $bean->filename;
    }
    public function handleProcessRecord(&$bean, $event, $arguments) {
        $bean->file_name = '<a href="index.php?entryPoint=download&id='.$bean->id.'&type=Notes">'.$bean->file_name.'</a>';
    }
    public function handleBeforeDelete(&$bean, $event, $arguments) {
        if($bean->parent_type=="Bookkeeping")
            unlink('upload/bookkeeping/' . $bean->id);
    }
    public function handleAfterSave(&$bean, $event, $arguments) {
        if(!empty($bean->filename)) {
            if($bean->parent_type == "Bookkeeping") {
                if(file_exists('upload/' . $bean->id))
                    rename('upload/'.$bean->id, 'upload/bookkeeping/'.$bean->id);
            }
        }
    }
}