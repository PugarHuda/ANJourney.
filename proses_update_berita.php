<?php
session_start();
if (!isset($_POST['judulBerita']) ) {
  header('Location:update_berita.php');
  exit;
}
include "koneksi.php";

date_default_timezone_set('Asia/Bangkok');

$judulBerita= $_POST['judulBerita'];
$ids = $_POST['ids'];
$deskripsiBerita= $_POST['deskripsiBerita'];
$penguploadBerita= $_POST['penguploadBerita'];
$tanggalBerita= $_POST['tanggalBerita'];

$dater2=date_create("$tanggalBerita");
$tanggalBerita = date_format($dater2,"Y-m-d");



 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = "-";
    $update_query2 = mysqli_query($conn, "UPDATE `berita` SET `judulBerita` = '$judulBerita', `deskripsiBerita` = '$deskripsiBerita', `tanggalBerita` = '$tanggalBerita', `gambarBerita` = '$newfilename', `penguploadBerita` = '$penguploadBerita' WHERE `berita`.`id_berita` = $ids;");
    if ($update_query2){
    echo "<script>
    alert ('Berita berhasil diubah');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=berita.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi galat, Berita gagal diubah');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=update_berita.php?id=$ids'>";
    }
}

else{
$target_dir = "images";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 10044070) {
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" ) {
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 echo "<script>
            alert ('Cek Ukuran File, Tipe File');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=update_berita.php?id=$ids'>";

}

else {
  $get_data = mysqli_query($conn, "SELECT gambarBerita FROM berita where id_berita='$ids'");
  $hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
  if($hasil['gambarBerita']<>"-")
  {
      unlink("images/".$hasil['gambarBerita']);
  }

$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)){

  $update_query = mysqli_query($conn, "UPDATE `berita` SET `judulBerita` = '$judulBerita', `deskripsiBerita` = '$deskripsiBerita', `tanggalBerita` = '$tanggalBerita', `gambarBerita` = '$newfilename', `penguploadBerita` = '$penguploadBerita' WHERE `berita`.`id_berita` = $ids;");
  if ($update_query){
  echo "<script>
  alert ('Berita berhasil diubah');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=berita.php'>";
  }

  else{
  echo "<script>
  alert ('Terjadi galat, Berita gagal diubah');
  </script>";
  echo "<meta http-equiv='refresh' content='0;url=update_berita.php?id=$ids'>";
  }
  } else {
      echo "<script>
            alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=update_berita.php?id=$ids'>";
  }
}
}



//--------------------------------------------------------------------------------------------------------------------------









?>
