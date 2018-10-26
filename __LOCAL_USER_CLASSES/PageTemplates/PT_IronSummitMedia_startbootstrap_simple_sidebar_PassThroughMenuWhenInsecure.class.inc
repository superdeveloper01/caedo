<?php

class PT_IronSummitMedia_startbootstrap_simple_sidebar_PassThroughMenuWhenInsecure extends PT_IronSummitMedia_startbootstrap_simple_sidebar {

	public function __construct(){
		parent::__construct(); // load all the parent classes first
		                       
		// This is a secure by default configuration, although I suggest setting PageRequiresSecurity on the page class even if it will be set to true.
		if(!isset($this->PageRequiresSecurity) || $this->PageRequiresSecurity) {
			// this is the security code that we added
			if(!isset($_SESSION['LoggedIn']) || $_SESSION['LoggedIn'] != 'admin') {
				Redirect('../Login.php');
			}
		}
	}

	protected function HEAD(){
		parent::HEAD();
	}

	public function __destruct(){
		parent::__destruct();
	}

	protected function SecureMenu(){
		
		?>
<div id="wrapper">
	<!-- <img alt="" src="/images/CAEDO_Logo.png" height=100> -->

	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<li class="sidebar-brand">Secure Menu</li>
			<li><a href="/TopicPages/Login.php">Login Demo</a></li>
		</ul>
	</div>
	<!-- /#sidebar-wrapper -->

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<div class="container-fluid">
		                        <?php
	}

	protected function BODY(){
		if($this->PageRequiresSecurity) {
			$this->SecureMenu();
		}
		else {
			parent::BODY();
		}
	}

	protected function FOOTER(){
		parent::FOOTER();
	}

}
