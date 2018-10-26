<?php

require_once "../##CAEDO.inc";

class InsecurePageDemo extends PT_IronSummitMedia_startbootstrap_simple_sidebar__WithOptionalSecurityClone {
	
	protected $PageRequiresSecurity = false;

	public function __construct(){
		parent::__construct();
		
		// log the user out here
		$_SESSION['LoggedIn'] = false;
		unset($_SESSION['LoggedIn']);
	
	}

	protected function BODY(){
		parent::BODY();
		
		?>


<section class="main__middle__container">

	<div class="row nothing title__block first__title__block min_height">
		<div class="col-md-12">


			<h2 class='center_text'>This page can be viewed if you are not logged
				in</h2>
			<hr>
			<p>We have defined and set $PageRequiresSecurity to be false. That
				will allow us to view this page without being logged in. If you
				would like to test this, copy the URL and open this page in an
				incognito window. You will still see the same page.</p>

		</div>
	</div>

</section>



<?php
	
	}
}

$ThisPage = new InsecurePageDemo();
