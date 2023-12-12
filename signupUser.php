<?php
include "koneksi.php"
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir pendaftaran
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $signupEmail = htmlspecialchars($_POST['signupEmail']);
    $signupPassword = htmlspecialchars($_POST['signupPassword']);

    // Lakukan operasi pendaftaran (sesuai dengan logika aplikasi Anda)
    // Misalnya, masukkan data ke dalam tabel 'user'
    $sql = "INSERT INTO `user` (`namaDepan`, `namaBelakang`, `email`, `password`) VALUES ('$firstName', '$lastName', '$signupEmail', '$signupPassword')";
    
    // Eksekusi query (pastikan koneksi database sudah tersedia)
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil! Selamat datang, $firstName $lastName.";
    } else {
        echo "Terjadi kesalahan saat mendaftar. Silakan coba lagi.";
    }
} else {
    // Tangani situasi di mana skrip diakses tanpa menggunakan metode POST
    echo "Akses tidak valid.";
}
?>