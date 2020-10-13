<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>uHost</title>
	<link rel="shortcut icon" href="favicon.png">
	<link rel="stylesheet" href="shared.css">


</head>

<body>
	<div class="backdrop"></div>
	<header class="main-header">
		<div>
			<button class="toggle-button">
				<span class="toggle-button__bar"></span>
				<span class="toggle-button__bar"></span>
				<span class="toggle-button__bar"></span>
			</button>
		</div>
		<nav class="main-nav">
			<ul class="main-nav__items">
				<li class="main-nav__item">
					<a href="rabat/index.php">Rabat</a>
				</li>
				<li class="main-nav__item">
					<a href="casablanca/index.php">Casablanca</a>
				</li>
				<li class="main-nav__item">
					<a href="fes/index.php">Fes</a>
				</li>
				<li class="main-nav__item main-nav__item--cta">
					<a href="https://mmpg.xyz/" style="padding-top: 40px;" >MMPG Consulting</a>
				</li>
			</ul>
		</nav>
	</header>
	<nav class="mobile-nav">
		<ul class="mobile-nav__items">
			<li class="mobile-nav__item">
				<a href="../rabat/index.php">Rabat</a>
			</li>
			<li class="mobile-nav__item">
				<a href="../casablanca/index.php">Casablanca</a>
			</li>
			<li class="mobile-nav__item">
				<a href="../fes/index.php">Fes</a>
			</li>

			<li class="mobile-nav__item mobile-nav__item--cta">
				<a href="https://mmpg.xyz/" >MMPG Consulting</a>
			</li>
		</ul>
	</nav>
	
	<main>

	<div id="loading" class="loading">
		<div class="loader"></div>
	</div>

	<div id="loaded" class="loaded">
			<h3>Welcome ! , your current city is : </h3>
			<h4 id="cityName"></h4>

	</div>
		
	</main>
	<footer class="main-footer">
		<nav>
			<ul class="main-footer__links">
				<li class="main-footer__link">
					<a href="https://mmpg.xyz/">© MMPG Consulting 2020</a>
				</li>
			</ul>
		</nav>
	</footer>
	<script src="shared.js"></script>
	<script src="main.js"></script>
</body>

</html>