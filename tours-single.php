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
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="tours-list.php">TOURS</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link">ATTRACTIONS</a>
              <ul class="dropdown-menu">
                <li><a href="attcJak.php">JAKARTA</a></li>
                <li><a href="attcJog.php">YOGYAKARTA</a></li>
                <li><a href="attcBan.php">BANDUNG</a></li>
                <li><a href="attcBali.php">MALANG</a></li>
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
    </header>
    <!-- end header-int -->
    <section class="tour-single-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h6>FROM SKAGEN</h6>
            <h2>Nama Tur</h2>
            <!-- end filter -->
            <div class="filter dropdown">
              <a href="#" data-toggle="dropdown">Passengers <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu dropdown-check passenger-dropdown">
                <li>
                  <div>
                    <h6>ADULTS <span>[16+]</span></h6>
                    <span>$102.18</span>
                  </div>
                  <div>
                    <ul>
                      <li><i class="fa fa-minus"></i></li>
                      <li>1</li>
                      <li><i class="fa fa-plus"></i></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <h6>CHILDREN <span>[10 - 15]</span></h6>
                    <span>$100</span>
                  </div>
                  <div>
                    <ul>
                      <li><i class="fa fa-minus"></i></li>
                      <li>1</li>
                      <li><i class="fa fa-plus"></i></li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div>
                    <span><i class="fa fa-times"></i>CLEAR</span>
                    <span><i class="fa fa-check"></i>APPLY</span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- end filter -->
            <div class="price">Price: <strong>$102.18</strong></div>
            <!-- end price -->
          </div>
          <!-- end col-8 -->
          <div class="col-lg-4">
            <p>Deskripsi singkat tur Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est, ab?</p>

            <a href="payment.php" class="site-btn">BOOK TOUR</a>
          </div>
          <!-- end col-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end tours-header -->
    <div class="tour-hero-image bg-image" data-background="images/tour-image.jpg"></div>
    <!-- end tour-hero-image -->
    <section class="tour-desc">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <div class="section-title">
              <h2>Our Most Popular Trekking Trail Ending With Camps At Night</h2>
              <img src="images/title-seperator.png" alt="Image" />
            </div>
            <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-lg-6">
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget volutpat odio lectus eu erat.</p>
            <p>
              Pellentesque vestibulum fermentum velit non placerat aecenas in hendrerit justo quisque quis rhoncus exeget semper semlam at lobortis velit. <a href="#">ullamcorper</a> ante ipsum primis in faucibus orcie luctus et ultrices
              posuere Cubilia Curae ed dignissim leo lorema condimentum mauris vestibulum et maecenas vitae urna aced magna facilisis porttitor.
            </p>
            <p>Fusce in eros at lectus mollis pulvinar. Nullam in auctor mimus consectetur <a href="#">ullamcorper</a> facilisis vivamus luctus.</p>
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
            <p>
              Varius natoque penatibus et magnis dis turient montes scetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit urpis faucibus odio eget volutpat odio lectus eu erat esque estibulum fermentum velit non placerat
              aecenas in hendrerit justo.
            </p>
            <p>
              Quisque quis rhoncus exeget semper semlam at lobortis velit estibulum ante ipsum primis in Faucibus Orcie luctus et ultrices posuere cubilia curae ed <a href="#">ullamcorper</a> condimentum mauris vestibulum et maecenas vitae
              urna aced magna cilisis cubilia curae ed Dignissim Porttitor fusce in eros at lectus mollis pulvinar. Nullam in auctor mimus consectetur ullamcorper facilisis vivamus luctusodio lectus eu erat esque estibulum fermentum velit
              non placerat aecenas.
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
              <h2>Tour Overview</h2>
              <img src="images/title-seperator.png" alt="Image" />
            </div>
            <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-12">
            <ul>
              <li>
                <figure><img src="images/overview-icon01.png" alt="Image" /></figure>
                <small>AVAILABLE</small>
                <h6>ALL YEAR</h6>
              </li>
              <!-- end li -->
              <li>
                <figure><img src="images/overview-icon02.png" alt="Image" /></figure>
                <small>DURATION</small>
                <h6>9-10 HOURS</h6>
              </li>
              <!-- end li -->
              <li>
              <!-- end li -->
              <li>
                <figure><img src="images/overview-icon04.png" alt="Image" /></figure>
                <small>GROUP SIZE</small>
                <h6>UP TO 15</h6>
              </li>
              <!-- end li -->
              <li>
                <figure><img src="images/overview-icon05.png" alt="Image" /></figure>
                <small>ON THE ICE</small>
                <h6>UP TO 2 HOURS</h6>
              </li>
              <!-- end li -->
              <li>
              <li>
                <figure><img src="images/overview-icon07.png" alt="Image" /></figure>
                <small>MINUMUM AGE</small>
                <h6>10 YEARS</h6>
              </li>
              <!-- end li -->
              <li>
                <figure><img src="images/overview-icon08.png" alt="Image" /></figure>
                <small>LANGUAGE</small>
                <h6>ENGLISH</h6>
              </li>
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
              <h2>Tour Attraction</h2>
              <img src="images/title-seperator.png" alt="Image" />
            </div>
            <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-12">
            <div class="attraction-carousel">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <figure class="attraction-box">
                    <img src="images/attractions01-3x.jpg" alt="Image" />
                    <figcaption>Camping in Valley</figcaption>
                  </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <figure class="attraction-box">
                    <img src="images/attractions02-3x.jpg" alt="Image" />
                    <figcaption>Underwater Tour</figcaption>
                  </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <a href="#">
                    <figure class="attraction-box">
                      <img src="images/attractions03-3x.jpg" alt="Image" />
                      <figcaption>Lake Views</figcaption>
                    </figure>
                  </a>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <figure class="attraction-box">
                    <img src="images/attractions04-3x.jpg" alt="Image" />
                    <figcaption>Ice Treking</figcaption>
                  </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <figure class="attraction-box">
                    <img src="images/attractions05-3x.jpg" alt="Image" />
                    <figcaption>Climb the Ice</figcaption>
                  </figure>
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide">
                  <figure class="attraction-box">
                    <img src="images/attractions06-3x.jpg" alt="Image" />
                    <figcaption>Boat Enjoy</figcaption>
                  </figure>
                </div>
                <!-- end swiper-slide -->
              </div>
              <!-- end  swiper-wrapper -->
              <div class="swiper-button-prev"><div class="arrow-left"></div></div>
              <div class="swiper-button-next"><div class="arrow-right"></div></div>
            </div>
            <!-- end attraction-carousel -->
          </div>
          <!-- end col-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
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
            <h3>Frequently Asked Questions</h3>
            <div class="accordion" id="accordion">
              <div class="card">
                <div class="card-header no-border" id="headingOne"><a data-toggle="collapse" href="#collapseOne" aria-expanded="true">How long in advance do I need to book?</a></div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                  <div class="card-body">
                    <p>Worci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus cras eleifend tellus sed congue ectetur velit upis aucibus odio eget volutpat.</p>
                  </div>
                  <!-- end card-body -->
                </div>
                <!-- end collapse -->
              </div>
              <!-- end card -->
              <div class="card">
                <div class="card-header" id="headingTwo"><a class="collapsed" data-toggle="collapse" href="#collapseTwo"> What if my hotel is not listed in the PU selection?</a></div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <p>Worci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus cras eleifend tellus sed congue ectetur velit upis aucibus odio eget volutpat.</p>
                  </div>
                  <!-- end card-body -->
                </div>
                <!-- end collapse -->
              </div>
              <!-- end card -->
              <div class="card">
                <div class="card-header" id="headingThree"><a class="collapsed" data-toggle="collapse" href="#collapseThree"> When does the pick up start?</a></div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    <p>Worci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus cras eleifend tellus sed congue ectetur velit upis aucibus odio eget volutpat.</p>
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
    <section class="related-tours">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>Related Adventure Tours</h2>
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
                  <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
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
                <small>FROM SKAFTAFELL</small>
                <h3>Blue Ice Experience</h3>
                <ul>
                  <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                  <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                  <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
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
                <small>FROM SKAFTAFELL</small>
                <h3>Blue Ice Experience</h3>
                <ul>
                  <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                  <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                  <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
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
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>
      // PRELOADER
      (function ($) {
        $(window).on("load", function () {
          $("body").addClass("page-loaded");
        });

        $(".data-range-picker a").daterangepicker({
          linkedCalendars: false,
        });

        $(".daterangepicker").addClass("blog-picker");
      })(jQuery);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUCRAdytmMnSNnCdu0Ll8Ldy8Oap-CpKQ&callback"></script>
    <script src="js/googlemaps.min.js"></script>
    <script src="js/route-map.js"></script>
  </body>
    </html>