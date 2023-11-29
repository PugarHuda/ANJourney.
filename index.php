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
    <meta name="description" content="Frolic | for Tour Operators & Travel Agencies" />
    <meta name="keywords" content="tour, ice, trip, travel, agency, life, vacation, treking, boat, walking, climbing, transition, svg, html, css" />

    <!-- FAVICON FILES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144" />
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114" />
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72" />
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon" />
    <link href="ico/favicon.png" rel="shortcut icon" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/swiper.min.css" />
    <link rel="stylesheet" href="css/daterangepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
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
            <h3>Make Quick Search to Find!</h3>
            <form>
              <div class="form-group">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search Activities, Themes or Tours" />
              </div>
              <!-- end form-group -->
              <button type="submit">SEARCH</button>
            </form>
            <dl>
              <dt>Suggestions <i class="fa fa-long-arrow-right"></i></dt>
              <dd><a href="#">Adventure</a></dd>
              <dd><a href="#">Nothern Lights</a></dd>
              <dd><a href="#">Waterfalls</a></dd>
              <dd><a href="#">Winter Tours</a></dd>
              <dd><a href="#">Glaciar Walk</a></dd>
            </dl>
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
          <a href="index.html" class="navbar-brand"><img src="images/logo-light.png" alt="Image" /></a>

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
              <a class="nav-link" href="index.html">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link">PAGES</a>
              <ul class="dropdown-menu">
                <li>
                  <a href="tours-list.html">TOUR LIST</a>
                </li>
                <li>
                  <a a href="about-us.html">ABOUT US</a>
                </li>
                <li>
                  <a href="blog-list.html">BLOG</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link">ATTRACTIONS</a>
              <ul class="dropdown-menu">
                <li><a href="attcJak.html">JAKARTA</a></li>
                <li><a href="attcJog.html">YOGYAKARTA</a></li>
                <li><a href="attcBan.html">BANDUNG</a></li>
                <li><a href="attcBali.html">BALI</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link">CHECKOUT</a>
              <ul class="dropdown-menu">
                <li><a href="passengers.html">PASSGENGER</a></li>
                <li><a href="booking.html">BOOKING</a></li>
                <li><a href="summary.html">SUMMARY</a></li>
                <li><a href="payment.html">PAYMENT</a></li>
              </ul>
            </li>
            <li class="nav-item"><a id="login-link" class="nav-link" href="#">LOGIN</a></li>

            <!-- The login modal -->
            <div id="loginModal" class="modal">
              <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Welcome Back</h2>
                <form id="loginForm">
                  <div class="form-group">
                    <input type="text" id="username" name="username" placeholder="Username" required />
                  </div>
                  <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Password" required />
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
                    <input type="text" id="signupUsername" name="signupUsername" placeholder="Username" required />
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
                <h2 data-swiper-parallax="-300">Your Adventure Travel Experts In Europe!</h2>
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
                <h2 data-swiper-parallax="-300">3 Points Secrets to Maintaining Traveling</h2>
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
                <h2 data-swiper-parallax="-300">Sensation Ice Trip Is Coming For Kids</h2>
                <a href="#" class="link" data-swiper-parallax="-100"><img src="images/arrow-link.png" alt="Image" />LEARN MORE</a>
              </div>
              <!-- end container -->
            </div>
            <!-- end slide-inner -->
          </div>
          <!-- end swiper-slide -->
          <div class="swiper-slide">
            <div class="slide-inner bg-image" data-background="images/slide01.jpg">
              <div class="container">
                <h2 data-swiper-parallax="-300">Sensation Ice Trip Is Coming For Kids</h2>
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
    <section class="find-adventure">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3>Find Your Next Adventure!</h3>
            <form>
              <div class="form-group">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search Activities, Themes or Tours" />
              </div>
              <!-- end form-group -->
              <div class="form-group datepicker">
                <i class="fa fa-calendar-o"></i>
                <input type="text" class="datepicker__input" placeholder="Choose Date" />
              </div>
              <!-- end form-group -->
              <button type="submit">SEARCH</button>
            </form>
            <dl>
              <dt>Suggestions <i class="fa fa-long-arrow-right"></i></dt>
              <dd><a href="#">Adventure</a></dd>
              <dd><a href="#">Nothern Lights</a></dd>
              <dd><a href="#">Waterfalls</a></dd>
              <dd><a href="#">Winter Tours</a></dd>
              <dd><a href="#">Glaciar Walk</a></dd>
            </dl>
          </div>
          <!-- end col-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end find-advanture -->
    <section class="popular-tours">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title">
              <h2>Most Popular Tours</h2>
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
          <div class="col-lg-4">
            <div class="tour-box">
              <figure><img src="images/tour-thumb01.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>namaKota</small>
                <h3>namaTour</h3>
                <ul>
                  <li>
                    <div><img src="images/icon-date.png" alt="Image" /> <small>tanggalKetersediaan</small> <span>ALL YEAR</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-time.png" alt="Image" /> <small>durasiTour</small> <span>3-10 DAYS</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-tag.png" alt="Image" /> <small>hargaTour</small> <span>$166.750</span></div>
                  </li>
                </ul>
                <a href="tours-single.html">SELECT DATES</a>
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4">
            <div class="tour-box">
              <figure><img src="images/tour-thumb02.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>namaKota</small>
                <h3>namaTour</h3>
                <ul>
                  <li>
                    <div><img src="images/icon-date.png" alt="Image" /> <small>tanggalKetersediaan</small> <span>ALL YEAR</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-time.png" alt="Image" /> <small>durasiTour</small> <span>3-10 DAYS</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-tag.png" alt="Image" /> <small>hargaTour</small> <span>$166.750</span></div>
                  </li>
                </ul>
                <a href="tours-single.html">SELECT DATES</a>
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4">
            <div class="tour-box">
              <figure><img src="images/tour-thumb03.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>namaKota</small>
                <h3>namaTour</h3>
                <ul>
                  <li>
                    <div><img src="images/icon-date.png" alt="Image" /> <small>tanggalKetersediaan</small> <span>ALL YEAR</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-time.png" alt="Image" /> <small>durasiTour</small> <span>3-10 DAYS</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-tag.png" alt="Image" /> <small>hargaTour</small> <span>$166.750</span></div>
                  </li>
                </ul>
                <a href="tours-single.html">SELECT DATES</a>
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4">
            <div class="tour-box">
              <figure><img src="images/tour-thumb04.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>namaKota</small>
                <h3>namaTour</h3>
                <ul>
                  <li>
                    <div><img src="images/icon-date.png" alt="Image" /> <small>tanggalKetersediaan</small> <span>ALL YEAR</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-time.png" alt="Image" /> <small>durasiTour</small> <span>3-10 DAYS</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-tag.png" alt="Image" /> <small>hargaTour</small> <span>$166.750</span></div>
                  </li>
                </ul>
                <a href="tours-single.html">SELECT DATES</a>
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4">
            <div class="tour-box">
              <figure><img src="images/tour-thumb05.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>namaKota</small>
                <h3>namaTour</h3>
                <ul>
                  <li>
                    <div><img src="images/icon-date.png" alt="Image" /> <small>tanggalKetersediaan</small> <span>ALL YEAR</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-time.png" alt="Image" /> <small>durasiTour</small> <span>3-10 DAYS</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-tag.png" alt="Image" /> <small>hargaTour</small> <span>$166.750</span></div>
                  </li>
                </ul>
                <a href="tours-single.html">SELECT DATES</a>
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4">
            <div class="tour-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>namaKota</small>
                <h3>namaTour</h3>
                <ul>
                  <li>
                    <div><img src="images/icon-date.png" alt="Image" /> <small>tanggalKetersediaan</small> <span>ALL YEAR</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-time.png" alt="Image" /> <small>durasiTour</small> <span>3-10 DAYS</span></div>
                  </li>
                  <li>
                    <div><img src="images/icon-tag.png" alt="Image" /> <small>hargaTour</small> <span>$166.750</span></div>
                  </li>
                </ul>
                <a href="tours-single.html">SELECT DATES</a>
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-4 -->
          <div class="col-12 text-center"><a href="#" class="site-btn">LOAD MORE</a></div>
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
              <h2>Activities</h2>
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
        <!-- end container -->
        <div class="col-12">
          <div class="activities-carousel">
            <div class="swiper-carousel">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="attractions-single.html">
                    <figure class="activity-box">
                      <img src="images/attractions01-3x.jpg" alt="Image" />
                      <figcaption>kategori</figcaption>
                    </figure>
                  </a>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <a href="attractions-single.html">
                    <figure class="activity-box">
                      <img src="images/attractions02-3x.jpg" alt="Image" />
                      <figcaption>kategori</figcaption>
                    </figure>
                  </a>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <a href="attractions-single.html">
                    <figure class="activity-box">
                      <img src="images/attractions03-3x.jpg" alt="Image" />
                      <figcaption>kategori</figcaption>
                    </figure>
                  </a>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <a href="attractions-single.html">
                    <figure class="activity-box">
                      <img src="images/attractions04-3x.jpg" alt="Image" />
                      <figcaption>kategori</figcaption>
                    </figure>
                  </a>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <a href="attractions-single.html">
                    <figure class="activity-box">
                      <img src="images/attractions05-3x.jpg" alt="Image" />
                      <figcaption>kategori</figcaption>
                    </figure>
                  </a>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <a href="attractions-single.html">
                    <figure class="activity-box">
                      <img src="images/attractions06-3x.jpg" alt="Image" />
                      <figcaption>kategori</figcaption>
                    </figure>
                  </a>
                </div>
                <!-- end swiper-slide -->
              </div>
              <!-- end  swiper-wrapper -->
              <div class="swiper-button-prev"><div class="arrow-left"></div></div>
              <div class="swiper-button-next"><div class="arrow-right"></div></div>
            </div>
            <!-- end swiper-carousel -->
          </div>
          <!-- end activities carousel -->
        </div>
        <!-- end col-12 -->
        <div class="col-12 text-center"><a href="#" class="site-btn">LOAD MORE</a></div>
        <!-- end col-12 -->
      </div>
    </section>
    <!-- end adventure-activities -->
