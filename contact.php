<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<lang="zxx">
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
                      <label for="account-phone">No.HP</label>
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
    <header class="header-int">
      <div class="container">
        <nav class="navbar dark">
          <a href="index.php" class="navbar-brand"><img src="images/logo-dark.png" alt="Image" /></a>
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
              <a class="nav-link">HOME</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="tours-list.php">TOURS</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="attractions-single.php">ATTRACTIONS</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="about-us.php">ABOUT US</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
          </ul>
        </nav>
        <!-- end navbar -->
      </div>
      <!-- end container -->
    </header>
    <!-- end header-int -->
    <section class="contact">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="section-title page-title">
                <h2>Contact Us</h2>
                <img src="images/title-seperator.png" alt="Image" />
              </div>
              <!-- end section-title -->
            </div>
            <!-- end col-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end content -->
      <div class="contact-hero-image bg-image" data-background="images/contact-hero.jpg"></div>
      <!-- end map -->
      <div class="content">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-12">
              <div class="section-title">
                <h2>Office Locations</h2>
                <img src="images/title-seperator.png" alt="Image" />
              </div>
              <!-- end section-title -->
              <p>
                Pellentesque vestibulum fermentum velit non placerat aecenas in hendrerit justo quisque quis rhoncus exeget semper semlam at lobortis velit. Vestibulum ante ipsum primis in faucibus orcie luctus et ultrices posuere cubilia
                curae ed dignissim leo lorema intum mauris vestibulum et maecenas vitae urna aced magna facilisis porttitor.
              </p>
            </div>
            <!-- end col-12 -->
            <div class="col-lg-3 col-md-6">
              <div class="contact-box">
                <figure><img src="images/contact-icon1.png" alt="Image" /></figure>
                <h5>MEDIA CONTACT</h5>
                <span><a href="#">media@frolic.com</a></span>
              </div>
              <!-- end contact-box -->
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
              <div class="contact-box">
                <figure><img src="images/contact-icon2.png" alt="Image" /></figure>
                <h5>SUPPORT CONTACT</h5>
                <span><a href="#">support@frolic.com</a></span>
              </div>
              <!-- end contact-box -->
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
              <div class="contact-box">
                <figure><img src="images/contact-icon3.png" alt="Image" /></figure>
                <h5>PHONE</h5>
                <span>+123 456 7890</span>
              </div>
              <!-- end contact-box -->
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
              <div class="contact-box no-border">
                <figure><img src="images/contact-icon4.png" alt="Image" /></figure>
                <h5>SOCIAL</h5>
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-tripadvisor"></i></a>
                  </li>
                </ul>
              </div>
              <!-- end contact-box -->
            </div>
            <!-- end col-3 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end content -->
    </section>
    <!-- end contact -->
    <section class="our-offices">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="office-box">
              <figure><img src="images/office01.jpg" alt="Image" /></figure>
              <div class="office-content">
                <h5>FROLIC INC.</h5>
                <address>
                  GFXPARTNER INC.<br />
                  30 Aarhus, Denmark<br />
                  Phone: 123 456 7890<br />
                  <a href="#">info@gfxpartner.com</a>
                </address>
              </div>
              <!-- end office-content -->
            </div>
            <!-- end office-box -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
            <div class="office-box">
              <figure><img src="images/office02.jpg" alt="Image" /></figure>
              <div class="office-content">
                <h5>FROLIC INC.</h5>
                <address>
                  GFXPARTNER INC.<br />
                  30 Aarhus, Germany<br />
                  Phone: 123 456 7890<br />
                  <a href="#">info@gfxpartner.com</a>
                </address>
              </div>
              <!-- end office-content -->
            </div>
            <!-- end office-box -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
            <div class="office-box">
              <figure><img src="images/office03.jpg" alt="Image" /></figure>
              <div class="office-content">
                <h5>FROLIC INC.</h5>
                <address>
                  GFXPARTNER INC.<br />
                  30 Aarhus, France<br />
                  Phone: 123 456 7890<br />
                  <a href="#">info@gfxpartner.com</a>
                </address>
              </div>
              <!-- end office-content -->
            </div>
            <!-- end office-box -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
            <div class="office-box">
              <figure><img src="images/office04.jpg" alt="Image" /></figure>
              <div class="office-content">
                <h5>FROLIC INC.</h5>
                <address>
                  GFXPARTNER INC.<br />
                  30 Aarhus, Iceland<br />
                  Phone: 123 456 7890<br />
                  <a href="#">info@gfxpartner.com</a>
                </address>
              </div>
              <!-- end office-content -->
            </div>
            <!-- end office-box -->
          </div>
          <!-- end col-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end our-offices -->
    <section class="contact-form">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <div class="section-title">
              <h2>Write Us a Message</h2>
              <img src="images/title-seperator.png" alt="Image" />
            </div>
            <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-lg-8 col-md-10">
            <form class="row">
              <div class="form-group col-md-6">
                <input type="text" placeholder="Full name" />
              </div>
              <!-- end form-group -->
              <div class="form-group col-md-6">
                <input type="text" placeholder="Email Adress" />
              </div>
              <!-- end form-group -->
              <div class="form-group col-md-6">
                <input type="text" placeholder="Phone" />
              </div>
              <!-- end form-group -->
              <div class="form-group col-md-6">
                <input type="text" placeholder="Subject" />
              </div>
              <!-- end form-group -->
              <div class="form-group col-12">
                <textarea placeholder="Your Message"></textarea>
              </div>
              <!-- end form-group -->
              <div class="form-group col-12 text-center">
                <button type="submit">SEND MESSAGE</button>
              </div>
              <!-- end form-group -->
            </form>
          </div>
          <!-- end col-8 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end contact-form -->
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
    <script>
      // PRELOADER
      (function ($) {
        $(window).on("load", function () {
          $("body").addClass("page-loaded");
        });
      })(jQuery);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
    </html>
