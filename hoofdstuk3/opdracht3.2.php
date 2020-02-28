<?php

/**
 * User: alberto
 * Date: 17-02-2020
 * Time: 17-17
 * File: opdracht2.1.php
 */
?>

<html>

<head>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <link rel="icon" href="../CSS/style.css" />
    <meta charset="utf-8">
    <title>

    </title>
</head>


    <header>
        <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
    </header>
<body>
    <aside>
        <h2>Menu</h2>
        <ul>
            <li>Hoofdstuk 2
                <ul>
                    <li>
                        <a href="hoofdstuk2/opdracht2.1">Opdracht 2.1</a>
                    </li>
                    <li>
                        <a href="hoofdstuk2/opdracht2.2/opdracht2.2.php">Opdracht 2.2</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
    <main id="wrapper">
        <h2>Uitwerkingen</h2>
        <?php
        //declareren en initialiseren van de gewenste variablen
            $traficlightcolor = "groen";
            $ambulancecoming = false;

            //driveon
            $driveon = true;
//checken of auto mag doorijden of stoppen
            if($traficlightcolor == "groen" && $ambulancecoming = false)
                {
                    $driveon = true;
                }
            elseif ($traficlightcolor == "oranje" || $ambulancecoming = true)
              {
                 $driveon = false;
              }
            else if($traficlightcolor == "rood" || $ambulancecoming = true)
                {
                  $driveon = false;
                }
            else
                {
                    echo("<p>foutje, het soplicht heeft een ongeldige kleur</p>");
                }

            if ($driveon == true)
                {
                    echo("<h1 style = 'color: green'> u mag doorijden</h1>");
                }
            else if ($driveon == false)
            {
                 echo("<h1 style = 'color: red'> u mag niet doorijden</h1>");
            }
        ?>
        <hr>
        <?php
            //deel 2 alcohol
            $countryname = "nederland";
            $currentage = 32;

            echo("<p> je woont in". " " .$countryname . "en je bent" . " " . $currentage . "jaar oud</p>");

            //tonen van de drank informatie
        if ($countryname == "belgie" && $currentage >= 16 && $currentage < 18)
        {
            echo ("je mag hier zwakke alcohol drinken");
        }
        else if ($countryname == "belgie" && $currentage >= 18 )
        {
            echo ("je mag hier sterke en zwakke drank drinken");
        }

        else if ($countryname == "bulgarije" && $currentage >=18)
        {
            echo("je mag hier sterke drank drinken");
        }
        else
            {
            echo("hier mag je geen alcohol drinken");
        }
         ?>
    </main>
</body>
</html>