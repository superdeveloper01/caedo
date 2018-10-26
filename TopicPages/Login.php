<?php

require_once "../##CAEDO.inc";

class Login extends PT_IronSummitMedia_startbootstrap_simple_sidebar {
	
	public $access;
	public $UseRecaptcha;
	// this __construct function can be removed
	public function __construct(){
		parent::__construct();
		
		$this->__PageTitle = "Login";
		
		//
		//
		//
		// this code here is for example only, allow users to disable Recaptcha with a URL param is crazy.
		// Choose if you want to use Recaptcha and set true or false here, or above in the variable deceleration.
		if(isset($_GET['WithoutRecaptcha'])) {
			$this->UseRecaptcha = false;
		}
		else {
			$this->UseRecaptcha = true;
		}
		//
		//
		//
		
		if(isset($_POST['posted'])) {
			
			if($this->UseRecaptcha) {
				$captcha = $_POST['g-recaptcha-response'];
				
				//
				//
				//
				//
				// This is a private key, as google says "Use this for communication between your site and Google. Be sure to keep it a secret."
				// I am leaving this public so this example will work on localhost. PLEASE register for your own here: https://www.google.com/recaptcha/
				// This key will not work on any other domains. It only works on: localhost, getcaedo.com and nukq.com.
				// !!! PLEASE register for your own here: https://www.google.com/recaptcha/ !!!
				$myprivatekey = '6Ld1WhYTAAAAAFqa0k6B9hmfHIxNfNEvUVxK8Qk3';
				//
				//
				//
				//
				
				$ValidateLocation = "https://www.google.com/recaptcha/api/siteverify?secret=$myprivatekey&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR'];
				
				if($captcha) {
					$response = file_get_contents($ValidateLocation);
					$json = json_decode($response);
				}
				else {
					$response = false;
				}
				
				if(!$response || !$json->success) {
					
					$this->__Qtips[] = new Qtip('recaptcha', 'Recaptcha Incorrect', 'red');
					$this->__Qtips[] = new Qtip('submit', 'Recaptcha Incorrect', 'red');
				}
			}
			
			if(!$this->UseRecaptcha || ($response && $json->success)) {
				
				$EmailFound = false;
				$LoggedIn = false;
				
				//
				//
				//
				//
				// I don't pretent to know your individual security requirements.
				// You may laugh at the array method as not a "best practice", and say "Never hard code your login information"
				// I would ask yourself if your developers have admin database access. If they do... then you're making your life complicated for no added security
				// How often are passwords changed? If this is a small site, they may never be changed. Do you really need to allow users to change their own password? Are you the user?
				// What about salting and hashing? "How could you <u>POSSIBLY</u> not salt and hash your passwords?!?!?!" Calm it down scooter. How many people are logging in here? 1 or 1 million?
				// Saying that there is a one size fits all methodology for security is ludicrous. Is this a cat forum or a banking site. Are you really saying the security plan should be the same for both?
				//
				// So, need more?
				// You can salt and hash all your passwords... even if you keep them hardcoded
				// You can connect this to a database to remove login details from the source
				// You can check cookies and IP address against prior logins
				// You can check prior login fails, and black list IP addresses, or lock account
				// You can connect to a key store such as AWS IAM.
				// You can impliment two-factor authenication here. Email based is easy to roll your own, use twilio to send a text
				// It's all up to you, think about what you really need.
				//
				// I suggest checking forks of this project and check back for future versions. My guess is we will be building out many of these security options.
				
				$arrValidLoginPairs = array(
						'caedo@getcaedo.com' => 'CaedoRocks!' 
				);
				
				if($_POST['email'] != '' && trim($_POST['password']) != '') {
					foreach($arrValidLoginPairs as $Email => $Password) {
						if($_POST['email'] === $Email && trim($_POST['password']) === $Password) {
							$_SESSION['LoggedIn'] = 'admin'; // this is the "Class" of logged in user. You can use this as a broad stroke to filter what that user should be able to see and do.
							$_SESSION['email'] = $_POST['email'];
							$LoggedIn = true;
							Redirect('Account/');
						}
					}
				}
				
				if(!$LoggedIn) {
					$this->__Qtips[] = new Qtip('email', 'login not found, please try again', 'red');
				
				}
			
			}
		
		}
	
	}
	
	// this __destruct function can be removed
	public function __destruct(){
		parent::__destruct();
	}
	
	// this __Run_Model function can be removed
	protected function __Run_Model(){
	
	}

	protected function __Route_To_View(){
	
	}

	protected function HEAD(){
		parent::HEAD();
		?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.radioTable tr td:first-child {
	width: 70px;
	text-align: right;
	padding-right: 5px;
}

label {
	color: black;
}

.padcaptcha {
	margin: 20px 0 20px 0;
}
</style>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php
	}

