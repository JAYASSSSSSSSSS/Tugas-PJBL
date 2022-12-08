<div class="halaman">
    <p> 
<?php
if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
        echo "<h3>Apa itu Administrator Web?</h3> <br> Admin adalah orang yang 
        mengelola desain web, penyebaran, pengembangan dan kegiatan pemeliharaan.<br> 
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