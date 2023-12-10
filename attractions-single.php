<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<php lang="zxx">

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
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
        <div class="search-box">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <span class="search-close-btn"><i class="fa fa-times"></i></span>
                        <h3>Profile</h3>
                        <!-- <form>
              <div class="form-group">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search Activities, Themes or Tours" />
              </div>
              --end form-group
              <button type="submit">SEARCH</button>
            </form>
            <dl>
              <dt>Suggestions <i class="fa fa-long-arrow-right"></i></dt>
              <dd><a href="#">Adventure</a></dd>
              <dd><a href="#">Nothern Lights</a></dd>
              <dd><a href="#">Waterfalls</a></dd>
              <dd><a href="#">Winter Tours</a></dd>
              <dd><a href="#">Glaciar Walk</a></dd>
            </dl> -->
                    </div>
                    <div class="container mt-5">
                        <div class="row">
                            <div class="col-lg-8 pb-5">
                                <form class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account-fn">NAMA DEPAN</label>
                                            <input class="form-control" type="text" id="account-fn" value="Daniel"
                                                disabled="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account-ln">NAMA BELAKANG</label>
                                            <input class="form-control" type="text" id="account-ln" value="Adams"
                                                disabled="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account-email">E-MAIL</label>
                                            <input class="form-control" type="email" id="account-email"
                                                value="daniel.adams@example.com" disabled="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account-phone">No.HP</label>
                                            <input class="form-control" type="text" id="account-phone"
                                                value="+7 (805) 348 95 72" disabled="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="account-pass">PASSWORD</label>
                                            <input class="form-control" type="password" id="account-pass" value="da"
                                                disabled="" />
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
        <!-- end search-box -->
        <header class="header-int">
            <div class="container">
                <nav class="navbar dark">
                    <a href="index.php" class="navbar-brand"><img src="images/anjBlack.png" alt="Image" /></a>
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
                            <a id="login-logout-link" class="nav-link" href="#" onclick="toggleLoginStatus()">LOGIN</a>
                        </li>
                        <!-- The login modal -->
                        <div id="loginModal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="closeLoginModal()">&times;</span>
                                <h2>Welcome Back</h2>
                                <form id="loginForm" method="POST" action="loginUser.php"
                                    onsubmit="submitLoginForm(event)">
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
                                <p class="signup-link">Don't have an account? <a href="#" id="signup-link">Sign Up</a>
                                </p>
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
                    </ul>
                </nav>
                </nav>
                <!-- end navbar -->
            </div>
            <!-- end container -->
        </header>
        <!-- end header-int -->
        <section class="attractions-header">
            <div class="container">
                <div class="row">
                    <?php
// Ambil parameter ID dari URL jika tersedia
$idDetailtour = isset($_GET['id']) ? $_GET['id'] : '';

// Buat query SQL dengan filter ID
$sql = "SELECT * FROM detailtour WHERE id_detailtour = '$idDetailtour'";

$result = $conn->query($sql);

// Periksa apakah query berhasil dieksekusi
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
                    <div class="col-12">
                        <h2><?php echo $row['namaTour']; ?></h2>
                        <img src="images/title-seperator.png" alt="Image" />
                        <p>
                            <?php echo $row['deskripsiTour']; ?>
                        </p>
                    </div>
                    <?php
    }
} else {
    echo "0 results";
}
?>



                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end attractions-header -->
        <?php
// Ambil parameter ID dari URL jika tersedia
$idDetailtour = isset($_GET['id']) ? $_GET['id'] : '';

// Buat query SQL dengan filter ID
$sql = "SELECT * FROM detailtour WHERE id_detailtour = '$idDetailtour'";

$result = $conn->query($sql);

