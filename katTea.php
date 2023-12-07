<?php
include "koneksi.php"
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
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
                    <li class="nav-item"><a id="login-link" class="nav-link" href="#">LOGIN</a></li>

                    <!-- The login modal -->
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
                                <button type="submit" class="login-btn">Login</button>
                            </form>
                            <p class="signup-link">Don't have an account? <a href="#" id="signup-link">Sign Up</a></p>
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
                                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required />
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

                    <!-- The login modal -->
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
                                <button type="submit" class="login-btn">Login</button>
                            </form>
                            <p class="signup-link">Don't have an account? <a href="#" id="signup-link">Sign Up</a></p>
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
                                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required />
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
            </nav>
            <!-- end navbar -->
        </div>
        <!-- end container -->
    </header>
    <!-- end header-int -->
    <section class="attractions-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Pertunjukan Teater</h2>
                    <img src="images/title-seperator.png" alt="Image" />
                    <p> Teater di Indonesia bukan hanya sebagai sarana hiburan, tetapi juga sebagai cerminan keberagaman budaya, sarana pendidikan, serta wadah ekspresi seni dan kreativitas yang terus berkembang dan beradaptasi dengan perubahan zaman. Beberapa teater di Indonesia menggabungkan unsur-unsur budaya tradisional dengan ekspresi kontemporer, menciptakan produksi teater yang unik dan menggugah.</P>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end attractions-header -->
    <div class="attractions-hero-image bg-image" data-background="images/.jpg"></div>
    <!-- end attractions-hero-image -->
    <section class="attractions">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h2>Teater yang<br />Memiliki 500+ Penonton </h2>
                        <img src="images/title-seperator.png" alt="Image" />
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <?php
// Query untuk mengambil data dari tabel detailtour dengan namaKota Yogyakarta
$sql = "SELECT * FROM detailtour WHERE namaKota = 'Yogyakarta' ORDER BY id_detailtour";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-6">
                <a href="attractions-single.php?id=' . $row['id_detailtour'] . '&kategori=' . $row['kategoriTour'] . '">
                  <figure class="attractions-box">
                    <img src="images/' . $row['gambarTour'] . '" alt="Image" />
                    <figcaption>' . $row['namaTour'] . '</figcaption>
                  </figure>
                </a>
              </div>';
    }
} else {
    echo "0 results";
}
?>




                <!-- end col-6 -->
                <div class="col-12 text-center"><a href="#" class="site-btn">LOAD MORE</a></div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end attractions -->

    <section class="related-tours">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Akan Dipertunjukkan</h2>
                        <img src="images/title-seperator.png" alt="Image" />
                    </div>
                    <!-- end section-title -->
                </div>
                <!-- end col-12 -->
                <?php
// Query untuk mengambil data dari tabel detailtour dengan urutan acak
$sql = "SELECT * FROM detailtour ORDER BY RAND() LIMIT 3";
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
                        <a href="tours-single.php?id=' . $row['id_detailtour'] . '">PILIH TANGGAL</a>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "0 results";
}
?>




            </div>
            <!-- end row -->
        </div>
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
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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