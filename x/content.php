<?php 
require('function.php');

if ($_GET['module']=='home') {
    echo "<h2>Selamat Datang</h2>
    <p>Halo <b>$_SESSION[namalengkap]</b>, Selamat Datang yagaes dihalam ini :v</p>
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp</p><p>&nbsp</p><p>&nbsp</p>";
}

elseif ($_GET['module']=='m-user') {
    require("module/mod_users/users.php");
}
elseif ($_GET['module']=='m-module') {
    echo "";
}
?>