               <?php
// Mulai sesi (pastikan ini diletakkan di awal file atau sebelum output apapun)
session_start();

// Periksa apakah pengguna sudah login
if (isset($_SESSION['user_id'])) {
    // Pengguna sudah login, arahkan ke halaman payment.php
    header("Location: payment.php");
    exit(); // Pastikan untuk keluar dari skrip setelah mengarahkan pengguna
}
?>
               <?php include "koneksi.php"?>



               <!DOCTYPE html>
               <html lang="zxx">

               <head>
                   <!-- META TAGS -->
                   <meta charset="utf-8" />
                   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                   <title>ANJourney</title>
                   <meta name="author" content="GFX Partner" />
                   <meta name="description" content="ANJourney | for Tour Operators & Travel Agencies around Nation" />
                   <meta name="keywords"
                       content="tour, ice, trip, travel, agency, life, vacation, treking, boat, walking, climbing, transition, svg, php, css" />

                   <!-- FAVICON FILES -->
                   <link href="ico/anjIcon.png" rel="apple-touch-icon" sizes="144x144" />
                   <link href="ico/anjIcon.png" rel="apple-touch-icon" sizes="114x114" />
                   <link href="ico/anjIcon.png" rel="apple-touch-icon" sizes="72x72" />
                   <link href="ico/anjIcon.png" rel="apple-touch-icon" />
                   <link href="ico/anjIcon.png" rel="shortcut icon" />

                   <!-- CSS FILES -->
                   <link rel="stylesheet" href="css/swiper.min.css" />
                   <link rel="stylesheet" href="css/daterangepicker.css" />
                   <link rel="stylesheet"
                       href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
                   <link rel="stylesheet"
                       href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                       integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                       crossorigin="anonymous" />
                   <link rel="stylesheet" href="css/style.css" />

                   <!-- link baru -->
                   <link rel="stylesheet" href="css/profile.css" />
               </head>

               <body>
                   <div class="preloader">
                       <svg class="spinner" viewBox="0 0 50 50">
                           <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
                       </svg>
                   </div>
                   <!-- end preloader -->
                   <?php
// ID user yang ingin ditampilkan (sesuaikan dengan kebutuhan Anda)
$userId = 1;

// Query untuk mendapatkan data dari tabel "user" berdasarkan ID
$sql = "SELECT * FROM user WHERE id_user = $userId";
$result = $conn->query($sql);

// Periksa apakah data ditemukan
if ($result->num_rows > 0) {
    // Ambil data dan isi formulir
    $userRow = $result->fetch_assoc();
?>

                   <div class="search-box">
                       <div class="container">
                           <div class="row">
                               <div class="col-12">
                                   <span class="search-close-btn"><i class="fa fa-times"></i></span>
                                   <h3>Profile</h3>
                               </div>
                               <div class="container mt-5">
                                   <div class="row">
                                       <div class="col-lg-8 pb-5">
                                           <form class="row">
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label for="account-fn">NAMA DEPAN</label>
                                                       <input class="form-control" type="text" id="account-fn"
                                                           value="<?php echo $userRow['namaDepan']; ?>" disabled="" />
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label for="account-ln">NAMA BELAKANG</label>
                                                       <input class="form-control" type="text" id="account-ln"
                                                           value="<?php echo $userRow['namaBelakang']; ?>"
                                                           disabled="" />
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label for="account-email">E-MAIL</label>
                                                       <input class="form-control" type="email" id="account-email"
                                                           value="<?php echo $userRow['email']; ?>" disabled="" />
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label for="account-phone">No.HP</label>
                                                       <input class="form-control" type="text" id="account-phone"
                                                           value="<?php echo $userRow['noTelepon']; ?>" disabled="" />
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label for="account-pass">PASSWORD</label>
                                                       <input class="form-control" type="password" id="account-pass"
                                                           value="<?php echo $userRow['password']; ?>" disabled="" />
                                                   </div>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                               <!-- end col-12 -->
                           </div>
                           <!-- end row -->
                       </div>
                       <!-- end container -->
                   </div>

                   <?php
} else {
    echo "Data user tidak ditemukan.";
}

