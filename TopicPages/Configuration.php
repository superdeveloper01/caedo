<?php

require_once "../##CAEDO.inc";

class Configuration extends PT_IronSummitMedia_startbootstrap_simple_sidebar {

	public function __construct(){
		parent::__construct();
		
		if(Site::$Url == 'caedo.com') {
			$this->__SelectAlternateView('Default');
		}
		elseif(Site::$Url == 'nukq.com') {
			$this->__SelectAlternateView('nukq');
		}
		else {
			$this->__SelectAlternateView('Default');
		}
	
	}

	protected function BodyHeader(){
		?>

<div class="row">
	<div class="col-lg-12">
		<h1>Site Configuration</h1>
		<p>Caedo is designed with the idea that you are going to run more than one site URL out of a single hosting account, and even off the same code in the same folder. There is a static class, Site, that controls the access to site information. You can call Site::$Url, to see what site version is being executed.</p>

		<h1>Your current site is: <?php print Site::$Url?></h1>
		
		<?php
	}

	protected function BodyFooter(){
		
		// Just as a note, you may ask your self, why are we using this function?
		// My idea here is to keep the HTML as clean as possible, so that you can see if there are extra </div> tags. When you put the opening div in a function, I feel there should be a maching closing funciton.
		// Otherwise someone coming back to edit the code in the future will not be sure if the two extra closing div tags are actually closing, or if they're
		
		?>
	</div>
</div>
<?php
	}

	protected function BODY__Default(){
		parent::BODY();
		$this->BodyHeader();
		?>


<p>
	<a href='http://nukq.com/TopicPages/Configuration.php'>Click here to see this page from the nukq.com domain.</a>
</p>

<p>Site configuration is set in /__CAEDO_CONFIG/config.Site.inc. Here is that file:</p>

<pre>
	<code>
	<?php print file_get_contents(Site::$RootFolder. '__CAEDO_CONFIG/config.Site.inc', false, NULL, 9);  ?>
	</code>
</pre>


<p>clsSiteConfig is the class that we use to setup all of the site config. The site config includes url, session setup and database. Here are the parameters for the clsSiteConfig constructor:</p>

<ul>
	<li>$Url - This is what is matched against the request url to identify the correct config to use.</li>
	<li>$Site - This may be used in any manner deemed helpful. It is abritary and can be accessed from any page.</li>
	<li>$Env - This may be used in any manner deemed helpful, however convention is that this identified the operating environment, such as development, testing, staging, alpha, beta, productction, live, etc.</li>
	<li>$IsLocal - This is a secondary check, beyond $Env. This should be set to true in any non-live/non-production environment. I will usually check this on any server extral data calls. Email is a great example of this, you generally never want to send email from a test site, or if you do, you want to redirect it to a test email address, and not email actual customers. Same goes for API calls, paypal, credit card processing, ACH services, and sometimes cloud service calls for changing or monitoring hosting.</li>
	<li>$WriteDatabase - Named database connection</li>
	<li>$HasReadReplica - Usuall false, true if you are using database read replicas</li>
	<li>$ReadDatabase - Named database connection for read replica</li>
	<li>$AllowURLOverride - This will allow the site to be selected by using the ?URL get parameter. Usually this is not something you want to enable, but there are cases where you need it. IP direct access to a virtual server where IP addresses can change, is one example.</li>
	<li>$URLOverridePassKey - This is a very simple (enter haters) way of authenticating the ?URL parameter. Is it very secure, no. No it's not. But it's more secure than nothing. You'll need to look at your security requirments and see if this is enough, or if you should supliment with addtional (maybe session based) security.</li>
	<li>$SessionManager - What's the class name of the session manager</li>
	<li>$SessionManagerPath - A parameter that can be used as needed, but is used by the file system session manager to set the session storage path. This may need to be different for linux vs. windows systems.</li>
	<li>$TidyUp - True/False, are we using tidy to clean up our HTML? - This is up to you, generally I leave it on.</li>
	<li>$ShowErrors - True/False, are we using tidy to show our page errors? - Generally false for production, and true everywhere else.</li>
	<li>$ShowStats - True/False, are we displaing the timing and memory statistics? - Generally false for production, and true everywhere else.</li>
</ul>


<p>There is also one more this to mention about this file. clsSiteConfigs::$DefaultSite. As you can see, in the last line of the file, I am setting the $DefaultSite to 'localhost'. Generally I would not use this in production, but I don't see a real reason why you can't. I added this feature recently to make it easier for folder based hosting. Folder based hosting will be enabled by default now, and use the localhost site config. If you remove this line, or set it to $DefaultSite to false, a url mismatch will cause an error and nothing to be displaied. This may or may not be what you are looking for, depending on your requirments.</p>


<?php
		$this->BodyFooter();
	}

	protected function BODY__nukq(){
		parent::BODY();
		$this->BodyHeader();
		
		?>

<p>This is the alternate view. You will see this view when using the nukq.com domain name to view this page.</p>


<p>
	<a href='http://getcaedo.com/TopicPages/Configuration.php'>Go back to the GetCaedo.com domain.</a>
</p>


<?php
		$this->BodyFooter();
	
	}

}

$ThisPage = new Configuration();
