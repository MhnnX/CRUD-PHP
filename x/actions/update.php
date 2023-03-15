<?php
require('../function.php');

if (isset($_POST['update'])) {
	$ID         = $_POST['id'];
	$Username   = mysqli_real_escape_string($conn, $_POST['username']);
	$Password   = mysqli_real_escape_string($conn, $_POST['password']);
	$Fullname   = mysqli_real_escape_string($conn, $_POST['fullname']);
	$Email      = mysqli_real_escape_string($conn, $_POST['email']);
	$Phone      = mysqli_real_escape_string($conn, $_POST['phone']);
	$Level      = mysqli_real_escape_string($conn, $_POST['level']);
	$Blokir     = mysqli_real_escape_string($conn, $_POST['blokir']);

    $encrypt    = md5($Password);
    $update     = "UPDATE users SET Username='$Username', Password='$encrypt', Full_Name='$Fullname', Email='$Email', Phone='$Phone', Level='$Level', Blokir='$Blokir' WHERE ID=$ID";
    if (mysqli_query($conn, $update)) {
        header("Location: ../dash.php?module=m-user");
    }
}
?>
<?php
$ID = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE ID=$ID");
while ($res = mysqli_fetch_array($result)) {
	$Username   = $res['Username'];
	$Password   = $res['Password'];
	$Fullname   = $res['Full_Name'];
	$Email      = $res['Email'];
	$Phone      = $res['Phone'];
	$Level      = $res['Level'];
	$Blokir     = $res['Blokir'];
}   
?>

<?php 
$sql = "SELECT * FROM users WHERE ID = $ID";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // menampilkan data user
    while($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>EDIT DATA MAHASISWA</title>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center pb-5">UPDATE DATA USER</h1>
        <form action="update.php" method="post">
            <div class="row mb-3">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-4">
                    <input value="<?php echo $Username; ?>"type="text" name="username" class="form-control" id="username">
                </div>
            </div>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-4">
                    <input value="<?php echo $Password; ?>"type="text" name="password" class="form-control" id="password">
                </div>
            </div>
            <div class="row mb-3">
                <label for="fullname" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-4">
                    <input value="<?php echo $Fullname; ?>"type="text" name="fullname" class="form-control" id="fullname">
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input value="<?php echo $Email; ?>"type="text" name="email" class="form-control" id="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="phone" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-4">
                    <input value="<?php echo $Phone; ?>"type="number" name="phone" class="form-control" id="phone">
                </div>
            </div>
            <div class="row mb-3">
                <label for="level" class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-4">
                    <?php 
                    echo "<input type='radio' name='level' value='Admin' " . ($row['Level'] == 'Admin' ? 'checked' : '') . "> Admin<br>";
                    echo "<input type='radio' name='level' value='User' " . ($row['Level'] == 'User' ? 'checked' : '') . "> User<br>";
                    ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="blokir" class="col-sm-2 col-form-label">Blokir User?</label>
                <div class="col-sm-4">
                    <?php 
                    echo "<input type='radio' name='blokir' value='Yes' " . ($row['Blokir'] == 'Yes' ? 'checked' : '') . "> Yes<br>";
                    echo "<input type='radio' name='blokir' value='No' " . ($row['Blokir'] == 'No' ? 'checked' : '') . "> No<br>";
                    ?>
                </div>
            </div>
            <div class="d-flex mb-3">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="me-auto p-2">
                    <button type="submit" class="btn btn-primary" name="update">Update Data</button>
                </div>
                <div class="p-2"><a href="../dash.php?module=m-user" type="submit" class="btn btn-danger">Go to Home</a></div>
            </div>
        </form>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php 
}
}
?>