<div class="halaman">
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_data_berita WHERE id_berita='$id';";
    $hasil = mysqli_query($db_koneksi, $query);
    $data = mysqli_fetch_array($hasil);
    ?>
    <h3>Edit data</h3>
    <form method="POST" action="">
        <table border="1" align="center">
            <tr><input type="hidden" name="id_berita" value="<?php echo $data['id_berita']; ?>"></tr>
            <tr>
                <td>Kategori Berita</td>
                <td>: </td>
                <td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>"></td>
            </tr>
            <tr>
                <td>Gambar Berita</td>
                <td>: </td>
                <td><input type="file" name="gambar" value="<?php echo $data['gambar']; ?>"></td>
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
                <td><input type="text" name="isi" value="<?php echo $data['isi']; ?>"></td>
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
@$tanggal = $_POST['tanggal'];
@$isi = $_POST['isi'];
@$submit = $_POST['submit'];
if ($submit) {
    $query_update = "UPDATE tbl_data_berita SET kategori='$kategori', gambar='$gambar', judul='$judul', tanggal='$tanggal', isi='$isi' WHERE id_berita = '$id_berita';";
    $hasil = mysqli_query($db_koneksi, $query_update) or die("ERROR UPDATE DATA");
    if ($hasil) {
        header('Location: ?page=kelola');
    }
}
?>
</div>