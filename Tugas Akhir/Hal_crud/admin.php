<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="css/styl3.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['level']) && isset($_SESSION['username'])) {
        if ($_SESSION['level'] == "admin") {
            echo "  <br>";
            echo "  <br>";
        } else if ($_SESSION['level'] == "user") {
            header('Location: index.php');
        }
    }

    if (!isset($_SESSION['level'])) {
        echo "Anda tidak boleh mengakses halaman ini tanpa : ";
        echo "<a href='.\index.php'>Login</a>";
        echo "<a href='.\register.php'>Register</a>";
    }

    ?>
    <div class="content">
        <header>
            <h1 class="judul">Ini adalah Dashboard</h1>
            <?php
            echo "<h3 align='center'>Di sini saya <b>" . $_SESSION['username'] . " sebagai &nbsp;</b>admin&nbsp; akan me-manage web A-Sports</h3>";

            ?>
        </header>
        <div class="menu">
            <ul>
                <li><a href="admin.php?page=home">HOME</a></li>
                <li><a href="admin.php?page=user">Manage User</a></li>
                <li><a href="admin.php?page=kelola">Manage Berita</a></li>
                <li><a href="../index_user.php">Kembali ke laptop</a></li>
            </ul>
        </div>
        <div class="badan">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'home';
                        include "page\homeuser.php";
                        break;
                    case 'user';
                        include "page\Manage_user.php";
                        break;
                    case 'kelola';
                        include "page\kelola.php";
                        break;
                    
                    default;
                        echo "<center><h3>Maaf. Halaman tidak ditemukan !</h3></center>";
                        break;
                }
            } else {
                include "page\homeuser.php";
            }
            ?>
        </div>
        <footer align="center" aria-hidden="true"></i>
        Copyright © 2022 KOLL-TAG
        </footer>
    </div>
</body>

</html>