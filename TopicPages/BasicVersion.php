<?php

require_once "../##CAEDO.inc";

class BasicVersion extends PT_IronSummitMedia_startbootstrap_simple_sidebar {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		?>

<div class="row">
	<div class="col-lg-12">
		<h1>Basic Version</h1>
		<p>CAEDO as it has been explained so far from the Hello World Learning Path, has been very basic. There has been no discussion of site configuration, sessions, Databases or security, not to mention performance tools like caching.</p>

		<p>We have all of that. And it is all al la carte. You can pick and choose what components you want to use. You can build a Page Template that has it all on every page, or you can load it in at the page level. You can also build your own classes and functions to handle even more inputs and outputs. Caedo is as flexible as posible to allow you to run global setup code for your site during the framework bootstrap. Editing the frameworks source code should not be required to add massive new functionality. This being said, editing the local framework bootstrap files needs to be done carefully. Wrong settings or broken local code will lead to a broken framework and unfriendly error messages. I suggest debugging all local framework mods alone and without a larger project running. This will make it easier to debug and identify the true sources of errors. I would also ask that you post whatever mods you create on github. You're not required to, but if its something that you needed, chances
			are there is someone else out there that could also benifit.</p>

		<p>Simplicity with incredible flexibility. One of the things I see in frameworks today, is a lack of great utility features. Features tend to be more flashy and less substantal. Caedo is different. When most frameworks take a basic page and build up, we take a basic page and build down. We offer features that are viewed as unneccesary by many frameworks. I will give a short example of what I'm talking about here.</p>
		<p>Suppose you have an operating site, built on some framework or CMS, and you want to move hosting companies. What do you do?</p>
		<p>It's a mess. A mess that will as far as I have seen always 100% of the time result in some form of downtime. Why is this? Is there just no way to do it and avoid downtime?</p>

		<p>Caedo can do it. Zero down time. One of the feature of Caedo's database driver is that it will allow you to specify two separate databases to execute each data request against. So two databases, operating independent of each other, running the same commands. You would migrate your database with these commands:</p>
		<ol>
			<li>Restore a backup of your production database to a new database server. The more recent the better, but yesterday's backup will work just fine.</li>
			<li>Add this second database to the caedo config, so inserts and updates start running against both databases. This will start to bring the new database in sync with the current</li>
			<li>Run the Caedo database migration tool, to see what differences there are between your databases. This tool will allow you to copy data from your old database to your new database and get them 100% in snyc.</li>
			<li>Run the Caedo database migration tool, multiple times until it can't find any differences. This will mean that you now have two active and distinct copies of your data, 100% in sync and you are ready to make the new database your primary database at any time.</li>
			<li>Not only is the database switch without downtime. It is also reversable. Suppose you are upgrading database versions, or changing cloud server sizes, and you quickly realize that there is a load issuse. How do you roll back? Easy, since you're still executing all inserts and updates on both servers, you can switch back at any time. Zero downtime, zero lost data.</li>
		</ol>

		<p>This is just a small example of how we're different. There are many more usful features like this that are usually reserved for the most expensive platforms and are now available to you free of charge in an open source project. Just ask yourself, Can you do this in you curent framework or CMS?</p>

		<p>Looking at the links in the menu, you will see that the one under this link is for Database. I suggest starting there and continuing down.</p>

	</div>
</div>

<?php
	
	}

}

$ThisPage = new BasicVersion();
