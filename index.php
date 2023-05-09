<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Kesehatan</title>
</head>

<?php
session_start();
$username = 'user';
$password = 'user';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION["username"] = $username;
        header("Location: daftar.php");
    } else {
        $pesan = '<p>Username Atau Password Tidak Benar</p>';
    }
} else {
    $pesan = '';
} ?>

<body>
    <div class="loginform">
        <h3>LOGIN</h3>
        <hr>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post' class="form_login">
            <label for="username">Username : user</label><br>
            <input type="text" name="username" id="username" style="background-color: #fffffe;"> <br>
            <label for="password">Password : user</label><br>
            <input type="password" name="password" id="password" style="background-color: #fffffe;"><br>

            <div class="pesan_login">
                <?= $pesan; ?>
            </div>
            <input type="submit" name="submit" value="Masuk" class="button_login" style="width: 30%;">
        </form>

    </div>
</body>

</html>