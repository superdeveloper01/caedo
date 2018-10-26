<?php

require_once "../../##CAEDO.inc";

class index extends PT_IronSummitMedia_startbootstrap_simple_sidebar_LoggedIn1 {
	
	// this __construct function can be removed
	public function __construct(){
		parent::__construct();
		
		// Notice that there is no Login verifcation here. It's on the page template.
	}

	protected function BODY(){
		parent::BODY();
		
		?>


<section class="main__middle__container">

	<div class="row nothing title__block first__title__block min_height">
		<div class="col-md-12">


			<h2 class='center_text'>Welcome to login land!</h2>
			<hr>
			<h3 class='center_text'>
				<b>If you're seeing this page, you're logged in.</b>
			</h3>
			<p>
				So, what just happened? What code was added? Cadeo handles security
				like it handles everything else. It's hierarchical. All you need to
				do is create a new page template the inherit from your previous that
				has the added feature of verifing whatever you security flags are.
				By default the only security flag is in the session. Here are the
				only new line of code added to validate that the user is logged in:

				<code>
					<pre>
if(!isset($_SESSION['LoggedIn']) || $_SESSION['LoggedIn'] != 'admin') {
	Redirect('../Login.php');
}</pre>
				</code>

				If this if fails, the browser is redirected to the login page.<br />
				<br /> To make it easy on you, here is the code that is run by the
				Redirect function: <br />
				<code>
					<pre>
header("Location: $link");
exit();</pre>
				</code>
				<br /> Key take aways here are that this is calling the php header
				function, so it is a server redirect. Also that it is then calling
				the exit() function so page execution stops.<br /> As I'm sure you
				have also noticed by now, because of the way we call parent
				constructors before running the current classes constructor code,
				nothing from the page class will execute. It will load the class and
				then exit before any code is run. This makes this method safe even
				if you are doing something in the constructor that changes data,
				sends messages, etc. It just won't run. Depending on what you put in
				your page template, any parents of the page template that is doing
				the authentication WILL RUN. Usually since this will be all
				un-authenticated code, it's not an issue. But it is something to
				take note of.
			</p>

			<p style='margin-top: 10px'>
				At this point you may be saying, "Ok, looks good so far, but I still
				see the old menu. How do I customize my users experance when they
				are logged in?"<br />Excellent point my friend! As always in Caedo,
				there are several ways you can do that. Here are some options:
			
			
			<ol>
				<li><a href='TotallyNewPageTemplate.php'>Use a totally new page
						template</a></li>

				<li><a href='CopyTheLastTemplateAddSecurity.php'>Copy the last
						template you used, and add the security code there.</a></li>

				<li><a href='ChangeYourOriginalPageTemplate_RequiresSecure.php'>Change
						your original page template to check for security if the page
						class is set as "requires secure"</a></li>

				<li><a href='SecondLoggedInMenu.php'>Add a second "logged in" menu
						in adition to the current menu</a></li>

				<li><a href='ChangeParrentBodyCalledFunction.php'>Change the parrent:body()
						function that is called by the page class to call a different
						function.</a></li>

				<li><a href='PassThroughMenuWhenInsecure.php'>Change your page template
						to include an alternate body function that allows
						passthrough for insecure and contains the secure menu</a></li>
			</ol>

			<p>Ok, that's 6. I'm sure there's a dozen more ways to do it. Which
				one you pick really depends on the programming style you are using.
				Does your team or company have a standard method? If so, use that.
				Otherwise, look at the examples. There are notes on each where I
				list when I would tend to use each method.</p>


			</p>





		</div>
	</div>

</section>



<?php
	
	}
}

$ThisPage = new index();
