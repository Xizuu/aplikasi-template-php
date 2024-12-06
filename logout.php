<?php
session_start();

if (isset($_SESSION['username'])) {
    session_destroy();
}

header('Location: /aplikasi_template/login.php');