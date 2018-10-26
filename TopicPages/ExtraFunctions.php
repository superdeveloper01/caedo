<?php

require_once "../##CAEDO.inc";

class ExtraFunctions extends PT_IronSummitMedia_startbootstrap_simple_sidebar {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		
		if(isset($_GET['Action'])) {
			
			if($_GET['Action'] == 'TestRedirect') {
				?>
<div class="row">
	<div class="col-lg-12">
		<h1>Redirecting Now!!!</h1>
	</div>
</div>
<?php
				Redirect('ExtraFunctions.php', true);
			}
			
			if($_GET['Action'] == 'AutoRefresh') {
				?>
<div class="row">
	<div class="col-lg-12">
		<h1>Redirecting in 10 seconds!!</h1>
	</div>
</div>
<?php
				AutoRefresh('ExtraFunctions.php');
			}
			
			if($_GET['Action'] == 'TestRedirectPHP') {
				?>
<div class="row">
	<div class="col-lg-12">
		<h1>Redirecting Now!!!</h1>
	</div>
</div>
<?php
				Redirect('ExtraFunctions.php');
			}
		
		}
		else {
			?>

<div class="row">
	<div class="col-lg-12">
		<h1>Extra Functions</h1>
		<p>There are a number of helpful functions that have been built into
			CAEDO. Some of these are for PHP only, some are for PHP/MySql and
			some are for Javascript. You can find most of these function in
			GlobalFunction.inc in the ##VENDOR/caedo/framework directory.</p>

		<p>Standard Process. Most of these functions are not complex. Don't
			expect the world from any of them. What they are is consistant. When
			you use these functions you can worry less about the underlaying PHP
			needed to make each one of these happen. You can instead focus on
			programming your actual product. I would also guess you will have
			fewer typos when doing these standard things. These functions have
			been vetted and in use in production websites. (...but who knows,
			there still could be bugs. If you find one feel free to submit a pull
			request to fix the issue.)</p>

		<h2>Date Functions</h2>

		<p>When you need to work with dates things can get complicated. Even
			something as simple as finding out what time it is can be far more
			complicated than first meets the eye. --What time is it where? Where
			the server is located? Where the php timezone setting is set? Where
			the user is? Where one of our locations is?--</p>

		<p>We're not so much adding new functionality to PHP as we are
			wrapping the existing functions. Calculating things like business
			days, and adding business days to date. Dealing with time, and adding
			say 30 minutes to a date time.</p>

		<h2>Redirect Functions</h2>
		<p>Redirection is something that most websites will use at least in a
			few places. We have built two functions for redirection. Javascipt
			redirection and PHP redirection.</p>

		<p>Javascript redirection is used for anytime you want the user to see
			the page, and they automatically direct them away, to a different
			page. This could be a "Success!" page, or a "You will be redirected
			in 5 seconds"</p>

		<p></p>

		<p>
			<a href='?Action=TestRedirect'>Click here to Test Redirect</a>
		</p>
		<p>
			<a href='?Action=AutoRefresh'>Click here to Test With 10 Second Delay</a>
		</p>

		<p>You can also redirect with PHP. This is done by sending redirect
			headers. The advantage of using PHP redirect is that it is much
			faster than a javascript redirect. Also PHP calls the exit() function
			after the redirect, so you don't have to worry if there is sensitive
			data that would be returned if the page was allowed to process. I
			suggest using a PHP redirect for sending un-authenticated users to a
			login page. You don't want ANY procssing to happen on the secured
			page if the user isn't authenticated. This prevents any AJAX or even
			constructor function or processes from being called. It litterally
			sends the redirect headers and kills the process.</p>

		<p>
			<a href='?Action=TestRedirectPHP'>Click here to Test redirect With
				PHP</a>
		</p>

		<p></p>

		<p></p>


	</div>
</div>

<?php
		}
	
	}

}

$ThisPage = new ExtraFunctions();
