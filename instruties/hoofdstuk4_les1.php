

<!doctype html>
<html>
<head>

</head>

</html>
<body>
<?php
//vertellen dat ons script de tijdzonnes van hong kong moet aanhouden
    date_default_timezone_set("Asia/Hong_Kong");

    //toon de tijd in HH:MM formaat
$currenttime = date("h:i:s");
echo "<p>huidige tijd:".$currenttime."</p>";

$currenthour = date("H")

switch($currenthour)
{
    case"Mon":
        echo"Garfield houdt van Lasange op maandag"
}       break;
     case"Tue":
            echo "het is dinsdag"
            break;
     default:
         //code voor else komt hier
         echo("yo deze dag ken ik niet")
?>


</body>
</html>
