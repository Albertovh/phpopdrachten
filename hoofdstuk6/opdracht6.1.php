<?php
?>
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
include("../includes/header.php");
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
                    <a href="hoofdstuk4/opdracht4.3.php">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="hoofdstuk4/opdracht4.4.php">Opdracht 4.4</a>
                </li>
            </ul>
        </li>
        <br>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="../phpopdrachten/hoofdstuk5/opdracht5.1.php">Opdracht 5.1</a>
                </li>
                <li>
                    <a href=../phpopdrachten/hoofdstuk5/opdracht5.2.php">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="hoofdstuk5/opdracht5.3.php">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="#">Opdracht 5.4</a>
                </li>
            </ul>
        <br>
        <li>Hoofdstuk 6
            <ul>
                <li>
                    <a href="../phpopdrachten/hoofdstuk6/opdracht6.1.php">Opdracht 6.1</a>
                </li>
                <li>
                    <a href=../phpopdrachten/hoofdstuk6/opdracht6.2.php">Opdracht 6.2</a>
                </li>

            </ul>
        </li>
    </ul>
</aside>

<main id="wrapper">
    <h2>Uitwerkingen</h2>
    <h1>Login formulier</h1>
    <form action="checklogin.php" method="post">
        <!--label zodat de tekst tegen de tekstbox aanstaan-->
        <label>Username: </label><br>
        <input name="username" type="text"><br>

        <label>Wachtwoord: </label><br>
        <input name="password" type="password"><br>
        <input name="submit" value="verzend" type="submit"><br>

    </form>
</main>

<?php
include("../includes/footer.php");
?>
<style>
    header, footer
    {
        text-align: right;
        background-color: #F0F8FF;
        width: 98%;
        padding: 15px;
        color: black;
    }
    aside
    {
        background-color: #F5F5DC;
        display: inline-block;
        float: left;
        width: 50%;
    }

    #wrapper
    {
        display: inline-block;
        float: right;
        width: 50%;
        background-color: white;
    }

</style>

</body>
</html>