?>

                   <!-- end search-box -->
                   <header class="header-int">
                       <div class="container">
                           <nav class="navbar dark">
                               <a href="index.php" class="navbar-brand"><img src="images/anjBlack.png"
                                       alt="Image" /></a>
                               <div class="menu-btn">
                                   <div class="menu-circle-wrap">
                                       <div class="wave"></div>
                                       <svg class="menu-circle" xmlns="http://www.w3.org/2000/svg"
                                           xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid"
                                           width="52" height="52" viewBox="0 0 52 52">
                                           <path d="M1,26a25,25 0 1,0 50,0a25,25 0 1,0 -50,0"></path>
                                       </svg>
                                   </div>
                                   <div class="bars">
                                       <div class="bar b1"></div>
                                       <div class="bar b2"></div>
                                       <div class="bar b3"></div>
                                   </div>
                               </div>
                               <!-- end menu-btn -->
                               <span class="search-btn"><i class="bi bi-person-circle"></i>
                                   <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                       class="bi bi-person-circle" viewBox="0 0 16 16">
                                       <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                       <path fill-rule="evenodd"
                                           d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                   </svg>
                               </span>
                               <ul class="navbar-nav">
                                   <li class="nav-item dropdown">
                                       <a class="nav-link" href="index.php">HOME</a>
                                   </li>
                                   <li class="nav-item"><a class="nav-link" href="tours-list.php">TOURS</a></li>
                                   <li class="nav-item dropdown">
                                       <a class="nav-link">CATEGORY</a>
                                       <ul class="dropdown-menu">
                                           <li><a href="katTari.php">TARI</a></li>
                                           <li><a href="katTea.php">TEATER</a></li>
                                           <li><a href="katMus.php">MUSIK</a></li>
                                           <li><a href="katPam.php">PAMERAN VISUAL</a></li>
                                       </ul>
                                   </li>
                                   <li class="nav-item"><a class="nav-link" href="about-us.php">ABOUT US</a></li>
                                   <li class="nav-item">
                                       <a id="login-logout-link" class="nav-link" href="#"
                                           onclick="toggleLoginStatus()">LOGIN</a>
                                   </li>
                                   <div id="loginModal" class="modal">
                                       <div class="modal-content">
                                           <span class="close" onclick="closeLoginModal()">&times;</span>
                                           <h2>Welcome Back</h2>
                                           <form id="loginForm" method="POST" action="loginUser.php"
                                               onsubmit="submitLoginForm(event)">
                                               <div class="form-group">
                                                   <input type="email" id="loginEmail" name="loginEmail"
                                                       placeholder="Email" required />
                                               </div>
                                               <div class="form-group">
                                                   <input type="password" id="loginPassword" name="loginPassword"
                                                       placeholder="Password" required />
                                               </div>
                                               <button type="submit" class="login-btn">Login</button>
                                           </form>
                                           <p class="signup-link">Don't have an account? <a href="#"
                                                   id="signup-link">Sign Up</a></p>
                                       </div>
                                   </div>

                                   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                   <script>
                                   function submitLoginForm(event) {
                                       event.preventDefault();

                                       var email = $("#loginEmail").val();
                                       var password = $("#loginPassword").val();

                                       $.ajax({
                                           type: "POST",
                                           url: "loginUser.php",
                                           data: {
                                               loginEmail: email,
                                               loginPassword: password
                                           },
                                           success: function(response) {
                                               alert(response);
                                               if (response.includes("Login berhasil")) {
                                                   closeLoginModal();
                                                   updateLoginStatus(true);
                                               }
                                           },
                                           error: function(xhr, status, error) {
                                               alert(
                                                   "Terjadi kesalahan saat melakukan login. Silakan coba lagi.");
                                           }
                                       });
                                   }

                                   function openSignUpModal() {
                                       // Tambahkan logika untuk membuka modal pendaftaran
                                       // Misalnya, dengan menampilkan modal signup atau menavigasi ke halaman pendaftaran
                                       $("#signupModal").show();
                                   }

                                   function closeLoginModal() {
                                       $("#loginModal").hide();
                                   }

                                   // ... Fungsi-fungsi lainnya ...

                                   $(document).ready(function() {
                                       // Menangani klik pada tautan "Sign Up"
                                       $("#signup-link").click(function() {
                                           openSignUpModal();
                                       });
                                   });

                                   function closeLoginModal() {
                                       $("#loginModal").hide();
                                   }

                                   function toggleLoginStatus() {
                                       var isLoggedIn = checkLoginStatus();

                                       if (isLoggedIn) {
                                           submitLogout();
                                       } else {
                                           openLoginModal();
                                       }
                                   }
                                   $(document).ready(function() {
                                       // Sembunyikan modals saat halaman dimuat
                                       $(".modal").hide();
                                   });

                                   function submitLoginForm(event) {
                                       event.preventDefault();
                                       // Logika login Anda di sini
                                   }

                                   function openModal(modalId) {
                                       // Tampilkan modal dengan ID tertentu
                                       $("#" + modalId).show();
                                   }

                                   function closeModal(modalId) {
                                       // Sembunyikan modal dengan ID tertentu
                                       $("#" + modalId).hide();
                                   }

                                   function openLoginModal() {
                                       // Tambahkan logika atau panggilan fungsi untuk menampilkan modal login di sini
                                       var isLoggedIn = checkLoginStatus();

                                       if (!isLoggedIn) {
                                           $("#loginModal").show();
                                       }
                                   }

                                   function submitLogout() {
                                       $.ajax({
                                           type: "POST",
                                           url: "logoutUser.php",
                                           success: function(response) {
                                               alert(response);
                                               updateLoginStatus(false);

                                               // Redirect ke halaman login atau halaman lain yang sesuai
                                               window.location.href =
                                                   "index.php"; // Gantilah "login.php" dengan halaman yang sesuai
                                           },
                                           error: function(xhr, status, error) {
                                               alert(
                                                   "Terjadi kesalahan saat melakukan logout. Silakan coba lagi.");
                                           }
                                       });
                                   }


                                   function checkLoginStatus() {
                                       var isLoggedIn =
                                       <?php echo isset($_SESSION['user_email']) ? 'true' : 'false'; ?>;
                                       return isLoggedIn;
                                   }

                                   function updateLoginStatus(isLoggedIn) {
                                       var loginLogoutLink = $("#login-logout-link");

                                       if (isLoggedIn) {
                                           loginLogoutLink.text("LOGOUT");
                                       } else {
                                           loginLogoutLink.text("LOGIN");
                                       }
                                   }
                                   </script>

                                   <!-- Tambahkan elemen HTML lainnya atau skrip JavaScript di sini -->
               </body>


               <!-- The sign-up modal -->
               <div id="signupModal" class="modal">
                   <div class="modal-content">
                       <span class="close" onclick="closeModal('signupModal')">&times;</span>
                       <h2>Sign Up</h2>
                       <form id="signupForm">
                           <div class="form-group">
                               <input type="text" id="firstName" name="firstName" placeholder="First Name" required />
                           </div>
                           <div class="form-group">
                               <input type="text" id="lastName" name="lastName" placeholder="Last Name" required />
                           </div>
                           <div class="form-group">
                               <input type="email" id="signupEmail" name="signupEmail" placeholder="Email" required />
                           </div>
                           <div class="form-group">
                               <input type="password" id="signupPassword" name="signupPassword" placeholder="Password"
                                   required />
                           </div>
                           <button type="submit" class="signup-btn">Sign Up</button>
                       </form>
                   </div>
               </div>
               <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
               <script>
