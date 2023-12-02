<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- META TAGS -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ANJourney | for Tour Operators & Travel Agencies around Nation</title>
    <meta name="author" content="GFX Partner" />
    <meta name="description" content="ANJourney | for Tour Operators & Travel Agencies around Nation" />
    <meta name="keywords" content="tour, ice, trip, travel, agency, life, vacation, treking, boat, walking, climbing, transition, svg, html, css" />

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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
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
              (end form-group)
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
                      <input class="form-control" type="text" id="account-fn" value="Daniel" disabled="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="account-ln">NAMA BELAKANG</label>
                      <input class="form-control" type="text" id="account-ln" value="Adams" disabled="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="account-email">E-MAIL</label>
                      <input class="form-control" type="email" id="account-email" value="daniel.adams@example.com" disabled="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="account-phone">No. HP</label>
                      <input class="form-control" type="text" id="account-phone" value="+7 (805) 348 95 72" disabled="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="account-pass">PASSWORD</label>
                      <input class="form-control" type="password" id="account-pass" value="da" disabled="" />
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
    <header class="header-denmark">
      <div class="container">
        <nav class="navbar">
          <a href="index.php" class="navbar-brand"><img src="images/anjWhite.png" alt="Image" /></a>

          <div class="menu-btn">
            <div class="menu-circle-wrap">
              <div class="wave"></div>
              <svg class="menu-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="52" height="52" viewBox="0 0 52 52">
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
          <span class="search-btn"><i class="fa fa-search"></i></span>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="tours-list.php">TOURS</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link">ATTRACTIONS</a>
              <ul class="dropdown-menu">
                <li><a href="attcJak.php">JAKARTA</a></li>
                <li><a href="attcJog.php">YOGYAKARTA</a></li>
                <li><a href="attcBan.php">BANDUNG</a></li>
                <li><a href="attcBali.php">BALI</a></li>
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
                    <input type="email" id="loginEmail" name="loginEmail" placeholder="Email" required />
                  </div>
                  <div class="form-group">
                    <input type="password" id="loginPassword" name="loginPassword" placeholder="Password" required />
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
          </ul>
        </nav>
        <!-- end navbar -->
      </div>
      <!-- end container -->
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="images/slide4.jpg">
              <div class="container">
                <h2 data-swiper-parallax="-300">Eksplorasi Wisata Tersembunyi di Jakarta</h2>
                <a href="#" class="link" data-swiper-parallax="-100"><img src="images/arrow-link.png" alt="Image" />LEARN MORE</a>
              </div>
              <!-- end container -->
            </div>
            <!-- end slide-inner -->
          </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="images/slide2.jpg">
              <div class="container">
                <h2 data-swiper-parallax="-300">Jelajahi Keindahan Pulau Bali</h2>
                <a href="#" class="link" data-swiper-parallax="-100"><img src="images/arrow-link.png" alt="Image" />LEARN MORE</a>
              </div>
              <!-- end container -->
            </div>
            <!-- end slide-inner -->
          </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="images/slide3.jpg">
              <div class="container">
                <h2 data-swiper-parallax="-300">Sensasi Wisata Malam di Yogyakarta</h2>
                <a href="#" class="link" data-swiper-parallax="-100"><img src="images/arrow-link.png" alt="Image" />LEARN MORE</a>
              </div>
              <!-- end container -->
            </div>
            <!-- end slide-inner -->
          </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="images/slide1.jpg">
              <div class="container">
                <h2 data-swiper-parallax="-300">Ekspedisi Keajaiban Kota Bandung</h2>
                <a href="#" class="link" data-swiper-parallax="-100"><img src="images/arrow-link.png" alt="Image" />LEARN MORE</a>
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
              Di situs web kami, Anda akan menemukan koleksi yang komprehensif dari tur dan paket perjalanan ke destinasi terkenal di beberapa kota di Indonesia. Kami berkomitmen untuk menyajikan pengalaman perjalanan yang memikat dan unik,
              mulai dari jalan-jalan kota yang menakjubkan hingga petualangan alam yang luar biasa, serta perjalanan budaya yang kaya akan sejarah.
            </p>
          </div>
          <!-- end col-6 -->
          <?php
         // Query untuk mengambil data dari tabel popular tour
$sql = "SELECT p.*, d.* FROM populartour p JOIN detailtour d ON p.id_detailTour = d.id_detailTour";
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
                        <a href="tours-single.php">PILIH TANGGAL</a>
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
              Kami memahami bahwa setiap orang memiliki preferensi dan minat yang berbeda dalam perjalanan. Oleh karena itu, kami menawarkan beragam pilihan tur yang dapat disesuaikan dengan keinginan Anda. Kami memiliki sesuatu untuk
              setiap jenis petualangan yang Anda cari.
            </p>
          </div>
          <!-- end col-6 -->
        </div>

        <?php
       // Query untuk mengambil data dari tabel activities
$sql = "SELECT a.*, dt.* FROM activities a
JOIN detailtour dt ON a.id_detailtour = dt.id_detailtour
";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<div class="col-12">
            <div class="activities-carousel">
              <div class="swiper-carousel">
                <div class="swiper-wrapper">';

    while ($row = $result->fetch_assoc()) {
        echo '<div class="swiper-slide">
                <a href="attractions-single.php">
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
$sql = "SELECT * FROM berita";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-4">
                <div class="blog-post">
                  <figure class="post-image"><img src="' . $row['gambarBerita'] . '" alt="Image" /></figure>
                  <div class="post-content">
                    <small>' . $row['tanggalBerita'] . ' <span>|</span>' . $row['penguploadBerita'] . '</small>
                    <a href="blog-single.php"><h3>' . $row['judulBerita'] . '</h3></a>
                    <p> </p>
                    <a href="blog-single.php" class="read-more">READ MORE</a>
                  </div>
                </div>
              </div>';
    }
} else {
    echo "0 results";
}
?>
          <!-- end col-4  -->
          <div class="col-12 text-center"><a href="blog-list.php" class="site-btn">KUNJUNGI BLOG KAMI</a></div>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
      // PRELOADER
      (function ($) {
        $(window).on("load", function () {
          $("body").addClass("page-loaded");
        });

        $(".datepicker__input").daterangepicker({
          autoUpdateInput: false,
          locale: {
            cancelLabel: "Clear",
          },
        });

        $(".datepicker__input").on("apply.daterangepicker", function (ev, picker) {
          $(this).val(picker.startDate.format("MM/DD/YYYY") + " - " + picker.endDate.format("MM/DD/YYYY"));
        });

        $(".datepicker__input").on("cancel.daterangepicker", function (ev, picker) {
          $(this).val("");
        });
      })(jQuery);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
    </html>
<?php mysqli_close($conn); ?>