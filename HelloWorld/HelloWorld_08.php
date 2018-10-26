<?php

require_once "../##CAEDO.inc";

class HelloWorld_08 extends HelloWorldPageTemplate3 {

	public function __construct(){
		parent::__construct();
	}

	protected function BODY(){
		parent::BODY();
		
		?>

<p>Wow, this is starting to look like a real web page.</p>

<p>Let's go over the changes.</p>

<p>We are now using HelloWorldPageTemplate3. All of the menus, prev/next, and the "Hello World 8" text are all in HelloWorldPageTemplate3. I was going to build HelloWorldPageTemplate3 to inherit from BasePage, but I already build the logic that deals with the Prev/Next and parsing the URL/Class name, so I actually inherited HelloWorldPageTemplate3 from HelloWorldPageTemplate2. Gasp!</p>

<p>In many languages, this is a risky thing to do. Generally there are side effects. In Caedo, it wasn't an issue. There were only two things that I needed to change to make this work. First, $PrevClassExampleNumber, $CurClassExampleNumber and $NextClassExampleNumber were all defined as private, and I had to change them to protected so the inherited classes could access them. Really not a big deal. Second, I had to remove/remark this line "parent::BODY();" that was in the top of the "protected function BODY(){" function of the HelloWorldPageTemplate3. The reason for this is, that HelloWorldPageTemplate3 isn't additive to HelloWorldPageTemplate2 in the sense that HelloWorldPageTemplate2 still needs to display anything. We're using the functionality, but want to do all of the display ourselves in HelloWorldPageTemplate3. Again, a very minor change.</p>

<p>Other than the changes listed above, nothing else has really changed. The HelloWorld_08.php file is very basic, it has no logic to speak of.</p>

<p>The HelloWorldPageTemplate3 is based on a Skyrim menu/layout clone if I recall. Not sure where or how I ended up with it. I would be happy to reference the author if one can be identied.</p>


<?php
	
	}

}

$ThisPage = new HelloWorld_08();
