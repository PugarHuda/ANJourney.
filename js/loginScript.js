document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("loginForm");
  const loginModal = document.getElementById("loginModal");
  const closeBtn = document.querySelector(".close");
  const signupLink = document.querySelector(".signup-link");

  loginForm.addEventListener("submit", function (event) {
    event.preventDefault();

    const email = document.getElementById("loginEmail").value;
    const password = document.getElementById("loginPassword").value;

    fetch("login.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `loginEmail=${email}&loginPassword=${password}`,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alert(data.message);
          // Tambahkan logika untuk mengarahkan pengguna ke halaman setelah login berhasil
          loginModal.style.display = "none";
        } else {
          alert(data.message);
        }
      })
      .catch((error) => console.error("Error:", error));
  });

  closeBtn.addEventListener("click", function () {
    loginModal.style.display = "none";
  });

  signupLink.addEventListener("click", function () {
    // Tambahkan logika untuk menampilkan formulir pendaftaran jika diperlukan
  });
});
