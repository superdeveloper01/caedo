<?php

require_once "../../##CAEDO.inc";

class SecondLoggedInMenu extends PT_IronSummitMedia_startbootstrap_simple_sidebar_LoggedIn1 {
	
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
		<div class="col-lg-9">


			<h2 class='center_text'>A Second Menu</h2>
			<hr>
			<h3 class='center_text'>
				<b>Yeah, it's not pretty.</b>
			</h3>
			<p>I just copied the existing menu and formatted it right. It's not
				great, I wouldn't use this as is. The second menu isn't actually
				even part of the page template, which is really not the way to do
				it. I will refactor it at some point to make this into a usable
				example.</p>
			<p>There are some limited cases where I would use a second menu. One
				example would be if you were actually using double level login. Like
				log in once to see the main login features, then log in again to get
				to the super secure area or just some area that you want to not have
				easily accessible buttons for or perhaps extra loging around. When I
				have done this there is usually very few menu items needed in that
				area.</p>
		</div>

		<div class="col-lg-3">
			<!-- Sidebar -->
			<div id="sidebar-wrapper-right">
				<ul class="sidebar-nav">
					<li class="sidebar-brand">Second "Secure" Menu!!</li>
					<li><a href="/HelloWorld.php" target="_blank">Hello World</a></li>
					<li><a href="/HelloWorld_01.php">Hello World Learning Path</a></li>
					<li><a href="/TopicPages/BasicVersion.php">Basic Version</a></li>
					<li><a href="/TopicPages/Configuration.php">Site Configuration</a></li>
					<li><a href="/TopicPages/Database.php">Database</a></li>
					<li><a href="/TopicPages/Login.php">Login Demo</a></li>
				</ul>
			</div>
		</div>
	</div>

</section>



<?php
	
	}
}

$ThisPage = new SecondLoggedInMenu();
