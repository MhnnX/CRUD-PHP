<?php
require('function.php');

if ($_SESSION['level']=='Admin') {
    $modul = mysqli_query($conn, "SELECT * FROM module WHERE Aktif='Y' ORDER BY Urutan");
} else {
    $modul = mysqli_query($conn, "SELECT * FROM module WHERE Status='User' AND Aktif='Y' ORDER BY Urutan");
}

while ($menu = mysqli_fetch_array($modul)) {
    // echo "<li><a href='$menu[Link]'>$menu[Nama_Modul]</a></li>";
    echo "<li class='nav-item'><a class='nav-link text-dark' href='$menu[Link]'><span class='ml-2'>$menu[Nama_Modul]</span></a></li>";
}
?>