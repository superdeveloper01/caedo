<?php

require_once "../../##CAEDO.inc";

class CopyTheLastTemplateAddSecurity extends PT_IronSummitMedia_startbootstrap_simple_sidebar__WithSecurityClone {
	
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


			<h2 class='center_text'>Yay! We have a left menu!</h2>
			<hr>
			<p>
				The page template we're using here is
				'PT_IronSummitMedia_startbootstrap_simple_sidebar__WithSecurityClone'
				which is 'PT_IronSummitMedia_startbootstrap_simple_sidebar' copied
				and with the three lines of login code added. It's quick, dirty and
				simple. It's also not a bad idea if you're using this as a starting
				point for a larger redesign of the menu. If you are going to share
				any menu items with the insecure menu, I don't recommend this. I
				think maintenance is something that should be taken seriously from
				the start, and to me this screams maintenance nightmare. <br /> <br />
				I just made one simple change to
				'PT_IronSummitMedia_startbootstrap_simple_sidebar__WithSecurityClone'
				Page Tempalte, just to show it can be done. I added a logout button.
				<br /> <br /> Speaking of maintenance... The logout link is the last
				one on the list, right after "Login Demo". At the time I am writing
				this (2016-01-25), those were the links we had on the left. What has
				been added since then? Do you see the "maintenance nightmare" taking
				shape?
		
		</div>
	</div>

</section>



<?php
	
	}
}

$ThisPage = new CopyTheLastTemplateAddSecurity();
