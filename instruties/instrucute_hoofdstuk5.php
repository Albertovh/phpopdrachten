<?php
/**
 * User: alberto van hoek
 * Date: 11-2-2020
 * Time: 12:09 PM
 * File: index.php
 */
?>
<html>
<head>
    <title>Mij PHP opdrachten</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
include("includes/header.php");
?>
<aside>
    <h2>Menu</h2>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../../hoofdstuk2/opdracht2.1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="../../hoofdstuk2/opdracht2.2.php"">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="../../hoofdstuk3/opdrach3.1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href=../../hoofdstuk3/opdracht3.2.php.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="../../hoofdstuk3//opdracht3.3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="#">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="#">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="#">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="#">Opdracht 4.3</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="#">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
</main>
<h3>huisarts bezoek formulier</h3>
<form action="instrucute_hoofdstuk5.php" method="get">
    <p>voornaam<</p>
    <input type="text" name="firstname">

    <p>achternaam</p>
    <input type="text" name="lastname">

    <p>geboortedatum</p>
    <input type="date" name="birthdate">

    <p>klachten</p>
    <textarea name="disseasecomplaints"></textarea>

<input type="submit" value="verzenden">
</form>

<?php
include("includes/footer.php");
//bepalen of er een formulier verzonden is
if(empty($_GET) == false)
{
    //er is een formulier verzonden doe iets met de invoer van de gebruiker
    $userFirstName = $_GET["firstname"];
    echo("<h1>opgegeven naam:". $userFirstName . "</h1>");
}
?>


</body>
</html>
