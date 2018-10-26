<?php

require_once "../../##CAEDO.inc";

class ChangeYourOriginalPageTemplate_RequiresSecure extends PT_IronSummitMedia_startbootstrap_simple_sidebar__WithOptionalSecurityClone {
	
	protected $PageRequiresSecurity = true;

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


			<h2 class='center_text'>Optional Security</h2>
			<hr>

			<p>
				Unfortunately, I can't (or won't) just edit the
				'PT_IronSummitMedia_startbootstrap_simple_sidebar' page template.
				There are other examples that rely on that templet and I don't want
				to muddy the waters for the simpler examples in other places to
				accommodate this one example. So instead I just copied the page
				template yet again and called it
				'PT_IronSummitMedia_startbootstrap_simple_sidebar__WithOptionalSecurityClone'
				this is the very same code as in
				'PT_IronSummitMedia_startbootstrap_simple_sidebar', but since it is
				a copy it has the same nasty way of being a maintenance nightmare.
				As of the writing of this (2016-01-25) the template was the same
				with the small exception of the login authentication code. Here is
				that code:
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

				$PageRequiresSecurity needs to be set on the page class. This is how
				I defined it on this page:
				<code>
					<pre>
protected $PageRequiresSecurity = true;</pre>
				</code>

				That will make this page require a user to be logged in to view.
				Please see the left menu and notice that there is a link there that
				says "Insecure page on same template". That page has
				$PageRequiresSecurity set to false. It can be viewed without being
				logged in even though it is using the same page template.
			</p>

		</div>
	</div>

</section>



<?php
	
	}
}

$ThisPage = new ChangeYourOriginalPageTemplate_RequiresSecure();
