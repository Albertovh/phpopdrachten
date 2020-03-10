<?php
$coursename ="php";
$teachername="onbekend";

switch ($coursename)
{
    case "html":
        $teachername = "van meer";
        echo "voor het vak"." "."<b>".$coursename."</b>"." "."heb je"." "."<b>".$teachername."</b>";
    break;

    case "asp":
        $teachername = "van meer";
        echo "voor het vak"." "."<b>".$coursename."</b>"." "."heb je"." "."<b>".$teachername."</b>";
    break;

     case "sql":
        $teachername = "gijsbrechts";
         echo "voor het vak"." "."<b>".$coursename."</b>"." "."heb je"." "."<b>".$teachername."</b>";
    break;

         case "php":
        $teachername = "spierings";
             echo "voor het vak"." "."<b>".$coursename."</b>"." "."heb je"." "."<b>".$teachername."</b>";
    break;

    case "computertekenen":
        $teachername = "van der berg";
        echo "voor het vak"." "."<b>".$coursename."</b>"." "."heb je"." "."<b>".$teachername."</b>";
    break;

 case "computervaardigheden":
        $teachername = "pilage";
     echo "voor het vak"." "."<b>".$coursename."</b>"." "."heb je"." "."<b>".$teachername."</b>";
    break;


}
?>