// Periksa apakah query berhasil dieksekusi
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // Ambil data langsung karena kita hanya mengharapkan satu hasil

    // Tampilkan data sesuai kebutuhan
    ?>
        <div class="attractions-hero-image bg-image" data-background="images/<?php echo $row['gambarTour']; ?>"></div>
        <!-- Tambahkan bagian lain sesuai kebutuhan -->

        <?php
} else {
    echo "0 results";
}
?>

        <!-- end attractions-hero-image -->
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

        <section class="tour-desc">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h2>Berbagai Kesenian di Indonesia</h2>
                            <img src="images/title-seperator.png" alt="Image" />
                        </div>
        </section>
        <!-- end attraction-desc -->
        <div class="swiper-blog-carousel">
            <div class="swiper-wrapper">
                <?php
        // Ambil data gambarWisata dari tabel detailwisata
        $sql = "SELECT gambarWisata FROM detailwisata";
        $result = $conn->query($sql);

        // Periksa apakah query berhasil dieksekusi
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="swiper-slide">
                    <img src="images/<?php echo $row['gambarWisata']; ?>" alt="Image" />
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }
        ?>
            </div>
        </div>

        <!-- end swiper-wrapper -->
        <!-- Add Pagination -->
        <div class="swiper-button-prev">
            <div class="arrow-left"></div>
        </div>
        <div class="swiper-button-next">
            <div class="arrow-right"></div>
        </div>
        </div>
        <!-- end swiper-blog-carousel -->
        <section class="things-todo">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="section-title">
                            <!-- <h2>Things To Do</h2> -->
                            <!-- <img src="images/title-seperator.png" alt="Image" /> -->
                        </div>
                        <!-- end section-title -->
                    </div>
                    <!-- end col-12 -->
                    <!-- <div class="col-md-6 border-right">
                        <ul class="pull-left">
                            <li><img src="images/attractions-icon01.jpg" alt="Image" /> Climbing Glaciers</li>
                            <li><img src="images/attractions-icon02.jpg" alt="Image" /> Setting up Camps at Night</li>
                            <li><img src="images/attractions-icon03.jpg" alt="Image" /> Beautiful Sight Seeing</li>
                            <li><img src="images/attractions-icon04.jpg" alt="Image" /> Hiking The Icy Trails</li>
                            <li><img src="images/attractions-icon05.jpg" alt="Image" /> Kayaking in Ocean</li>
                        </ul>
                    </div> -->
                    <!--end col-6 -->
                    <!-- <div class="col-md-6">
                        <ul class="pull-right">
                            <li><img src="images/attractions-icon06.jpg" alt="Image" /> Skiing on the Ice</li>
                            <li><img src="images/attractions-icon07.jpg" alt="Image" /> Take Photos</li>
                            <li><img src="images/attractions-icon08.jpg" alt="Image" /> Underwater Tours</li>
                            <li><img src="images/attractions-icon09.jpg" alt="Image" /> Water Scooters</li>
                            <li><img src="images/attractions-icon10.jpg" alt="Image" /> Surfing in the Ocean</li>
                        </ul>
                    </div> -->
                    <!--end col-6 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!-- end things-todo -->
        <section class="related-tours">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Pertunjukkan Terpopuler </h2>
                            <img src="images/title-seperator.png" alt="Image" />
                        </div>
                        <!-- end section-title -->
                    </div>
                    <!-- end col-12 -->
                    <?php
// Query untuk mendapatkan data dari tabel detailtour dengan kategori Kesenian
$sql = "SELECT * FROM detailtour ORDER BY RAND() LIMIT 6 ";
$result = $conn->query($sql);

if ($result) {
    // Loop untuk menampilkan data tour
    while ($row = $result->fetch_assoc()) {
?>
                    <!-- Mulai col-lg-4 -->
                    <div class="col-lg-4">
                        <div class="tour-box">
                            <figure><img src="images/<?php echo $row['gambarTour']; ?>" alt="Image" /> <span
                                    class="tag">MOST POPULAR</span>
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
                                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small>
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
                    <!-- end col-4 -->

        </section>
        <!-- end related-tours -->
        <section class="related-blog">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h2>Related Blog Posts</h2>
                            <img src="images/title-seperator.png" alt="Image" />
                        </div>
                        <!-- end section-title -->
                    </div>
                    <?php
                   
                    $sqlBerita = "SELECT * FROM berita";
                    $resultBerita = $conn->query($sqlBerita);

                    if ($resultBerita->num_rows > 0) {
                    $rowBerita = $resultBerita->fetch_assoc();
                    ?>
                    <div class="blog-post">
                        <figure class="post-image"><img src="images/<?php echo $rowBerita['gambarBerita']; ?>"
                                alt="Image" />
                        </figure>
                        <div class="post-content">
                            <small><?php echo $rowBerita['tanggalBerita']; ?> <span>|</span>BY
                                <?php echo $rowBerita['penguploadBerita']; ?></small>
                            <a href="blog-single.php?id=<?php echo $rowBerita['id_berita']; ?>">
                                <h3><?php echo $rowBerita['judulBerita']; ?></h3>
                            </a>
                            <a href="blog-single.php?id=<?php echo $rowBerita['id_berita']; ?>" class="read-more">READ
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

        </section>
        <!-- end related-blog -->
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
        <script>
        // PRELOADER
        (function($) {
            $(window).on("load", function() {
                $("body").addClass("page-loaded");
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
        <script src="js/scripts.js"></script>
    </body>

    </html>