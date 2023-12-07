<?php
include "koneksi.php"
?>

<!doctype html>
<lang="zxx">
<head>
<!-- META TAGS -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Frolic | for Tour Operators & Travel Agencies</title>
<meta name="author" content="GFX Partner">
<meta name="description" content="Frolic | for Tour Operators & Travel Agencies">
<meta name="keywords" content="tour, ice, trip, travel, agency, life, vacation, treking, boat, walking, climbing, transition, svg, html, css">

<!-- FAVICON FILES -->
<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
<link href="ico/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/daterangepicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
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
      <div class="col-12"> <span class="search-close-btn"><i class="fa fa-times"></i></span>
        <h3>Make Quick Search to Find!</h3>
        <form>
          <div class="form-group"> <i class="fa fa-search"></i>
            <input type="text" placeholder="Search Activities, Themes or Tours">
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
<header class="header-int">
  <div class="container">
    <nav class="navbar dark"> <a href="index.php" class="navbar-brand"><img src="images/logo-dark.png" alt="Image"></a>
        <div class="menu-btn">
          <div class="menu-circle-wrap">
            <div class="wave"></div>
            <svg class="menu-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid" width="52" height="52" viewBox="0 0 52 52">
            <path d="M1,26a25,25 0 1,0 50,0a25,25 0 1,0 -50,0"></path>
            </svg> </div>
          <div class="bars">
            <div class="bar b1"></div>
            <div class="bar b2"></div>
            <div class="bar b3"></div>
          </div>
        </div>
        <!-- end menu-btn -->
     <span class="search-btn"><i class="fa fa-search"></i></span>
      <ul class="navbar-nav">
        <li class="nav-item dropdown"><a class="nav-link">HOME</a>
          <ul class="dropdown-menu">
            <li><a href="index-denmark.php">DENMARK</a></li>
            <li><a href="index-norway.php">NORWAY</a></li>
            <li><a href="index-finland.php">FINLAND</a></li>
            <li><a href="index-sweden.php">SWEDEN</a></li>
            <li><a href="index-iceland.php">ICELAND</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link">PAGES</a>
          <ul class="dropdown-menu">
            <li><a>TOUR</a>
              <ul class="sub-dropdown-menu">
                <li><a href="tours-grid.php">TOUR GRID</a></li>
                <li><a href="tours-list.php">TOUR LIST</a></li>
                <li><a href="tours-single.php">TOUR SINGLE</a></li>
              </ul>
            </li>
            <li><a>ABOUT US</a>
              <ul class="sub-dropdown-menu">
                <li><a href="about-us.php">ABOUT US</a></li>
                <li><a href="our-team.php">OUR TEAM</a></li>
              </ul>
            </li>
            <li><a>BLOG</a>
              <ul class="sub-dropdown-menu">
                <li><a href="blog-grid.php">BLOG POST GRID</a></li>
                <li><a href="blog-list.php">BLOG POST LIST</a></li>
                <li><a href="blog-single.php">BLOG POST SINGLE</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link">ATTRACTIONS</a>
          <ul class="dropdown-menu">
            <li><a href="attractions-4cols.php">FOUR COLUMNS</a></li>
            <li><a href="attractions-3cols.php">THREE COLUMNS</a></li>
            <li><a href="attractions-2cols.php">TWO COLUMNS</a></li>
            <li><a href="attractions-single.php">SINGLE PAGE</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class="nav-link">CHECKOUT</a>
          <ul class="dropdown-menu">
            <li><a href="passengers.php">PASSGENGER</a></li>
            <li><a href="booking.php">BOOKING</a></li>
            <li><a href="summary.php">SUMMARY</a></li>
            <li><a href="payment.php">PAYMENT</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT</a></li>
      </ul>
    </nav>
    <!-- end navbar -->
  </div>
  <!-- end container -->
