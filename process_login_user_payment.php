<?php
// Proses login

// Jika login berhasil, atur sesi
$_SESSION['user_id'] = $user_id;

// Redirect ke halaman payment.php
header("Location: payment.php");
exit();
?>