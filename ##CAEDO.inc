<?php

// These are to support xdebug and PhpED debuggers, and prevent breakpoints from breaking server code

if(!function_exists('xdebug_break')) {

	function xdebug_break(){
		;
	}
}

if(!function_exists('DebugBreak')) {

	function DebugBreak(){
		xdebug_break();
	}
}

// Setup Root folder
$RootFolder = realpath(__DIR__) . DIRECTORY_SEPARATOR;

// see if we're using composer
if(is_dir($RootFolder . "##VENDOR/")) {
	// yes we are!
	$UsingComposer = true;
	
	// Add Composer Autoloader. If the vendor directory doesn't exist, it will not error out
	require_once $RootFolder . "##VENDOR" . DIRECTORY_SEPARATOR . "autoload.php";
	
	// require the main framework file
	require_once $RootFolder . "##VENDOR" . DIRECTORY_SEPARATOR . "caedo" . DIRECTORY_SEPARATOR . "framework" . DIRECTORY_SEPARATOR . "Caedo.inc";

}

// check if CAEDO is loaded
if(!function_exists('GetMicroTime') && (is_dir($RootFolder . "##CAEDO/"))) {
	// Not using composer, assume the framework is in the root
	$UsingComposer = false;
	
	// require the main framework file
	require_once $RootFolder . "##CAEDO" . DIRECTORY_SEPARATOR . "framework" . DIRECTORY_SEPARATOR . "Caedo.inc";
}

if(!function_exists('GetMicroTime')) {
	xdebug_break();
	die('Failed to load CAEDO Framework, please look at help documents here http://getcaedo.com/, to find out why.');
}