$(document).ready(function() {
    $("#signupForm").submit(function(event) {
        event.preventDefault();

        // Ambil nilai dari formulir pendaftaran
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var signupEmail = $("#signupEmail").val();
        var signupPassword = $("#signupPassword").val();

        // Kirim data pendaftaran ke server melalui AJAX
        $.ajax({
            type: "POST",
            url: "signupUser.php",
            data: {
                firstName: firstName,
                lastName: lastName,
                signupEmail: signupEmail,
                signupPassword: signupPassword
            },
            success: function(response) {
                // Tampilkan respons dari server (misalnya, pesan sukses atau kesalahan)
                alert(response);

                // Jika pendaftaran berhasil, tutup popup signup
                if (response.includes("Pendaftaran berhasil")) {
                    closeModal('signupModal');
                }
            },
            error: function(xhr, status, error) {
                // Tampilkan pesan kesalahan jika terjadi kesalahan saat mengirimkan data
                alert("Terjadi kesalahan saat mendaftar. Silakan coba lagi.");
            }
        });
    });
});

function closeModal(modalId) {
    $("#" + modalId).hide();
}
               </script>


               </ul>
               </nav>
               </nav>
               <!-- end navbar -->
               </div>
               <!-- end container -->
               </header>
               <!-- end header-int -->
               <section class="tour-single-header">
                   <div class="container">
                       <div class="row">
                           <?php