	protected function BODY(){
		parent::BODY();
		
		// Logins should generally be behind SSL when not on localhost
		// If you want to force to SSL, this is a good place to redirect.
		
		// set this to true to redirect to SSL if not secure
		$UseSecure = true;
		
		if($UseSecure) {
		
		}
		
		// Check if logged in, if so mypass this page
		$BypassIfLoggedIn = true;
		
		if($BypassIfLoggedIn) {
		
		}
		
		?>



<section class="main__middle__container">

	<div class="row nothing title__block first__title__block">
		<div class="col-md-12">

			<h2 class='center_text'>Please Login</h2>
			<hr>
			<form action='' method='post'>
				<div class='row center blackTDtext'>

					<div class='col-sm-6 text-center'>Email (caedo@getcaedo.com):</div>
					<div class='col-sm-6 text-center'>
						<input type="text" name='email' id='email'
							value='<?php print @$_POST['email'] ?>' size=50>
					</div>
				</div>
				<div class='row center blackTDtext'>
					<div class='col-sm-6 text-center'>Password (CaedoRocks!):</div>
					<div class='col-sm-6 text-center'>
						<input type="password" size=50 name='password' value=''>
					</div>

				</div>


				<div class='row center blackTDtext'>
					<div class='col-xs-4'></div>
					<div class='col-xs-4'>
					<?php if($this->UseRecaptcha){ ?>
						<div id='recaptcha'
							class="g-recaptcha padcaptch text-center center"
							data-sitekey="6Ld1WhYTAAAAACPQ7JuuhM_IdTvzXn5UzimTu0YQ"></div>
							<?php } ?>
					</div>
					<div class='col-xs-4'></div>
				</div>

				<div class='row center blackTDtext'>
					<div class='col-sm-5'></div>
					<div class='col-sm-2'>
						<input type="hidden" name='posted' value="true" /> <input
							class="btn btn-info" type="submit" value="Login">
					</div>
					<div class='col-sm-5'></div>
				</div>

			</form>

		</div>
	</div>

	<div class="row nothing title__block first__title__block"
		style='margin-top: 50px'>
		<div class="col-md-12">
			<hr>
			<hr>
		</div>
		<div class="row nothing title__block first__title__block"
			style='margin-top: 50px'>

			<div class="col-md-12">

				<h2 class='center_text'>So what is going on here?</h2>
				<p>
					If you have read some of the notes I have made in other places you
					may have an understanding of my perspective on security. I feel
					that in many cases the security implemented over stripes the actual
					security need. This leads to extra code that needs to be maintained
					at best, and both a bad user experience and a less secure site at
					worst.<br /> <small>-- Yep. Less secure. Do you want people to write
						their password on a sticky note on their monitor? Just make them
						change their password every week. I guarantee it'll happen.
						Tightening security can reduce your security effectiveness. --</small>
				</p>

				<p>Please look at the code of this page, it has notes as to what
					options there are. Notes are located next to the relivent code</p>

				<p>
					Here are the text excerpts:<br /> <br />I don't pretent to know
					your individual security requirements. <br /> You may laugh at the
					array method as not a "best practice", and say "Never hard code
					your login information" <br /> I would ask yourself if your
					developers have admin database access. If they do... then you're
					making your life complicated for no added security <br />How often
					are passwords changed? If this is a small site, they may never be
					changed. Do you really need to allow users to change their own
					password? Are you the only user? <br />What about salting and hashing?
					"How could you <u>POSSIBLY</u> not salt and hash your
					passwords?!?!?!" Calm it down scooter....and feel free to salt and hash if you feel that best suits your needs.<br />Saying that there is a one size fits
					all methodology for security is ludicrous. Is this a financial website or is this a website dedicated to your pet lizard? Are you really saying the security plan should be the
					same for both? <br /> <br />So, need more?
				
				
				<ul>
					<li>You can salt and hash all your passwords... even if you keep
						them hardcoded</li>
					<li>You can connect this to a database to remove login details from
						the source</li>
					<li>You can check cookies and IP address against prior logins</li>
					<li>You can check prior login fails, and black list IP addresses,
						or lock accounts</li>
					<li>You can connect to a key store such as AWS IAM.</li>
					<li>You can impliment two-factor authenication here. Email based is
						easy to roll your own, or use twilio to send a text</li>
					<li>It's all up to you, think about what you really need.</li>
				</ul>
				<br /> <br />I suggest checking forks of this project and check back
				for future versions. My guess is we will be building out many of
				these security options.
				</p>
				<p>Your thoughts may differ from mine. That's okay. Build whatever
					you think you need. Caedo supports building out NSA level secuirty
					if that's what you want.</p>

			</div>
		</div>

</section>
<br />
<br />
<br />
<br />
<br />

<?php
	
	}
}

$ThisPage = new Login();
