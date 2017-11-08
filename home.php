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
        <div class="mdl-layout mdl-js-layout">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">HackPanel: BullHacks 2018</span>
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <form action="logout.php"><input type="submit" value="Log Out"></form>
                </nav>
            </div>
        </header>
        <div id="sidebar" class="mdl-layout__drawer">
            <span class="mdl-layout-title">HackPanel: BullHacks 2018</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="./home.php">Home</a>
                <a class="mdl-navigation__link" href="./attendees.php">Attendees</a>
                <a class="mdl-navigation__link" href="./timetable.php">Timetable</a>
                <a class="mdl-navigation__link" href="./sponsors.php">Sponsors</a>
                <!-- <a class="mdl-navigation__link" href="./otherstuff.php">Other Stuff</a> -->
            </nav>
        </div>
        </div>

    </body>
</html>

