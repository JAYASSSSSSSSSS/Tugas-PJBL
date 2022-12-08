<div class="halaman">
<?php
// menjalankan session : selalu diletakkan di awal 
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
    //jika level admin akan masuk ke halaman admin.php
    if ($_SESSION['level'] == "admin")
    {
        echo "<form action='Tugashal3.php' method='post' name='input'>
    <table align ='center' width='37%'>
        <tr>
            <td>Kategori Berita</td>
            <td>:</td>
            <td><input type='text' name='kategori' size='50' placeholder='Masukkan Kategori'><required='jangan sampai kosong'></font></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type='file' name='foto' id='foto' required=''></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><textarea name='judul' cols='48' rows='3'></textarea></td>
        </tr>
        <tr align='left'>
            <td>Tanggal publish</td>
            <td>:</td>
            <td><input type='date' name='tanggal' size='7' required='jangan sampai kosong'> 
        </td>
        </tr>
        <tr>
            <td>Isi Berita</td>
            <td>:</td>
            <td>
                <textarea name='alamat' cols='48' rows='7'></textarea><br>
            </td>
        </tr>
        <tr><td colspan='3'><input type='submit' name='submit' value='TAMBAH'></td></tr>
    </table>   
    </form>";
    
    include "koneksi.php";
@$id_konten=$_POST['id_berita'];
@$kategori = $_POST['kategori'];
@$gambar = $_POST['gambar'];
@$judul = $_POST['judul'];
@$tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
@$isi = $_POST['isi'];
@$kirim = $_POST['submit'];
@$query="INSERT INTO tbl_data_berita VALUES ('$id_berita','$kategori','$gambar','$judul','$tanggal','$isi')";
    if($kirim){
        $hasil=mysqli_query($db_koneksi,$query);
        echo "<br><center>Data berhasil disimpan ";
        echo "<a href='HalamanTGS.php'> Lihat Data</a>";
    }
    echo "<a href='Insert.php'><center>Halaman Daftar</a>";
    }

    else{
        echo "<h1 align ='center'>Anda bukan Admin</a>";
    }
}
?>
</div>


<div class="halaman">
    <h2>Tambah data</h2>
    <form method="POST" action="">
        <table border="1" align="center">
            <tr><input type="hidden" name="id_konten"></tr>
            <tr>
                <td>Kategori Berita </td>
                <td>: </td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
                <td>Isi Berita </td>
                <td>: </td>
                <td><textarea name="isi"></textarea></td>
            </tr>
            <tr><td colspan="3"><input type="submit" name="submit" value="TAMBAH"></td></tr>
        </table>
    </form>
    <a class="bc" href="?page=kelola">Kembali Kelola</a>
</div>
<?php
include "koneksi.php";
@$id_konten = $_POST['id_konten'];
@$kategori = $_POST['kategori'];
@$isi = $_POST['isi'];
@$submit = $_POST['submit'];
if($submit){
    $query_insert="INSERT INTO tb_konten VALUES ('','$kategori','$isi');";
    $hasil=mysqli_query($db_koneksi,$query_insert) or die ("ERROR INSERT DATA");
    if($hasil){
        header('Location:?page=kelola');
    }
}
?>
<div class="halaman">
    <h2>Tambah data</h2>
    <form method="POST" action="">
        <table border="1" align="center">
        <tr><input type="hidden" name="id_berita"></tr>
        <tr>
            <td>Kategori Berita</td>
            <td>:</td>
            <td><input type="text" name="kategori" size="50" placeholder="Masukkan Kategori"></font></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar"></i></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><textarea name="judul" cols="48" rows="3"></textarea></td>
        </tr>
        <tr align="left">
            <td>Tanggal publish</td>
            <td>:</td>
            <td><input type="date" name="tanggal" size="7"> 
        </td>
        </tr>
        <tr>
            <td>Isi Berita</td>
            <td>:</td>
            <td>
                <textarea name="isi" cols="48" rows="7"></textarea><br>
            </td>
        </tr>
            <tr><td colspan="3"><input type="submit" name="submit" value="TAMBAH"></td></tr>
        </table>
    </form>
    <a class="bc" href="?page=kelola">Kembali Kelola</a>
</div>
<?php
include "koneksi.php";
@$id_berita=$_POST['id_berita'];
@$kategori = $_POST['kategori'];
@$gambar = $_POST['gambar'];
@$judul = $_POST['judul'];
@$tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
@$isi = $_POST['isi'];
@$submit = $_POST['submit'];
if($submit){
    $query_insert="INSERT INTO 'tbl_data_berita` (`id_berita`, `kategori`, `gambar`, `judul`, `tanggal`, `isi`) VALUES ('$id_berita','$kategori','$gambar','$judul','$tanggal','$isi')"; 
    $hasil=mysqli_query($db_koneksi,$query_insert) or die ("ERROR INSERT DATA");
    if($hasil){
        header('Location:?page=kelola');
    }
}

