<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
	<title>Pool</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- Seo Meta -->
		<meta name="description" content="Gigs , Core Ict  Consultancy">
		<meta name="keywords" content="Music , Videos , Work">

	<!-- Styles -->
	    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen" /> 
		<link rel="stylesheet" href='<?php echo base_url("assets/css/bootstrap.css");?>' media="screen">
		<link rel="stylesheet" href='<?php echo base_url("assets/css/bootstrap-responsive.css");?>' media="screen">
		<link rel="stylesheet" type="text/css" href='<?php echo base_url("assets/css/style.css");?>' media="screen" />
		<link rel="stylesheet" href='<?php echo base_url("assets/css/settings.css");?>' media="screen">
		<link rel="stylesheet" href='<?php echo base_url("assets/css/icons.css");?>' media="screen">
		<link rel="stylesheet" href='<?php echo base_url("assets/css/css.css");?>'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	     <link rel="shortcut icon" href="<?php echo base_url("assets/images/favicon.ico");?>">
		 <link rel="apple-touch-icon" href="<?php echo base_url("assets/images/apple-touch-icon.png");?>">

	<!-- Scripts -->
		<script src='<?php echo base_url("assets/js/jquery.min.js");?>'></script>
	    <script src='<?php echo base_url("assets/js/theme20.js");?>'></script>
		<script src='<?php echo base_url("assets/js/bootstrap.min.js");?>'></script>
		<script src='<?php echo base_url("assets/js/jquery.themepunch.plugins.min.js");?>'></script>
		<script src='<?php echo base_url("assets/js/jquery.themepunch.revolution.min.js");?>'></script>
		<script src='<?php echo base_url("assets/js/jquery.prettyPhoto.js");?>'></script>
	    <script src='<?php echo base_url("assets/js/jquery.flexslider-min.js");?>'></script>
		<script src='<?php echo base_url("assets/js/jquery.jplayer.js");?>'></script>
		<script src='<?php echo base_url("assets/js/ttw-music-player-min.js");?>'></script>
		<script src='<?php echo base_url("assets/js/myplaylist.js");?>'></script>
		<script src='<?php echo base_url("assets/js/countdown.js");?>'></script>
	    <script src='<?php echo base_url("assets/js/jquery.nicescroll.min.js");?>'></script>
		<!--<script src='<?php echo base_url("assets/js/jquery.tweet.js");?>'></script>-->
		<script src='<?php echo base_url("assets/js/custom.js");?>'></script>

	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=EmulateIE8; IE=EDGE" />
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/icons/font-awesome-ie7.min.css" />
	<![endif]-->
</head>
<body id="fluidGridSystem" class="loading_page">
	<div id="layout" class="full">
		<!-- popup login -->
			<div id="popupLogin">
				<div class="def-block widget">
					<h4> Sign In </h4><span class="liner"></span>
					<div class="widget-content row-fluid">
						<form id="popup_login_form">
							<input type="text" name="login_username" id="login_username" onfocus="if (this.value=='username') this.value = '';" onblur="if (this.value=='') this.value = 'username';" value="username" placeholder="username">
							<input type="password" name="login_password" id="login_password" onfocus="if (this.value=='password') this.value = '';" onblur="if (this.value=='') this.value = 'password';" value="password" placeholder="password">
							<a href="#" id="loginlink" name="loginlink" class="tbutton small"><span>Sign In</span></a>
							<a href="#" id="registerlink" name="registerlink" class="tbutton color2 small"><span>Register</span></a>
						</form><!-- login form -->
					</div><!-- content -->
				</div><!-- widget -->
				<div id="popupLoginClose">x</div>
			</div><!-- popup login -->
			<div id="LoginBackgroundPopup"></div>
		<!-- popup login -->

		<header id="header" class="glue">
			<div class="row clearfix">
				<div class="little-head">
					<div id="Login_PopUp_Link" class="sign-btn tbutton small"><span>Sign In</span></div>

					<div class="social social-head">
						<a href="http://twitter.com/behzadg1" class="bottomtip" title="Follow us on Twitter" target="_blank"><i class="icon-twitter"></i></a>
						<a href="http://fb.com/theme20" class="bottomtip" title="Like us on Facebook" target="_blank"><i class="icon-facebook"></i></a>
						<a href="https://plus.google.com/u/0/104807493509867599773" class="bottomtip" title="GooglePlus" target="_blank"><i class="icon-google-plus"></i></a>
						<a href="http://instagram.com/" class="bottomtip" title="instagram" target="_blank"><i class="icon-instagram"></i></a>
						<a href="http://dribbble.com/behzadg" class="bottomtip" title="Dribbble" target="_blank"><i class="icon-dribbble"></i></a>
						<a href="https://soundcloud.com/behzad-gh" class="bottomtip" title="Soundcloud" target="_blank"><i class="icon-cloud"></i></a>
						<a href="http://reverbnation.com/" class="bottomtip" target="_blank" title="Reverbnation"><i class="icon-star"></i></a>
						<a href="http://youtube.com/" class="bottomtip" target="_blank" title="YouTube"><i class="icon-youtube-play"></i></a>
						<a href="http://youtube.com/" class="bottomtip" target="_blank" title="Flickr"><i class="icon-flickr"></i></a>
						<a href="http://www.linkedin.com/" class="bottomtip" title="Linkedin" target="_blank"><i class="icon-linkedin"></i></a>
					</div><!-- end social -->

					<div class="search">
						<form action="search.html" id="search" method="get">
							<input id="inputhead" name="search" type="text" onfocus="if (this.value=='Start Searching...') this.value = '';" onblur="if (this.value=='') this.value = 'Start Searching...';" value="Start Searching..." placeholder="Start Searching ...">
							<button type="submit"><i class="icon-search"></i></button>
						</form><!-- end form -->
					</div><!-- search -->
				</div><!-- little head -->
			</div><!-- row -->

			<div class="headdown">
				<div class="row clearfix">
					<div class="logo bottomtip" title="Best and Most Popular Musics">
						<a href="index.html"><img src='<?php echo base_url("assets/images/logo.png");?>' alt="Best and Most Popular Musics"></a> 
					</div><!-- end logo -->

					<nav>
						<ul class="sf-menu">
							<li class="current selectedLava"><a href="home">Home<span class="sub">start here</span></a></li>
							<li><a href="events">Events & Gigs<span class="sub">view events and gigs</span></a></li>
							<li><a href="events">Outsource/Hire<span class="sub">get someone to work for you</span></a></li>
							<li><a href="mp3s">MP3<span class="sub">full archive</span></a></li>
							<li><a href="videos">Video<span class="sub">latest clips</span></a></li>
							<li><a href="gallery">Gallery<span class="sub">Photo Gallery</span></a>	</li>							
							<li><a href="blog">Blog<span class="sub">latest news</span></a></li>
						</ul><!-- end menu -->
					</nav><!-- end nav -->
				</div><!-- row -->
			</div><!-- headdown -->
		</header><!-- end header -->