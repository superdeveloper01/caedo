<?php

require_once "../##CAEDO.inc";

class Logout extends PT_IronSummitMedia_startbootstrap_simple_sidebar {
	
	// this __construct function can be removed
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


			<h2 class='center_text'>You have been logged out.</h2>
			<hr>
			<p>Notice that this page is NOT using the secure template. Using the
				secure template is...well, not what I would suggest. If, and this is
				a big "if", it works for the first load. It will fail on a page
				refresh. Worst case you'll be directing your user to a page that
				will instead of saying something like "You have logged out" it will
				send them to the login form. And depending on what code you added to
				your login page template, it could say something like "You must
				login to view this page". You may also have added something to save
				the requested page and redirect your user to that page after they
				have logged in. In which case you could be asking your user to login
				in order for them to logout. If that still sounds like a good idea
				to you, well, I rest my case.</p>

		</div>
	</div>

</section>



<?php
	
	}
}

$ThisPage = new Logout();
