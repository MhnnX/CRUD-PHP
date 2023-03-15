<?php 
require('function.php');

if ($_GET['module']=='home') {
    echo "<h2>Selamat Datang</h2>
    <p>Halo <b>$_SESSION[fullname]</b>, Selamat Datang yagaes dihalam ini :v</p>
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p>";
}

elseif ($_GET['module']=='m-user') {
    include('module/mod_users/users.php');
}
elseif ($_GET['module']=='m-module') {
    include('module/mod_modul/modul.php');
}
?>