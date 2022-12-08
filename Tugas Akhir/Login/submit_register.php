<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login TA</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="login">
<?php
$username = $_POST['username'];
$password1 = $_POST['pas1'];
$password2 = $_POST['pas2'];
$level = "user";//otomatis setiap register dianggap level user
// cek kesamaan password
if ($password1 == $password2)
{
    include "koneksi.php";
    // perlu dibuat sebarang pengacak
    $pengacak = "p3ng4c4k";
    //mengenskripsi password dengan MD5() dan pengacak
    $passmd = md5($pengacak . md5($password1));
    //menyimpan username dan password terenskripsi ke database
    $query = "INSERT INTO tbl_login VALUES('','$username', '$passmd', '$level')";
    $hasil = mysqli_query($db_koneksi,$query);
    //menampilkan status pendaftaran
    if ($hasil) echo "<h3>User sudah berhasil terdaftar
    <br><a href='login.php'><h3>Login</h3></a>";
    else echo "Username sudah ada yang memiliki";
}
else echo "Password pertama yang dimasukkan tidak sama dengan password kedua";
?>
    </div>
</body>
</html>