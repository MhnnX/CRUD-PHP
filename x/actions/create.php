<?php
require('../function.php');

if (isset($_POST['create'])) {

    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $Nama = $_POST['nama'];
    $Email = $_POST['email'];
    $Telepon = $_POST['tlp'];
    $Level = $_POST['level'];
    $Blokir = $_POST['blokir'];
    
    $result = "INSERT INTO users (Username, Password, Nama_Lengkap, Email, No_Telp, Level, Blokir) VALUES ('$Username', '$Password', '$Nama', '$Email', '$Telepon', '$Level', '$Blokir')";
 
    if (mysqli_query($conn, $result)) {
        header("Location: ../dashboard.php?module=m-user");
    } else {
        echo "Register gagal : " . mysqli_error($conn);
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Input Mahasiswa</title>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center pb-5">INPUT DATA MAHASISWA</h1>
        <form action="create.php" method="post">
            <div class="row mb-3">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-2">
                    <input type="text" name="username" class="form-control" id="username">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-2">
                    <input type="text" name="password" class="form-control" id="password">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-2">
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-2">
                    <input type="text" name="email" class="form-control" id="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="tlp" class="col-sm-2 col-form-label">Nomor Hp</label>
                <div class="col-sm-2">
                    <input type="text" name="tlp" class="form-control" id="tlp">
                </div>
            </div>
            <div class="row mb-3">
                <label for="level" class="col-sm-2 col-form-label">Level User</label>
                <div class="col-sm-2">
                    <input type="text" name="level" class="form-control" id="level">
                </div>
            </div>
            <div class="row mb-3">
                <label for="blokir" class="col-sm-2 col-form-label">Blokir</label>
                <div class="col-sm-2">
                    <input type="text" name="blokir" class="form-control" id="blokir">
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="me-auto p-2">
                    <button type="submit" class="btn btn-primary" name="create">Create Data</button>
                </div>
                <div class="p-2"><a href="../" type="submit" class="btn btn-danger" >Home</a></div>
            </div>
        </form>    
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>