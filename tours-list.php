
<?php
include "koneksi.php";
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
    </header>
    <!-- end header-int -->
    <section class="tours-header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h6>YOU SEARCHED</h6>
            <h2>Tur Paling Populer</h2>
            <p>Found <strong>83 Tours</strong>, Use the filters below to refine the search.</p>
          </div>
          <!-- end col-12 -->
          <div class="col-12">
            <!-- end filter -->
            <div class="filter dropdown">
              <a href="#" data-toggle="dropdown">Duration <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu dropdown-check">
                <li><input type="checkbox" /><span>3-5 Days</span></li>
                <li><input type="checkbox" /><span>5-7 Days</span></li>
                <li><input type="checkbox" /><span>7-9 Days</span></li>
                <li><input type="checkbox" /><span>10-15 Days</span></li>
                <li>
                  <div>
                    <span><i class="fa fa-times"></i>CLEAR</span>
                    <span><i class="fa fa-check"></i>APPLY</span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- end filter -->
            <div class="filter dropdown">
              <a href="#" data-toggle="dropdown">Category <i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu dropdown-check">
                <li><input type="checkbox" /><span>Glacier Walks</span></li>
                <li><input type="checkbox" /><span>Ice Caves</span></li>
                <li><input type="checkbox" /><span>Hiking and Trekking</span></li>
                <li><input type="checkbox" /><span>Short Breaks and Getaways</span></li>
                <li><input type="checkbox" /><span>Lava Caves</span></li>
                <li><input type="checkbox" /><span>Northern Lights</span></li>
                <li><input type="checkbox" /><span>Laugavegur Trek</span></li>
                <li><input type="checkbox" /><span>Kayak Tours</span></li>
                <li>
                  <div>
                    <span><i class="fa fa-times"></i>CLEAR</span>
                    <span><i class="fa fa-check"></i>APPLY</span>
                  </div>
                </li>
              </ul>
            </div>
            <!-- end filter -->
            <ul class="view-type tour-view-type">
              <li>
                <a href="#" class="tour-list-icon"><i class="fa fa-align-justify"></i></a>
              </li>
              <li>
                <a href="#" class="tour-grid-icon"><i class="fa fa-th"></i></a>
              </li>
            </ul>
          </div>
          <!-- end col-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end tours-header -->
    <section class="tours-list tours">
      <div class="container">
        <div class="row">
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb01.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAFTAFELL</small>
                <h3>Tour 1</h3>
                <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis.</p>
                <div class="inner">
                  <ul>
                    <li>
                      <div><img src="images/icon-date.png" alt="Image" /> <small>AVAILABLE</small> <span>ALL YEAR</span></div>
                    </li>
                    <li>
                      <div><img src="images/icon-time.png" alt="Image" /> <small>DURATION</small> <span>3-10 DAYS</span></div>
                    </li>
                    <li>
                      <div><img src="images/icon-tag.png" alt="Image" /> <small>FROM</small> <span>$166.750</span></div>
                    </li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb02.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>FROM SKAGEN</small>
                <h3>Tour 2</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb03.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 3</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb04.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>LAUGAVEGUR TRAIL</small>
                <h3>Tour 4</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb05.jpg" alt="Image" /></figure>
              <div class="tour-content">
                <small>FROM DENMARK</small>
                <h3>Tour 5</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 6</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 8</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 9</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 10</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 11</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 12</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 13</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 14</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 column">
            <div class="tour-box-list t-box">
              <figure><img src="images/tour-thumb06.jpg" alt="Image" /><span class="tag">MOST POPULAR</span></figure>
              <div class="tour-content">
                <span class="tag">MOST POPULAR</span>
                <small>FROM SKAGEN</small>
                <h3>Tour 15</h3>
                <p>
                  Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat
                  odio lectus eu erat.
                </p>
                <div class="inner">
                  <ul>
                    <li><img src="images/icon-date.png" alt="Image" /> <small>Available</small> <span>ALL YEAR</span></li>
                    <li><img src="images/icon-time.png" alt="Image" /> <small>Duration</small> <span>3-10 DAYS</span></li>
                    <li><img src="images/icon-tag.png" alt="Image" /> <small>From</small> <span>$166.5</span></li>
                  </ul>
                  <a href="tours-single.php">SELECT DATES</a>
                </div>
                <!-- end inner -->
              </div>
              <!-- end tour-content -->
            </div>
            <!-- end tour-box -->
          </div>
          <!-- end col-12 -->
          <div class="col-12 text-center">
            <div class="pagination-wrapper">
              <svg class="btn btn--prev" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z" />
                <path d="M0-.5h24v24H0z" fill="none" />
              </svg>

              <div class="pagination-container">
                <div class="little-dot little-dot--first"></div>
                <div class="little-dot">
                  <div class="big-dot-container">
                    <div class="big-dot"></div>
                  </div>
                </div>
                <div class="little-dot little-dot--last"></div>
              </div>

              <svg class="btn btn--next" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" />
                <path d="M0-.25h24v24H0z" fill="none" />
              </svg>
            </div>
          </div>
          <!-- end col-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end tours-grid -->

    <!-- end quote -->
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
  </body>
    </html>