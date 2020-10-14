<?php include_once('../config.php');

$villeName = 'casablanca';
$visitor_IP = $_SERVER['REMOTE_ADDR'];

$data    =    array(
    'ipAdresse' => $visitor_IP,
    'visitedPage' => $villeName,
);

$insert    =    $db->insert('views', $data);

$condition = " AND visitedPage = '" . $villeName . "'";

$numberOfVisitorPage = $db->getQueryCount('views', 'id', $condition);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>City Visitors - Casablanca</title>
	<link rel="shortcut icon" href="favicon.png">
	<link rel="stylesheet" href="../shared.css">

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
					<a href="../rabat/index.php" href="">Rabat</a>
				</li>
				<li class="main-nav__item">
					<a class="active">Casablanca</a>
				</li>
				<li class="main-nav__item">
					<a href="../fes/index.php">Fes</a>
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
    <h1 class="ville-title">  City of Casablanca </h1>
        <div class='info-city'> 

            <img  class='info-city_image' src='../images/casablanca.jpg'/>


            <p class='info-city_text'>
            Casablanca is the largest city of Morocco. Located in the central-western part of Morocco bordering the Atlantic Ocean, it is the largest city in the Maghreb region and the eighth-largest in the Arab world. Casablanca is Morocco's chief port and one of the largest financial centers in Africa. According to the 2019 population estimate, the city has a population of about 3.71 million in the urban area and over 4.27 million in the Greater Casablanca. Casablanca is considered the economic and business center of Morocco, although the national political capital is Rabat.
        </p>


        <h3>Total number of visitors of this page : <?php echo $numberOfVisitorPage[0]['total']; ?> </h3>
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
	<script src="../shared.js"></script>
</body>

</html>
