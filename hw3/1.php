<?php
$dbhost = 'localhost';
$dbuser ='root';
$dbpass = '';
$dbname = 'codephp';

$myconn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($myconn->connect_errno) {
    printf("Connect failed: %s\n", $myconn->connect_error);
    exit();
} 

$strSQL = "SELECT `userID`, `userName`,`userStatus` FROM `user`";
$result = $myconn -> query($strSQL);
while ($row = $result ->fetch_array()){
    echo $row["userName"] . "<br>";
    
}



?>

