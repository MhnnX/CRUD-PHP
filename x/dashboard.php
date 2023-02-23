<?php
require('function.php');
session_start();

if (empty($_SESSION['username']) AND empty($_SESSION['password'])) {
    header("Location: ../error/request-login.html");
    // echo "<center>Untuk mengakses Dashboard, anda harus login <br></center>";
    // echo "<a href=../><b>LOGIN</b></a>";
}
else {
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
    <div id="header">
        <div id="menu">
            <ul>
                <li><a href=?module=home>&#187; Home</a></li>
                <?php require('menu.php');?>
                <li><a href=proses-logout.php>&#187; Logout</a></li>
            </ul>
        </div>

        <div id="content">
            <?php require('content.php');?>
        </div>
    </div>
</body>
</html>
<?php
}
?>