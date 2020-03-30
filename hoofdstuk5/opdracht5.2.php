<?php
?>
<html>
<head>


</head>

<form action="form_data.php" method="get">
    <p>Voornaam en achternaam</p>
    <input type="text" name="firstName">
    <p>Studentennummer</p>
    <input type="text" name="studentNumber">
    <p>Datum van uitschrijving</p>
    <input type="date" name="date">
    <p>Reden van uitschrijving</p>
    <select id="uitschrijving" name="reason">
        <option value="Foute keuze">Foute keuze</option>
        <option value="Andere school">Andere school</option>
        <option value="Meerdere malen gezakt">Meerdere malen gezakt</option>
    </select>
    <br>
    <input type="radio" id="leerjaar1" name="leerjaar" value="1e leerjaar">
    <label for="leerjaar1">1e Leerjaar</label><br>
    <input type="radio" id="leerjaar2" name="leerjaar" value="2e leerjaar">
    <label for="leerjaar2">2e Leerjaar</label><br>
    <input type="radio" id="leerjaar3" name="leerjaar" value="3e leerjaar">
    <label for="leerjaar3">3e Leerjaar</label><br>
    <br>
    <input type="checkbox" id="succesKlas" name="succesKlas" value="JA">
    <label for="succesKlas"> Inschrijven voor de Succes klas</label><br>
    <input type="checkbox" id="gegevensBehouden" name="gegevens" value="JA">
    <label for="gegevensBehouden"> Alle gegevens verwijderen?</label><br>
    <p>Geef hier de reden van je uitschrijving</p>
    <textarea name="reasonLeave"></textarea>
    <input type="submit" value="Versturen">
</form>
<body>


<table style="width:100%">
    <tr>
        <td>naam:</td>
        <td>    <?php
            echo $_GET["firstName"];
            ?></td>
    </tr>
    <tr>
        <td>studentennummer:</td>
        <td>    <?php
            echo $_GET["studentNumber"];
            ?></td>
    </tr>
    <tr>
        <td>datum:</td>
        <td>    <?php
            echo $_GET["date"];
            ?></td>
    </tr>
    <tr>
        <td>reden van uitschrijving:</td>
        <td>    <?php
            echo $_GET["reason"];
            ?></td>
    </tr>
    <tr>
        <td>leerjaar:</td>
        <td>    <?php
            echo $_GET["leerjaar"];
            ?></td>
    </tr>
    <tr>
        <td>naar succesklas:</td>
        <td>    <?php
            echo $_GET["succesKlas"];
            ?></td>
    </tr>
    <tr>
        <td>gegevens verwijderen:</td>
        <td>    <?php
            echo $_GET["gegevens"];
            ?></td>
    </tr>
    <tr>
        <td>reden uitschrijving:</td>
        <td>    <?php
            echo $_GET["reasonLeave"];
            ?></td>
    </tr>
</table>
</body>
</html>




