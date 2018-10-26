<?php

class FrameworkAdminTemplate extends DefaultPageTemplate {

	public function __construct(){
		parent::__construct(); // load all the parent classes first
		                       
		// Verify that we are logged into the correct part of the site
		
		if(isset($_SESSION['Login_type'])) {
			foreach($_SESSION['Login_type'] as $LoginType => $Data) {
			
			}
		}
	
	}

	protected function HEAD(){
		parent::HEAD();
		?>
<style>
/**
 * Skyrim-inspired Menu
 */
@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,300);

html {
	background: #333 url(http://subtlepatterns.com/patterns/tex2res4.png) 0
		0 repeat;
	min-height: 100%;
	font-family: "Open Sans", sans-serif;
	font-weight: 300;
	color: #FFF;
}

body, html {
	height: 100%;
	margin: 0;
	padding: 0;
}

a {
	color: rgba(255, 255, 255, 0.6);
	text-decoration: none;
}

a:hover, li:hover>a {
	color: #FFF;
}

ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

li {
	margin: 0;
	padding: 0;
}

#logo_header {
	background: rgba(0, 0, 0, 0.5);
	height: 100px;
	width: 100%;
	border-bottom: 1px solid #FFF;
	padding-left: 22px;
	clear: both;
	margin-top: 10px;
}

#main-container {
	min-height: 100%;
	height: 100%;
	width: 100%;
}

#menu {
	border-left: 1px solid #FFF;
	border-right: 1px solid #FFF;
	background: rgba(0, 0, 0, 0.5);
	float: left;
	font-size: 1.5em;
	min-height: 100%;
	margin-left: 1em;
}

#menu li {
	position: relative;
	z-index: 1;
}

#menu li a {
	display: block;
	padding: 0.5em 1em;
	white-space: nowrap;
}

#menu li ul {
	position: absolute;
	overflow: hidden;
	display: none;
	left: 100%;
	top: 0.5em;
	float: none;
	background-image: -moz-radial-gradient(0 50%, ellipse farthest-side, rgba(0, 0, 0, 0.6)
		0%, rgba(0, 0, 0, 0.5) 33%, rgba(0, 0, 0, 0) 100%);
	background-image: -webkit-radial-gradient(0 50%, ellipse farthest-side, rgba(0, 0, 0, 0.6)
		0%, rgba(0, 0, 0, 0.5) 33%, rgba(0, 0, 0, 0) 100%);
	background-image: radial-gradient(0 50%, ellipse farthest-side, rgba(0, 0, 0, 0.6)
		0%, rgba(0, 0, 0, 0.5) 33%, rgba(0, 0, 0, 0) 100%);
}

#menu li:hover ul {
	display: block;
}

#menu li ul a {
	position: relative;
	font-size: 0.8em;
}

#menu li ul a:hover:before {
	content: "";
	display: block;
	width: 1em;
	height: 1em;
	background: rgba(0, 0, 0, 0.75);
	border: 1px solid #FFF;
	position: absolute;
	top: 0.5em;
	left: -0.75em;
	-moz-transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
	transform: rotate(45deg);
}

#main {
	/* 	marign: 50px 50px 50px 50px; */
	position: absolute;
	top: 130px;
	left: 260px;
}
</style>
<?php
	}

	public function __destruct(){
		parent::__destruct();
	}

	protected function BODY(){
		parent::BODY();
		
		?>

<div id="main-container">

	<div id='logo_header'>
		<span></span> <img alt="" src="/CAEDO_Logo.png">
	</div>

	<ul id="menu">
		<li><a href="/">Intro</a>
			<ul>
				<li><a href="/pages/intro/why.php">Why?</a></li>
			</ul>
		
		<li>
		
		<li><a href="/pages/basics/index.php">Basics</a>
			<ul>
				<!-- 				<li><a href="/pages/basics/">Child D</a></li> -->
				<!-- 				<li><a href="#">Child E</a></li> -->
				<!-- 				<li><a href="#">Child F</a></li> -->
				<!-- 				<li><a href="#">Child G</a></li> -->
			</ul>
		
		<li>
	
	</ul>
	<div id='main'>

<?php
	}

	protected function FOOTER(){
		parent::FOOTER();
		?>
		
		</div>
	<!-- end: main -->
</div>
<!-- end: main container -->
<?php
	}

}