?>

<html>
    <head><title>Tugas Modul 4</title>
    <link rel="stylesheet" href="ts.css"
</head>
<body>
<div class="container">
<?php
session_start();
include "Connect.php";
$nis=$_GET['nis'];
$query="SELECT * FROM tb_siswa WHERE nis='$nis'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);
if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
    //jika level admin akan masuk ke halaman admin.php
    if ($_SESSION['level'] == "admin")
    {
        echo "<form method='post' action='proses.php'>
        <table >
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type='text' name='nis' value='$data[nis]' readonly='readonly'></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type='text' name='nama' value='$data[nama]'></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type='text' name='kelas' value='$data[kelas]'></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type='text' name='ttl' value='$data[ttl]'></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type='text' name='alamat' value='$data[alamat]'></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type='text' name='kota' value='$data[kota]'></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type='text' name='jk' value='$data[jk]'></td>
        </tr>
        <tr>
            <td>Hobby</td>
            <td>:</td>
            <td><input type='text' name='hobi' value='$data[hobi]'></td>
        </tr>
        <tr>
            <td>Ekstrakulikuler yang anda pilih</td>
            <td>:</td>
            <td><input type='text' name='ekskul' value='$data[ekskul]'></td>
        </tr>
        <tr>
            <td><input type='submit' name='submit' value='Kirim'></td>
            <td></td>
            <td><input type='reset' name='reset' value='Batal'></td>
        </tr>
        </table>
        </form>";
        }

    else{
        echo "<h1 align ='center'> Maaf anda bukan Admin</a>";
    }   
}
?>
</div>
</body>
</html>

<?php
include "Connect.php";
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$ttl=$_POST['ttl'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$jk=$_POST['jk'];
$hobi=$_POST['hobi'];
$ekskul=$_POST['ekskul'];

$query="UPDATE tb_siswa SET nama='$nama', kelas='$kelas', alamat= '$alamat', kota='$kota', jk='$jk', hobi='$hobi', ttl='$ttl', ekskul='$ekskul' WHERE nis='$nis';";
$hasil=mysqli_query($koneksi,$query);
if ($hasil){
    header('location:HalamanTGS.php');
}else{
    echo"Gagal update data";
    echo 'mysqli_error()';
}
?>

<div class="halaman">
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $queri = "SELECT * FROM tbl_data_berita WHERE id_berita='$id'";
    $hasil = mysqli_query($db_koneksi, $queri);
    $data = mysqli_fetch_array($hasil);
    ?>
    <h3>Edit data</h3>
    <form method="POST" action="">
        <table border="1" align="center">
            <tr><input type="hidden" name="id_konten" value="<?php echo $data['id_berita']; ?>"></tr>
            <tr>
                <td>Kategori Berita</td>
                <td>: </td>
                <td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>"></td>
            </tr>
            <tr>
                <td>Gambar Berita</td>
                <td>: </td>
                <td><input type="text" name="gambar" value="<?php echo $data['gambar']; ?>"></td>
            </tr>
            <tr>
                <td>Judul Berita</td>
                <td>: </td>
                <td><textarea name="judul"><?php echo $data['judul']; ?></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Publish</td>
                <td>: </td>
                <td><input type="text" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
            </tr>
            <tr>
                <td>Isi Berita</td>
                <td>: </td>
                <td><textarea name="isi"><?php echo $data['isi']; ?></textarea></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit" value="UPDATE"></td>
            </tr>
        </table>
    </form>
    <a class="bc" href="?page=kelola">Kembali Kelola</a>
</div>
<?php
@$id_berita = $_POST['id_berita'];
@$kategori = $_POST['kategori'];
@$gambar = $_POST['gambar'];
@$judul = $_POST['judul'];
@$tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
@$isi = $_POST['isi'];
@$submit = $_POST['submit'];
if ($submit) {
    $query_update = "UPDATE tbl_data_berita SET kategori='$kategori', gambar='$gambar', judul='$judul', tanggal='$tanggal', isi='$isi' WHERE id_berita ='$id_berita'";
    $hasil = mysqli_query($db_koneksi, $query_update) or die("ERROR UPDATE DATA");
    if ($hasil) {
        header('Location: ?page=kelola');
    }
}
?>
</div>