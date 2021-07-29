//  Select DOM Items
const menuBtn = document.querySelector(".menu-btn");
const menu = document.querySelector(".menu");
const menuNav = document.querySelector(".menu-nav");
const navItems = document.querySelectorAll(".nav-item");
const navlinks = document.querySelectorAll(".nav-link");

// set initial state of MENU
let showMenu = false;

menuBtn?.addEventListener("click", toggleMenu);

function toggleMenu() {
  if (!showMenu) {
    menuBtn.classList.add("close");
    menu.classList.add("show");
    menuNav.classList.add("show");
    navItems.forEach((navItem) => navItem.classList.add("show"));

    //  set menu state
    showMenu = true;
  } else {
    menuBtn.classList.remove("close");
    menu.classList.remove("show");
    menuNav.classList.remove("show");
    // menuBranding.classList.remove("show");
    navItems.forEach((navItem) => navItem.classList.remove("show"));

    //  set menu state
    showMenu = false;
  }
}

// navlinks.forEach((navLink) => {
//   navLink.addEventListener("click", () => {
//       menuNav.querySelector(".current").classList.remove("current")

//       navLink.classList.add("current")
//     })
// })



// change language
const langs = document.querySelectorAll(".lang");
const html = document.querySelector("html");
langs.forEach(lang => {
  lang.addEventListener('click', () => {
    if (html.getAttribute("dir") == 'ltr') {
      html.setAttribute("dir", "rtl");
      html.setAttribute("lang", "ar");
    } else {
      html.setAttribute("dir", "ltr");
      html.setAttribute("lang", "en");
    }
  })
})

// code select2 lib in header
function formatState(state) {
  if (!state.id) {
    return state.text;
  }
  var $state = $(
    '<span > <img src="' + $(state.element).attr('data-src') + '" class="img-flag" /> ' + state.text + '</span>'
  );
  return $state;
};
$('.select2').select2({
  minimumResultsForSearch: Infinity,
  templateResult: formatState,
  templateSelection: formatState
});




  // change nav when scroll
  const nav = document.querySelector("header");
  const menuContainer = document.querySelector(".menu-container");
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 30) {
      nav.classList.add("nav__scroll");
      menuContainer.classList.add("show")
    } else {
      nav.classList.remove("nav__scroll");
      menuContainer.classList.remove("show")
    }
  });


  const swiperHome = new Swiper(".swiper-home", {
    speed: 1000,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });


  // code swiper in product page
  const swiperMainSection = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,
  });
  const swiperSmallSection = new Swiper(".mySwiper2", {
    spaceBetween: 10,
   
    thumbs: {
      swiper: swiperMainSection,
    },
  });






