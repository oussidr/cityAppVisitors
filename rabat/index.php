<?php include_once('../config.php');

$villeName = 'rabat';
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
    <title>City Visitors - Rabat</title>
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
                    <a class="active">Rabat</a>
                </li>
                <li class="main-nav__item">
                    <a href="../casablanca/index.php">Casablanca</a>
                </li>
                <li class="main-nav__item">
                    <a href="../fes/index.php">Fes</a>
                </li>
                <li class="main-nav__item main-nav__item--cta">
                    <a href="https://mmpg.xyz/" style="padding-top: 40px;">MMPG Consulting</a>
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
                <a href="https://mmpg.xyz/">MMPG Consulting</a>
            </li>
        </ul>
    </nav>

    <main>

        <h1 class="ville-title"> City of Rabat </h1>
        <div class='info-city'> 

            <img  class='info-city_image' src='../images/rabat.jpg'/>


            <p class='info-city_text'>
            Rabat is the capital city of Morocco and the country's seventh largest city with an urban population of approximately 580,000 (2014)[2] and a metropolitan population of over 1.2 million. It is also the capital city of the Rabat-Salé-Kénitra administrative region.[6] Rabat is located on the Atlantic Ocean at the mouth of the river Bou Regreg, opposite Salé, the city's main commuter town.

Rabat was founded in the 12th century by the Almohad ruler Abd al-Mu'min as a military town. The city steadily grew but went into an extended period of decline following the collapse of the Almohads. In the 17th century Rabat became a haven for Barbary pirates. The French established a protectorate over Morocco in 1912 and made Rabat its administrative center. Morocco achieved independence in 1955 and Rabat became its capital.
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
