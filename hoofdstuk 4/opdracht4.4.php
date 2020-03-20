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
<?php
for ($day = 0; $day <7 ; $day++)
{
    $datenumber = strtotime("+$day days");
    $daynumber = date('w', $datenumber);
    if ($daynumber == 0)
    {
        $dayname = 'zondag';
    }
    elseif ($daynumber == 1)
    {
        $dayname = 'maandag';
    }
    elseif ($daynumber == 2)
    {
        $dayname = 'dinsdag';
    }
    elseif ($daynumber == 3)
    {
        $dayname = 'woensdag';
    }
    elseif ($daynumber == 4)
    {
        $dayname = 'donderdag';
    }
    elseif ($daynumber == 5)
    {
        $dayname = 'vrijdag';
    }
    elseif ($daynumber == 6)
    {
        $dayname = 'zaterdag';
    }

    echo "Dag ";
    echo date('w', $datenumber);
    echo " is " . $dayname;
    echo " ";
    echo date('d-m-Y', $datenumber);
    echo "<br>";
}
?>
</body>
</html>

