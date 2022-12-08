<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tbl_login WHERE username = '$username'";
$hasil = mysqli_query($db_koneksi, $query);
$data = mysqli_fetch_array($hasil);

$pengacak = "p3ng4c4k";

$passmd = md5($pengacak . md5($password));
if ($passmd == $data['password'])
{
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username']; 

    echo "<h3>Login Yang Anda L4kukan telah Berhasil</h3>";
    header('location:../index_user.php');
}
else echo "<h2>Login Gagal</h2>";
?>