<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "images/";
$get_data = mysqli_query($conn,"SELECT gambarBerita FROM berita where id_berita=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambarBerita']<>"-")
{
    unlink("images/".$hasil['gambarBerita']);
}


$query=mysqli_query($conn,"DELETE from berita where id_berita=$id");
echo "<script>
	alert ('Berita berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=berita.php>";
?>
