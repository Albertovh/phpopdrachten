<?php

$task2 = "Lancering in: ";
$counter = 19;
while($counter >= 0)
{
    $task2 = $task2 . $counter . ",";
    $counter--;
}

$task3 = "lancering in:";

for($counter=19;$counter >= 0;)
{
    $task3 = $task3 . $counter . ",";
    $counter--;
}

$task4 = "";
$counter1 = 1;
while ($counter1 >=1 && $counter1 <=6 )
{
    $task4 = $task4 ."<h". $counter1 . "> is de". $counter1. " iteratie". "</h".$counter1. ">";
    $counter1++;
}


$task5 = " ";

for($counterTask5 = 1; $counterTask5 <11; $counterTask5++)
{
    $task5 = $task5 . "<td> Dit is de " . $counterTask5 . "e iteratie </td>";
}


$task6 = "";
$countertask6= 2020;
$secondcounter6 = 18;
while($countertask6 <= 2020 && $secondcounter6 <= 18 )
{

    $countertask6--;
    $secondcounter6--;


}
$task6 = $task6."in " . $countertask6. " was ik " . $secondcounter6 . " jaar oud";





for($task6 = "";$countertask6= 2020;$secondcounter6 = 18 $countertask6 <= 2020 && $secondcounter6 <= 18;)
{

    $countertask6--;
    $secondcounter6--;


}
$task6 = $task6."in " . $countertask6. " was ik " . $secondcounter6 . " jaar oud en werd ik een adolescent";

?>

