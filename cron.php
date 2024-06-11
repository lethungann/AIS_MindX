<?php
 if(!defined('sugarEntry'))define('sugarEntry', true);


//change directories to where this file is located.
//this is to make sure it can find dce_config.php
chdir(dirname(__FILE__));

require_once('include/entryPoint.php');

$sapi_type = php_sapi_name();
if (substr($sapi_type, 0, 3) != 'cli') {
    sugar_die("cron.php is CLI only.");
}

if(empty($current_language)) {
	$current_language = $sugar_config['default_language'];
}

$app_list_strings = return_app_list_strings_language($current_language);
$app_strings = return_application_language($current_language);

global $current_user;
$current_user = new User();
$current_user->getSystemUser();

$GLOBALS['log']->debug('--------------------------------------------> at cron.php <--------------------------------------------');
$cron_driver = !empty($sugar_config['cron_class'])?$sugar_config['cron_class']:'SugarCronJobs';
$GLOBALS['log']->debug("Using $cron_driver as CRON driver");

if(file_exists("custom/include/SugarQueue/$cron_driver.php")) {
   require_once "custom/include/SugarQueue/$cron_driver.php";
} else {
   require_once "include/SugarQueue/$cron_driver.php";
}

$jobq = new $cron_driver();
$jobq->runCycle();

$exit_on_cleanup = true;

sugar_cleanup(false);
// some jobs have annoying habit of calling sugar_cleanup(), and it can be called only once
// but job results can be written to DB after job is finished, so we have to disconnect here again
// just in case we couldn't call cleanup
if(class_exists('DBManagerFactory')) {
	$db = DBManagerFactory::getInstance();
	$db->disconnect();
}

// If we have a session left over, destroy it
if(session_id()) {
    session_destroy();
}

if($exit_on_cleanup) exit($jobq->runOk()?0:1);
