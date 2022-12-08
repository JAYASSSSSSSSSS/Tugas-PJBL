<div class="halaman">
    <!-- Isi halaman Kelola-->
    <?php
    include "koneksi.php";
    if (isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            //menampilkan data kelola
            default:
            $query="SELECT * FROM tbl_login";
            $hasil=mysqli_query($db_koneksi,$query);
    ?>
    <center><h2>Halaman Kelola User</h2></center>
    <table border="1" align="center">
        <tr>
            <th>No</th>
            <th>id_user</th>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no=1;
        while ($data=mysqli_fetch_array($hasil)){?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['id_pengguna']; ?></td>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['password']; ?></td>
            <td><?php echo $data['level']; ?></td> 
            <td><a class="bc" href="?page=user&aksi=delet&id=<?php echo $data['id_pengguna'];?>" onclick="return confirm ('Apakah anda yakin menghapus data?')">Delete</a></td>
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
    case "delet";
    include "page/Delete_user.php";
    break;
        }
    }else{
        include "./home.php";
    }
    ?>
</div>