// Pastikan parameter id_detailtour ada dalam URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $tourId = $_GET['id'];

    // Query untuk mendapatkan data tur berdasarkan ID
    $detailSql = "SELECT * FROM detailtour WHERE id_detailtour = $tourId";
    $detailResult = $conn->query($detailSql);

    if ($detailResult->num_rows > 0) {
        $detailRow = $detailResult->fetch_assoc();
        // Tampilkan konten detail tur di sini
?>
                           <!DOCTYPE html>
                           <html lang="en">

                           <head>
                               <meta charset="UTF-8">
                               <meta name="viewport" content="width=device-width, initial-scale=1.0">
                               <title><?php echo $detailRow['namaTour']; ?></title>
                               <!-- Tambahkan CSS atau elemen head lainnya sesuai kebutuhan -->
                           </head>

                           <body>
                               <div class="col-lg-8">
                                   <!-- <h6>FROM <?php echo $detailRow['namaKota']; ?></h6> -->
                                   <h2><?php echo $detailRow['namaTour']; ?></h2>

                                   <!-- Filter -->
                                   <div class="filter dropdown">
                                       <!-- Tambahkan dropdown filter sesuai kebutuhan -->
                                   </div>
                                   <!-- end filter -->

                                   <div class="price">Price: <strong><?php echo $detailRow['hargaTour']; ?></strong>
                                   </div><br>
                                   <br>
                                   <div class="price">Tanggal:
                                       <strong><?php echo $detailRow['tanggalPelaksanaan']; ?></strong>
                                   </div>
                                   <!-- end price -->
                               </div>
                               <!-- end col-8 -->


                               <div class="col-lg-4">
                                   <p><?php echo $detailRow['deskripsiTour']; ?></p>
                                   <a class="site-btn" class="nav-link"
                                       href="payment.php?id=<?php echo $detailRow['id_detailtour']; ?>">BOOK
                                       TOUR</a>
                               </div>


                               <div id="loginModal" class="modal">
                                   <div class="modal-content">
                                       <span class="close">&times;</span>
                                       <h2>Welcome Back</h2>
                                       <form id="loginForm">
                                           <div class="form-group">
                                               <input type="email" id="loginEmail" name="loginEmail" placeholder="Email"
                                                   required />
                                           </div>
                                           <div class="form-group">
                                               <input type="password" id="loginPassword" name="loginPassword"
                                                   placeholder="Password" required />
                                           </div>
                                           <button button type="submit" class="login-btn">Login</button>
                                       </form>
                                       <p class="signup-link">Don't have an account? <a href="#" id="signup-link">Sign
                                               Up</a>
                                       </p>
                                   </div>
                               </div>
                       </div>

                       <!-- The sign-up modal -->
                       <div id="signupModal" class="modal">
                           <div class="modal-content">
                               <span class="close">&times;</span>
                               <h2>Sign Up</h2>
                               <form id="signupForm">
                                   <div class="form-group">
                                       <input type="text" id="firstName" name="firstName" placeholder="First Name"
                                           required />
                                   </div>
                                   <div class="form-group">
                                       <input type="text" id="lastName" name="lastName" placeholder="Last Name"
                                           required />
                                   </div>
                                   <div class="form-group">
                                       <input type="email" id="signupEmail" name="signupEmail" placeholder="Email"
                                           required />
                                   </div>
                                   <div class="form-group">
                                       <input type="password" id="signupPassword" name="signupPassword"
                                           placeholder="Password" required />
                                   </div>
                                   <button type="submit" class="signup-btn">Sign Up</button>
                               </form>
                           </div>
                       </div>

                   </div>
                   <!-- end col-4 -->

                   </body>

               </html>
               <!-- end col-4 -->
               </div>
               <!-- end row -->
               </div>
               <!-- end container -->
               </section>
               <!-- end tours-header -->
               <div class="tour-hero-image bg-image" data-background="images/<?php echo $detailRow['gambarTour']; ?>">
               </div>
               <!-- end tour-hero-image -->
               <?php
    } else {
        echo "Tur tidak ditemukan.";
    }
} else {
    echo "ID tur tidak valid.";
}
?>

               <?php
