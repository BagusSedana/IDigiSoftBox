<?php

    require "config.php";
    
    $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
    
    if(!$db) {
        header("location: ../error/error.php");
        die();
    }

