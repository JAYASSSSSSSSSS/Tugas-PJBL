<div class="halaman">
    <h2>Halaman Depan</h2>
    <p> 
<?php
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
        echo "<h3>Ini Halaman <b>".$_SESSION['level']."</b><br>";
        echo "Apa itu Administrator Web? <br> Admin adalah orang yang 
        mengelola desain web, penyebaran, pengembangan dan kegiatan pemeliharaan. 
        Melakukan pengujian dan menjamin kualitas dari situs web dan aplikasi web.";
}
if (!isset($_SESSION['level']))
    {
        echo "Anda tidak boleh mengakses halaman ini tanpa : ";
        echo "<a class='bc' href='..\index.php'>Login </a><br>";
        echo "<a class='bc' href='../register.php'>Belum punya User?</a>";
    }
?></p>
</div>