// Periksa apakah parameter id ada pada URL
if (isset($_GET['id'])) {
    // Ambil nilai id dari URL
    $id_detailtour = $_GET['id'];

    // Query untuk mengambil funFact dari tabel detailtour sesuai dengan id_detailtour
    $sql = "SELECT funFact FROM detailtour WHERE id_detailtour = $id_detailtour";

    $result = $conn->query($sql);

    // Periksa apakah query berhasil dijalankan
    if ($result->num_rows > 0) {
        // Output data dari setiap baris
        while($row = $result->fetch_assoc()) {
            $funFact = $row["funFact"];
        }
    } else {
        $funFact = "Data funfact tidak ditemukan";
    }
} else {
    // Jika parameter id tidak ada, berikan nilai default atau tindakan lain sesuai kebutuhan
    $funFact = "ID tidak valid";
}
?>
               <section class="tour-desc">
                   <div class="container">
                       <div class="row">
                           <div class="col-12 text-center">
                               <div class="section-title">
                                   <h2>Pengetahuan</h2>
                                   <img src="images/title-seperator.png" alt="Image" />
                               </div>
                               <!-- end section-title -->
                           </div>
                           <!-- end col-12 -->
                           <div class="col-lg-6">
                               <p>
                                   Seni pertunjukkan bermula dari zaman prasejarah, di mana manusia pertama kali
                                   mengekspresikan diri
                                   melalui gerakan tubuh, musik, dan ritual. Pertunjukan prasejarah ini, yang melibatkan
                                   tarian dan
                                   ritual keagamaan, menjadi bentuk awal ekspresi budaya dan spiritual. Di Yunani Kuno,
                                   seni teater
                                   muncul sebagai bentuk formal pertunjukkan yang menggabungkan naskah drama, aktor
                                   profesional, dan
                                   penonton dalam sebuah pengalaman kolektif. Seiring waktu, munculnya seni wayang kulit
                                   di Asia,
                                   pertunjukan sirkus Romawi, opera Italia, dan teater kabuki Jepang, semuanya
                                   menciptakan keragaman
                                   dalam seni pertunjukkan. Evolusi ini berlanjut ke era modern, di mana seni
                                   pertunjukkan menjadi
                                   wadah inovasi, menggabungkan berbagai gaya dan medium, membangun warisan budaya yang
                                   kaya dan terus
                                   berkembang hingga hari ini.
                               </p>
                               <p>

                               </p>

                           </div>
                           <!-- end col-6 -->
                           <div class="col-lg-6">
                               <p>
                                   <?php echo $funFact; ?>
                               </p>

                           </div>
                           <!-- end col-6 -->
                       </div>
                       <!-- end row -->
                   </div>
                   <!-- end container -->
               </section>
               <!-- end tour-desc -->
               <section class="tour-overview">
                   <div class="container">
                       <div class="row">
                           <div class="col-12">
                               <div class="section-title">
                                   <h2>Gambaran Umum Tur</h2>
                                   <img src="images/title-seperator.png" alt="Image" />
                               </div>
                               <!-- end section-title -->
                           </div>
                           <!-- end col-12 -->
                           <?php
// Query untuk mengambil data funfact dari database (sesuaikan dengan struktur tabel)
$sql = "SELECT * FROM detailtour WHERE id_detailtour = 1"; // Gantilah id_detailtour sesuai dengan yang sesuai

$result = $conn->query($sql);

