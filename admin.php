<?php
session_start();
if (isset($_SESSION['admin']))
{

  include 'koneksi.php';
  $prevQuery = mysqli_query($conn, "SELECT username FROM admin WHERE id_admin = $_SESSION[admin]");
  $row = mysqli_fetch_array($prevQuery, MYSQLI_ASSOC);


echo"berhasil masuk <br />";
echo"Selamat datang : $row[username]";
echo"<br /><br />";
?>

<a href="logout.php">Logout</a>

<?php
}

else{
  header('location:login.php');
}
?>