<?php
$result = mysqli_query($conn, "SELECT * FROM `berita`");
?>

<section class="recent-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Recent Blog Posts</h2>
                    <img src="images/title-seperator.png" alt="Image" />
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->

            <?php
$result = mysqli_query($conn, "SELECT * FROM `berita`");
?>

<section class="recent-blog">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Recent Blog Posts</h2>
                    <img src="images/title-seperator.png" alt="Image" />
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->

            <?php
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                // menambahkan kode untuk menampilkan data berita
                $tanggalBerita = $row['tanggalBerita'];
                $judulBerita = $row['judulBerita'];
                $penguploadBerita = $row['penguploadBerita'];
                $gambarBerita = $row['gambarBerita'];

            ?>

            <div class="col-lg-4">
                <div class="blog-post">
                    <!-- Gunakan path gambar dari database -->
                    <figure class="post-image"><img src="<?php echo $gambarBerita; ?>" alt="Image" /></figure>
                    <div class="post-content">
                        <small><?php echo $tanggalBerita; ?> <span>|</span><?php echo $penguploadBerita; ?></small>
                        <a href="blog-single.html"><h3><?php echo $judulBerita; ?></h3></a>
                        <!-- Tambahkan keterangan berita jika perlu -->
                        <p></p>
                        <a href="blog-single.html" class="read-more">READ MORE</a>
                    </div>
                    <!-- end post-content -->
                </div>
                <!-- end blog-post -->
            </div>
            <!-- end col-4  -->

            <?php
            }
            ?>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end recent-blog -->

