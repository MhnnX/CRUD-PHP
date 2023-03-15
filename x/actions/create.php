<?php 
require('../function.php');

if (isset($_POST['create'])) {
    $ID         = $_POST['id'];
    $Username   = mysqli_real_escape_string($conn, $_POST['username']);
    $Password   = mysqli_real_escape_string($conn, $_POST['password']);
    $Fullname   = mysqli_real_escape_string($conn, $_POST['fullname']);
    $Email      = mysqli_real_escape_string($conn, $_POST['email']);
    $Phone      = mysqli_real_escape_string($conn, $_POST['phone']);
    $Level      = mysqli_real_escape_string($conn, $_POST['level']);
    $Blokir     = mysqli_real_escape_string($conn, $_POST['blokir']);
    
    $encrypt    = md5($Password);
    $result     = "INSERT INTO users (ID, Username, Password, Full_Name, Email, Phone, Level, Blokir) VALUES ('$ID' ,'$Username', '$encrypt', '$Fullname', '$Email', '$Phone', '$Level', '$Blokir')";
 
    if (mysqli_query($conn, $result)) {
        header("Location: ../dash.php?module=m-user");
    } else {
        echo "Register gagal : " . mysqli_error($conn);
    }    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>BUAT DATA MAHASISWA</title>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center pb-5">CREATE DATA USER</h1>
        <form action="create.php" method="post">
            <div class="row mb-3">
                <input type="hidden" name="id">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-4">
                    <input type="text" name="username" class="form-control" id="username">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                    <input type="text" name="password" class="form-control" id="password">
                </div>
            </div>
            <div class="row mb-3">
                <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-4">
                    <input type="text" name="fullname" class="form-control" id="fullname">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input type="email" name="email" class="form-control" id="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-4">
                    <input type="number" name="phone" class="form-control" id="phone">
                </div>
            </div>
            <div class="row mb-3">
                <label for="level" class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-4">
                    <input type="radio" id="admin" name="level" value="Admin">
                    <label for="admin">Admin</label><br>
                    <input type="radio" id="user" name="level" value="User">
                    <label for="user">User</label><br>
                </div>
            </div>
            <div class="row mb-3">
                <label for="blokir" class="col-sm-2 col-form-label">Blokir User?</label>
                <div class="col-sm-4">
                    <input type="radio" id="yes" name="blokir" value="Yes">
                    <label for="yes">Yes</label><br>
                    <input type="radio" id="no" name="blokir" value="No">
                    <label for="no">No</label><br>
                </div>
            </div>

            <div class="d-flex mb-3">
                <div class="me-auto p-2">
                    <button type="submit" class="btn btn-primary" name="create">Create Data</button>
                </div>
                <div class="p-2"><a href="../dash.php?module=m-user" type="submit" class="btn btn-danger">Go to Home</a></div>
            </div>
        </form>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>