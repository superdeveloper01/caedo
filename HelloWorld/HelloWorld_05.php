<?php

require_once "../##CAEDO.inc";

class HelloWorld_05 extends HelloWorldPageTemplate1 {

	public function __construct(){
		parent::__construct();
		
		$this->Setup_HelloWorldPageTemplate1_FileContents();
	}
	
	private $HelloWorldPageTemplate1_FileContents;

	private function Setup_HelloWorldPageTemplate1_FileContents(){
		$HelloWorldPageTemplate1_FileContents = file_get_contents(Site::$RootFolder . '__LOCAL_USER_CLASSES/PageTemplates/HelloWorldPageTemplate1.class.inc');
		$HelloWorldPageTemplate1_FileContents = htmlentities($HelloWorldPageTemplate1_FileContents);
		$this->HelloWorldPageTemplate1_FileContents = $HelloWorldPageTemplate1_FileContents;
	}

	protected function BODY(){
		parent::BODY();
		
		print "<h1>Hello World 05</h1>";
		
		print "<p>Did you notice the nifty links at the top of the page?</p>";
		
		print "<p>Did you also notice that there is no code in the 'HelloWorld_05' page file that is creating them?</p>";
		
		print "<p>We are now using 'HelloWorldPageTemplate1' as the page template, here is the file:</p>";
		
		?>
<pre>

<?php print $this->HelloWorldPageTemplate1_FileContents;  ?>

</pre>


<p>I'm guessing you are already a php programmer, so walking though the code my not be of that much use, so I'll do it quickly</p>

<ol>
	<li>We're inheriting (extending, to use the php term) from BasePage, we could inherit from a different page template, as long as we eventualy inherit from BasePage. <br /> Because 'EmptyPageTemplate' inherits from basepage, you could change this template to inherit from it, and there would be no change in function.
	</li>
	<li>Declare Private varibles $PrevClassExampleNumber and $NextClassExampleNumber. These are basicily globals to all the functions and views in this page, there are other ways to pass varibles to functions, but for now we will use this method.</li>
	<li>Standard __construct() function that calls one other function CalcPrevAndNextClassExampleNumbers(). Everyone has their own style of programming, I'm not going to argure who is correct. But this is my prefered style. Call functions from the constructor, that do things. This keeps the code out of the construction, and collected under function names that are descirptive to what they do. I take descirptive to sometimes mean crazy long. PHP imposes no limit on the length of varibles or function names, I prefer mine to be as informitve as possible.</li>
	<li>Look at the first line of CalcPrevAndNextClassExampleNumbers(). It reads '$PageClassName = get_class($this);'. This is a very useful feature of Caedo, and a product of using inheritance. No matter what level you are on, Page Template, Page Class, get_class will always return the PageClass name, which just happens (to be required) to be the file name of the page. This is useful in a number of areas, here I am using it to calculate which page we are on to figure out which page numbers should be the next and prev numbers. But it is also useful in creating menus, and marking which page is active.</li>
	<li>The rest of the CalcPrevAndNextClassExampleNumbers() function is just the mechanics of figuring out the current page number, then some logic in the static CheckForLessThanTenAndAddZeroIfNeede function to do rounding and account for page numbers less than 10.<br />This also serves as example that you can use functions and static functions in page classes, and it is totally okay do so. I would generally take any logic that is much more complicated than this and put it into a separate class.
	</li>
	<li>Let's look at the body function. Again, this is a programming style thing, but I sometimes prefer ending the php execution with ?&gt; and typing in HTML. This for one allows my IDE to highlight the HTML syntax. This can also be very helpful for Javascript and CSS.</li>
</ol>

<p>Next, lets talk about classes. (The next button is at the top of this page on the right.)</p>


<?php
	
	}

}

$ThisPage = new HelloWorld_05();
