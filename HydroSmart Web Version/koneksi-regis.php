<?php
require 'config.php';
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// Query SQL untuk memeriksa apakah email sudah ada di database
$check_email_query = "SELECT * FROM users WHERE email = '$email'";
$check_result = mysqli_query($conn, $check_email_query);

if (mysqli_num_rows($check_result) > 0) {
    // Jika email sudah ada, tampilkan pesan kesalahan
    

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
            <h1>Email sudah digunakan, masuk atau registrasi dengan email baru.</h1>
            <button class="login-button"><a href="login.html">Masuk</a></button>
            <br>
            <button class="login-button"><a href="registrasi.html">Registrasi</a></button>
        </div>
    </body>
    </html>
    <?php


} else {
    // Jika email belum ada, lanjutkan dengan menyimpan data pengguna ke database
    $query_sql = "INSERT INTO users (username, email, password) 
                VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $query_sql)) {
        header("Location: login.html");
    } else {
        echo "Pendaftaran Gagal : " . mysqli_error($conn);
    }
}
?>
