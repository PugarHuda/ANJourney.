<?php
session_start(); // Mulai atau lanjutkan sesi
include "koneksi.php";

// Periksa apakah pengguna sudah login

?>

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
        content="tour, ice, trip, travel, agency, life, vacation, treking, boat, walking, climbing, transition, svg, html, css" />

    <!-- FAVICON FILES -->
    <link href="ico/anjIcon.png" rel="apple-touch-icon" sizes="144x144" />
    <link href="ico/anjIcon.png" rel="apple-touch-icon" sizes="114x114" />
    <link href="ico/anjIcon.png" rel="apple-touch-icon" sizes="72x72" />
    <link href="ico/anjIcon.png" rel="apple-touch-icon" />
    <link href="ico/anjIcon.png" rel="shortcut icon" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
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
                                            value="<?php echo $userRow['namaBelakang']; ?>" disabled="" />
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
    <header class="header-denmark">
        <div class="container">
            <nav class="navbar">
                <a href="index.php" class="navbar-brand"><img src="images/anjWhite.png" alt="Image" /></a>

                <div class="menu-btn">
                    <div class="menu-circle-wrap">
                        <div class="wave"></div>
                        <svg class="menu-circle" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="52"
                            height="52" viewBox="0 0 52 52">
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
                        <a class="nav-link">KATEGORI</a>
                        <ul class="dropdown-menu">
                            <li><a href="katTari.php">TARI</a></li>
                            <li><a href="katTea.php">TEATER</a></li>
                            <li><a href="katMus.php">MUSIK</a></li>
                            <li><a href="katPam.php">PAMERAN VISUAL</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about-us.php">ABOUT US</a></li>
                    <li class="nav-item">
                        <a id="login-logout-link" class="nav-link" href="#" onclick="toggleLoginStatus()">LOGIN</a>
                    </li>
                    <!-- The login modal -->
                    <div id="loginModal" class="modal">
                        <div class="modal-content">
                            <span class="close" onclick="closeLoginModal()">&times;</span>
                            <h2>Welcome Back</h2>
                            <form id="loginForm" method="POST" action="loginUser.php" onsubmit="submitLoginForm(event)">
                                <div class="form-group">
                                    <input type="email" id="loginEmail" name="loginEmail" placeholder="Email"
                                        required />
                                </div>
                                <div class="form-group">
                                    <input type="password" id="loginPassword" name="loginPassword"
                                        placeholder="Password" required />
                                </div>
                                <button type="submit" class="login-btn">Login</button>
                            </form>
                            <p class="signup-link">Don't have an account? <a href="#" id="signup-link">Sign Up</a></p>
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
                                alert("Terjadi kesalahan saat melakukan login. Silakan coba lagi.");
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
                                alert("Terjadi kesalahan saat melakukan logout. Silakan coba lagi.");
                            }
                        });
                    }


                    function checkLoginStatus() {
                        var isLoggedIn = <?php echo isset($_SESSION['user_email']) ? 'true' : 'false'; ?>;
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
                <input type="password" id="signupPassword" name="signupPassword" placeholder="Password" required />
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
<!-- end navbar -->
</div>
<!-- end container -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="images/teater.jpg">
                <div class="container">
                    <h2 data-swiper-parallax="-300">Rasakan Persembahan Seni Teater yang Menginspirasi</h2>
                    <a href="index.php" class="link" data-swiper-parallax="-100"></a>
                </div>
                <!-- end container -->
            </div>
            <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="images/slide2.jpg">
                <div class="container">
                    <h2 data-swiper-parallax="-300">Nikmati Momen Euforia Tari Kecak Bali</h2>
                    <a href="index.php" class="link" data-swiper-parallax="-100"></a>
                </div>
                <!-- end container -->
            </div>
            <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="images/musik.jpg">
                <div class="container">
                    <h2 data-swiper-parallax="-300">Nikmati Ritme Keindahan Musik Gamelan</h2>
                    <a href="index.php" class="link" data-swiper-parallax="-100"></a>
                </div>
                <!-- end container -->
            </div>
            <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="images/museum.jpg">
                <div class="container">
                    <h2 data-swiper-parallax="-300">Menyingkap Misteri dan Keindahan Masa Lalu Melalui Museum
                    </h2>
                    <a href="index.php" class="link" data-swiper-parallax="-100"></a>
                </div>
                <!-- end container -->
            </div>
            <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
    </div>
    <!-- end swiper-wrapper -->
    <div class="swiper-custom-pagination"></div>
    <!-- end swiper-custom-pagination -->
</div>
<!-- end swiper-container -->
</header>
<!-- end header -->

<!-- end find-advanture -->
<section class="popular-tours">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Temukan Tur Paling Populer</h2>
                    <img src="images/title-seperator.png" alt="Image" />

                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-6">
                <p class="section-desc">
                    Di situs web kami, Anda akan menemukan koleksi yang komprehensif dari paket kesenian
                    ke destinasi terkenal di beberapa kota di Indonesia. Kami berkomitmen untuk menyajikan
                    pengalaman perjalanan yang memikat dan unik,
                    mulai dari menelusuri sejarah dan kebudayaan memlalui karya seni baik dari seni tari, musik,
                    atau museum yang menjadi ceriminan dari zaman tertentu
                </p>
            </div>
            <!-- end col-6 -->
            <?php
// Query untuk mengambil data dari tabel detailtour
$sql = "SELECT * FROM detailtour ORDER BY RAND() LIMIT 6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-4">
                <div class="tour-box">
                    <figure><img src="images/' . $row['gambarTour'] . '" alt="Image" /></figure>
                    <div class="tour-content">
                        <small>' . $row['namaKota'] . '</small>
                        <h3>' . $row['namaTour'] . '</h3>
                        <ul>
                            <li>
                                <div><img src="images/icon-date.png" alt="Image" /> <small>Ketersediaan</small> <span>' . $row['ketersediaanTour'] . '</span></div>
                            </li>
                            <li>
                                <div><img src="images/icon-time.png" alt="Image" /> <small>Durasi</small> <span>' . $row['durasiTour'] . '</span></div>
                            </li>
                            <li>
                                <div><img src="images/icon-tag.png" alt="Image" /> <small>Harga</small> <span>' . $row['hargaTour'] . '</span></div>
                            </li>
                        </ul>
                        <a href="tours-single.php?id=' . $row['id_detailtour'] . '">LIHAT DETAIL</a>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "0 results";
}
?>


            <!-- end col-4 -->
            <div class="col-12 text-center"><a href="tours-list.php" class="site-btn">LOAD MORE</a></div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end popular-tours -->