// Periksa apakah query berhasil dijalankan
if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        $ketersediaanTour = $row["ketersediaanTour"]; // Tambahkan ini
        $durasiTour = $row["durasiTour"]; // Tambahkan ini
    }
}
?>

                           ?>
                           <div class="col-12">
                               <ul>
                                   <li>
                                       <figure><img src="images/overview-icon01.png" alt="Image" /></figure>
                                       <small>KETERSEDIAAN</small>
                                       <h6><?php echo $ketersediaanTour; ?></h6>
                                   </li>
                                   <!-- end li -->
                                   <li>
                                       <figure><img src="images/overview-icon04.png" alt="Image" /></figure>
                                       <small>DURASI</small>
                                       <h6><?php echo $durasiTour?></h6>
                                   </li>
                                   <!-- end li -->

                                   <!-- end li -->
                                   <li>
                                       <figure><img src="images/overview-icon06.png" alt="Image" /></figure>
                                       <small>BAHASA</small>
                                       <h6>INDONESIA</h6>
                                   </li>
                                   <!-- end li -->
                                   <li>
                                       <figure><img src="images/icon-tag.png" alt="Image" /></figure>
                                       <small>JUMLAH TIKET</small>
                                       <h6>1</h6>
                                   </li>
                                   <!-- end li -->

                                   <!-- end li -->
                                   <!-- end li -->
                               </ul>
                           </div>
                           <!--end col-12 -->
                       </div>
                       <!-- end row -->
                   </div>
                   <!-- end container -->
               </section>
               <!-- end tour-overview -->

               <!-- end reviews -->
               <section class="tour-attraction">
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-12 text-center">
                               <div class="section-title">
                                   <h2>Galeri</h2>
                                   <img src="images/title-seperator.png" alt="Image" />
                               </div>
                               <!-- end section-title -->
                           </div>
                           <!-- end col-12 -->
                           <div class="col-12">
                               <div class="attraction-carousel">
                                   <div class="swiper-wrapper">

                                       <?php
            // Ambil data dari tabel detailwisata
            $sql = "SELECT * FROM detailwisata";
            $result = $conn->query($sql);

            if ($result) {
                // Loop untuk menampilkan data detailwisata
                while ($row = $result->fetch_assoc()) {
            ?>
                                       <!-- Mulai swiper-slide -->
                                       <div class="swiper-slide">
                                           <figure class="attraction-box">
                                               <img src="images/<?php echo $row['gambarWisata']; ?>" alt="Image" />
                                               <figcaption><?php echo $row['judulWisata']; ?></figcaption>
                                           </figure>
                                       </div>
                                       <!-- end swiper-slide -->
                                       <?php
                }
                // Bebaskan hasil query
                $result->free();
            } else {
                echo "Error: " . $conn->error;
            }
            ?>

                                   </div>
                                   <!-- end  swiper-wrapper -->
                                   <div class="swiper-button-prev">
                                       <div class="arrow-left"></div>
                                   </div>
                                   <div class="swiper-button-next">
                                       <div class="arrow-right"></div>
                                   </div>
                               </div>
                               <!-- end attraction-carousel -->
                           </div>
                           <!-- end col-12 -->

                           <!-- end tour-attraction -->

                           <!-- end tour-location -->

                           <section class="tour-information">
                               <div class="container">
                                   <div class="row">
                                       <div class="col-12">
                                           <div class="section-title">
                                               <h2>Related Information</h2>
                                               <img src="images/title-seperator.png" alt="Image" />
                                           </div>
                                           <!-- end section-title -->
                                       </div>
                                       <!-- end col-12 -->
                                       <div class="col-lg-7">
                                           <h3>Pertanyaan yang Sering Diajukan</h3>
                                           <div class="accordion" id="accordion">
                                               <div class="card">
                                                   <div class="card-header no-border" id="headingOne"><a
                                                           data-toggle="collapse" href="#collapseOne"
                                                           aria-expanded="true">Apakah termasuk dengan
                                                           Transportasi?
                                                       </a>
                                                   </div>
                                                   <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                       <div class="card-body">
                                                           <p>Tidak. Kami memfokuskan pada pengalaman tujuan wisata itu
                                                               sendiri tanpa
                                                               menyediakan layanan transportasi.</p>
                                                       </div>
                                                       <!-- end card-body -->
                                                   </div>
                                                   <!-- end collapse -->
                                               </div>
                                               <!-- end card -->
                                               <div class="card">
                                                   <div class="card-header" id="headingTwo"><a class="collapsed"
                                                           data-toggle="collapse" href="#collapseTwo"> Apakah termasuk
                                                           dengan tempat penginapan?</a>
                                                   </div>
                                                   <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                       <div class="card-body">
                                                           <p>Tidak. Kami memfokuskan pada pengalaman tujuan wisata itu
                                                               sendiri tanpa
                                                               menyediakan layanan transportasi.</p>
                                                       </div>
                                                       <!-- end card-body -->
                                                   </div>
                                                   <!-- end collapse -->
                                               </div>
                                               <!-- end card -->
                                               <div class="card">
                                                   <div class="card-header" id="headingThree"><a class="collapsed"
                                                           data-toggle="collapse" href="#collapseThree"> Bagaimana
                                                           kebijakan pembatalan
                                                           atau pengembalian uang jika ada perubahan rencana?</a></div>
                                                   <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                       <div class="card-body">
                                                           <p>Mohon maaf, untuk tiket yang telah dibeli tidak dapat
                                                               dikembalikan dalam
                                                               bentuk apapun.</p>
                                                       </div>
                                                       <!-- end card-body -->
                                                   </div>
                                                   <!-- end collapse -->
                                               </div>
                                               <!-- end card -->
                                           </div>
                                           <!-- end accordion -->
                                       </div>
                                       <!-- end col-7 -->

                                       <!-- end col-5 -->
                                   </div>
                                   <!-- end row -->
                               </div>
                               <!-- end container -->
                           </section>
                           <!-- end tour-information -->
                           <section class="related-blog">
                               <div class="container">
                                   <div class="row">
                                       <div class="col-12">
                                           <div class="section-title">
                                               <h2>Postingan Blog Terkait</h2>
                                               <img src="images/title-seperator.png" alt="Image" />
                                           </div>
                                           <!-- end section-title -->
                                       </div>
                                       <!-- end col-12 -->
                                       <div class="col-lg-6">
                                           <?php
    // Query untuk mengambil data dari tabel berita
    $sqlBerita = "SELECT * FROM berita ORDER BY tanggalBerita DESC LIMIT 4";
    $resultBerita = $conn->query($sqlBerita);

    if ($resultBerita->num_rows > 0) {
        $rowBerita = $resultBerita->fetch_assoc();
    ?>
                                           <div class="blog-post">
                                               <figure class="post-image"><img
                                                       src="images/<?php echo $rowBerita['gambarBerita']; ?>"
                                                       alt="Image" />
                                               </figure>
                                               <div class="post-content">
                                                   <small><?php echo $rowBerita['tanggalBerita']; ?> <span>|</span>BY
                                                       <?php echo $rowBerita['penguploadBerita']; ?></small>
                                                   <a href="blog-single.php?id=<?php echo $rowBerita['id_berita']; ?>">
                                                       <h3><?php echo $rowBerita['judulBerita']; ?></h3>
                                                   </a>
                                                   <a href="blog-single.php?id=<?php echo $rowBerita['id_berita']; ?>"
                                                       class="read-more">READ
                                                       MORE</a>
                                               </div>
                                               <!-- end post-content -->
                                           </div>
                                           <!-- end blog-post -->
                                           <?php
    } else {
        echo "Tidak ada berita yang tersedia.";
    }
    ?>
                                       </div>


                                   </div>
                                   <!-- end row -->
                               </div>
                               <!-- end container -->
                           </section>
                           <!-- end related-blog -->
                           <section class="related-tours">
                               <div class="container">
                                   <div class="row">
                                       <div class="col-12">
                                           <div class="section-title">
                                               <h2>Tur Pertunjukkan Terkait</h2>
                                               <img src="images/title-seperator.png" alt="Image" />
                                           </div>
                                           <!-- end section-title -->
                                       </div>
                                       <!-- end col-12 -->

                                       <?php
