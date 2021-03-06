<?php

$blockVendor		= "philmprice";									//	github vendor name
$blockFolder        = "block-module-sites";							//	github project name (must start with 'block-module-')
$blockHandle		= str_replace('block-module-','',$blockFolder);
$blockUpperHandle	= handle2upperHandle($blockHandle);								
$blockNamespace		= $blockUpperHandle.'Module';

////////////////////////////
//  ROUTES

$indexControllerData = array(
    'controller'    => 'index',
    'action'        => 'index',
    'namespace'     => $blockNamespace.'\Controller'
);
$router->add("/".$blockHandle, 		$indexControllerData);
$router->add("/".$blockHandle."/", 	$indexControllerData);

////////////////////////////
//  CLASSES

$loaderClassArray[$blockNamespace.'\Controller\IndexControllerCore']	= ABS_ROOT.CORE_FOLDER.'/'.$blockAuthor.'/'.$blockFolder.'/controllers/IndexControllerCore.php';
$loaderClassArray[$blockNamespace.'\Controller\IndexController']		= ABS_ROOT.PROJ_FOLDER.'/'.$blockAuthor.'/'.$blockFolder.'/controllers/IndexController.php';

$loaderClassArray['Model\SiteCore']										= ABS_ROOT.CORE_FOLDER.'/'.$blockAuthor.'/'.$blockFolder.'/models/SiteCore.php';
$loaderClassArray['Model\Site']											= ABS_ROOT.PROJ_FOLDER.'/'.$blockAuthor.'/'.$blockFolder.'/models/Site.php';

////////////////////////////
//  AUTOLOAD FOLDERS

$loaderDirArray[]   = '../../'.$blockFolder.'/models/';
$loaderDirArray[]   = '../../'.$blockFolder.'/php/objects/';

////////////////////////////
//  NAMESPACES

// $loaderNamespaceArray['BlockModule\Pages']	= "../../".$blockFolder."/php/objects/";