<?php

// show all errors
$__ShowErrors = 'ALL';

require_once "../--CAEDO.php";

// xdebug_break();

set_time_limit(60);

class why extends DefaultPageTemplate {
	
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
	}

	protected function BODY(){
		parent::BODY();
		?>

<h3>Why?</h3>
<br />
Many people out there may be asking "why?". Why would you create a new
framework when there are already so many good options out there?
<br />
<br />
The main reason is that I didn't find a framework that fit my needs.  There are a lot of good frameworks out there, I've done my research, but I didn't find one that filled my need for a blend of simplicity  and complexity.



<?php
	
	}
}

$ThisPage = new why();