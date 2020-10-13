<?php include_once('../config.php');

$villeName = 'fes';
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
	<title>uHost</title>
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
					<a href="../casablanca/index.php">Casablanca</a>
				</li>
				<li class="main-nav__item">
					<a class="active">Fes</a>
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

    <main>
    <h1 class="ville-title">City of Fez</h1>
        <div class='info-city'> 

            <img  class='info-city_image' src='../images/fes.jpg'/>


            <p class='info-city_text'>
            Fez or Fes is a city in northern inland Morocco and the capital of the Fès-Meknès administrative region. It is the second largest city in Morocco after Casablanca,[4] with a population of 1.22 million (2020). Located to the northeast of the Atlas Mountains, Fez is situated at a crossroad connecting the important cities of different regions; 206 km (128 mi) from Tangier to the northwest, 246 km (153 mi) from Casablanca, 189 km (117 mi) from Rabat to the west, and 387 km (240 mi) from Marrakesh to the southwest which leads to the Trans-Saharan trade route. It is surrounded by hills and the old city is centered around the Fez River (Oued Fes) flowing from west to east.
        </p>


        <h3>Total number of visitors of this page : <?php echo $numberOfVisitorPage[0]['total']; ?> </h3>
        </div>
		
	</main>
		
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