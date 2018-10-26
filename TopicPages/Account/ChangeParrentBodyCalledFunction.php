<?php

require_once "../../##CAEDO.inc";

class ChangeParrentBodyCalledFunction extends PT_IronSummitMedia_startbootstrap_simple_sidebar_LoggedIn1 {
	
	// this __construct function can be removed
	public function __construct(){
		parent::__construct();
		
		// Notice that there is no Login verifcation here. It's on the page template.
	}
	
	// I am adding this function the page class, but in a real situation this would be added to the page template
	static function BODY_REPLACEMENT(){
		?>
<div id="wrapper">
	<!-- <img alt="" src="/images/CAEDO_Logo.png" height=100> -->

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li class="sidebar-brand"><h1>Ta DA!</h1></li>
			<li class="sidebar-brand">This is a different menu!!</li>
			<li><a href="/HelloWorld.php" target="_blank">Hello World</a></li>
			<li><a href="/HelloWorld_01.php">Hello World Learning Path</a></li>
			<li><a href="/TopicPages/BasicVersion.php">Basic Version</a></li>
			<li><a href="/TopicPages/Configuration.php">Site Configuration</a></li>
			<li><a href="/TopicPages/Database.php">Database</a></li>
			<li><a href="/TopicPages/Login.php">Login Demo</a></li>
		</ul>
	</div>
	<!-- /#sidebar-wrapper -->

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<div class="container-fluid">
	<?php
	}

	
	protected function BODY(){
		// would be "parret::BODY_REPLACEMENT();" if you were changing the page template to support
		self::BODY_REPLACEMENT();
		
		?>


<section class="main__middle__container">

	<div class="row nothing title__block first__title__block min_height">
		<div class="col-md-12">


			<h2 class='center_text'>Yep, for sure a different menu</h2>
			<hr>
			<p>As you can see the left menu is different. We are doing this by
				not calling the "parret::BODY();" function in the BODY() function of
				the page class. That means that we're not allowing ANY of the page
				templates or the base page for that matter to render their body
				functions. The Base Page's BODY() is empty, and the Page Templates
				usually just have, well, the menu.</p>


			<p>We are hacking this a little for the example to avoid yet another
				copy of 'PT_IronSummitMedia_startbootstrap_simple_sidebar'. I placed
				the BODY_REPLACEMENT() function in the page class, so that means the
				menu code is in the page class. Not ideal for anything except an
				example, as you would have to include a copy of the menu with every
				page class, and make changes to the menu very difficult as you would
				have to change it in many places.</p>

			<p>That aside, this is one way of doing it. I think it isn't as
				hierarchical as some of the other methods, and I view hierarchy as a
				feature of Caedo that helps keep things clean.</p>

		</div>
	</div>

</section>



<?php
	
	}
}

$ThisPage = new ChangeParrentBodyCalledFunction();
