<?php
session_start();
require 'config.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM users 
            WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email; // Simpan email pengguna ke dalam session
    header("Location: profil.php");
} else {
    ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login Error</title>
            <link rel="stylesheet" href="style6.css">
        </head>
        <body>
            <div class="error-container">
                <h1>Email atau Kata Sandi Salah. Silakan Masuk Kembali atau Registrasi Baru.</h1>
                <button class="login-button" onclick="location.href='login.html'">Masuk</button>
                <button class="login-button" onclick="location.href='registrasi.html'">Registrasi</button>
            </div>
        </body>
        </html>

    <?php
}
?>
