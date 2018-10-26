<?php

require_once "##CAEDO.inc";

class HelloWorld_03 extends EmptyPageTemplate {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		
		print "<h1>Hello World 03!!!</h1>";
		
		print "<p>I'm guessing you have a fair idea of how this is working so far. It's time to do two things.</p>";
		print "<ol>";
		print " <li>Add a page template</li>";
		print " <li>Get out of the root directory!</li>";
		print "</ol>";
		
		print "<p>As you can see by the last examples, page templates are totally optional.  We have been inheriting from the BasePage and have had no problems with it.  Adding a page template allows us to group together code that is often used.  Such as tempaltes, headers, footers, menus, banners.  Really anything you want to reuse.  You can also have any number of page templates.  Page templates can also inherit from eachother, for even more flexilibilty.</p>";
		print "<p>Here is an example of a page template (and in fact the page template that is being used on this page!)</p>";
		?>
<pre>

&lt;?php 

class EmptyPageTemplate extends BasePage {

}

</pre>

<p>As you can see, it is called 'EmptyPageTemplate', and as you can also see, it is indeed empty. ...But nonetheless, this is a totally 100% valid page template.</p>

<p>Caedo is built to be clear and consice. To allow you to override what you need to, and let the things that work continue to work without needed to mess with them during interm steps. Since this page template doesn't override anything, all functionality is inherited from the BasePage.</p>

<p>Now that objective 1 is complete, let's move off of root and into the '/HelloWorld' directory for example 4!</p>

<p><a href='/HelloWorld/HelloWorld_04.php'>Continue to Example 04</a></p>

<?php
	
	}

}

$ThisPage = new HelloWorld_03();
