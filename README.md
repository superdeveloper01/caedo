# Caedo PHP Framework Example Project

This is an example project using the Caedo PHP Framework.  If you are looking to use Cadeo, you are in the right place!

All of the code here is also hosted on our example site.  You can check it our here: http://GetCaedo.com

~~If you are looking to make changes to the Caedo PHP Framework, the source is located here: https://github.com/kananlanginhooper/Caedo~~
Caedo PHP Framework is still in rapid development, for now please push changes to this repo.  I will review these push requests and then at some point in the future split out the "Framework" from the framework and examples that are in this repo.

 
 
# Caedo PHP Framework - Why?

Many people out there may be asking "why?". Why would you create a new framework when there are already so many options out there?

The main reason is that I didn't find a framework that fit my needs.  I needed a framework that was simple and fast to get running, but could be expanded to meet the needs of a complex project.

My goal for Caedo is enable php developers to launch a working site in 15 minutes.  The clock starts now, and you should continue by reading the rest of this page!

# Basics - Rendering Pages

There are at least two classes involved in rendering pages.
	
- BasePage

The Basepage is a core class of Caedo.  This class deals with the mechanics of loading pages and controling MVC.  This class is part of the framework and shoud be looked at an non-editable.  It is very generic, it's functionaility can (and should) be extending by adding a PageTemplate, but this isn't required.
	
- Page Template (Optional, but a good idea)

The Page Template inherits from the BasePage.  You can have many Page Templates.  This is an autoloaded class, the class name can be whatever you want provided it starts with 'cls' and ends with '.class.inc'.  So 'clsPageTemplate.class.inc' is a perfectly acceptable name.  We have created this class for you as an example, it is located in '/__LOCAL_USER_CLASSES/PageTemplates/clsPageTemplate.class.inc'.

It is common to use the Page Template to setup the look and feel of your site, such as Headers, Footers, Menus, as well as common CSS and Javascript.   
	
This class it totally optional, but again using a Page Template will save time.

	
- Page Class

This is the file that contains the page's actual content.  It also has a small amount of boiler plate code that sets up the framework.

It is also important to note, that page files are located in the folder that you would guess they would be in based on URL -- meaning there is no fancy re-writing or apache magic happening to make the framework work.

In this example project, there is a '/Test' folder, it contains a file 'index.php'.  It is executed by opening (http:localhost)/Test/index.php

_The Page class must be named the same as the file name_  So for the file 'index.php', the class must be named 'index'. 

Here is what the index.php file could (and does) look like:

```
<?php

require_once "##CAEDO.inc";

class index extends BasePage {
	
}

$ThisPage = new index();

```

Although this page doesn't do anything, or display anything. It is a legal page file.


# Hello World

This file is included in the root of the example project as HelloWorld.php

```
<?php

require_once "##CAEDO.inc";

class HelloWorld extends BasePage {

	protected function BODY(){
		?>

			<h1>Hello World!!!</h1>

		<?
	}
}

$ThisPage = new HelloWorld();

```

# Hello World 01 - Using Constructor and showing the change of the page class name 

This file is included in the root of the example project as HelloWorld_01.php

```
<?php

require_once "##CAEDO.inc";

class HelloWorld_01 extends BasePage {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		?>

		<h1>Hello World!!!</h1>
		
		<p>This is the first Hello World example with the addition of this message and using a public constructor, __construct().</p>
		<p>Also notice that the classname has been changed to 'HelloWorld_01' to match the filename of 'HelloWorld_01.php'.<br />If you leave the class name as HelloWorld, you will get an error message at the top of your screen saying "Classname doesn't match file name".<br />I am also calling 'parent::BODY()' in the top of the BODY() function.  This is a good habit to get into, as when you start using page template, that's where the header code will usually be.</p>
		
		<?
	}
}

$ThisPage = new HelloWorld_01();


```

# Hello World 02 - Using Constructor for MVC routing and changing to print statements for text

```
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
	
	}
}

$ThisPage = new HelloWorld_02();

```



Each class inherits from the class above it, and can add information.  It is best to keep the most informaion in the Page Template to make the Page class file as small and simple as posible.  This will make it easy to create new pages without having to think to much about the template and layout.


# Javascript defaults

Caedo can be used with javascript framework.  I made the decision support jQuery and bootstrap our of the box, so if you'd like to use them, you don't have to do anything.  If you'd like to not use them, then change /__CAEDO/config/framework.defaults.php, and set $UsejQuery = false; and $UseBootstrap = false;



