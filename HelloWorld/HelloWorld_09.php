<?php

require_once "../##CAEDO.inc";

class HelloWorld_09 extends HelloWorldPageTemplate4 {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		
		?>

<div class="row">
	<div class="col-lg-12">
		<p>This is a different template than Hello World 08. I wanted to get
			us back to the template we started with. I have made a few changes to
			allow for the Prev and Next buttons to display and work correctly.</p>

		<p>Here's what has changed.</p>

		<p>
			Just like before, this page, HelloWorld_09.php has very little
			functional code in it. It is inheriting from HelloWorldPageTemplate4,
			which is really HelloWorldPageTemplate2, just changed to inherit from
			PT_IronSummitMedia_startbootstrap_simple_sidebar.
			PT_IronSummitMedia_startbootstrap_simple_sidebar is the template that
			I'm using for the majority of this example website. The source of
			this template can be found here: <a
				href='https://github.com/IronSummitMedia/startbootstrap-simple-sidebar'>
				https://github.com/IronSummitMedia/startbootstrap-simple-sidebar</a>
		</p>

		<p>I am going to stop the Hello World learning path here, and no go
			into topical pages that explain specific features of Caedo. I think
			you should have enough of an understanding to the way Caedo works to
			get started program using it. From here on out, feature based
			reference may be the best way to go.</p>

	</div>
</div>

<?php
	
	}

}

$ThisPage = new HelloWorld_09();
