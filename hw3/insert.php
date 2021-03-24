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
// $strSQL = "INSERT INTO `user`(`userName`, `userPassword`) ";
// $strSQL .= "VALUES ('user03','password for user 03' )";

// $result = $myconn->query($strSQL);

// if($result){
// echo" 1";
// }else{
//     echo "2" . $result;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="5">   
        <tr>
            <td>usrname</td>
            <td><input type="text" name="userName" ID="userName"></td>
        </tr>

        <tr>
            <td>paasword</td>
            <td><input type="password" name="password" ID="password"></td>
        </tr>

        <tr>
            <td><input colspan="2"><input type="button" value="save"></td>
        </tr>




    </table>


</body>

</html>