<?php
include 'template/header.html';
require_once 'connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $frmUsername = $frmPassword = "  ";
    $frmUsername = $_POST["userName"];
    $frmPassword = $_POST["password"];

    if ($frmUsername && $frmPassword) {
        $strSQL = "INSERT INTO user(userName,userPassword,userStatus)";
        $strSQL .= "VALUES ('" . $frmUsername . "','" . $frmPassword . "',0 )";

        $result = $myconn->query($strSQL);

        if ($result) {
            echo " เพิ่มข้อมูลสำเร็จ";
        } else {
            echo "ไม่สามารถเพิ่มข้อมูลได้";
        }
    }
}
?>



<body>

    
    <form action="insert.php" method="post">
    <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name=" userName">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name ="password">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
    <?php
    include 'template/footer.html';
    ?>
</body>

</html>