<?php

class LoggedInTemplate extends BasePage {

	public function __construct(){
		parent::__construct(); // load all the parent classes first
		
	//	xdebug_break();
		// first things first, if we're not logged in, redirect
		if(!isset($_SESSION['LoggedIn']) || !($_SESSION['LoggedIn'] == 'dev' || $_SESSION['LoggedIn'] == 'admin')) {
		//	xdebug_break();
			Redirect('/');
		}
		
		$this->__arrJavaScript_Early[] = '<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>';
		
		$this->__arrJavaScript_Late[] = '
		';
	
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
	min-height: 1100px;
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


<meta charset="utf-8">

<style>
body {
	font: 12px sans-serif;
}

path {
	stroke-width: 1px;
	stroke: black;
	fill: #999;
	cursor: pointer;
}

div.tooltip {
	position: absolute;
	background-color: white;
	border: 1px solid black;
	color: black;
	font-weight: bold;
	padding: 4px 8px;
	display: none;
}

div#Page {
	position: absolute;
	top: 40px;
	left: 0px;
	width: 1300px;
	height: 900px;
}
</style>

<link rel="stylesheet" href="/__local/js/jqwidget/jqwidgets/styles/jqx.base.css" type="text/css" />
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
		<img alt="" src="/LogoFullSize-white_small.png" height=100>
	</div>

	<ul id="menu">
		<li><a href="index.php">Home</a>
		
		<li><a href="UserRepo.php">Active Repos</a>
		
		<li><a href="UserRepo.php?Action=Create">Create Repo</a>
		
		<li><a href="UserRepo.php?Action=Modify">Modify Repo</a>
	
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
