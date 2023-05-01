<?php
    //variables for connection to the db
    $host = "localhost"; //means mysql server is on the same server as Apache, if it wasnt, may have to do some absolute link instead
    $username = "root";
    $password = ""; //changed from "usbw" for my machine
    $database_in_use = "final"; //changed from "final project" for my machine

    //create db instance
    $mysqli = new mysqli($host, $username, $password, $database_in_use) or die ("Unable to connect");

    //test the connection
    //echo "Connection successful";
?>