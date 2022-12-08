<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login TA</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div id="preloader">
        <img class="preloader" src="../images/loading-img.gif" alt="">
    </div>
    <div class="login">
    <form method="post" action="submit_Login.php">
        <div class="avatar">
        </div>
        <h2>Login Form</h2>
        <div class="box-login">
            <input type="text" placeholder="Username" name="username">
        </div>
        <div class="box-login">
            <input type="text" placeholder="Password" name="password">
        </div>

        <div class="bottom">
            <a>Remember Me<input type='checkbox'></a><br>
            <a href="register.php">Register Here</a>
        </div>

        <table> 
        <tr >
            <td>&nbsp;</td>
            <td ><input class="btn-login" type="submit" name="Submit" value="Submit"></td>
        </tr>       
        </table>

    </div>
    <script src="../js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/custom.js"></script>
</body>
</html>