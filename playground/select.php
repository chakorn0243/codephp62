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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
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
        //  echo $row["userName"] . "<br>";
         ?>
         <tr>
        <td><?php echo $row ["userID"] ?></td>
        <td><?php echo $row ["userName"]?> </td>
        <td><?php echo $row ["userStatus"] ?></td>
       
        <td><a href="update.php?id=<?= $row["userID"]?>&userName=<?= $row["userName"]?> &userStatus=<?=$row["userStatus"]?>"><i class="fas fa-pencil-alt"></i></i></a></td>
        <td><a href="delete.php?id=<?= $row["userID"] ?>"><i class="fas fa-trash-alt"></i></a></td>
       
       
       
         </tr>
        <?php
    
    }
?>
    </table>




</body>

</html>