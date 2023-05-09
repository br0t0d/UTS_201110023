<?php
session_start();
$username = 'user';
$password = 'user';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION["username"] = $username;
        header("Location: daftar.php");
    } else {
        header("Location: index.html");
    }
}
