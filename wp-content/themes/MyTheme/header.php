<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Start Html template - htmllessons.ru</title>
	<meta name="description" content="htmllessons.ru - Лучшие уроки по созданию сайтов">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- <link rel="shortcut icon" href="img/favicon/favicon.png" type="image/png">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js"
		integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous">
		</script> -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#36A26B">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#36A26B">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#36A26B">

	<!-- <style>
		body {
			opacity: 0;
			overflow-x: hidden;
		}

		html {
			background-color: #fff;
		}
	</style> -->


	<?php

	wp_head()

	?>

</head>

<body>

	<div class="backgroundmerge">
		<div class="navigation-page2">
			<ul>
				<li><a href="#anchor1" onclick="slowScroll('#anchor1')" class="navi-page-item" id="Home">01 Home <img src="/assets/images/white short.svg" alt=""></a></li>
				<li><a href="#content" onclick="slowScroll('#content')" class="navi-page-item">02</a><img src="/assets/images/white large.svg" alt=""></li>
				<li><a href="#content-service" onclick="slowScroll('#content-service')" class="navi-page-item">03<img src="img/white large.svg" alt=""></a>
				</li>
				<li><a href="#content-contact" onclick="slowScroll('#content-contact')" class="navi-page-item">04<img src="img/white large.svg" alt=""></a>
				</li>
			</ul>
		</div>
		<header>
			<div class="container" id="anchor1">
				<a href="" class="logo"><img src="../images/icon.png" alt=""></a>

				<div class="hamburger-menu">
					<input id="menu__toggle" type="checkbox" />
					<label class="menu__btn" for="menu__toggle">
						<span></span>
					</label>
					<ul class="menu__box">
						<li><a href="#anchor1" onclick="slowScroll('#anchor1')" class="menu__item"><img src="/assets/images//logo2.png" alt=""></a></li>
						<li><a href="#content" onclick="slowScroll('#content')" class="menu__item">About</a></li>
						<li><a href="#content-service" onclick="slowScroll('#content-service')" class="menu__item">Sevices</a></li>
						<li><a href="#content-contact" onclick="slowScroll('#content-contact')" class="menu__item">Contact</a></li>
						<a href="#" class="btn"><img src="/img/Group 187.png" alt=""></a>
					</ul>
				</div>
				<ul class="mnu_top">
					<li><a href="#content" onclick="slowScroll('#content')">About</a></li>
					<li><a href="#content-service" onclick="slowScroll('#content-service')">Sevices</a></li>
					<li><a href="#content-contact" onclick="slowScroll('#content-contact')">Contact</a></li>
				</ul>
			</div>
		</header>
		<section id="main">

			<div class="container">
				<div class="inner">
					<h1><?php the_title() ?> </h1>
					<div class="description">
						<?php the_content(); ?>
					</div>
					<a href="#" class="btn">Contact Us</a>
				</div>
			</div>
			<div class="scrollmore">
				Scrollmore
			</div>
		</section>
	</div>