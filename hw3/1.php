<?php
$dbhost = 'localhost';
$dbuser ='root';
$dbpass = '';
$dbname = 'codephp';

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} 

echo 'after connect database';
