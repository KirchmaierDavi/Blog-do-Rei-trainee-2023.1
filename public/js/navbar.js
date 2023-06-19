
window.onscroll = function() {navBarClassChange();scrollFunction();};

var navbar = document.getElementById("navbar");

var navbar_sticky = navbar.offsetTop;

function navBarClassChange() {
  if (window.pageYOffset > navbar_sticky) {
    navbar.classList.add("navbar-sticky");
  } else {
    navbar.classList.remove("navbar-sticky");
  }
}


const navbarBtn = document.getElementById("navbar-btn");

function toggleMenu(){
  navbar.classList.toggle('active');
}

navbarBtn.addEventListener('click', toggleMenu)


let btt_button = document.getElementById("backToTop");
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btt_button.style.display = "block";
  } else {
    btt_button.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
