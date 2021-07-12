<?php

session_start();
require("ayar.php");
require('settings.php');
$date = new Datetime();
$timestamp = $date->format('U');

if($_POST['send_contact']) {
	if($_SESSION['sended_timestamp']+60*10 <= $timestamp) {
		$_SESSION['sended_timestamp'] = $timestamp;
		$name 			= $_POST['name'];
		$email 			= $_POST['email'];
		$subject 		= $_POST['subject'];
		$message 		= $_POST['message'];
		$stringBuilder 	= 'Name: '.$name.'   '.'E-mail: '.$email.'   '.'Subject: '.$subject.'   '.'Message: '.$message;
		mail($to, 'Contact E-mail: '.$email, $stringBuilder, 'From: www.tnycl.com');
		$success = 1;
	} else {
		$success = 2;
	}
}
$link = $_GET['link'];

if($_GET && $link) {
	$link = "SELECT * FROM short_link WHERE short_key='$link'";
	$link_result = $baglan->query($link);
	$link_sql = $link_result->fetch_assoc();
	if($link_sql!=null) {
		header("Location: ".$link_sql['link']);
	} else {
		header("Location: /");
	}
}

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>TNYCL | Freelance Developer</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="description" content="Freelance developer on Java, JavaScript, Unity, Python and PHP."/>
	<meta name="keywords" content="tnycl, tuna yucel"/>
	<meta name="author" content="TNYCL"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.poptrox.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/index.js"></script>
	<script src="assets/js/init.js"></script>
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"/>
	<link href="assets/icons/css/all.css" rel="stylesheet"/>
	<link rel="preload" href="assets/icons/css/all.css" as="style"/>
	<link rel="preload" href="assets/css/skel.css" as="style"/>
	<link rel="preload" href="assets/css/style-large.css" as="style"/>
	<link rel="preload" href="assets/css/style-xlarge.css" as="style"/>
	<link rel="preload" href="assets/css/style-xsmall.css" as="style"/>
	<link rel="preload" href="assets/css/style-small.css" as="style"/>
	<link rel="preload" href="assets/css/style-medium.css" as="style"/>
	<link rel="preload" href="assets/css/style.css" as="style"/>
	<link rel="preload" href="assets/js/jquery.poptrox.min.js" as="script"/>
	<link rel="preload" href="assets/js/init.js" as="script"/>
	<link rel="preload" href="assets/js/skel.min.js" as="script"/>
	<link rel="preload" href="assets/js/index.js" as="script"/>
	<link rel="preload" href="assets/js/jquery.min.js" as="script"/>
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic" rel="stylesheet">
	<script defer src="assets/icons/js/all.js"></script>
	<link id="stylecss" rel="stylesheet" href="assets/css/style.css"/>
</head>

