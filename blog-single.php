<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- META TAGS -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ANJourney </title>
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
                            <form id="loginForm" method="POST" action="loginUser.php" onsubmit="submitLoginForm(event)">
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
            </nav>
            <!-- end navbar -->
        </div>
        <!-- end container -->
    </header>
    <!-- end header-int -->
    <section class="blog-header">
        <div class="container">
            <div class="row">
                <?php
// Ambil parameter ID_berita dari URL jika tersedia
$idBerita = isset($_GET['id']) ? $_GET['id'] : '';

// Buat query SQL dengan filter ID_berita
$sql = "SELECT * FROM berita WHERE id_berita = '$idBerita'";
$result = $conn->query($sql);

if ($result) {
    // Periksa apakah query berhasil dieksekusi dan apakah ada data
    if ($result->num_rows > 0) {
        // Ambil data pertama dari hasil query
        $row = $result->fetch_assoc();

        // Tampilkan informasi berita dalam markup HTML
        echo '<div class="col-12">
                <small><span>' . $row['tanggalBerita'] . '</span> <span>|</span> BY ' . $row['penguploadBerita'] . '</small>
                <h2>' . $row['judulBerita'] . '</h2>
              </div>
              <!-- end col-12 -->
            </div>
            <!-- end row -->
          </div>
          <!-- end container -->
        </section>
        <!-- end blog-header -->
        <div class="blog-hero-image bg-image" data-background="images/' . $row['gambarBerita'] . '"></div>
        <!-- end blog-hero-image -->';

        // Bebaskan hasil query
        $result->free();
    } else {
        echo "Data tidak ditemukan";
    }
} else {
    echo "Error: " . $conn->error;
}
?>

                <!-- end col-12 -->

                <section class="blog-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="inner">
                                    <ul class="social-share">
                                        <li>
                                            <a href="#" class="facebook-ico"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="twitter-ico"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="instagram-ico"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="googleplus-ico"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                    </ul>
                                    <?php
// Ambil parameter ID_berita dari URL jika tersedia
$idBerita = isset($_GET['id']) ? $_GET['id'] : '';

// Buat query SQL dengan filter ID_berita
$sql = "SELECT * FROM berita WHERE id_berita = '$idBerita'";

