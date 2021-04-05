<?php
require_once 'connectdb.php';

$userID = "";
$userName = "";
$userStatus = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = "";
    if (isset($_GET["id"]) && $_GET["id"] != '') {
        $userID  = $_GET["id"];
        $userName = $_GET["userName"];
        $userStatus = $_GET["userStatus"];
    } else {
        echo "ID User is null";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $userStatus = "";
    $userID  = $_GET["id"];
    $userName  = $_POST["userName"];
    $userStatus= $_POST["userStatus"]; 


    if ($userName && $userStatus) {
        $strSQL ="UPDATE user SET userName ='" .$userName."' , userStatus=" .$userStatus." WHERE userID = ".$userID;
        if(($userName == "") && ($userStatus == "")){
            echo "can't add information";
        }

        $result = $myconn->query($strSQL);
        if ($result) {
            echo "update User Complete";
        } else {
            echo "update User failled";
         
        }
    }
}
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
    <form action="update.php?id=<?=$userID?>" method="post">
        <table border="1">
            <tr>
                <td>userName</td>
                <td><input type="text" name="userName" value="<?=$userName?>"></td>
            </tr>
            <tr>
                <td>userStatus</td>
                <td><input type="text" name="userStatus" value="<?=$userStatus?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="save"></td>
            </tr>
        </table>
    </form>
</body>

</html>