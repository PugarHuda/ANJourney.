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
    <section class="checkout-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <small>FROM SKAGEN</small>
            <h2>Take a Walk on the Green Side</h2>
          </div>
          <!-- end col-8 -->
          <div class="col-lg-4">
            <p>Arci varius natoque penatibus et magnis dis turient montes scetur ridiculus mus cras eleifend.</p>
            <p>Tour Code: <strong>WS-3597</strong></p>
          </div>
          <!-- end col-4 -->
          <div class="col-12">
            <div class="info-box">Aug 30th 2018<i class="fa fa-angle-down" data-toggle="tooltip" data-placement="bottom" title="Departure Date"></i></div>
            <!-- end info-box -->
            <div class="info-box">12:30 AM<i class="fa fa-angle-down" data-toggle="tooltip" data-placement="bottom" title="Departure Time"></i></div>
            <!-- end info-box -->
            <div class="info-box">2 Adults + 1 Child<i class="fa fa-angle-down" data-toggle="tooltip" data-placement="bottom" title="Total 3 Passengers"></i></div>
            <!-- end info-box -->
            <div class="info-box">Price: <strong>$1.278</strong><i class="fa fa-angle-down" data-toggle="tooltip" data-placement="bottom" title="Confirmed Price"></i></div>
            <!-- end info-box -->
          </div>
          <!-- end col-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end checkout-header -->
    <section class="checkout">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="steps">
              <small>STEP 2</small>
              <h5>Booking Details</h5>
              <p>Please provide basic information for all of the passengers travelling with us including any extras.</p>
            </div>
            <!-- end steps -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-8">
            <div class="passengers-info">
              <form>
                <div class="inner">
                  <h6>PASSENGER INFORMATION</h6>
                  <div class="form-group">
                    <input type="text" placeholder="First Name" />
                  </div>
                  <!-- end form-group -->
                  <div class="form-group">
                    <input type="text" placeholder="Last Name" />
                  </div>
                  <!-- end form-group -->
                  <div class="form-group">
                    <input type="text" placeholder="Email Address" />
                  </div>
                  <!-- end form-group -->
                  <div class="form-group">
                    <input type="text" placeholder="Confirm Email Address" />
                  </div>
                  <!-- end form-group -->
                  <div class="form-group">
                    <input type="text" placeholder="Phone" />
                  </div>
                  <!-- end form-group -->
                  <div class="form-group">
                    <div class="currency dropdown selectdrop">
                      <a href="#" data-toggle="dropdown" class="selection"
                        >Nationality<span class="arrow"><i class="fa fa-angle-down"></i></span
                      ></a>
                      <ul class="dropdown-menu">
                        <li><a>Afghanistan</a></li>
                        <li><a>Åland Islands</a></li>
                        <li><a>Albania</a></li>
                        <li><a>Algeria</a></li>
                        <li><a>American Samoa</a></li>
                        <li><a>Andorra</a></li>
                        <li><a>Angola</a></li>
                        <li><a>Anguilla</a></li>
                        <li><a>Antarctica</a></li>
                        <li><a>Antigua and Barbuda</a></li>
                        <li><a>Argentina</a></li>
                        <li><a>Armenia</a></li>
                        <li><a>Aruba</a></li>
                        <li><a>Australia</a></li>
                        <li><a>Austria</a></li>
                        <li><a>Azerbaijan</a></li>
                        <li><a>Bahamas</a></li>
                        <li><a>Bahrain</a></li>
                        <li><a>Bangladesh</a></li>
                        <li><a>Barbados</a></li>
                        <li><a>Belarus</a></li>
                        <li><a>Belgium</a></li>
                        <li><a>Belize</a></li>
                        <li><a>Benin</a></li>
                        <li><a>Bermuda</a></li>
                        <li><a>Bhutan</a></li>
                        <li><a>Bolivia</a></li>
                        <li><a>Bosnia and Herzegovina</a></li>
                        <li><a>Botswana</a></li>
                        <li><a>Bouvet Island</a></li>
                        <li><a>Brazil</a></li>
                        <li><a>British Indian Ocean Territory</a></li>
                        <li><a>Brunei Darussalam</a></li>
                        <li><a>Bulgaria</a></li>
                        <li><a>Burkina Faso</a></li>
                        <li><a>Burundi</a></li>
                        <li><a>Cambodia</a></li>
                        <li><a>Cameroon</a></li>
                        <li><a>Canada</a></li>
                        <li><a>Cape Verde</a></li>
                        <li><a>Cayman Islands</a></li>
                        <li><a>Central African Republic</a></li>
                        <li><a>Chad</a></li>
                        <li><a>Chile</a></li>
                        <li><a>China</a></li>
                        <li><a>Christmas Island</a></li>
                        <li><a>Cocos (Keeling) Islands</a></li>
                        <li><a>Colombia</a></li>
                        <li><a>Comoros</a></li>
                        <li><a>Congo</a></li>
                        <li><a>Congo, The Democratic Republic of The</a></li>
                        <li><a>Cook Islands</a></li>
                        <li><a>Costa Rica</a></li>
                        <li><a>Cote D'ivoire</a></li>
                        <li><a>Croatia</a></li>
                        <li><a>Cuba</a></li>
                        <li><a>Cyprus</a></li>
                        <li><a>Czech Republic</a></li>
                        <li><a>Denmark</a></li>
                        <li><a>Djibouti</a></li>
                        <li><a>Dominica</a></li>
                        <li><a>Dominican Republic</a></li>
                        <li><a>Ecuador</a></li>
                        <li><a>Egypt</a></li>
                        <li><a>El Salvador</a></li>
                        <li><a>Equatorial Guinea</a></li>
                        <li><a>Eritrea</a></li>
                        <li><a>Estonia</a></li>
                        <li><a>Ethiopia</a></li>
                        <li><a>Falkland Islands (Malvinas)</a></li>
                        <li><a>Faroe Islands</a></li>
                        <li><a>Fiji</a></li>
                        <li><a>Finland</a></li>
                        <li><a>France</a></li>
                        <li><a>French Guiana</a></li>
                        <li><a>French Polynesia</a></li>
                        <li><a>French Southern Territories</a></li>
                        <li><a>Gabon</a></li>
                        <li><a>Gambia</a></li>
                        <li><a>Georgia</a></li>
                        <li><a>Germany</a></li>
                        <li><a>Ghana</a></li>
                        <li><a>Gibraltar</a></li>
                        <li><a>Greece</a></li>
                        <li><a>Greenland</a></li>
                        <li><a>Grenada</a></li>
                        <li><a>Guadeloupe</a></li>
                        <li><a>Guam</a></li>
                        <li><a>Guatemala</a></li>
                        <li><a>Guernsey</a></li>
                        <li><a>Guinea</a></li>
                        <li><a>Guyana</a></li>
                        <li><a>Haiti</a></li>
                        <li><a>Heard Island and Mcdonald Islands</a></li>
                        <li><a>Holy See (Vatican City State</a>)</li>
                        <li><a>Honduras</a></li>
                        <li><a>Hong Kong</a></li>
                        <li><a>Hungary</a></li>
                        <li><a>Iceland</a></li>
                        <li><a>India</a></li>
                        <li><a>Indonesia</a></li>
                        <li><a>Iran, Islamic Republic of</a></li>
                        <li><a>Iraq</a></li>
                        <li><a>Ireland</a></li>
                        <li><a>Isle of Man</a></li>
                        <li><a>Israel</a></li>
                        <li><a>Italy</a></li>
                        <li><a>Jamaica</a></li>
                        <li><a>Japan</a></li>
                        <li><a>Jersey</a></li>
                        <li><a>Jordan</a></li>
                        <li><a>Kazakhstan</a></li>
                        <li><a>Kenya</a></li>
                        <li><a>Kiribati</a></li>
                        <li><a>Korea, Democratic People's Republic of</a></li>
                        <li><a>Korea, Republic of</a></li>
                        <li><a>Kuwait</a></li>
                        <li><a>Kyrgyzstan</a></li>
                        <li><a>Lao People's Democratic Republic</a></li>
                        <li><a>Latvia</a></li>
                        <li><a>Lebanon</a></li>
                        <li><a>Lesotho</a></li>
                        <li><a>Liberia</a></li>
                        <li><a>Libyan Arab Jamahiriya</a></li>
                        <li><a>Liechtenstein</a></li>
                        <li><a>Lithuania</a></li>
                        <li><a>Luxembourg</a></li>
                        <li><a>Macao</a></li>
                        <li><a>Macedonia, The Former Yugoslav Republic of</a></li>
                        <li><a>Madagascar</a></li>
                        <li><a>Malawi</a></li>
                        <li><a>Malaysia</a></li>
                        <li><a>Maldives</a></li>
                        <li><a>Mali</a></li>
                        <li><a>Malta</a></li>
                        <li><a>Marshall Islands</a></li>
                        <li><a>Martinique</a></li>
                        <li><a>Mauritania</a></li>
                        <li><a>Mauritius</a></li>
                        <li><a>Mayotte</a></li>
                        <li><a>Mexico</a></li>
                        <li><a>Micronesia, Federated States of</a></li>
                        <li><a>Moldova, Republic of</a></li>
                        <li><a>Monaco</a></li>
                        <li><a>Mongolia</a></li>
                        <li><a>Montenegro</a></li>
                        <li><a>Montserrat</a></li>
                        <li><a>Morocco</a></li>
                        <li><a>Mozambique</a></li>
                        <li><a>Myanmar</a></li>
                        <li><a>Namibia</a></li>
                        <li><a>Nauru</a></li>
                        <li><a>Nepal</a></li>
                        <li><a>Netherlands</a></li>
                        <li><a>Netherlands Antilles</a></li>
                        <li><a>New Caledonia</a></li>
                        <li><a>New Zealand</a></li>
                        <li><a>Nicaragua</a></li>
                        <li><a>Niger</a></li>
                        <li><a>Nigeria</a></li>
                        <li><a>Niue</a></li>
                        <li><a>Norfolk Island</a></li>
                        <li><a>Northern Mariana Islands</a></li>
                        <li><a>Norway</a></li>
                        <li><a>Oman</a></li>
                        <li><a>Pakistan</a></li>
                        <li><a></a>Palau</li>
                        <li><a>Palestinian Territory, Occupied</a></li>
                        <li><a></a>Panama</li>
                        <li><a>Papua New Guinea</a></li>
                        <li><a>Paraguay</a></li>
                        <li><a>Peru</a></li>
                        <li><a>Philippines</a></li>
                        <li><a>Pitcairn</a></li>
                        <li><a>Poland</a></li>
                        <li><a>Portugal</a></li>
                        <li><a>Puerto Rico</a></li>
                        <li><a>Qatar</a></li>
                        <li><a>Reunion</a></li>
                        <li><a>Romania</a></li>
                        <li><a>Russian Federation</a></li>
                        <li><a>Rwanda</a></li>
                        <li><a>Saint Helena</a></li>
                        <li><a>Saint Kitts and Nevis</a></li>
                        <li><a>Saint Lucia</a></li>
                        <li><a>Saint Pierre and Miquelon</a></li>
                        <li><a>Saint Vincent and The Grenadines</a></li>
                        <li><a>Samoa</a></li>
                        <li><a>San Marino</a></li>
                        <li><a>Sao Tome and Principe</a></li>
                        <li><a>Saudi Arabia</a></li>
                        <li><a>Senegal</a></li>
                        <li><a>Serbia</a></li>
                        <li><a>Seychelles</a></li>
                        <li><a>Sierra Leone</a></li>
                        <li><a>Singapore</a></li>
                        <li><a>Slovakia</a></li>
                        <li><a>Slovenia</a></li>
                        <li><a>Solomon Islands</a></li>
                        <li><a>Somalia</a></li>
                        <li><a>South Africa</a></li>
                        <li><a>South Georgia and The South Sandwich Islands</a></li>
                        <li><a>Spain</a></li>
                        <li><a>Sri Lanka</a></li>
                        <li><a>Sudan</a></li>
                        <li><a>Suriname</a></li>
                        <li><a>Svalbard and Jan Mayen</a></li>
                        <li><a>Swaziland</a></li>
                        <li><a>Sweden</a></li>
                        <li><a>Switzerland</a></li>
                        <li><a>Syrian Arab Republic</a></li>
                        <li><a>Taiwan, Province of China</a></li>
                        <li><a>Tajikistan</a></li>
                        <li><a>Tanzania, United Republic of</a></li>
                        <li><a>Thailand</a></li>
                        <li><a>Timor-leste</a></li>
                        <li><a>Togo</a></li>
                        <li><a>Tokelau</a></li>
                        <li><a>Tonga</a></li>
                        <li><a>Trinidad and Tobago</a></li>
                        <li><a>Tunisia</a></li>
                        <li><a>Turkey</a></li>
                        <li><a>Turkmenistan</a></li>
                        <li><a>Turks and Caicos Islands</a></li>
                        <li><a>Tuvalu</a></li>
                        <li><a>Uganda</a></li>
                        <li><a>Ukraine</a></li>
                        <li><a>United Arab Emirates</a></li>
                        <li><a>United Kingdom</a></li>
                        <li><a>United States</a></li>
                        <li><a>United States Minor Outlying Islands</a></li>
                        <li><a>Uruguay</a></li>
                        <li><a>Uzbekistan</a></li>
                        <li><a>Vanuatu</a></li>
                        <li><a>Venezuela</a></li>
                        <li><a>Viet Nam</a></li>
                        <li><a>Virgin Islands, British</a></li>
                        <li><a>Virgin Islands, U.S.</a></li>
                        <li><a>Wallis and Futuna</a></li>
                        <li><a>Western Sahara</a></li>
                        <li><a>Yemen</a></li>
                        <li><a>Zambia</a></li>
                        <li><a>Zimbabwe</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- end form-group -->
                </div>
                <!-- end inner -->
                <input type="checkbox" /><label class="checklabel">I have read and agree to the <a href="#">Terms & Conditions</a> and <a href="#">Cancellation Policy</a>.</label>
                <button type="submit" class="site-btn pull-right">CONTINUE</button>
              </form>
            </div>
            <!-- end passengers-info -->
          </div>
          <!-- end col-8 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end checkout -->
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