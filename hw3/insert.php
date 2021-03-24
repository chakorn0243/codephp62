<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'codephp';

$myconn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($myconn->connect_errno) {
    printf("Connect failed: %s\n", $myconn->connect_error);
    exit();
}
$strSQL = "INSERT INTO `user`(`userName`, `userPassword`) ";
$strSQL .= "VALUES ('user02','password for user 02' )";

$result = $myconn->query($strSQL);

if($result){
echo" 1";
}else{
    echo "2" . $result;
}




?>



