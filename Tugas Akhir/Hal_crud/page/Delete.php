<div class="halaman">
    <?php
    include "koneksi.php";
    $id=$_GET['id'];
    $query_delete="DELETE FROM tbl_data_berita WHERE id_berita='$id'";
    $hasil=mysqli_query($db_koneksi,$query_delete);

    if($hasil){
        header('Location: ?page=kelola');
    }else{
        echo "Gagal Hapus Data";
    }
    ?>
</div>