<?php

require_once "##CAEDO.inc";

class HelloWorld_02 extends BasePage {

	public function __construct(){
		parent::__construct();
		
		// this is what we're using for the model section of the MVC framework.
		
		if(isset($_GET['AltView'])) {
			$this->__SelectAlternateView('SecondHelloWorldView');
		}
	
	}

	protected function BODY(){
		parent::BODY();
		
		print "<h1>Hello World 02!!!</h1>";
		
		print "<p>This version is using constructor for MVC routing and changing to print statements for text</p>";
		print "<p>BODY() is the default view.  It is not required, but it is called unless the view is overridden. </p>";
		
		print "<p>The view can be overridden by calling the '__SelectAlternateView' function.  View functions on the page class must always start with 'BODY__'.  This makes it really clear when looking at a page file which functions are views.</p>";
		print "<p>The view name I'd like to use is 'SecondHelloWorldView', which means I call the function '\$this->__SelectAlternateView('SecondHelloWorldView');', which will then call the function 'BODY__SecondHelloWorldView()' in my page file.</p>";
		print "<p><a href='?AltView=true'>See the second view</a></p>";
	
	}

	protected function BODY__SecondHelloWorldView(){
		parent::BODY();
		
		print "<h1>Welcome, to the second view.</h1>";
		
		print "<p><a href='?'>I'm done here, take me to the first view!</a></p>";
		
		print "<br /><br /><br />OR<br />";
		
		print "<p><a href='HelloWorld_03.php'>Continue to Example 03</a></p>";
	}
}

$ThisPage = new HelloWorld_02();
