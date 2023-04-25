<?php
    //variables for connection to the db
    $host = "localhost";
    $username = "root";
    $password = ""; //changed from "usbw" for my machine
    $database_in_use = "final"; //changed from "final project" for my machine

    //create db instance
    $mysqli = new mysqli($host, $username, $password, $database_in_use);

?>