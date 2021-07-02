<?php
    $server = 'localhost';
    $username = 'root';
    $password = 'Dev1234$';
    $dbName = 'new_ground';

    $dbLink = new mysqli($server, $username, $password, $dbName);

if($dbLink->connect_errno){
    printf("Unable to connect to database: %s", $dbLink->connect_error);
    exit();
}

if(!$dbLink){
    die("Connection failed: ".$dbLink->error());
}