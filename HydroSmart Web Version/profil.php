<!-- <?php
session_start();
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    require 'config.php'; // Memuat file konfigurasi database

    // Query SQL untuk mengambil informasi pengguna berdasarkan email
    $query_sql = "SELECT username, email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        // Mengambil data pengguna
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Tidak ada data pengguna.";
    }

    mysqli_close($conn); // Menutup koneksi database
} else {
    // Jika session email tidak ada, arahkan pengguna kembali ke halaman login
    header("Location: login.html");
    exit();
}
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="header-wrapper">
        <header>
            <div class="logo-container">
                <img src="img/logo-putih.png" alt="Logo" class="logo">
            </div>
            <div class="nav-container">
                <a href="home.html" class="nav-button" style="text-decoration: none;">
                    <i class="fas fa-home"></i>
                    <span>Home</span>
                </a>
                <a href="alarm.html" class="nav-button" style="text-decoration: none;">
                    <i class="fas fa-bell"></i>
                    <span>Notification</span>
                </a>
                <a href="profil.php" class="nav-button" style="text-decoration: none;">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </div>
        </header>
    </div>
    <div class="container">
        <img class="profile-picture" src="img/mawar.jpg" alt="Profile Picture">

        <div class="profile-info">
            <h2>Nama</h2>
            <p><?php echo $row["username"]; ?></p>
        </div>

        <div class="profile-info">
            <h2>Email</h2>
            <p><?php echo $row["email"]; ?></p>
        </div>

        <a href="logout.php" class="logout-button">Logout</a>
    </div>

</body>
</html>
