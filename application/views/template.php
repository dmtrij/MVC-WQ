<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>WebQuad</title>
	<link rel="icon" type="image/svg+xml" href="/images/favicon.svg">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
	<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {

			return Math.floor(Math.random() * (number + 1));
		};

		// show random quote
		$(document).ready(function () {

			var quotes = $('.quote');
			quotes.hide();

			var qlen = quotes.length; //document.write( random(qlen-1) );
			$('.quote:eq(' + random(qlen - 1) + ')').show(); //tag:eq(1)
		});
	</script>
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<a href="/">Web</span><br><span class="cms">Quad</span></a>
			</div>
			<div id="menu">
				<ul>
					<li class="first active"><a href="/">Главная</a></li>
					<li><a href="/services">Услуги</a></li>
					<li><a href="/portfolio">Портфолио</a></li>
					<li class="last"><a href="/contacts">Контакты</a></li>
				</ul>
				<br class="clearfix" />
			</div>
		</div>
		<div id="page">
			<div id="sidebar">
				<div class="side-box">
					<h3>Случайная цитата</h3>
					<p class="quote">
						«Сайт, как живой организм, изменяется и развивается.
						Нельзя сразу написать идеальный вариант и на этом откланяться - это утопия»
					</p>
					<p class="quote">
						«Все должно быть очень просто, как текстовый файл и при этом функционально
						и тогда пользователи от нас уйдут»
					</p>
					<p class="quote">
						«Критика - это когда критик объясняет автору, как сделал бы он, если бы умел»
					</p>
					<p class="quote">
						«Сумасшедшим становиться тот, кто попытался разобраться в этом сумасшедшем мире»
					</p>
					<p class="quote">
						«Опытный разработчик знает, какой выбор ведет к поставленной цели, в то время как
						новичок каждый раз делает шаг в неизвестность»
					</p>
				</div>
				<div class="side-box">
					<h3>Основное меню</h3>
					<ul class="list">
						<li class="first "><a href="/">Главная</a></li>
						<li><a href="/services">Услуги</a></li>
						<li><a href="/portfolio">Портфолио</a></li>
						<li class="last"><a href="/contacts">Контакты</a></li>
					</ul>
				</div>
			</div>
			<div id="content">
				<div class="box">
					<?php include 'application/views/' . $contentView; ?>
					
				</div>
				<br class="clearfix" />
			</div>
			<br class="clearfix" />
		</div>
		<div id="page-bottom">
			<div id="page-bottom-sidebar">
				<h3>Наши контакты:</h3>
				<ul class="list">
					<li>telegram: @WebQuad</li>
					<li class="last">email: webquad.studio@gmail.com</li>
				</ul>
			</div>
			<div id="page-bottom-content">
				<h3>О Компании</h3>
				<p>
					Вот дом.
					Который построил Джек.

					А это пшеница.
					Которая в тёмном чулане хранится
					В доме,
					Который построил Джек.

					А это весёлая птица-синица,
					Которая ловко ворует пшеницу,
					Которая в тёмном чулане хранится
					В доме,
					Который построил Джек.

					Вот кот,
					Который пугает и ловит синицу,
					Которая ловко ворует пшеницу,
					Которая в тёмном чулане хранится
					В доме,
					Который построил Джек.
				</p>
			</div>
			<br class="clearfix" />
		</div>
	</div>
	<div id="footer">
		<a href="/">WebQuad</a> &copy; 2024</a>
	</div>
</body>

</html>