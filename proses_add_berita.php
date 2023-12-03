<?php
session_start();
if (!isset($_POST['judulBerita']) ) {
  header('Location:add_berita.php');
  exit;
}
include "koneksi.php";

date_default_timezone_set('Asia/Bangkok');

// Ambil data dari form
$judulBerita = $_POST['judulBerita'];
$deskripsiBerita = $_POST['deskripsiBerita'];
$penguploadBerita = $_POST['penguploadBerita'];
$tanggalBerita = $_POST['tanggalBerita'];

// Format ulang tanggal

$dater2 = date_create("$tanggalBerita");
$tanggalBerita = date_format($dater2, "Y-m-d");

 if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"]=="")
{
    $newfilename = "-";
    $insert_query2 = mysqli_query($conn, "INSERT INTO `berita` (`id_berita`, `judulBerita`, `deskripsiBerita`, `tanggalBerita`, `gambarBerita`) VALUES (NULL, '$judulBerita', '$deskripsiBerita', '$tanggalBerita', '$newfilename'); ");
    if ($insert_query2){
    echo "<script>
    alert ('Berita berhasil ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=berita.php'>";
    }

    else{
    echo "<script>
    alert ('Terjadi galat, Berita gagal ditambahkan');
    </script>";
    echo "<meta http-equiv='refresh' content='0;url=add_berita.php'>";
    }
}
else{
$target_dir = "images/";
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
    if ($imageFileType != "jpg" && $imageFileType != "png") {
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>
            alert ('Cek Ukuran File, Tipe File');
        </script>";
        echo "<meta http-equiv='refresh' content='0;url=add_berita.php'>";
    } else {
        // Generate nama baru untuk file
        $temp = explode(".", $_FILES["fileToUpload"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);

        // Pindahkan file ke direktori yang ditentukan
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)) {
            // Lakukan query untuk menyimpan data berita ke database
            $insert_query2 = mysqli_query($conn, "INSERT INTO `berita` (`id_berita`, `gambarBerita`, `judulBerita`, `tanggalBerita`, `penguploadBerita`, `deskripsiBerita`) VALUES (NULL, '$newfilename', '$judulBerita', '$tanggalBerita', '$penguploadBerita', '$deskripsiBerita'); ");

            // Cek apakah query berhasil atau tidak
            if ($insert_query2) {
                echo "<script>
                    alert ('Berita berhasil ditambahkan');
                </script>";
                echo "<meta http-equiv='refresh' content='0;url=berita.php'>";
            } else {
                echo "<script>
                    alert ('Terjadi galat, Berita gagal ditambahkan');
                </script>";
                echo "<meta http-equiv='refresh' content='0;url=add_berita.php'>";
            }
        } else {
            echo "<script>
                alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=add_berita.php'>";
        }
    }
}
?>