$result = $conn->query($sql);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
                                    <h3><?php echo $row['judulBerita']; ?></h3>
                                    <p>
                                        <?php echo $row['deskripsiBerita']; ?>
                                    </p>
                                    <?php
        }
    } else {
        echo "Data tidak ditemukan";
    }
} else {
    echo "Error: " . $conn->error;
}
?>


                                    <!-- <p>
                                        Pellentesque vestibulum fermentum velit non placerat aecenas in hendrerit justo
                                        quisque quis rhoncus exeget semper semlam at lobortis velit. Vestibulum ante
                                        ipsum primis in faucibus orcie luctus et ultrices posuere
                                        <a href="#">Cubilia Curae</a> ed dignissim leo lorema condimentum mauris
                                        vestibulum et maecenas vitae urna aced magna facilisis porttitor. Fusce in eros
                                        at lectus mollis pulvinar. Nullam in auctor mimus consectetur
                                        ullamcorper facilisis vivamus luctus. Varius natoque penatibus et magnis dis
                                        turient montes scetur ridiculus mus. Cras eleifend tellus sed congue ectetur
                                        velit urpis faucibus odio eget volutpat odio lectus eu erat esque
                                        estibulum fermentum velit non placerat aecenas in hendrerit justo.
                                    </p> -->
                                    <br />
                                    <!-- <h3>The Journey</h3>
                                    <p>
                                        Fusce in eros at lectus mollis pulvinar. Nullam in auctor mimus consectetur
                                        ullamcorper facilisis vivamus luctus. Varius natoque penatibus et magnis dis
                                        turient montes scetur ridiculus mus. Cras eleifend tellus sed congue
                                        ectetur velit urpis faucibus odio eget volutpat odio lectus eu erat esque
                                        estibulum fermentum velit non placerat aecenas in hendrerit justo.
                                    </p>
                                    <p>
                                        Quisque quis rhoncus exeget semper semlam at lobortis velit estibulum ante ipsum
                                        primis in <a href="#">Faucibus Orcie</a> luctus et ultrices posuere cubilia
                                        curae ed dignissim leo lorema condimentum mauris vestibulum et
                                        maecenas vitae urna aced magna cilisis cubilia curae ed <a href="#">Dignissim
                                            Porttitor</a> fusce in eros at lectus mollis pulvinar. Nullam in auctor
                                        mimus consectetur ullamcorper facilisis vivamus luctusodio lectus eu erat
                                        esque estibulum fermentum velit non placerat aecenas.
                                    </p>
                                    <p>
                                        Fusce in eros at lectus mollis pulvinar. Nullam in auctor mimus consectetur
                                        amcorper facilisis vivamus luctus. Varius natoque penatibus et magnis dis
                                        turient montes scetur ridiculus mus. Cras eleifend tellus sed congue
                                        ectetur velit urpis faucibus odio eget de volutpat odio lectus eu erat esque
                                        estibulum fermentum velit non placerat aecenas in hendrerit justo. Fusce in eros
                                        at lectus mollis pulvinar. Nullam in auctor mimus ectetur
                                        ullamcorper facilisis vivamus luctus. Varius natoque penatibus.
                                    </p> -->
                                </div>
                                <!-- end inner -->
                            </div>
                            <!-- end col-12 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end blog-content -->
                <div class="swiper-blog-carousel">
                    <!-- <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/blog-carousel01.jpg" alt="Image" /></div>
                        <div class="swiper-slide"><img src="images/blog-carousel02.jpg" alt="Image" /></div>
                        <div class="swiper-slide"><img src="images/blog-carousel03.jpg" alt="Image" /></div>
                    </div> -->
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
                <section class="blog-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="inner">
                                    <!-- <h3>Night Stay and Camping</h3>
                                    <p>
                                        Orci varius natoque penatibus et magnis dis turient montes nascetur ridiculus
                                        mus. Cras eleifend tellus sed congue ectetur velit turpis faucibus odio eget
                                        volutpat odio lectus eu erat. Fusce in eros at lectus mollis
                                        pulvinar. Nullam in auctor mimus desed consectetur ullamcorper facilisis vivamus
                                        luctus. <a href="#">Varius natoque</a> penatibus et magns dis turient montes
                                        scetur ridiculus mus. Cras eleifend tellus sed congue ectetur
                                        velit urpis faucibus odio eget volutpat odio lectus eu erat esque estibulum
                                        fermentum leg non placerat aecenas in hendrerit justo. -->
                                    </p>
                                    <!-- <h3>The Verdict</h3>
                                    <p>
                                        Fusce in eros at lectus mollis pulvinar. Nullam in auctor mimus consectetur
                                        ullamcorper facilisis vivamus luctus. Varius natoque penatibus et magnis dis
                                        turient montes scetur ridiculus mus. Cras eleifend tellus sed congue
                                        ectetur velit urpis faucibus odio eget volutpat odio lectus eu erat esque
                                        estibulum fermentum velit non placerat aecenas in hendrerit justo. -->
                                    </p>
                                    <p>
                                        <!-- Quisque quis rhoncus exeget semper semlam at lobortis velit estibulum ante ipsum
                                        primis in <a href="#">Faucibus Orcie</a> luctus et ultrices posuere cubilia
                                        curae ed dignissim leo lorema condimentum mauris vestibulum et
                                        maecenas vitae urna aced magna cilisis cubilia curae ed <a href="#">Dignissim
                                            Porttitor</a> fusce in eros at lectus mollis pulvinar. Nullam in auctor
                                        mimus consectetur ullamcorper facilisis vivamus luctusodio lectus eu erat
                                        esque estibulum fermentum velit non placerat aecenas. -->
                                    </p>
                                    <div class="about-author">
                                        <figure><img src="images/profile.jpg" alt="Image" /></figure>
                                        <small>ADMIN ANJOURNEY</small>
                                        <h5>About the Author</h5>
                                        <img src="images/title-seperator.png" alt="Image" class="title-seperator" />
                                        <p>
                                            SIAPA YAHHHH YANG JADI ADMIN ANJOURNEY
                                        </p>
                                    </div>
                                    <!-- end about-author -->
                                </div>
                                <!-- end inner -->
                            </div>
                            <!-- end col-12 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end blog-content -->
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
$sql = "SELECT * FROM berita ORDER BY RAND() LIMIT 3";

