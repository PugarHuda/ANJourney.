<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "images/";
$get_data = mysqli_query($conn,"SELECT gambarWisata FROM detailwisata where id_detailWisata=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambarWisata']<>"-")
{
    unlink("images/".$hasil['gambarWisata']);
}


$query=mysqli_query($conn,"DELETE from detailwisata where id_detailWisata=$id");
echo "<script>
	alert ('wisata berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=daftarWisata.php>";
?>