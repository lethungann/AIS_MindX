<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class MySugar{
	var $type;

	function MySugar($type){
		$this->type = $type;
	}

    function checkDashletDisplay () {

		if((!in_array($this->type, $GLOBALS['moduleList'])
				&& !in_array($this->type, $GLOBALS['modInvisList']))
				&& (!in_array('Activities', $GLOBALS['moduleList']))){
			$displayDashlet = false;
		}
		elseif (ACLController::moduleSupportsACL($this->type) ) {
		    $bean = SugarModule::get($this->type)->loadBean();
		    if ( !ACLController::checkAccess($this->type,'list',true,$bean->acltype)) {
		        $displayDashlet = false;
		    }
		    $displayDashlet = true;
		}
		else{
			$displayDashlet = true;
		}

		return $displayDashlet;
    }

	function addDashlet(){
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            return;
        }

		if(!is_file(sugar_cached('dashlets/dashlets.php'))) {
            require_once('include/Dashlets/DashletCacheBuilder.php');

            $dc = new DashletCacheBuilder();
            $dc->buildCache();
		}
		require_once sugar_cached('dashlets/dashlets.php');

		global $current_user;

		if(isset($_REQUEST['id'])){
			$pages = $current_user->getPreference('pages', $this->type);

		    $dashlets = $current_user->getPreference('dashlets', $this->type);

		    $guid = create_guid();
			$options = array();
            if (isset($_POST['type'], $_POST['type_module']) && $_POST['type'] == 'web') {
				$dashlet_module = 'Home';
				require_once('include/Dashlets/DashletRssFeedTitle.php');
                $options['url'] = $_POST['type_module'];
				$webDashlet = new DashletRssFeedTitle($options['url']);
				$options['title'] = $webDashlet->generateTitle();
            } elseif (!empty($_POST['type_module'])) {
                $dashlet_module = $_POST['type_module'];
			}
			elseif (isset($dashletsFiles[$_REQUEST['id']]['module'])) {
				$dashlet_module = $dashletsFiles[$_REQUEST['id']]['module'];
			}
			else {
				$dashlet_module = 'Home';
			}

			    $dashlets[$guid] = array('className' => $dashletsFiles[$_REQUEST['id']]['class'],
										 'module' => $dashlet_module,
										 'options' => $options,
			                             'fileLocation' => $dashletsFiles[$_REQUEST['id']]['file']);

		    // add to beginning of the array
		    array_unshift($pages[$_REQUEST['activeTab']]['columns'][0]['dashlets'], $guid);

		    $current_user->setPreference('dashlets', $dashlets, 0, $this->type);

		    echo $guid;
		}
		else {
		    echo 'ofdaops';
		}
	}

	function displayDashlet(){
		global $current_user, $mod_strings, $app_strings;

		if(!empty($_REQUEST['id'])) {
		    $id = $_REQUEST['id'];
		    $dashlets = $current_user->getPreference('dashlets', $this->type);

		    $sortOrder = '';
		    $orderBy = '';
		    foreach($_REQUEST as $k => $v){
		        if($k == 'lvso'){
		            $sortOrder = $v;
		        }
		        else if(preg_match('/Home2_.+_ORDER_BY/', $k)){
		            $orderBy = $v;
		        }
		    }
		    if(!empty($sortOrder) && !empty($orderBy)){
		        $dashlets[$id]['sort_options'] = array('sortOrder' => $sortOrder, 'orderBy' => $orderBy);
		        $current_user->setPreference('dashlets', $dashlets, 0, $this->type);
		    }

		    require_once($dashlets[$id]['fileLocation']);
		    $dashlet = new $dashlets[$id]['className']($id, (isset($dashlets[$id]['options']) ? $dashlets[$id]['options'] : array()));
		    if(!empty($_REQUEST['configure']) && $_REQUEST['configure']) { // save settings
		        $dashletDefs[$id]['options'] = $dashlet->saveOptions($_REQUEST);
		        $current_user->setPreference('dashlets', $dashletDefs, 0, $this->type);
		    }
		    if(!empty($_REQUEST['dynamic']) && $_REQUEST['dynamic'] == 'true' && $dashlet->hasScript) {
		        $dashlet->isConfigurable = false;
		        echo $dashlet->getTitle('') . $app_strings['LBL_RELOAD_PAGE'];
		    }
		    else {
		        $lvsParams = array();
		        if(!empty($dashlets[$id]['sort_options'])){
		            $lvsParams = $dashlets[$id]['sort_options'];
                }
		        $dashlet->process($lvsParams);
		        $contents =  $dashlet->display();
                // Many dashlets expect to be able to initialize in the display() function, so we have to create the header second
                echo $dashlet->getHeader();
                echo $contents;
                echo $dashlet->getFooter();
		    }
		}
		else {
		    header("Location: index.php?action=index&module=". $this->type);
		}
	}

	function getPredefinedChartScript(){
		global $current_user, $mod_strings;

		if(!empty($_REQUEST['id'])) {
		    $id = $_REQUEST['id'];
		    $dashlets = $current_user->getPreference('dashlets', $this->type);

		    require_once($dashlets[$id]['fileLocation']);
		    $dashlet = new $dashlets[$id]['className']($id, (isset($dashlets[$id]['options']) ? $dashlets[$id]['options'] : array()));
	        $dashlet->process();
	        echo $dashlet->displayScript();
		}
		else {
		    header("Location: index.php?action=index&module=". $this->type);
		}
	}



	function deleteDashlet(){


		global $current_user;

		if(!empty($_REQUEST['id'])) {
		    $pages = $current_user->getPreference('pages', $this->type);
		    $dashlets = $current_user->getPreference('dashlets', $this->type);

				$activePage = '0';

			foreach($pages[$activePage]['columns'] as $colNum => $column) {
		        foreach($column['dashlets'] as $num => $dashletId) {
		            if($dashletId == $_REQUEST['id']) {
		                unset($pages[$activePage]['columns'][$colNum]['dashlets'][$num]);
		            }
		        }
		    }

		    foreach($dashlets as $dashletId => $data) {
		        if($dashletId == $_REQUEST['id']) {
		            unset($dashlets[$dashletId]);
		        }
		    }

		    $current_user->setPreference('dashlets', $dashlets, 0, $this->type);
		    $current_user->setPreference('pages', $pages, 0, $this->type);

		    echo '1';
		}
		else {
		    echo 'oops';
		}
	}

	function dashletsDialog(){
		require_once('include/MySugar/DashletsDialog/DashletsDialog.php');

		global $current_language, $app_strings;

		$chartsList = array();
		$DashletsDialog = new DashletsDialog();

		$DashletsDialog->getDashlets();
		$allDashlets = $DashletsDialog->dashlets;

		$dashletsList = $allDashlets['Module Views'];
		$chartsList = $allDashlets['Charts'];
		$toolsList = $allDashlets['Tools'];
		$sugar_smarty = new Sugar_Smarty();

		$mod_strings = return_module_language($current_language, 'Home');

		$sugar_smarty->assign('LBL_CLOSE_DASHLETS', $mod_strings['LBL_CLOSE_DASHLETS']);
		$sugar_smarty->assign('LBL_ADD_DASHLETS', $mod_strings['LBL_ADD_DASHLETS']);
		$sugar_smarty->assign('APP', $app_strings);
		$sugar_smarty->assign('moduleName', $this->type);

		if ($this->type == 'Home'){
			$sugar_smarty->assign('modules', $dashletsList);
			$sugar_smarty->assign('tools', $toolsList);
		}

		$sugar_smarty->assign('charts', $chartsList);

		$html = $sugar_smarty->fetch('include/MySugar/tpls/addDashletsDialog.tpl');
		// Bug 34451 - Added hack to make the "Add Dashlet" dialog window not look weird in IE6.
		$script = <<<EOJS
if (YAHOO.env.ua.ie > 5 && YAHOO.env.ua.ie < 7) {
    document.getElementById('dashletsList').style.width = '430px';
    document.getElementById('dashletsList').style.overflow = 'hidden';
}
EOJS;

		$json = getJSONobj();
		echo 'response = ' . $json->encode(array('html' => $html, 'script' => $script));
	}


	function searchModuleToolsDashlets($searchStr, $category){
		require_once('include/MySugar/DashletsDialog/DashletsDialog.php');

		global $app_strings;

		$DashletsDialog = new DashletsDialog();

		switch($category){
			case 'module':
				$DashletsDialog->getDashlets('module');
				$dashletIndex = 'Module Views';
				$searchCategoryString = $app_strings['LBL_SEARCH_MODULES'];
				break;
			case 'tools':
				$DashletsDialog->getDashlets('tools');
				$dashletIndex = 'Tools';
				$searchCategoryString = $app_strings['LBL_SEARCH_TOOLS'];
			default:
				break;
		}
		$allDashlets = $DashletsDialog->dashlets;

		$searchResult = array();
		$searchResult[$dashletIndex] = array();

		foreach($allDashlets[$dashletIndex] as $dashlet){
			if (stripos($dashlet['title'], $searchStr) !== false){
				array_push($searchResult[$dashletIndex], $dashlet);
			}
		}

		$sugar_smarty = new Sugar_Smarty();

		$sugar_smarty->assign('lblSearchResults', $app_strings['LBL_SEARCH_RESULTS']);
		$sugar_smarty->assign('lblSearchCategory', $searchCategoryString);

		$sugar_smarty->assign('moduleName', $this->type);
		$sugar_smarty->assign('searchString', $searchStr);

		$sugar_smarty->assign('dashlets', $searchResult[$dashletIndex]);

		return $sugar_smarty->fetch('include/MySugar/tpls/dashletsSearchResults.tpl');
	}

	function searchChartsDashlets($searchStr){
		require_once('include/MySugar/DashletsDialog/DashletsDialog.php');

		global $current_language, $app_strings;

		$chartsList = array();
		$DashletsDialog = new DashletsDialog();

		$DashletsDialog->getDashlets('charts');

		$allDashlets = $DashletsDialog->dashlets;

		foreach($allDashlets as $category=>$dashlets){
			$searchResult[$category] = array();
			foreach($dashlets as $dashlet){
				if (stripos($dashlet['title'], $searchStr) !== false){
					array_push($searchResult[$category],$dashlet);
				}
			}
		}

		$sugar_smarty = new Sugar_Smarty();

		$sugar_smarty->assign('lblSearchResults', $app_strings['LBL_SEARCH_RESULTS']);
		$sugar_smarty->assign('searchString', $searchStr);
		$sugar_smarty->assign('charts', $searchResult['Charts']);

		return $sugar_smarty->fetch('include/MySugar/tpls/chartDashletsSearchResults.tpl');
	}

	function searchDashlets(){
		$searchStr = $_REQUEST['search'];
		$category = $_REQUEST['category'];

		if ($category == 'module' || $category == 'tools'){
			$html = $this->searchModuleToolsDashlets($searchStr, $category);
		}
		else if ($category == 'chart'){
			$html = $this->searchChartsDashlets($searchStr);
		}

		$json = getJSONobj();
		echo 'response = ' . $json->encode(array('html' => $html, 'script' => ''));
	}

	function configureDashlet(){
		global $current_user, $app_strings, $mod_strings;

		if(!empty($_REQUEST['id'])) {
		    $id = $_REQUEST['id'];
		    $dashletDefs = $current_user->getPreference('dashlets', $this->type); // load user's dashlets config
		    $dashletLocation = $dashletDefs[$id]['fileLocation'];

		    require_once($dashletDefs[$id]['fileLocation']);

		    $dashlet = new $dashletDefs[$id]['className']($id, (isset($dashletDefs[$id]['options']) ? $dashletDefs[$id]['options'] : array()));
		    if(!empty($_REQUEST['configure']) && $_REQUEST['configure']) { // save settings
		        $dashletDefs[$id]['options'] = $dashlet->saveOptions($_REQUEST);
		        $current_user->setPreference('dashlets', $dashletDefs, 0, $this->type);
		    }
		    else { // display options
		        $json = getJSONobj();
		        return 'result = ' . $json->encode((array('header' => $dashlet->title . ' : ' . $app_strings['LBL_OPTIONS'],
		                                                 'body'  => $dashlet->displayOptions())));
		    }
		}
		else {
		    return '0';
		}
	}

	function saveLayout(){
		global $current_user;

        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            return;
        }

        if (!empty($_POST['layout'])) {
		    $newColumns = array();

            $newLayout = explode('|', $_POST['layout']);

			$pages = $current_user->getPreference('pages', $this->type);

			$newColumns = $pages[$_REQUEST['selectedPage']]['columns'];
		    foreach($newLayout as $col => $ids) {
		        $newColumns[$col]['dashlets'] = explode(',', $ids);
		    }

			$pages[$_REQUEST['selectedPage']]['columns'] = $newColumns;
		    $current_user->setPreference('pages', $pages, 0, $this->type);

		    return '1';
		}
		else {
		    return '0';
		}
	}







}
