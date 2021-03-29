<?php
require_once 'connectdb.php';

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
            <td>เเก้ไข</td>
            <td>ลบ</td>
        </tr>
    <?php
    while ($row = $result->fetch_array()) {
         echo $row["userName"] . "<br>";
         ?>
         <tr>
        <td><?php echo $row ["userID"] ?></td>
        <td><?php echo $row ["userName"]?> </td>
        <td><?php echo $row ["userStatus"] ?></td>
        <td>edit</td>
        

        <td><a href="delete.php?id=<?php echo $row["userID"] ?>">delete</a></td>
         </tr>
        <?php
    
    }
?>
    </table>




</body>

</html>