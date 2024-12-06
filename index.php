<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: /aplikasi_template/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPLATE APLIKASI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="template">
        <div id="header">
            <h1>Aplikasi Pendaftaran Mahasiswa Baru</h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/profil">Profil</a></li>
                <li><a href="/kontak">Kontak</a></li>
                <li>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo "<a href='/aplikasi_template/logout.php'>Logout</a>";
                    } else {
                        echo "<a href='/aplikasi_template/login.php'>Login</a>";
                    }
                    ?>
                </li>
            </ul>
        </div>

        <div id="content-wrapper">
            <div id="sidebar">Sidebar</div>
            <div id="content">Welcome, <?= $_SESSION['username'] ?></div>
        </div>
        <div id="footer">Footer</div>
    </div>   
</body>
</html>