<section class="adventure-activities">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title">
                    <h2>Aktifitas Tur</h2>
                    <img src="images/title-seperator.png" alt="Image" />
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-6 -->
            <!-- end row -->

            <div class="col-lg-5">
                <p class="section-desc">
                    Kami memahami bahwa setiap orang memiliki preferensi dan minat yang berbeda dalam menikmati
                    sebuah karya seni.
                    Oleh karena itu, kami menawarkan beragam pilihan kategori yang dapat disesuaikan dengan
                    keinginan
                    Anda.
                </p>
            </div>
            <!-- end col-6 -->
        </div>

        <?php
// Query untuk mengambil data dari tabel activities
$sql = "SELECT * FROM detailtour ORDER BY RAND()";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="col-12">
            <div class="activities-carousel">
              <div class="swiper-carousel">
                <div class="swiper-wrapper">';

    while ($row = $result->fetch_assoc()) {
        // Tambahkan tautan ke attractions-single.php dengan ID dan kategori sebagai parameter
       echo '<div class="swiper-slide">
        <a href="attractions-single.php?id=' . $row['id_detailtour'] . '">
          <figure class="activity-box">
            <img src="images/' . $row['gambarTour'] . '" alt="Image" />
            <figcaption>' . $row['kategoriTour'] . '</figcaption>
          </figure>
        </a>
      </div>';

    }

    echo '    </div>
              <div class="swiper-button-prev"><div class="arrow-left"></div></div>
              <div class="swiper-button-next"><div class="arrow-right"></div></div>
            </div>
          </div>
        </div>
      </section>
      <!-- end adventure-activities -->';

} else {
    echo "0 results";
}
?>

        <section class="recent-blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Berita Terbaru</h2>
                            <img src="images/title-seperator.png" alt="Image" />
                        </div>
                        <!-- end section-title -->
                    </div>
                    <!-- end col-12 -->
                    <?php
// Query untuk mengambil data dari tabel berita
$sql = "SELECT * FROM berita ORDER BY RAND() LIMIT 3";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-4">
                <div class="blog-post">
                  <figure class="post-image"><img src="images/' . $row['gambarBerita'] . '" alt="Image" /></figure>
                  <div class="post-content">
                    <small>' . $row['tanggalBerita'] . ' <span>|</span>' . $row['penguploadBerita'] . '</small>
                    <a href="blog-single.php?id_berita=' . $row['id_berita'] . '"><h3>' . $row['judulBerita'] . '</h3></a>
                    <p> </p>
                    <a href="blog-single.php?id_berita=' . $row['id_berita'] . '" class="read-more">READ MORE</a>
                  </div>
                </div>
              </div>';
    }
} else {
    echo "0 results";
}
?>

                    <!-- end col-4  -->
                    <div class="col-12 text-center"><a href="blog-list.php" class="site-btn">KUNJUNGI BLOG KAMI</a>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end recent-blog -->

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
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script>
        // PRELOADER
        (function($) {
            $(window).on("load", function() {
                $("body").addClass("page-loaded");
            });

            $(".datepicker__input").daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: "Clear",
                },
            });

            $(".datepicker__input").on("apply.daterangepicker", function(ev, picker) {
                $(this).val(picker.startDate.format("MM/DD/YYYY") + " - " + picker.endDate.format(
                    "MM/DD/YYYY"));
            });

            $(".datepicker__input").on("cancel.daterangepicker", function(ev, picker) {
                $(this).val("");
            });
        })(jQuery);
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script src="js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
        <script src="js/scripts.js"></script>
        </body>

</html>
<?php mysqli_close($conn); ?>