$result = $conn->query($sql);
        if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-lg-4">
                <div class="blog-post">
                  <figure class="post-image"><img src="images/' . $row['gambarBerita'] . '" alt="Image" /></figure>
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
                            <div class="col-12 text-center"><a href="blog-list.php" class="site-btn">KUNJUNGI BLOG
                                    KAMI</a>
                            </div>
                            <!-- end col-12 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end recent-blog -->
                <!-- end related-blog -->
                <section class="blog-comments">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Discussion</h5>
                                <img src="images/title-seperator.png" alt="Image" class="title-seperator" />
                                <div class="comments">
                                    <div class="comment">
                                        <figure><img src="images/profile.jpg" alt="Image" /></figure>
                                        <div class="info">
                                            <a href="#">REPLY</a>
                                            <h6>Pendekar</h6>
                                            <small>2018-03-02</small>
                                            <p>WAHHHH</p>
                                        </div>
                                        <!-- end info -->
                                    </div>
                                    <!-- end comment -->
                                    <div class="comment related">
                                        <figure><img src="images/profile.jpg" alt="Image" /></figure>
                                        <div class="info">
                                            <a href="#">REPLY</a>
                                            <h6>SIAPA YA</h6>
                                            <small>2018-03-02</small>
                                            <p>GOKILLL</p>
                                        </div>
                                        <!-- end info -->
                                    </div>
                                    <!-- end comment -->
                                    <div class="comment">
                                        <figure><img src="images/profile.jpg" alt="Image" /></figure>
                                        <div class="info">
                                            <a href="#">REPLY</a>
                                            <h6>Penakluk Land Of Dawn</h6>
                                            <small>2018-03-02</small>
                                            <p>HAAAAAA</p>
                                        </div>
                                        <!-- end info -->
                                    </div>
                                    <!-- end comment -->
                                </div>
                                <!-- end comments -->
                            </div>
                            <!-- end col-6 -->
                            <div class="col-lg-6">
                                <form class="row">
                                    <div class="col-12">
                                        <h5>Comment</h5>
                                        <img src="images/title-seperator.png" alt="Image" class="title-seperator" />
                                    </div>
                                    <!-- end col-12 -->
                                    <div class="form-group col-md-6">
                                        <input type="text" placeholder="Full Name" />
                                    </div>
                                    <!-- end form-group -->
                                    <div class="form-group col-md-6">
                                        <input type="text" placeholder="E-mail Address" />
                                    </div>
                                    <!-- end form-group -->
                                    <div class="form-group col-12">
                                        <textarea placeholder="Your Message"></textarea>
                                    </div>
                                    <!-- end form-group -->
                                    <div class="form-group col-12">
                                        <button type="submit">SEND COMMENT</button>
                                    </div>
                                    <!-- end form-group -->
                                </form>
                            </div>
                            <!-- end col-6 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <!-- end blog-comments -->

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
                    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                    crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                    crossorigin="anonymous"></script>
                <script src="js/swiper.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
                <script src="js/scripts.js"></script>
</body>

</html>