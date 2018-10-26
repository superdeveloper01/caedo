<?php

require_once "../##CAEDO.inc";

class HelloWorld_06 extends HelloWorldPageTemplate2 {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		
		print "<p>Another page, another change.  We are now using 'HelloWorldPageTemplate2' as the page template, moving the 'Hello World 06' code into the page template and makeing it dynamic.  Feel free to check the file for these changes.</p>";
		
		print "<p>...But where would I go to check this file?  Where is it?</p>";
		
		print "<p>Mighty fine question!  Let's talk about classes and Auto Loading.</p>";
		
		print "<p>Auto Loading, is where you can configure PHP to look for class files that aren't already loaded.  You can write your own function to define where and how to look, which is what has been done for caedo.  You can think of caedo as 'directory agnostic', so it doesn't really care what subdirectory you put your classes in, it will search them all for the missing class.  This is helpful to you the programer, because you can organize your directory structure however you want.  Such as:</p>";
		
		?>


<ul>
	<li>If you want to organize by submodule, fine.</li>
	<li>By first letter of the class name, ok sure.</li>
	<li>By the programer who is working on those files, not a problem.</li>
	<li>By the date the classes were first created, not sure why you'd do this, but sure, it's 100% acceptable.</li>
</ul>

<p>It's totally up to you.</p>

<p>I mentioned you could put them in any SubDirectory you want, that is true. The main directory will always be '/__LOCAL_USER_CLASSES'. The term 'local' coming from the unix tradition of having the /local directory be saved for local changes made to that system. I added 'USER_CLASSES' just so non-unix people could make a good guess of what was in there.</p>

<p>What started all of this was looking for the 'HelloWorldPageTemplate2' class file. It is located in '/__LOCAL_USER_CLASSES/PageTemplates/'. This page template could be moved to be in any directory under '/__LOCAL_USER_CLASSES'. So '/__LOCAL_USER_CLASSES/PageTemplates/HelloWorld/' would work, as would the root of '/__LOCAL_USER_CLASSES/'.</p>

<p>So this page template is not part of the framework core code. Actually there are no page templates included with the framework by default. Only the BasePage is included with the framework</p>

<p>Since we're here, it's imporant to talk about the other directories created in the root of your web folder, all required directories that should be changed by the developer start with '__'.  It is also important to note, that all directories that contain files needed by the framework start with '##'. These should NOT be edited  There are also a few files that start with '##', these should NOT be edited either.  All other folders are optional.  We have added the prefixes to make a clear distiction between the types of files and directories that are included with this project.</p>

<p>There is an directory when it comes to autoloading, and that is '__STATIC_INCLUDES'. This folder has to do with AutoLoading. As you may have thought, autoloading classes is time consuming and expensive in terms of computing power. What we do to counter this, is caedo saves the location of the class files that it found during the auto load process. It saves them into a formated include file in the '__STATIC_INCLUDES' folder. Every page file that has been run should have a matching file in the '__STATIC_INCLUDES' directory. The matching static include for this page file is '__STATIC_INCLUDES/HelloWorld/HelloWorld_06.php.inc'. Notice that '.inc' is added on the end of the file name, this is to prevent the file from be executed.</p>

<p>Generally you don't need to do anything with the '__STATIC_INCLUDES' file. It has been added to .gitignore, so it should not be commited to your repository, and you should not upload it to a server. The file will be recreated automaticly with correct paths. Correct paths can become incorect over time. I mentioned about that you could move the 'HelloWorldPageTemplate2' page template and auto loading will find the file. That is 100% correct, the problem is we have cached the location of where that file used to be in the static include file for this page. So when we move it, we are trying to include a class from a location where it no longer exists. Not great. This can also happen depending on how you are editing your source code. I sometimes use dropbox to sync my files between computers. It saves me from having to commit and push then clone back down from a server. I put my code in dropbox, and it just works, and I can pickup where I left off. BUT, it just so happens the my dropbox
	folder is not in the same place on every computer I access the code from. This means the the cached locations saved in static includes are not correct on every computer. To fix this:</p>

<p><b>Delete the '__STATIC_INCLUDES' folder.</b></p>

<p>Yep, delete it. You can delete the contents, but just delete the whole folder, it doesn't matter. Caedo will recreate it on the next page load and start rebuilding the cache.</p>

<p>This also applies to shared hosting deployments (or any deployment where you aren't starting from any empty directory). If you're using FTP and not git to depoly, delete '__STATIC_INCLUDES' everytime you upload. This is really only needed if you have moved classes around, but I always think it's a good idea.</p>

<p>I usually use Amazon Webservices and their Elastic Beanstalk product to host sites. They always start from an empty directory when depolying, so deleting the '__STATIC_INCLUDES' folder is never needed as it is deleted each time I deploy.</p>

<p>Next, lets talk about configuration. (The next button is still at the top of this page on the right.)</p>


<?php
	
	}

}

$ThisPage = new HelloWorld_06();
