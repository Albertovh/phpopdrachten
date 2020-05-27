<?php
//username en wachtwoord combinaties
$usserarraylist = [
 "sjul" => "",
    "koos" => "bedanktvoordezeeer",
    "jim" => "callreaser",
   "alberto" => "admin",
   "piet" => "admin",
   "jan" => "admin",
   "bas" => "admin",
   "frans" => "admin",
   "erik" => "admin",
   "sam" => "admin",
];

$message = "";
$loginsuccess = false;
// checken of gegeven username en wachtwoord i  de array zit
if(isset($_POST["username"]) == true && isset($_POST["password"]) == true)
{
    //foreach gebruiken we om door de array heen te loopen
    foreach ($usserarraylist as $index => $value)
    {
        if($_POST["username"] == $index && $_POST["password"] == $value);
        {
            $loginsuccess = true;
        }
    }
    if($loginsuccess)
}
?>