<div class="col-12 text-center"><a href="#" class="site-btn">VISIT OUR BLOG</a></div>
<!-- end col-12 -->


    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4">
            <h5>ABOUT US</h5>
            <ul class="footer-menu">
              <li><a href="#">About us</a></li>
              <li><a href="#">Training & Safety</a></li>
              <li><a href="#">Our Guides</a></li>
              <li><a href="#">Office Team</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <!-- end col-3 -->
          <div class="col-lg-3 col-md-4">
            <h5>USEFUL INFO</h5>
            <ul class="footer-menu">
              <li><a href="#">Pickup Locations</a></li>
              <li><a href="#">Terms of Payment</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Difficulty Levels</a></li>
              <li><a href="#">Where to Find Us</a></li>
            </ul>
          </div>
          <!-- end col-3 -->
          <div class="col-lg-3 col-md-4">
            <h5>CONTACT US</h5>
            <address>
              GFXPARTNER INC.<br />
              Jakal km 14.5, Yogyakarta<br />
              Phone: 123 456 7890<br />
              <a href="#">info@gfxpartner.com</a>
            </address>
          </div>
          <!-- end col-3 -->
          <div class="col-lg-3">
            <h5>LANGUAGE & CURRENCY</h5>
            <div class="language dropdown selectdrop">
              <a href="#" data-toggle="dropdown" class="selection"
                >English <span>(United States)</span><span class="arrow"><i class="fa fa-angle-down"></i></span
              ></a>
              <ul class="dropdown-menu">
                <li>
                  <a>Portugues <span>(Brazil)</span></a>
                </li>
                <li>
                  <a>Spanish <span>(Mexican)</span></a>
                </li>
                <li>
                  <a>French <span>(France)</span></a>
                </li>
              </ul>
            </div>
            <!-- end language -->
            <div class="currency dropdown selectdrop">
              <a href="#" data-toggle="dropdown" class="selection"
                >USD<span class="arrow"><i class="fa fa-angle-down"></i></span
              ></a>
              <ul class="dropdown-menu">
                <li><a>EUR</a></li>
                <li><a>TRY</a></li>
                <li><a>RUB</a></li>
              </ul>
            </div>
            <!-- end currency -->
          </div>
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
          <div class="col-12"><span class="copyright">&copy; GFXPARTNER</span></div>
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