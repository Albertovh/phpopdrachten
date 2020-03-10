<?php
include ("variabelen.php")
echo("<div class='footer'>");
echo ("&copy;" . $year);
echo ("</div>");

date_default_timezone_set("Europe/Amsterdam");
$uur = date ('H');
$text = "";
if ($uur <5)
{
    $text = "Goedenacht";
}
elseif ($uur <12)
{
    $text = "Goedemorgen";
}
elseif ($uur <=18)
{
    $text = "Goedemiddag";
}
elseif ($uur <=0)
{
    $text = "Goedeavond";
};

echo $text;
?>
