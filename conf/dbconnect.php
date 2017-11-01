<?php

//SET VARIABLES
$dbuser = "bullhacksadmin";
$dbpass = "";
$dbdatabase = "bullhacks_hackpanel";
$dbserver = "bullhacks2.cgdworlghjvy.eu-west-2.rds.amazonaws.com";

//CONNECT TO DB
$conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbdatabase);
?>