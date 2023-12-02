<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<php lang="zxx">
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
          <a href="index.php" class="navbar-brand"><img src="images/anjBlack.png" alt="Image" /></a>
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
              <a class="nav-link">ATTRACTIONS</a>
              <ul class="dropdown-menu">
                <li><a href="attcJak.php">JAKARTA</a></li>
                <li><a href="attcJog.php">YOGYAKARTA</a></li>
                <li><a href="attcBan.php">BANDUNG</a></li>
                <li><a href="attcBali.php">BALI</a></li>
              </ul>
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
    <section class="attractions-header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2>Ice Trekking (Denmark)</h2>
            <img src="images/title-seperator.png" alt="Image" />
            <p>
              Pellentesque vestibulum fermentum velit non placerat aecenas in hendrerit justo quisque quis rhoncus exeget semper semlam at lobortis velit. Vestibulum ante ipsum primis in faucibus orcie luctus et ultrices posuere cubilia
              curae ed dignissim leo lorema intum mauris vestibulum et maecenas vitae urna aced magna facilisis porttitor.
            </p>
          </div>
          <!-- end col-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end attractions-header -->
    <div class="attractions-hero-image bg-image" data-background="images/attractions-hero.jpg"></div>
    <!-- end attractions-hero-image -->
    <section class="attractions-desc">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="section-title">
              <h2>Our Most Popular Trekking Trail<br />Ending With Camps At Night</h2>
              <img src="images/title-seperator.png" alt="Image" />
            </div>
            <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-lg-6">
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget volutpat odio erat.</p>
            <p>
              Pellentesque vestibulum fermentum velit non placerat aecenas in hendrerit justo quisque quis rhoncus exeget semper semlam at lobortis velit. Vestibulum ante ipsum primis in faucibus orcie luctus et
              <a href="#">Cubilia Curae</a> ultrices posuere ed dignissim leo lorema condimentum mauris vestibulum et maecenas vitae urna aced magna facilisis porttitor.
            </p>
            <p>Fusce in eros at lectus mollis pulvinar. Nullam in auctor mimus consectetur ullamcorper facilisis vivamus luctus.</p>
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
            <p>
              Varius natoque penatibus et magnis dis turient montes scetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit urpis faucibus odio eget volutpat odio lectus eu erat esque estibulum fermentum velit non placerat
              justo.
            </p>
            <p>
              Quisque quis rhoncus exeget semper semlam at lobortis velit estibulum ante ipsum primis in <a href="#">Faucibus Orcie</a> luctus et ultrices posuere cubilia curae ed dignissim leo lorema condimentum mauris vestibulum et
              maecenas vitae urna aced magna cilisis cubilia curae ed <a href="#">Dignissim Porttitor</a> fusce in eros at lectus mollis pulvinar. Nullam in auctor mimus consectetur ullamcorper facilisis vivamus luctusodio lectus eu erat
              esque estibulum fermentum velit non placerat aecenas.
            </p>
          </div>
          <!-- end col-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end attraction-desc -->
    <div class="swiper-blog-carousel">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="images/attraction-carousel01.jpg" alt="Image" /></div>
        <div class="swiper-slide"><img src="images/attraction-carousel02.jpg" alt="Image" /></div>
        <div class="swiper-slide"><img src="images/attraction-carousel03.jpg" alt="Image" /></div>
      </div>
      <!-- end swiper-wrapper -->
      <!-- Add Pagination -->
      <div class="swiper-button-prev"><div class="arrow-left"></div></div>
      <div class="swiper-button-next"><div class="arrow-right"></div></div>
    </div>
    <!-- end swiper-blog-carousel -->
    <section class="things-todo">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12">
            <div class="section-title">
              <h2>Things To Do</h2>
              <img src="images/title-seperator.png" alt="Image" />
            </div>
            <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-md-6 border-right">
            <ul class="pull-left">
              <li><img src="images/attractions-icon01.jpg" alt="Image" /> Climbing Glaciers</li>
              <li><img src="images/attractions-icon02.jpg" alt="Image" /> Setting up Camps at Night</li>
              <li><img src="images/attractions-icon03.jpg" alt="Image" /> Beautiful Sight Seeing</li>
              <li><img src="images/attractions-icon04.jpg" alt="Image" /> Hiking The Icy Trails</li>
              <li><img src="images/attractions-icon05.jpg" alt="Image" /> Kayaking in Ocean</li>
            </ul>
          </div>
          <!--end col-6 -->
          <div class="col-md-6">
            <ul class="pull-right">
              <li><img src="images/attractions-icon06.jpg" alt="Image" /> Skiing on the Ice</li>
              <li><img src="images/attractions-icon07.jpg" alt="Image" /> Take Photos</li>
              <li><img src="images/attractions-icon08.jpg" alt="Image" /> Underwater Tours</li>
              <li><img src="images/attractions-icon09.jpg" alt="Image" /> Water Scooters</li>
              <li><img src="images/attractions-icon10.jpg" alt="Image" /> Surfing in the Ocean</li>
            </ul>
          </div>
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
              <h2>Available Tours (Ice Trekking)</h2>
              <img src="images/title-seperator.png" alt="Image" />
            </div>
            <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-lg-4">
            <div class="tour-box">
              <figure><img src="images/tour-thumb01.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>FROM SKAFTAFELL</small>
                <h3>Blue Ice Experience</h3>
                <ul>
                  <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                  <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                  <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.750</span></li>
                </ul>
                <a href="#">SELECT DATES</a>
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4">
            <div class="tour-box">
              <figure><img src="images/tour-thumb02.jpg" alt="Image" /> <span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <small>FROM SKAGEN</small>
                <h3>Kayaking by Glacier</h3>
                <ul>
                  <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                  <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                  <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.750</span></li>
                </ul>
                <a href="#">SELECT DATES</a>
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
                <small>FROM SKAGEN</small>
                <h3>Glacier Discovery</h3>
                <ul>
                  <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                  <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                  <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.750</span></li>
                </ul>
                <a href="#">SELECT DATES</a>
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
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
          <!-- end col-12 -->
          <div class="col-lg-6">
            <div class="blog-post">
              <figure class="post-image"><img src="images/relatedblog_thumb01.jpg" alt="Image" /></figure>
              <div class="post-content">
                <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
                <a href="blog-single.php"><h3>An Enchanted Ice Cave in Midst of Denmark</h3></a>
                <a href="blog-single.php" class="read-more">READ MORE</a>
              </div>
              <!-- end post-content -->
            </div>
            <!-- end blog-post -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
            <div class="blog-post">
              <figure class="post-image"><img src="images/relatedblog_thumb02.jpg" alt="Image" /></figure>
              <div class="post-content">
                <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
                <a href="blog-single.php"><h3>An Enchanted Ice Cave in Midst of Denmark</h3></a>
                <a href="blog-single.php" class="read-more">READ MORE</a>
              </div>
              <!-- end post-content -->
            </div>
            <!-- end blog-post -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
            <div class="blog-post">
              <figure class="post-image"><img src="images/relatedblog_thumb03.jpg" alt="Image" /></figure>
              <div class="post-content">
                <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
                <a href="blog-single.php"><h3>An Enchanted Ice Cave in Midst of Denmark</h3></a>
                <a href="blog-single.php" class="read-more">READ MORE</a>
              </div>
              <!-- end post-content -->
            </div>
            <!-- end blog-post -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
            <div class="blog-post">
              <figure class="post-image"><img src="images/relatedblog_thumb04.jpg" alt="Image" /></figure>
              <div class="post-content">
                <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
                <a href="blog-single.php"><h3>An Enchanted Ice Cave in Midst of Denmark</h3></a>
                <a href="blog-single.php" class="read-more">READ MORE</a>
              </div>
              <!-- end post-content -->
            </div>
            <!-- end blog-post -->
          </div>
          <!-- end col-6 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
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