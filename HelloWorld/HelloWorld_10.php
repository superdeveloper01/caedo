<?php

require_once "../##CAEDO.inc";

class HelloWorld_10 extends HelloWorldPageTemplate4 {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		
		?>

<div class="row">
	<div class="col-lg-12">
		<p>If you are reading this, read quickly for this page is about to
			disapear.</p>

		<p>Instead of coding something to limit the number of hello world
			pages, I am choosing to redirect on the last page and send you to the
			first topic page. From there you can choose where to go.</p>

		<p>You will be redirected in 10 seconds.</p>

<?php
		
		AutoRefresh('../HelloWorld_01.php');
		
		?>

	</div>
</div>

<?php
	
	}

}

$ThisPage = new HelloWorld_10();
