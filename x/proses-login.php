<?php
require('function.php');
function antiinjection($data) {
    global $conn;
    $filter_sql = mysqli_real_escape_string($conn, $data);
    $filter_sql = stripcslashes(strip_tags(htmlspecialchars($filter_sql, ENT_QUOTES)));
    return $filter_sql;
}

$username = antiinjection($_POST['username']);
$password = antiinjection(md5($_POST['password']));

$proses     = mysqli_query($conn, "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'");
$user       = mysqli_num_rows($proses);
$db         = mysqli_fetch_array($proses);

if ($user > 0) {
    session_start();
    $_SESSION['username']       = $db['Username'];
    $_SESSION['password']       = $db['Password'];
    $_SESSION['fullname']       = $db['Full_Name'];
    $_SESSION['level']          = $db['Level'];
    $_SESSION['blokir']         = $db['Blokir'];

    echo "<center>LOGIN BERHASIL <br></center>";
    header("Location: dash.php?module=home");
} else {
    echo "<center>LOGIN GAGAL <br>
    Username atau Password Anda tidak valid.<br>
    Atau akun Anda sedang diblokir.<br>";
    echo "<a href=../><b>ULANGI LAGI</b></a></center>";
}
?>