<?php
require("./function.php");
$result = mysqli_query($conn, "SELECT * FROM users");
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
</head>
<body>
    <div class="container pb-2">
        <h2 class="pb-3 text-center">DATA MAHASISWA</h2>
        <a href="./actions/create.php"><button class="btn btn-primary">Create Data</button></a>
    </div>
    <div class="container">
        <table class="table table-striped" border="1">
            <tr>
                <!-- <th scope="col">ID</th> -->
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">Nomor Hp</th>
                <th scope="col">Level</th>
                <th scope="col">Blokir</th>
                <th scope="col">ACTION</th>
            </tr>
            <?php
                while ($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $res["Username"] . "</td>";
                    echo "<td>" . $res["Password"] . "</td>";
                    echo "<td>" . $res["Nama_Lengkap"] . "</td>";
                    echo "<td>" . $res["Email"] . "</td>";
                    echo "<td>" . $res["No_Telp"] . "</td>";
                    echo "<td>" . $res["Level"] . "</td>";
                    echo "<td>" . $res["Blokir"] . "</td>";
                    echo "<td><a href=\"action/edit.php?id=$res[Username]\" class='btn btn-primary'>Edit</a>";
                }
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>