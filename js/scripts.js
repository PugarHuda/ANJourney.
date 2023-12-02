(function ($) {
  function initMap() {}

  $(document).ready(function () {
    "use strict";

    // TOOLTIP
    $('[data-toggle="tooltip"]').tooltip();

    // HAMBURGER
    $(".menu-btn").on("click", function (e) {
      $(".menu-btn").toggleClass("active");
      $(".bars .bar").toggleClass("rotated");
      $(".navbar .navbar-nav").toggleClass("active");
    });

    // SEARCH
    $(".search-btn").on("click", function (e) {
      $(".search-box").addClass("active");
    });
    $(".search-close-btn").on("click", function (e) {
      $(".search-box").removeClass("active");
    });

    // TOURS
    if ($(".tours").hasClass("tours-list")) {
      $(".tour-list-icon").css("color", "#ff9019");
    }

    if ($(".tours").hasClass("tours-grid")) {
      $(".tour-grid-icon").css("color", "#ff9019");
    }

    $(document).on("click", ".filter .dropdown-menu", function (e) {
      e.stopPropagation();
    });

    $(".tour-view-type").on("click", function (e) {
      if (
        $(e.target).hasClass("tour-list-icon") ||
        $(e.target).is(".tour-list-icon i")
      ) {
        $(".tour-list-icon").css("color", "#ff9019");
        $(".tour-grid-icon").css("color", "#bdc1c5");
        $(".tours").removeClass("tours-grid").addClass("tours-list");
        $(".tours .column").removeClass("col-lg-4").addClass("col-12");
        $(".tours .t-box").removeClass("tour-box").addClass("tour-box-list");
        e.preventDefault();
      }

      if (
        $(e.target).hasClass("tour-grid-icon") ||
        $(e.target).is(".tour-grid-icon i")
      ) {
        $(".tour-grid-icon").css("color", "#ff9019");
        $(".tour-list-icon").css("color", "#bdc1c5");
        $(".tours").addClass("tours-grid").removeClass("tours-list");
        $(".tours .column").addClass("col-lg-4").removeClass("col-12");
        $(".tours .t-box").addClass("tour-box").removeClass("tour-box-list");
        e.preventDefault();
      }
    });

    // BLOG
    if ($(".posts").hasClass("blog-posts-list")) {
      $(".blog-list-icon").css("color", "#ff9019");
    }

    if ($(".posts").hasClass("blog-posts-grid")) {
      $(".blog-grid-icon").css("color", "#ff9019");
    }

    $(".blog-view-type").on("click", function (e) {
      if (
        $(e.target).hasClass("blog-list-icon") ||
        $(e.target).is(".blog-list-icon i")
      ) {
        $(".blog-list-icon").css("color", "#ff9019");
        $(".blog-grid-icon").css("color", "#bdc1c5");
        $(".posts").removeClass("blog-posts-grid").addClass("blog-posts-list");
        $(".posts .column").removeClass("col-lg-4").addClass("col-12");
        $(".posts .post")
          .removeClass("blog-post-grid")
          .addClass("blog-post-list");
        e.preventDefault();
      }

      if (
        $(e.target).hasClass("blog-grid-icon") ||
        $(e.target).is(".blog-grid-icon i")
      ) {
        $(".blog-list-icon").css("color", "#bdc1c5");
        $(".blog-grid-icon").css("color", "#ff9019");
        $(".posts").addClass("tours-grid").removeClass("tours-list");
        $(".posts .column").addClass("col-lg-4").removeClass("col-12");
        $(".posts .post")
          .addClass("blog-post-grid")
          .removeClass("blog-post-list");
        e.preventDefault();
      }
    });

    // MOBILE MENU
    $(".navbar-nav .nav-item a").on("click", function () {
      $(this)
        .parent()
        .children(".navbar-nav .dropdown-menu, .navbar-nav .sub-dropdown-menu")
        .slideToggle(300);
      return true;
    });
  });
  // END JQUERY

  // COUNTER
  if (!document.getElementById("counter")) {
  } else {
    var lastWasLower = false;
    $(document).scroll(function () {
      var p = $("#counter");
      var position = p.position();
      var position2 = position.top;

      if ($(document).scrollTop() > position2 - 300) {
        if (!lastWasLower) $("#1").html("90368");
        $("#2").html("10759");
        $("#3").html("134116");
        $("#4").html("94329");

        lastWasLower = true;
      } else {
        lastWasLower = false;
      }
    });
  }

  $(".selectdrop .dropdown-menu li a").on("click", function () {
    var selText = $(this).html();
    $(this)
      .parents(".selectdrop")
      .find(".selection")
      .html(
        selText + '<span class="arrow"><i class="fa fa-angle-down"></i></span>'
      );
  });

  // WOW ANIMATION
  wow = new WOW({
    animateClass: "animated",
    offset: 50,
  });
  wow.init();

  // SLIDER
  var menu = [
    "WISATA TERSEMBUNYI<span>DI JAKARTA</span>",
    "WISATA<span>DI BALI</span>",
    "AYO EKSPLORE<span>YOGYAKARTA</span>",
    "KEAJAIBAN<span>KOTA BANDUNG</span>",
  ];
  var interleaveOffset = 0.5;
  var swiperOptions = {
    loop: true,
    speed: 1000,
    parallax: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    grabCursor: true,
    watchSlidesProgress: true,
    pagination: {
      el: ".swiper-custom-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + menu[index] + "</span>";
      },
    },
    on: {
      progress: function () {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          var slideProgress = swiper.slides[i].progress;
          var innerOffset = swiper.width * interleaveOffset;
          var innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector(".slide-inner").style.transform =
            "translate3d(" + innerTranslate + "px, 0, 0)";
        }
      },
      touchStart: function () {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = "";
        }
      },
      setTransition: function (speed) {
        var swiper = this;
        for (var i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + "ms";
          swiper.slides[i].querySelector(".slide-inner").style.transition =
            speed + "ms";
        }
      },
    },
  };

  var swiper = new Swiper(".swiper-container", swiperOptions);

  // DATA BACKGROUND IMAGE
  var pageSection = $(".bg-image");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css(
        "background-image",
        "url(" + $(this).data("background") + ")"
      );
    }
  });

  // CAROUSEL
  var swiper2 = new Swiper(".swiper-carousel", {
    slidesPerView: 3,
    spaceBetween: 14,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1024: {
        slidesPerView: 3,
        spaceBetween: 14,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 14,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 14,
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    },
  });

  // REVIEWS
  var swiper3 = new Swiper(".swiper-reviews", {
    slidesPerView: 3,
    spaceBetween: 30,
    // Navigation arrows
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      1023: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    },
  });

  // BLOG
  var swiper4 = new Swiper(".swiper-blog-carousel", {
    slidesPerView: "2",
    centeredSlides: true,
    loop: true,
    spaceBetween: 0,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      768: {
        slidesPerView: 1,
        spaceBetween: 14,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 14,
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    },
  });

  // ATTRACTION
  var swiper5 = new Swiper(".attraction-carousel", {
    slidesPerView: 4,
    spaceBetween: 15,
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      1024: {
        slidesPerView: 4,
        spaceBetween: 14,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 14,
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 14,
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    },
  });

  //LIST pagI
  document.addEventListener("DOMContentLoaded", function () {
    const tours = document.querySelectorAll(".tours-list .column");
    const itemsPerPage = 6;
    const totalTours = tours.length;
    const totalPages = Math.ceil(totalTours / itemsPerPage);
    let currentPage = 1;

    const btns = document.querySelectorAll(".btn");
    const paginationWrapper = document.querySelector(".pagination-wrapper");
    const bigDotContainer = document.querySelector(".big-dot-container");
    const littleDot = document.querySelector(".little-dot");

    for (let i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", btnClick);
    }

    function btnClick() {
      if (this.classList.contains("btn--prev")) {
        paginationWrapper.classList.add("transition-prev");
      } else {
        paginationWrapper.classList.add("transition-next");
      }

      const timeout = setTimeout(cleanClasses, 500);
    }

    function cleanClasses() {
      if (paginationWrapper.classList.contains("transition-next")) {
        paginationWrapper.classList.remove("transition-next");
      } else if (paginationWrapper.classList.contains("transition-prev")) {
        paginationWrapper.classList.remove("transition-prev");
      }
    }

    function showPage(page) {
      const startIndex = (page - 1) * itemsPerPage;
      const endIndex = startIndex + itemsPerPage;

      tours.forEach(function (tour, index) {
        if (index >= startIndex && index < endIndex) {
          tour.style.display = "block";
        } else {
          tour.style.display = "none";
        }
      });
    }

    function updatePagination() {
      const paginationDots = document.querySelectorAll(
        ".pagination-container .little-dot"
      );
      paginationDots.forEach(function (dot, index) {
        if (index === currentPage - 1) {
          dot.classList.add("active");
        } else {
          dot.classList.remove("active");
        }
      });
    }

    function navigateToPage(page) {
      currentPage = page;
      showPage(currentPage);
      updatePagination();
    }

    showPage(currentPage);
    updatePagination();

    document.querySelector(".btn--prev").addEventListener("click", function () {
      if (currentPage > 1) {
        navigateToPage(currentPage - 1);
      }
    });

    document.querySelector(".btn--next").addEventListener("click", function () {
      if (currentPage < totalPages) {
        navigateToPage(currentPage + 1);
      }
    });

    const paginationDots = document.querySelectorAll(
      ".pagination-container .little-dot"
    );
    paginationDots.forEach(function (dot, index) {
      dot.addEventListener("click", function () {
        navigateToPage(index + 1);
      });
    });
  });

  // LOGIN BARU 21/11/23
  // Ambil elemen-elemen yang dibutuhkan dari HTML
  // Ambil elemen yang dibutuhkan dari HTML
  const loginLink = document.getElementById("login-link");
  const loginModal = document.getElementById("loginModal");
  const closeButton = document.querySelector("#loginModal .close");

  const signUpLink = document.querySelector(".signup-link");
  const signUpModal = document.getElementById("signupModal");
  const closeSignUpButton = document.querySelector("#signupModal .close");

  // Fungsi untuk menampilkan modal login
  function openLoginModal() {
    loginModal.style.display = "block";
  }

  // Fungsi untuk menyembunyikan modal login
  function closeLoginModal() {
    loginModal.style.display = "none";
  }

  // Fungsi untuk menampilkan modal sign up
  function openSignUpModal() {
    signUpModal.style.display = "block";
    closeLoginModal(); // Menutup modal login saat membuka modal sign up
  }

  // Fungsi untuk menyembunyikan modal sign up
  function closeSignUpModal() {
    signUpModal.style.display = "none";
  }

  // Event listener untuk tombol Login pada modal login
  loginLink.addEventListener("click", openLoginModal);

  // Event listener untuk tombol close pada modal login
  closeButton.addEventListener("click", closeLoginModal);

  // Event listener untuk tombol Sign Up pada modal login
  signUpLink.addEventListener("click", openSignUpModal);

  // Event listener untuk tombol close pada modal sign up
  closeSignUpButton.addEventListener("click", closeSignUpModal);

  // Event listener untuk menutup modal ketika klik di luar modal
  window.addEventListener("click", (event) => {
    if (event.target === loginModal) {
      closeLoginModal();
    }
    if (event.target === signUpModal) {
      closeSignUpModal();
    }
  });

  // Event listener untuk mengirimkan form sign up (hanya contoh)
  const signupForm = document.getElementById("signupForm");
  signupForm.addEventListener("submit", (event) => {
    event.preventDefault(); // Menghentikan pengiriman form, hanya contoh
    // Lakukan sesuatu dengan data sign up (misalnya, validasi atau pengiriman ke server)
    // Kemudian tutup modal atau lakukan sesuatu yang sesuai dengan logika aplikasi Anda
    closeSignUpModal();
  });
  // Event listener untuk mengirimkan form sign up
  const signupForm = document.getElementById("signupForm");
  signupForm.addEventListener("submit", (event) => {
    event.preventDefault();

    // Ambil data dari form
    const firstName = document.getElementById("firstName").value;
    const lastName = document.getElementById("lastName").value;
    const signupEmail = document.getElementById("signupEmail").value;
    const signupPassword = document.getElementById("signupPassword").value;

    // Kirim data ke server PHP untuk membuat pengguna baru (Create)
    fetch("register.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `firstName=${firstName}&lastName=${lastName}&signupEmail=${signupEmail}&signupPassword=${signupPassword}`,
    })
      .then((response) => response.json())
      .then((data) => {
        // Tampilkan pesan ke pengguna
        alert(data.message);
        // Tutup modal sign up jika pendaftaran berhasil
        if (data.success) {
          closeSignUpModal();
        }
      })
      .catch((error) => console.error("Error:", error));
  });
})(jQuery);

// Event listener untuk mengirimkan form sign up
const signupForm = document.getElementById("signupForm");
signupForm.addEventListener("submit", (event) => {
  event.preventDefault();

  // Ambil data dari form
  const firstName = document.getElementById("firstName").value;
  const lastName = document.getElementById("lastName").value;
  const signupEmail = document.getElementById("signupEmail").value;
  const signupPassword = document.getElementById("signupPassword").value;

  // Kirim data ke server PHP untuk membuat pengguna baru (Create)
  fetch("register.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: `firstName=${firstName}&lastName=${lastName}&signupEmail=${signupEmail}&signupPassword=${signupPassword}`,
  })
    .then((response) => response.json())
    .then((data) => {
      // Tampilkan pesan ke pengguna
      alert(data.message);
      // Tutup modal sign up jika pendaftaran berhasil
      if (data.success) {
        closeSignUpModal();
      }
    })
    .catch((error) => console.error("Error:", error));
});
