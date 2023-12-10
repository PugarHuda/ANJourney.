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
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous" />
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
                    <span class="search-btn"><i class="fa fa-search"></i></span>
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
                                <form id="loginForm" method="POST" action="loginUser.php"
                                    onsubmit="submitLoginForm(event)">
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
                                <p class="signup-link">Don't have an account? <a href="#" id="signup-link">Sign Up</a>
                                </p>
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
                                        <input type="text" id="lastName" name="lastName" placeholder="Last Name"
                                            required />
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
                <!-- end navbar -->
            </div>
            <!-- end container -->
        </header>
        <!-- end header-int -->
        <?php
        // Periksa apakah parameter 'id' telah diterima dan merupakan angka
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $tourId = $_GET['id'];

        // Query untuk mendapatkan data tur dari tabel "detailtour" berdasarkan ID
        $sql = "SELECT * FROM detailtour WHERE id_detailtour = $tourId";
        $result = $conn->query($sql);

        // Periksa apakah data ditemukan
        if ($result->num_rows > 0) {
        // Ambil data tur
        $detailRow = $result->fetch_assoc();
        ?>
        <section class="checkout-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- <small><?php echo $detailRow['namaKota']; ?></small> -->
                        <h2><?php echo $detailRow['namaTour']; ?></h2>
                    </div>
                    <!-- end col-8 -->
                    <div class="col-lg-4">
                        <p><?php echo $detailRow['deskripsiTour']; ?></p>
                    </div>
                    <!-- end col-4 -->
                    <div class="col-12">
                        <div class="info-box"><?php echo $detailRow['durasiTour']; ?><i class="fa fa-angle-down"
                                data-toggle="tooltip" data-placement="bottom" title="Durasi Tour"></i></div>
                        <!-- end info-box -->
                        <div class="info-box">Price: <strong><?php echo $detailRow['hargaTour']; ?></strong><i
                                class="fa fa-angle-down" data-toggle="tooltip" data-placement="bottom"
                                title="Confirmed Price"></i></div>
                        <!-- end info-box -->
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <?php
    } else {
        echo "Tur tidak ditemukan.";
    }
} else {
    echo "ID tur tidak valid.";
}

?>
        <!-- end checkout-header -->
        <section class="checkout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="steps">
                            <!-- <small>STEP 4</small> -->
                            <h5>Informasi Pembayaran</h5>
                            <p>Mohon untuk mengisi informasi pembayaran di bawah ini...</p>
                            <span>MEMBAYAR SEBAGAI</span>

                            <?php
            // ID user yang ingin ditampilkan (sesuaikan dengan kebutuhan Anda)
            $userId = 1;

            // Query untuk mendapatkan data namaDepan dan namaBelakang dari tabel "user" berdasarkan ID
            $sql = "SELECT namaDepan, namaBelakang FROM user WHERE id_user = $userId";
            $result = $conn->query($sql);

            // Periksa apakah data ditemukan
            if ($result->num_rows > 0) {
                // Ambil data namaDepan dan namaBelakang
                $userRow = $result->fetch_assoc();

                // Tampilkan teks "PAYING AS A" diikuti dengan nama depan dan belakang dari pengguna
                echo '' . $userRow['namaDepan'] . ' ' . $userRow['namaBelakang'] . '</b>';
            } else {
                echo "Data user tidak ditemukan.";
            }

            
            ?>
                        </div>
                        <!-- end steps -->
                    </div>
                </div>

                <!-- end col-4 -->
                <div class="col-lg-8">
                    <div class="payment">
                        <form>
                            <div class="inner">
                                <h6>INFORMASI PEMBAYARAN</h6>
                                <!-- end form-group -->
                                <div class="form-group big">
                                    <input type="text" placeholder="Nomor Kartu" required />
                                </div>
                                <!-- end form-group -->
                                <div class="form-group big">
                                    <input type="text" placeholder="Tanggal Kadaluarsa" required />
                                </div>
                                <!-- end form-group -->
                                <div class="form-group big">
                                    <input type="text" placeholder="CVC/CVV" required />
                                </div>
                                <!-- end form-group -->
                                <div class="form-group big coupon-field">
                                    <input type="text" placeholder="Kode Promosi" />
                                </div>
                                <!-- end form-group -->
                            </div>
                            <!-- end inner -->
                        </form>
                    </div>
                    <!-- end payment -->
                </div>
                <!-- end col-8 -->
                <!-- Tautan Bootstrap CSS -->
                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

                <!-- Tautan SweetAlert CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">



                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

                <button type="button" class="site-btn pull-right" onclick="lakukanPembayaran()">LAKUKAN
                    PEMBAYARAN</button>

                <!-- Skrip JavaScript kustom -->
                <script>
                function lakukanPembayaran() {
                    // Mendapatkan nilai dari elemen formulir
                    var nomorKartu = document.getElementById('nomorKartu').value;
                    var tanggalKadaluarsa = document.getElementById('tanggalKadaluarsa').value;
                    var cvcCvv = document.getElementById('cvcCvv').value;

                    // Validasi formulir
                    if (nomorKartu === '' || tanggalKadaluarsa === '' || cvcCvv === '') {
                        // Menampilkan SweetAlert untuk formulir tidak lengkap
                        Swal.fire({
                            icon: 'error',
                            title: 'Perhatian',
                            text: 'Harap lengkapi semua kolom informasi pembayaran.'
                        });
                    } else {
                        // Menampilkan SweetAlert pembayaran berhasil
                        Swal.fire({
                            icon: 'success',
                            title: 'Pembayaran Berhasil',
                            text: 'Terima kasih atas pembayarannya!'
                        });
                    }
                }
                </script>
                <!-- Skrip Bootstrap dan SweetAlert JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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