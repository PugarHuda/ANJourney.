<?php
include 'koneksi.php';

// Mulai sesi
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginEmail"]) && isset($_POST["loginPassword"])) {
    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];

    // Pertimbangkan penggunaan fungsi hash untuk meningkatkan keamanan
    // Contoh: $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION["user_email"] = $email;
        echo "Login berhasil";
    } else {
        // Kombinasi email dan kata sandi tidak valid
        echo "Kombinasi email dan kata sandi tidak valid. Silakan coba lagi.";
    }
} else {
    // Data POST tidak lengkap

    // Periksa apakah pengguna sudah login dari sesi sebelumnya
    if (isset($_SESSION["user_email"])) {
        echo "Pengguna sudah login. Selamat datang, " . $_SESSION["user_email"] . "!";
    } else {
        echo "Data login tidak lengkap. Silakan isi semua kolom.";
    }
}
?>