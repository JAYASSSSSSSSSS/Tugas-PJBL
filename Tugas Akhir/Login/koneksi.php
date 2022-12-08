<?php
//koneksi database
$host="localhost";
$user="root";
$password="";
$database="db_tugasakhir";
$db_koneksi=mysqli_connect($host,$user,$password,$database);
if(!$db_koneksi){
    echo "Koneksi Database Gagal!!!";
}
?>