// Query untuk mendapatkan data dari tabel detailtour dengan kategori Kesenian
$sql = "SELECT * FROM detailtour WHERE kategoriTour = 'Tari' ORDER BY RAND()";
$result = $conn->query($sql);

if ($result) {
    // Loop untuk menampilkan data tour
    while ($row = $result->fetch_assoc()) {
?>
                                       <!-- Mulai col-lg-4 -->
                                       <div class="col-lg-4">
                                           <div class="tour-box">
                                               <figure><img src="images/<?php echo $row['gambarTour']; ?>"
                                                       alt="Image" /> <span class="tag">MOST POPULAR</span>
                                               </figure>
                                               <div class="tour-content">
                                                   <small>FROM <?php echo $row['namaKota']; ?></small>
                                                   <h3><?php echo $row['namaTour']; ?></h3>
                                                   <ul>
                                                       <li><img src="images/icon-date.png" alt="Image" />
                                                           <small>Available</small>
                                                           <span><?php echo $row['ketersediaanTour']; ?></span>
                                                       </li>
                                                       <li><img src="images/icon-time.png" alt="Image" />
                                                           <small>Duration</small>
                                                           <span><?php echo $row['durasiTour']; ?></span>
                                                       </li>
                                                       <li><img src="images/icon-tag.png" alt="Image" />
                                                           <small>From</small>
                                                           <span><?php echo $row['hargaTour']; ?></span>
                                                       </li>
                                                   </ul>
                                                   <a href="#">SELECT DATES</a>
                                               </div>
                                               <!-- end tour-content -->
                                           </div>
                                           <!-- end tour-box -->
                                       </div>
                                       <!-- end col-lg-4 -->
                                       <?php
    }

    // Bebaskan hasil query
    $result->free();
} else {
    echo "Error: " . $conn->error;
}
?>


                                       <!-- end container -->
                           </section>
                           <!-- end related-tours -->
                           <footer class="footer">
                               <div class="container">
                                   <div class="row">
                                       <div class="col-lg-3 col-md-4">
                                           <h5>TENTANG KAMI</h5>
                                           <ul class="footer-menu">
                                               <li><a href="about-us.php">Tentang Kami</a></li>

                                               <li><a href="#">Tim Kami</a></li>
                                               <li><a href="blog-list.php">Berita</a></li>
                                           </ul>
                                       </div>
                                       <!-- end col-3 -->
                                       <div class="col-lg-3 col-md-4">
                                           <h5>Layanan</h5>
                                           <ul class="footer-menu">
                                               <li><a href="#">Terms of Payment</a></li>
                                               <li><a href="#">Privacy Policy</a></li>
                                               <li><a href="#">Difficulty Levels</a></li>
                                           </ul>
                                       </div>
                                       <!-- end col-3 -->
                                       <div class="col-lg-3 col-md-4">
                                           <h5>Hubungi Kami</h5>
                                           <address>
                                               ATHENA INC.<br />
                                               Jakal km 14.5, Yogyakarta<br />
                                               Telp: 123 456 7890<br />
                                               <a href="#">info@athenacomp.com</a>
                                           </address>
                                       </div>
                                       <!-- end col-3 -->

                                       <!-- end col-3 -->
                                       <div class="col-12">
                                           <ul class="social-media">
                                               <li>
                                                   <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-youtube-play"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-instagram"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-twitter"></i></a>
                                               </li>
                                               <li>
                                                   <a href="#"><i class="fa fa-facebook"></i></a>
                                               </li>
                                           </ul>
                                       </div>
                                       <!-- end col-12 -->
                                       <div class="col-12"><span class="copyright">&copy; ATHENA</span></div>
                                       <!-- end col-12 -->
                                   </div>
                                   <!-- end row -->
                               </div>
                               <!-- end container -->
                           </footer>
                           <!-- JS FILES -->
                           <script src="https://code.jquery.com/jquery-3.4.1.min.js"
                               integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
                           </script>
                           <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                           <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                           <script>
                           // PRELOADER
                           (function($) {
                               $(window).on("load", function() {
                                   $("body").addClass("page-loaded");
                               });

                               $(".data-range-picker a").daterangepicker({
                                   linkedCalendars: false,
                               });

                               $(".daterangepicker").addClass("blog-picker");
                           })(jQuery);
                           </script>
                           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                               integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                               crossorigin="anonymous">
                           </script>
                           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                               integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                               crossorigin="anonymous">
                           </script>
                           <script src="js/swiper.min.js"></script>
                           <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
                           <script src="js/scripts.js"></script>
                           <script
                               src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUCRAdytmMnSNnCdu0Ll8Ldy8Oap-CpKQ&callback">
                           </script>
                           <script src="js/googlemaps.min.js"></script>
                           <script src="js/route-map.js"></script>
                           </body>

                           </html>