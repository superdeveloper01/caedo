<?php

require_once "##CAEDO.inc";

class HelloWorld extends BasePage {

	protected function BODY(){
		parent::BODY();
		?>

			<h1>Hello World!!!</h1>

		<?php
	}
}

$ThisPage = new HelloWorld();
