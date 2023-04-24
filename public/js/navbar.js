
window.onscroll = function() {navBarClassChange()};

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