<body id="top" onload="loadedScreen()">
	<header id="header" style="padding:4%;text-align:center;">
		<a href="https://www.tnycl.com" class="image avatar"><img src="assets/images/avatar.gif" alt="" /></a>
		<h1><strong>Hey, I'm Tuna</strong> and I'm developing on Java, JavaScript, Unity, Python and PHP.</h1>
	</header>
	<div id="main">
		<section id="one">
			<header class="major">
				<h2>About Me</h2>
			</header>
			<p>Hi, my name is Tuna. I'm 16 years old and I live in Turkey. I have my own software and games company.
				Also I'm working as a CTO in Cypress Games LTD. I have been dealing with software for over 5 years and have many projects. 
				I'm currently developing projects on Java, JavaScript(ElectronJS and etc.), Unity, Python and PHP. 
				Also I'm still improving myself on these languages. I'm usually doing my projects with Redis, MongoDB, SQL and Cassandra database systems.</p>
			<ul class="actions">
				<li><a href="https://www.linkedin.com/in/tuna-y%C3%BCcel-413576161/" class="button" target="_blank">Learn More</a></li>
			</ul>
		</section>
		<section id="two" style="text-align: center;">
			<h2>Recent Works</h2>
			<div class="row">
				<article class="6u 12u$(xsmall) work-item">
					<a href="assets/images/fulls/01.webp" class="image fit thumb"><img
							src="assets/images/thumbs/01.webp" alt="" /></a>
					<h3>test</h3>
					<p>test</p>
				</article>
				<article class="6u$ 12u$(xsmall) work-item">
					<a href="assets/images/fulls/01.webp" class="image fit thumb"><img
							src="assets/images/thumbs/01.webp" alt="" /></a>
					<h3>test</h3>
					<p>test</p>
				</article>
				<article class="6u 12u$(xsmall) work-item">
					<a href="assets/images/fulls/01.webp" class="image fit thumb"><img
							src="assets/images/thumbs/01.webp" alt="" /></a>
					<h3>test</h3>
					<p>test</p>
				</article>
				<article class="6u$ 12u$(xsmall) work-item">
					<a href="assets/images/fulls/01.webp" class="image fit thumb"><img
							src="assets/images/thumbs/01.webp" alt="" /></a>
					<h3>test</h3>
					<p>test</p>
				</article>
				<article class="6u 12u$(xsmall) work-item">
					<a href="assets/images/fulls/01.webp" class="image fit thumb"><img
							src="assets/images/thumbs/01.webp" alt="" /></a>
					<h3>test</h3>
					<p>test</p>
				</article>
				<article class="6u$ 12u$(xsmall) work-item">
					<a href="assets/images/fulls/01.webp" class="image fit thumb"><img
							src="assets/images/thumbs/01.webp" alt="" /></a>
					<h3>test</h3>
					<p>test</p>
				</article>
			</div>
			<ul class="actions">
				<li><a href="https://github.com/TNYCL" class="button" target="_blank">View Full Portfolio</a></li>
			</ul>
		</section>
		<section id="three">
			<h2 style="text-align:center;">Contact Me</h2>
			<p style="text-align:center;">You can send me an e-mail directly by filling out the form.</p>
			<div id="contact-form" class="row">
				<div class="8u 12u$(small)">
					<?php
           				if ($success == 1) {
                			echo '<p style="color:#00BE00;text-align:center;">Thank you for your inquiry! We will get back to you within 48 hours.</p>';
           				} else if($success == 2) {
							echo '<p style="color:#D51A0B;text-align:center;">You can use it every 10 minutes, please wait.</p>';
						}
            		?>
					<form method="post">
						<div class="row uniform 50%">
							<div class="6u 12u$(xsmall)"><input type="text" required name="name" id="name" placeholder="Name"/></div>
							<div class="6u$ 12u$(xsmall)"><input type="email" required name="email" id="email" placeholder="E-mail"/></div>
							<div class="12u$ 12u$(xsmall)"><input type="text" required name="subject" id="subject" placeholder="Subject"/></div>
							<div class="12u$"><textarea name="message" id="message" required placeholder="Message" rows="4"></textarea></div>
						</div>
						<ul class="actions">
							<li>
								<input class="button" type="submit" name="send_contact" value="Send Message" />
							</li>
						</ul>
					</form>
				</div>
				<div class="information 4u$ 12u$(small)">
					<ul class="labeled-icons">
						<li>
							<h3 class="icon fa-home"><span class="label">Address</span></h3>
							Ankara/Turkey
						</li>
						<li>
							<h3 class="icon fa-clock"><span class="label">Time Zone</span></h3>
							GMT+03:00
						</li>
						<li>
							<h3 class="icon fa-envelope-o"><span class="label">E-mail</span></h3>
							<a href="mailto:contact@tnycl.net">contact@tnycl.net</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</div>
	<footer id="footer" style="padding:4%;text-align:center;">
		<div class="footer-class">
			<ul class="icons">
				<li><a href="https://twitter.com/TNYCL_" target="_blank" class="icon fa-twitter"><span
							class="label">Twitter</span></a></li>
				<li><a href="https://github.com/TNYCL" target="_blank" class="icon fa-github"><span
							class="label">Github</span></a></li>
				<li><a href="https://www.linkedin.com/in/tuna-y%C3%BCcel-413576161/" target="_blank" class="icon fa-linkedin"><span
							class="label">Github</span></a></li>
				<li><a href="mailto:contact@tnycl.net" target="_blank" class="icon fa-envelope-o"><span
							class="label">E-mail</span></a></li>
			</ul>
			<ul class="copyright">
				<li>Copyright © 2021 Steelware Inc. - All Rights Reserved</li>
			</ul>
		</div>
	</footer>
</body>

</html>