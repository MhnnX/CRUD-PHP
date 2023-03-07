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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div id="header">
        <div id="menu">
            <ul>
                <li><a href=?module=home>Home</a></li>
                <?php require('menu.php');?>
                <li><a href=proses-logout.php>Logout</a></li>
            </ul>
        </div>

        <div id="content">
            <?php require('content.php');?>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php
}
?>