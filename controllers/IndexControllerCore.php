<?php

namespace SitesModule\Controller;

use \Model\Site as Site;

class IndexControllerCore extends \Host\Controller\BaseController
{
    public function indexAction()
    {
    	//	init
    	$this->init();
    	
		//	set main view
		$this->view->setMainView('block-module-sites/index');
    }
}