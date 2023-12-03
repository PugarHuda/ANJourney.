<?php
session_start();
if (!isset($_POST['namaKota'])) {
    header('Location:update_tour.php');
    exit;
}
include "koneksi.php";

date_default_timezone_set('Asia/Bangkok');

$namaKota = $_POST['namaKota'];
$ids = $_POST['ids'];
$namaTour = $_POST['namaTour'];
$ketersediaanTour = $_POST['ketersediaanTour'];
$durasiTour = $_POST['durasiTour'];
$hargaTour = $_POST['hargaTour'];
$kategoriTour = $_POST['kategoriTour'];
$deskripsiTour = $_POST['deskripsiTour'];

if ($_FILES['fileToUpload']['size'] == 0 && $_FILES['fileToUpload']['error'] == 0 || $_FILES["fileToUpload"]["name"] == "") {
    $newfilename = "-";
    $update_query2 = mysqli_query($conn, "UPDATE `detailtour` SET `namaKota` = '$namaKota', `namaTour` = '$namaTour', `durasiTour` = '$durasiTour', `gambarTour` = '$newfilename', `ketersediaanTour` = '$ketersediaanTour', `hargaTour` = '$hargaTour', `kategoriTour` = '$kategoriTour', `deskripsiTour` = '$deskripsiTour' WHERE `id_detailtour` = $ids");
    if ($update_query2) {
        echo "<script>
        alert ('Tour berhasil diubah');
        </script>";
        echo "<meta http-equiv='refresh' content='0;url=daftarTour.php'>";
    } else {
        echo "<script>
        alert ('Terjadi galat, Berita gagal diubah');
        </script>";
        echo "<meta http-equiv='refresh' content='0;url=update_tour.php?id=$ids'>";
    }
} else {
    $target_dir = "images";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
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
        echo "<meta http-equiv='refresh' content='0;url=update_tour.php?id=$ids'>";
    } else {
        $get_data = mysqli_query($conn, "SELECT gambarTour FROM detailtour where id_detailtour='$ids'");
        $hasil = mysqli_fetch_array($get_data, MYSQLI_ASSOC);
        if ($hasil['gambarTour'] <> "-") {
            unlink("images/" . $hasil['gambarTour']);
        }

        $temp = explode(".", $_FILES["fileToUpload"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "$target_dir" . $newfilename)) {

            $update_query2 = mysqli_query($conn, "UPDATE `detailtour` SET `namaKota` = '$namaKota', `namaTour` = '$namaTour', `durasiTour` = '$durasiTour', `gambarTour` = '$newfilename', `ketersediaanTour` = '$ketersediaanTour', `hargaTour` = '$hargaTour', `kategoriTour` = '$kategoriTour', `deskripsiTour` = '$deskripsiTour' WHERE `id_detailtour` = $ids");
            if ($update_query2) {
                echo "<script>
                alert ('tour berhasil diubah');
                </script>";
                echo "<meta http-equiv='refresh' content='0;url=daftarTour.php'>";
            } else {
                echo "<script>
                alert ('Terjadi galat, tour gagal diubah');
                </script>";
                echo "<meta http-equiv='refresh' content='0;url=update_tour.php?id=$ids'>";
            }
        } else {
            echo "<script>
            alert ('Sorry, there was an error uploading your file');
            </script>";
            echo "<meta http-equiv='refresh' content='0;url=update_tour.php?id=$ids'>";
        }
    }
}
?>
