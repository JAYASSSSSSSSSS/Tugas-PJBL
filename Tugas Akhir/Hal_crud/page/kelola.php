<div class="halaman">
    <!-- Isi halaman Kelola-->
    <?php
    include "koneksi.php";
    if (isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            //menampilkan data kelola
            default:
            $query="SELECT * FROM tbl_data_berita";
            $hasil=mysqli_query($db_koneksi,$query);
    ?>
    <center><h2>Halaman Kelola Kontan</h2></center>
    <a class="bc" href="?page=kelola&aksi=tambah">Tambah</a>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Isi</th>
            <th colspan="3">Action</th>
        </tr>
        <?php
        $no=1;
        while ($data=mysqli_fetch_array($hasil)){?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['kategori']; ?></td>
            <td><?php echo $data['gambar']; ?></td>
            <td><?php echo $data['judul']; ?></td> 
            <td><?php echo $data['tanggal']; ?></td>
            <td><?php echo $data['isi']; ?></td>
            <td><a class="bc" href="?page=kelola&aksi=lihat&id=<?php echo $data['id_berita'];?>">View</a></td>
            <td><a class="bc" href="?page=kelola&aksi=update&id=<?php echo $data['id_berita'];?>">Update</a></td>
            <td><a class="bc" href="?page=kelola&aksi=delete&id=<?php echo $data['id_berita'];?>" onclick="return confirm ('Apakah anda yakin menghapus data?')">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    break;
    case "tambah";
    include "page/tambah.php";
    break;
    // Lihat data
    case "lihat";
    include "page/lihat.php";
    break;
    //Update data
    case "update";
    include "page\update.php";
    break;
    //Delete
    case "delete";
    include "page\delete.php";
    break;
        }
    }else{
        include "./home.php";
    }
    ?>
</div>