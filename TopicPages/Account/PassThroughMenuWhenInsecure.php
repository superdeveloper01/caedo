<?php

require_once "../../##CAEDO.inc";

class PassThroughMenuWhenInsecure extends PT_IronSummitMedia_startbootstrap_simple_sidebar_PassThroughMenuWhenInsecure {
	
	protected $PageRequiresSecurity = true;
	
	// this __construct function can be removed
	public function __construct(){
		parent::__construct();
		
		// Notice that there is no Login verifcation here. It's on the page template.
	}

	protected function BODY(){
		parent::BODY();
		
		?>


<section class="main__middle__container">

	<div class="row nothing title__block first__title__block min_height">
		<div class="col-md-12">


			<h2 class='center_text'>Maybe the best choice</h2>
			<hr>

			<p>
				This was a late addition to the collection. It builds on the "Change
				your original page template to check for security if the page class
				is set as 'requires secure'" idea. I'm using the same logic in the
				constructor:

				<code>
					<pre>
// This is a secure by default configuration, although I suggest setting PageRequiresSecurity on the page class even if it will be set to true.
if(!isset($this->PageRequiresSecurity) || $this->PageRequiresSecurity) {
	// this is the security code that we added
	if(!isset($_SESSION['LoggedIn']) || $_SESSION['LoggedIn'] != 'admin') {
		Redirect('../Login.php');
	}
}</pre>
				</code>

				So, if it's a secure page, check for the session varible, otherwise
				just continue.<br /> I have also changed the body function to be
				this:

				<code>
					<pre>
protected function BODY(){
	if($this->PageRequiresSecurity) {
		$this->SecureMenu();
	}
	else {
		parent::BODY();
	}
}</pre>
				</code>
				This checks to see if the page being requested is a secure page or
				an insecure page. If it is a secure page, call the SecureMenu()
				function, otherwise, call parrent::BODY();
			</p>

			<p style='margin-top: 10px'>This doesn't 100% keep the hierarchy,
				which means it's not as clean as it could be. I think if you are
				adding login after the fact this isn't a bad way to go.</p>




		</div>
	</div>

</section>



<?php
	
	}
}

$ThisPage = new PassThroughMenuWhenInsecure();
