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
