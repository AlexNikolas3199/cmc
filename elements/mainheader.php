<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="cmс.css">
	<title>cmc</title>
	<style>
		header{
			background: none;
		}
		main{
			min-height: 100vh;
			width: 100%;
			background: 
			linear-gradient(
		    rgba(27,52,92,0.5), rgba(27,52,92, 0.5)),
		    url(images/633572-POB0OZ-918.jpg);
		    background-size: cover;
		    background-position: center;
		}
		main .mainCards{
			width: 80%;
			margin:0 auto;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
		}
		main .mainCards .maincard{
			min-width: 100px;
			margin: 20px;
			height:135px;
			padding: 30px 40px 10px 50px;
			border-radius: 30px;
			background: rgba(255, 255, 255, 0.7);
		}
		main .mainCards .maincard img{
			height:60px;
		}
		main .mainCards .maincard p{
			color: rgba(27, 52, 92, 0.8);
			font-size: 18px;
			font-weight: bold;
			width: 150px;
		}
		main .mainCards .maincard:nth-child(5) p{
			width: 250px;
		}
	</style>
</head>
<body>
	<main>
	<header>
		<div class="headerContacts">
			<div>
				<img src="images/headerphone.png" alt="">
				<p>+7 (862) 296-58-00</p>
			</div>
			<div>
				<img src="images/headermail.png" alt="">
				<p>info@cmc-development.ru </p>
			</div>
		</div>
		<div class="headerLanguages">
			<p>English version of the site</p>
			<a href="#"><img src="images/eng_png.png" alt=""></a>
			<a href="#"><img src="images/rus_png.png" alt=""></a>
		</div>
		<nav class="headerNav">
			<a href="index.php">Главная</a>
			<a href="licenses.php">О компании</a>
			<a href="partners.php">Новости</a>
			<a href="#">
				<img class="logo" src="images/logo.png" alt="">
			</a>
			<a href="#">Проекты</a>
			<a href="#">Услуги</a>
			<a href="#">Контакты</a>
		</nav>
	</header>
	<div class="mainCards">
		<div class="maincard">
			<img src="images/IconCity.png" alt="">
			<p>КАПИТАЛЬНОЕ СТРОИТЕЛЬСТВО</p>
		</div>
		<div class="maincard">
			<img src="images/IconPaint.png" alt="">
			<p>КАПИТАЛЬНЫЙ РЕМОНТ</p>
		</div>
		<div class="maincard">
			<img src="images/IconDesign.png" alt="">
			<p>ПРОЕКТИРОВАНИЕ</p>
		</div>
		<div class="maincard">
			<img src="images/IconСhurch.png" alt="">
			<p>РЕКОНСТРУКЦИЯ</p>
		</div>
		<div class="maincard">
			<img src="images/IconCity.png" alt="">
			<p>ОСУЩЕСТВЛЕНИЕ ФУНКЦИЙ ТЕХНИЧЕСКОГО ЗАКАЗЧИКА</p>
		</div>
		<div class="maincard">
			<img src="images/IconDesign.png" alt="">
			<p>РЕСТАВРАЦИЯ</p>
		</div>
		<div class="maincard">
			<img src="images/IconСhurch.png" alt="">
			<p>ЗАРУБЕЖНОЕ СТРОИТЕЛЬСТВО</p>
		</div>
	</div>
	</main>