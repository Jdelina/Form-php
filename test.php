<?php

$sname ='localhost'; // servername
$user = 'root'; //server username ninyo
$pass = ''; // password ng server ninyo
$db = 'test2'; //pangalan ng database ninyo 


$db = new mysqli ('localhost', $user, $pass, $db) or die ("unable to connect");
 echo "Succesfully Connected";
?>