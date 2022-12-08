<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="styl3.css">
</head>

<body>
    <div class="content">
        <div class="badan">
            <div class="halaman">
            <?php
            include "Koneksi.php";
            $query = "SELECT * FROM about WHERE kategori='detail1'";
            $hasil = mysqli_query($db_koneksi, $query);
            $data = mysqli_fetch_array($hasil);
            if (!$data) {
                echo "Data Kosong";
            } else {
                echo "<img class='a' src='../images/01102022.png'><br>
                <br>".$data['judul']." (".$data['tanggal'].")<br><br>".$data['isi'].".";
            }
            ?>
            </div>
        </div>
    </div>
</body>

</html>