let menuicn = document.querySelector(".menuicn");
let nav = document.querySelector(".navcontainer");

menuicn.addEventListener("click", () => {
  nav.classList.toggle("navclose");
});

// Script navbar
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("navbar");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("buttons");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += "";
}

// Pop Up Add
const AddBerita = document.getElementById("AddBerita");
const Berita = document.getElementById("detBerita");
const closeBerita = document.querySelector("#detBerita .close");

const AddTour = document.getElementById("AddTour");
const Tour = document.getElementById("detTour");
const closeTour = document.querySelector("#detTour .close");

const AddWisata = document.getElementById("AddWisata");
const Wisata = document.getElementById("detWisata");
const closeWisata = document.querySelector("#detWisata .close");

const AddPayment = document.getElementById("AddPayment");
const Payment = document.getElementById("detPayment");
const closePayment = document.querySelector("#detPayment .close");

const AddUser = document.getElementById("AddUser");
const User = document.getElementById("detUser");
const closeUser = document.querySelector("#detUser .close");

// Pop Up Remove
const RevBerita = document.getElementById("RevBerita");
const RemoveBerita = document.getElementById("RemoveBerita");
const closeRevBerita = document.querySelector("#RemoveBerita .close");

const RevTour = document.getElementById("RevTour");
const RemoveTour = document.getElementById("RemoveTour");
const closeRevTour = document.querySelector("#RemoveTour .close");

const RevWisata = document.getElementById("RevWisata");
const RemoveWisata = document.getElementById("RemoveWisata");
const closeRevWisata = document.querySelector("#RemoveWisata .close");

const RevPayment = document.getElementById("RevPayment");
const RemovePayment = document.getElementById("RemovePayment");
const closeRevPayment = document.querySelector("#RemovePayment .close");

const RevUser = document.getElementById("RevUser");
const RemoveUser = document.getElementById("RemoveUser");
const closeRevUser = document.querySelector("#RemoveUser .close");

// Add
function openDetBerita() {
  Berita.style.display = "block";
}

function closeDetBerita() {
  Berita.style.display = "none";
}

function openDetTour() {
  Tour.style.display = "block";
}

function closeDetTour() {
  Tour.style.display = "none";
}

function openDetWisata() {
  Wisata.style.display = "block";
}

function closeDetWisata() {
  Wisata.style.display = "none";
}

function openDetPayment() {
  Payment.style.display = "block";
}

function closeDetPayment() {
  Payment.style.display = "none";
}

function openDetUser() {
  User.style.display = "block";
}

function closeDetUser() {
  User.style.display = "none";
}

// Remove
function openRemoveBerita() {
  RemoveBerita.style.display = "block";
}

function closeRemoveBerita() {
  RemoveBerita.style.display = "none";
}

function openRemoveTour() {
  RemoveTour.style.display = "block";
}

function closeRemoveTour() {
  RemoveTour.style.display = "none";
}

function openRemoveWisata() {
  RemoveWisata.style.display = "block";
}

function closeRemoveWisata() {
  RemoveWisata.style.display = "none";
}

function openRemovePayment() {
  RemovePayment.style.display = "block";
}

function closeRemovePayment() {
  RemovePayment.style.display = "none";
}

function openRemoveUser() {
  RemoveUser.style.display = "block";
}

function closeRemoveUser() {
  RemoveUser.style.display = "none";
}

// Add
AddBerita.addEventListener("click", openDetBerita);

closeBerita.addEventListener("click", closeDetBerita);

AddTour.addEventListener("click", openDetTour);

closeTour.addEventListener("click", closeDetTour);

AddWisata.addEventListener("click", openDetWisata);

closeWisata.addEventListener("click", closeDetWisata);

AddPayment.addEventListener("click", openDetPayment);

closePayment.addEventListener("click", closeDetPayment);

AddUser.addEventListener("click", openDetUser);

closeUser.addEventListener("click", closeDetUser);

// Remove
RevBerita.addEventListener("click", openRemoveBerita);

closeRevBerita.addEventListener("click", closeRemoveBerita);

RevTour.addEventListener("click", openRemoveTour);

closeRevTour.addEventListener("click", closeRemoveTour);

RevWisata.addEventListener("click", openRemoveWisata);

closeRevWisata.addEventListener("click", closeRemoveWisata);

RevPayment.addEventListener("click", openRemovePayment);

closeRevPayment.addEventListener("click", closeRemovePayment);

RevUser.addEventListener("click", openRemoveUser);

closeRevUser.addEventListener("click", closeRemoveUser);

// Event listener untuk menutup modal ketika klik di luar modal
window.addEventListener("click", (event) => {
  if (event.target === Berita) {
    closeDetBerita();
  }
  if (event.target === Tour) {
    closeDetTour();
  }
  if (event.target === Wisata) {
    closeDetWisata();
  }
  if (event.target === Payment) {
    closeDetPayment();
  }
  if (event.target === User) {
    closeDetUser();
  }

  // Remove
  if (event.target === RemoveBerita) {
    closeRemoveBerita();
  }
  if (event.target === RemoveTour) {
    closeRemoveTour();
  }
  if (event.target === RemoveWisata) {
    closeRemoveWisata();
  }
  if (event.target === RemovePayment) {
    closeRemovePayment();
  }
  if (event.target === RemoveUser) {
    closeRemoveUser();
  }
});

// New Tab On Click
function viewAllBerita() {
  window.open("viewAllBerita.html", (target = "_self"));
}

function viewAllTour() {
  window.open("viewAllTour.html", (target = "_self"));
}

function viewAllWisata() {
  window.open("viewAllWisata.html", (target = "_self"));
}

function viewAllPayment() {
  window.open("viewAllPayment.html", (target = "_self"));
}

function viewAllUser() {
  window.open("viewAllUser.html", (target = "_self"));
}
