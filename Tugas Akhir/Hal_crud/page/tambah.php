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
    $query_insert="INSERT INTO tbl_data_berita VALUES ('','$kategori','$gambar','$judul','$tanggal','$isi')"; 
    $hasil=mysqli_query($db_koneksi,$query_insert) or die ("ERROR INSERT DATA");
    if($hasil){
        header('Location:?page=kelola');
    }
}
?>