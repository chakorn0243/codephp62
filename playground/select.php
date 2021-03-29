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

$strSQL = "SELECT `userID`, `userName`,`userStatus` FROM `user`";
$result = $myconn->query($strSQL);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   

    <table border="5" width="80%">
        <tr>
            <td>ลำดับ</td>
            <td>ชื่อผู้ใช้</td>
            <td>สถานะ</td>
        </tr>
    <?php
    while ($row = $result->fetch_array()) {
         echo $row["userName"] . "<br>";
         ?>
         <tr>
        <td><?php echo $row ["userID"] ?></td>
        <td><?php echo $row ["userName"]?> </td>
        <td><?php echo $row ["userStatus"] ?></td>
         </tr>
        <?php
    
    }
?>
    </table>




</body>

</html>