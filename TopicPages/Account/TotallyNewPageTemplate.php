<?php

require_once "../../##CAEDO.inc";

class TotallyNewPageTemplate extends PT_LoggedInAndNothingElse {
	
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


			<h2 class='center_text'>Use a totally new page template</h2>
			<hr>
			<h3 class='center_text'>
				<b>Yeah, not a lot here.</b>
			</h3>
			<p>
				...but it is secure. If you weren't logged in you would have been
				redirected to the login page. <br /> <br /> So, when would I use
				this? <br /> <br /> If the look of your non-logged in site and your
				logged in area are very different <br /> Is your not logged in site
				a sales pitch to sign up for an account? <br /> Are the non-logged
				in links of any use to a logged in user? <br /> In general I would
				say this is the most useful for complex sites. <br />
			</p>

			<p>So what code is running here? Really we are back to using base
				page as our main template. The page template that is being used is
				"TotallyNewPageTemplate" which inherits from base page and only adds
				the authentication code that we covered before. This is starting
				from scratch...and has the pros and cons that come along with that.</p>

		</div>
	</div>

</section>



<?php
	
	}
}

$ThisPage = new TotallyNewPageTemplate();
