<?php

require_once "../--CAEDO.php";

class index extends DefaultPageTemplate {

	protected function BODY(){
		parent::BODY();
		?>

<h3>Basics</h3>
The page you are looking at is rendered using Caedo. There are three
main classes involved in rendering this page.
<ol>
	<li>__framework/BasePages/BasePage.class.inc <br /> This class deals with the mechanics of
		loading pages and controling MVC. This class is part of the framework
		and shoud be looked at an non-editable<br /> <br />
	</li>
	<li>__local/PageTemplates/DefaultPageTemplate.php <br /> This is where we can
		start to code, the class name can be whatever we want. We inherit from
		this class for our pages. Its used to put the header and footer on
		each page so they don't have to be coded into each page class. This is
		also a great place to put any CSS that will be widely used and also
		common javascript. If the project uses jQuery, it should be loaded
		here, as it will be used for most pages. <br /> This class it totally
		optional, you can have you page classes inherit from the base class,
		but using this class will save time and allow for smaller page class
		files.<br /> <br />
	</li>
	<li>Page Class file. <br /> This is the file that contains the text you
		are looking at right now. It is also in the folder that shows as URL.
		There is a /pages folder, it contains a 'basics' folder and there is a
		file in the folder called index.php. That is this file.
	</li>
</ol>
Each class inherits from the class below it, and can add information.  It is best to keep the most informaion in the Page Template to make the Page class file as small and simple as posible.  There is very little other code in the page class file other than this text.  In fact, this file is only 43 lines long, and all but 10 of those lines are text.

<?php
	}
}

$ThisPage = new index();