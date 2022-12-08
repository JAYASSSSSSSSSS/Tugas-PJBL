<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register TA</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form method="post" action="submit_register.php">
    <div class="login">
        <div class="avatar">
            <i class="fa fa-user"></i>
        </div>
        <h2>Halaman Register</h2>
        <div class="box-login">
            <input type="text" placeholder="Username" name="username">
        </div>
        <div class="box-login">
            <input type="text" placeholder="Masukkan Password" name="pas1">
        </div>
        <div class="box-login">
            <input type="text" placeholder="Ulangi Password" name="pas2">
        </div>
        <div class="bottom">
            <a href="login.php">Jika sudah punya akun silahkan login</a>
        </div>

        <table> 
        <tr >
            <td>&nbsp;</td>
            <td ><input class="btn-login" type="submit" name="Submit" value="Submit"></td>
        </tr>       
        </table>

    </div>
</body>
</html>
