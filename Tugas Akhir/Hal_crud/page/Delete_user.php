<div class="halaman">
    <?php
    include "koneksi.php";
    $id=$_GET['id'];
    $query_delete="DELETE FROM tbl_login WHERE id_pengguna='$id'";
    $hasil=mysqli_query($db_koneksi,$query_delete);

    if($hasil){
        header('Location: ?page=user');
    }else{
        echo "Gagal Hapus Data";
    }
    ?>
</div>