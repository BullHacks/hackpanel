<?php

//include both the dbconnect and sescheck files
require('./conf/dbconnect.php');
require('./conf/sescheck.php');

?>

<html>
    <head>
        <title>Home ~ HackPanel</title>
        <link rel="stylesheet" href="./css/main.css">
        <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>
    <body>
    <form action="logout.php">
        <input type="submit" value="Log Out">
    </form>
    </body>
</html>

