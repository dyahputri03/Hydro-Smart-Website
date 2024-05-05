<?php
// Mulai sesi
session_start();

// Hentikan sesi
session_destroy();

// Redirect pengguna ke halaman login
header("Location: login.html");
exit;
?>
