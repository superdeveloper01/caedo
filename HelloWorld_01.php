<?php

require_once "##CAEDO.inc";

class HelloWorld_01 extends BasePage {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		?>

<h1>Hello World 01!!!</h1>

<p>This is the first Hello World example with the addition of this
	message and using a public constructor, __construct().</p>
<p>
	Also notice that the classname has been changed to 'HelloWorld_01' to
	match the filename of 'HelloWorld_01.php'.<br />If you leave the class
	name as HelloWorld, you will get an error message at the top of your
	screen saying "Classname doesn't match file name".<br />I am also
	calling 'parent::BODY()' in the top of the BODY() function. This is a
	good habit to get into, as when you start using page template, that's
	where the header code will usually be.
</p>
<p>
	<a href='HelloWorld_02.php'>Continue to Example 02</a>
</p>
<?php
	}
}

$ThisPage = new HelloWorld_01();
