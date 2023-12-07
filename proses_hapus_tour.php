<?php
$id = $_GET['id'];
session_start();
include "koneksi.php";
date_default_timezone_set('Asia/Bangkok');
$target_dir = "images/";
$get_data = mysqli_query($conn,"SELECT gambarTour FROM detailtour where id_detailtour=$id");
$hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
if($hasil['gambarTour']<>"-")
{
    unlink("images/".$hasil['gambarTour']);
}


$query=mysqli_query($conn,"DELETE from detailtour where id_detailtour=$id");
echo "<script>
	alert ('tour berhasil dihapus');
	</script>";
echo"<meta http-equiv=refresh content=0;url=daftarTour.php>";
?>
