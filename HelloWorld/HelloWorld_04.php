<?php

require_once "../##CAEDO.inc";

class HelloWorld_04 extends AlmostEmptyPageTemplate {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		
		print "<h1>Hello World 04</h1>";
		
		print "<p>Welcome, to the /HelloWorld directory.</p>";
		
		print "<p>In order to get us here, a few things had to change.  For one, the first command of each page file is to load the framework.  Since we're in a directory, the relative location of that file has changed, and hence we have updated the line from:</p>";
		
?>
<pre>require_once "##CAEDO.inc";</pre>

<p>to:</p>

<pre>require_once "../##CAEDO.inc";</pre>
<?php 

		print "<p>I have also updated the page template from 'EmptyPageTemplate' to 'AlmostEmptyPageTemplate'.</p>";
		?>
<pre>

&lt;?php 

class AlmostEmptyPageTemplate extends BasePage {

	public function __construct(){
		parent::__construct();
	}

	public function __destruct(){
		parent::__destruct();
	}

	protected function BODY(){
		parent::BODY();
	}

}

</pre>

<p>As you can see above, the 'AlmostEmptyPageTemplate' is almost empty.  It only contains functions that call it's parent functions.  It is important to call the parent functions because each of those functions might be doing something helpful.</p>

<p>If you were to remove 'parent::__construct();' or 'parent::__destruct();' this page will not work. The line 'parent::BODY();' on the other hand can be removed, as the BasePage Body function is empty.</p>

<p>In order to make it easier to move back and forth through the examples, I'm going to add Prev and Next buttons in a page template and load that template with the next example.</p>

<p><a href='HelloWorld_05.php'>Continue to Example 05</a></p>

<?php
	
	}

}

$ThisPage = new HelloWorld_04();
