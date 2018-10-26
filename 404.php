<?php

// show all errors
$__ShowErrors = 'ALL';
error_reporting(E_ALL);

require_once "__CAEDO/FRAMEWORK/__CAEDO.php";
// xdebug_break();

set_time_limit(60);

class index extends DefaultPageTemplate {
	
	// this __construct function can be removed
	public function __construct(){
		parent::__construct();
	
	}
	
	// this __destruct function can be removed
	public function __destruct(){
		parent::__destruct();
	}
	
	// this __Run_Model function can be removed
	protected function __Run_Model(){
	
	}

	protected function __Route_To_View(){
	
	}

	protected function HEAD(){
		parent::HEAD();
		?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	}

	protected function BODY(){
		parent::BODY();
		?>
<h1>Page not found</h1>
<?php
	}
}

$ThisPage = new index();
