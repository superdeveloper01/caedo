<?php

require_once "../##CAEDO.inc";

class Database extends PT_IronSummitMedia_startbootstrap_simple_sidebar {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		
		?>

<div class="row">
	<div class="col-lg-12">
		<h1>Database</h1>
		<p>Databases are one of the most common ways of saving data. Since
			we're on PHP, mySql is pretty standard choice. Although I an doing
			this demo using mySql, and there are built in features for MySql,
			doesn't mean that it is what you have to use. This is PHP after all,
			and any valid PHP can be executed in a page template. You can roll
			you own Postgress, MSSQL, MongoDB, etc database interfaces, and they
			will play with Caedo like the best of friends. This is part of the
			reason I did the hello world examples with no database. Caedo is not
			database dependent, and will support any database or data storage
			method you choose.</p>

		<p>Some of the design behind how page templates are built, being very
			encompassing and very separate from the page files was for division
			of responsibility. I want it to be easy for more junior developers to
			contribute pages, classes and features without worring about how the
			nuts and bolts of the page template or the Caedo framework for that
			matter works.</p>

		<p>I wish there was a way to actually remove the use of some PHP
			functions in certain php pages. I've worked with junior developers
			that just didn't quite understand what I was talking about when I
			said "I want you to use the framework's database commands." They were
			very ingrained into the standard non-framework world, where as a
			developer it was their job to open a database connection.</p>


		<p>For obvious reasons, having developers open their own database
			conenctions is a terible idea. How will you store the credentials?
			Plain text in the top of the page?? What about testing, what if we
			want to point at a different database? Are we running the risk of
			connecting to a live production database while testing??</p>


		<p>This path goes into some very dark woods rather quickly. Junior
			developers don't always think of these things, they don't have the
			experance needed to see the problems. It's not their fault though, if
			they are fresh out of school, the consequences of connecting to the
			wrong database while running a homework assignment are on a different
			level then doing that in a business situation where there are jobs
			and real money sitting on the other side of that data. One simple
			mistake like deleting or altering production data can end careers and
			cost companies significant money.</p>


		<p>I am a strong advocate of making the right thing to do, the easiest
			thing to do. Because of this, I run static code analisys on all git
			checkins and see if any of my developers are using their own database
			conenctions, and I kick out that code as unacceptable. In my world,
			the only way to get and save data is through the authorized methods
			provided by Caedo.</p>


		<p>Beyond the safety angle. There are also other reasons why you might
			want to use a standardized way of getting and saving data. Logging is
			at the top of my list. It's pretty nice to be able to flip a switch
			and start seeing a streaming log of every line of SQL that is being
			excuted onto a database.</p>


	</div>
</div>

<?php
	
	}

}

$ThisPage = new Database();