</header>
<!-- end header-int -->
<section class="blog-header">
	<div class="container">
    <div class="row">
      <div class="col-12">
      <div class="section-title page-title">
          <h2>Recent Blog Posts</h2>
          <img src="images/title-seperator.png" alt="Image">
          </div>
        <!-- end section-title -->
       </div>
      <!-- end col-12 -->
      <div class="col-12">
        <div class="filter data-range-picker">
          <a>Dates <i class="fa fa-angle-down"></i></a>
        </div>
        <!-- end filter -->
        <div class="filter dropdown">
          <a href="#" data-toggle="dropdown">Category <i class="fa fa-angle-down"></i></a>
          <ul class="dropdown-menu dropdown-check">
            <li><input type="checkbox"><span>Glacier Walks</span></li>
            <li><input type="checkbox"><span>Ice Caves</span></li>
            <li><input type="checkbox"><span>Hiking and Trekking</span></li>
            <li><input type="checkbox"><span>Short Breaks and Getaways</span></li>
            <li><input type="checkbox"><span>Lava Caves</span></li>
            <li><input type="checkbox"><span>Northern Lights</span></li>
            <li><input type="checkbox"><span>Laugavegur Trek</span></li>
            <li><input type="checkbox"><span>Kayak Tours</span></li>
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
    			<a href="#" data-toggle="dropdown">Type<i class="fa fa-angle-down"></i></a>
    			<ul class="dropdown-menu dropdown-check">
    				<li><input type="checkbox"><span>Weekly Tips</span></li>
    				<li><input type="checkbox"><span>Travel Guides</span></li>
    				<li><input type="checkbox"><span>Culture</span></li>
    				<li><input type="checkbox"><span>Discover Denmark</span></li>
            <li><input type="checkbox"><span>Weather</span></li>
            <li>
            <div>
              <span><i class="fa fa-times"></i>CLEAR</span>
              <span><i class="fa fa-check"></i>APPLY</span>
            </div>
            </li>
    			</ul>
    		</div>
    		<!-- end filter -->
    		<ul class="view-type blog-view-type">
          <li><input type="text" placeholder="Search"></li>
    			<li><a href="#" class="blog-list-icon"><i class="fa fa-align-justify"></i></a></li>
    			<li><a href="#" class="blog-grid-icon"><i class="fa fa-th"></i></a></li>
    		</ul>
    		<!-- end view-type -->
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end blog-header -->
<section class="blog-posts posts blog-posts-grid">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb01.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>An Enchanted Ice Cave in Midst of Denmark</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb02.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>Laugavegur Trek Classic (Huts) for Camping</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb03.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>How to Reach the Peak Without Exhausting</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb04.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>Finish Carbon Emissions by Planting Trees</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb05.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>Driving in Denmark - Road Safety & Rules</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb06.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>Iceland's Northern Lights (Aurora Borealis)</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb07.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>The Most Challenging Trek in Finland</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb08.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>Laugavegur Trek Classic (Huts) for Camping</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb09.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>Visiting the Ice Cave With Tour Friends</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb10.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>Best Kayaking Sites You Should Experience</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb11.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <a href="blog-single.php"><h3>Joyful Underwater Tour in Northern Europe</h3></a>
            <p>Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget penatibus et magnis dis turient montes nascetur ridiculus volutpat odio lectus eu erat.</p>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-lg-4 column">
        <div class="blog-post-grid post">
          <figure class="post-image"> <img src="images/blog-thumb12.jpg" alt="Image"> </figure>
          <div class="post-content"> <small>2018-03-02 <span>|</span>BY GFXPARTNER</small>
            <h3>Living on the Edge With Your Tour Mates</h3>
            <a href="blog-single.php" class="read-more">READ MORE</a> </div>
          <!-- end post-content -->
        </div>
        <!-- end blog-post -->
      </div>
      <!-- end col-4  -->
      <div class="col-12 text-center"> <a href="#" class="site-btn">LOAD MORE</a> </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end blog-posts -->
<section class="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-12">
       <div class="inner">
        <h2>Subscribe to The Frolic<br>Mountain Guides Blog</h2>
        <img src="images/title-seperator.png" alt="Image">
        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. In erat est viverra fringilla euismod in fermentum sed augue nullam consectetur ligula id elementum.</p>
        <form>
        	<input type="text" placeholder="E-mail Address">
        	<button type="submit">SUBSCRIBE</button>
        </form>
        </div>
        <!-- end inner -->
        </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end quote -->
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
        GFXPARTNER INC.<br>
        30 Aarhus, Denmark<br>
        Phone: 123 456 7890<br>
        <a href="#">info@gfxpartner.com</a>
        </address>
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3">
        <h5>LANGUAGE & CURRENCY</h5>
        <div class="language dropdown selectdrop"> <a href="#" data-toggle="dropdown" class="selection">English <span>(United States)</span><span class="arrow"><i class="fa fa-angle-down"></i></span></a>
          <ul class="dropdown-menu">
            <li><a>Portugues <span>(Brazil)</span></a></li>
            <li><a>Spanish <span>(Mexican)</span></a></li>
            <li><a>French <span>(France)</span></a></li>
          </ul>
        </div>
        <!-- end language -->
        <div class="currency dropdown selectdrop"> <a href="#" data-toggle="dropdown" class="selection">USD<span class="arrow"><i class="fa fa-angle-down"></i></span></a>
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
          <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        </ul>
      </div>
      <!-- end col-12 -->
      <div class="col-12"> <span class="copyright">&copy; GFXPARTNER</span> </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</footer>

<!-- JS FILES -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script>
	// PRELOADER
		(function($) {
			$(window).on("load", function(){
				$("body").addClass("page-loaded");
			});

      $(".data-range-picker a").daterangepicker({
        linkedCalendars: false,
      });

      $(".daterangepicker").addClass("blog-picker");

		})(jQuery)
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="js/scripts.js"></script>
</body>
    </html>
