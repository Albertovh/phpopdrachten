<?php
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>
Restaria Kees Kroket
</h1>
        <p>
Visstraat 12<br>
5211 DN 's-Hertogenbosch<br>
073 613 6720<br>
info@restariakeeskroket.nl
        </p>
        <form action="form_data.php" method="get">
            <label>Bedrijfsnaam: </label><br>
            <input name="nameCompany" type="text"><br>
            <label>Voornaam: </label><br>
            <input name="nameFirst" type="text"><br>
            <label>Achternaam: </label><br>
            <input name="nameLast" type="text"><br>
            <label>Telefoon: </label><br>
            <input name="Tel" type="tel"><br>
            <label>Email: </label><br>
            <input name="Email" type="text"><br>
            <label>Bericht:</label><br>
            <textarea name="Message"></textarea><br>
            <input type="submit" name="verzend" value="Versturen">
        </form>

        <table style="width:100%">
            <tr>
                <td>bedrijfsnaam:</td>
                <td>    <?php
                    echo $_GET["nameCompany"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>voornaam:</td>
                <td>    <?php
                    echo $_GET["nameFirst"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>achternaam::</td>
                <td>    <?php
                    echo $_GET["nameLast"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Telefoon:</td>
                <td>    <?php
                    echo $_GET["Tel"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>    <?php
                    echo $_GET["Email"];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Bericht:</td>
                <td>    <?php
                    echo $_GET["Message"];
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>



