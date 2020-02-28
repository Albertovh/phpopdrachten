<?php
$naam = "elfstedentocht";
$friesenaam = "Alvestedetocht";
$afstand = 200;
$evenement = "schaatstocht";
$ondergrond = "natuurijs";
$organisator = "Kobninklijke Vereniging De Friesche Elf Steden";
$plaats = "Leeuwarden";
$provincie = "Friesland";
$teller = 15;
$begin = 1909;
$max = 1;

$verhaal = "de" ." " . $naam . " ". "(Fries:".$friesenaam.") is een"." ".$afstand. "kilometer lange" ." ".$evenement. " ". "over" ." ".$ondergrond. " ". "die word georganiseerd door de" ." ".$organisator. " ".$plaats." ". "de hoofdstad van " ." ".$provincie. " " .", is start- en aankomstplaats de" ." ".$evenement." "."is inmiddels"." ".$teller." "."maal verreden en werd voor het eerst in". " ".$begin. " " ."gereden en word maximaal"." ".$max."" ."keer per winter gehouden.";

echo("<P>".$verhaal."<P>");
?>
