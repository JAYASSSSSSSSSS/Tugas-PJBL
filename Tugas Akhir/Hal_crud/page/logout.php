<div class="halaman">
<?php
session_start();
unset ($_SESSION['username']);
unset ($_SESSION['level']);
session_destroy();
echo "<h1>Anda sudah logout</h1>";
echo "<p><a class='bc' href='..\index.php'>Login Kembali</a></p>";
?>
</div>