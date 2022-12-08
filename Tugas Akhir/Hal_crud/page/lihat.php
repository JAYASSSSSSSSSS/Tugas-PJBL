<div class="halaman">
    <!-- Isi halaman Kelola-->
    <?php
    include 
    "koneksi.php";
    $id=$_GET['id'];
    $query_lihat="SELECT * FROM tbl_data_berita WHERE id_berita='$id'";
    $hasil=mysqli_query($db_koneksi, $query_lihat);
    $data=mysqli_fetch_array($hasil);
    $no=1;
    ?>
    <h3>Lihat data</h3>
    <table border="1" align="center">
        <tr>
            <th>id</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Isi</th>
        </tr>
        <tr>
            <td><?php echo $data['id_berita'];?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><?php echo $data['gambar']; ?></td>
            <td><?php echo $data['judul']; ?></td> 
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['isi']; ?></td> 
        </tr>
    </table>
    <a class="bc" href="?page=kelola">Kembali Kelola</a>
</div>