 // Animation on scroll
 window.addEventListener('load', () => {
   AOS.init({
    offset: 120, // offset (in px) from the original trigger point
    delay: 200, // values from 0 to 3000, with step 50ms
    duration: 1000, // values from 0 to 3000, with step 50ms
    easing: 'ease-in-out', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: true,
   });
 });

/**
 * Preloader
 */
let preloader = document.querySelector('#preloader');
if (preloader) {
    window.addEventListener('load', () => {
        preloader.remove()
    });
}

/**
 * Owl slider
 */
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        items: 4,
        responsiveClass: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            500: {
                items: 2,
                nav: false
            },
            800: {
                items: 3,
                nav: true
            },
            1000: {
                items: 4,
                nav: true
            }
        }
    });
  });

/**
 * Preloader
 */
 let navbarlinks = document.querySelectorAll('.navbar-nav .nav-item .nav-link');
 let sections = document.querySelectorAll('header, #about, #cars, #contact, #faq');
 if (navbarlinks) {
     window.addEventListener('scroll', () => {
        let position = window.scrollY
        for(let i=0; i<sections.length; i++){
            navbarlinks[i].classList.remove("active")
            if(position >= sections[i].offsetTop-69  && position <= (sections[i].offsetTop + sections[i].offsetHeight-69)) {
                navbarlinks[i].classList.add("active")
            }
            else {
                navbarlinks[i].classList.remove("active")
            }
        }
     });
 }

 /**
 * navbar background
 */

  let navbar = document.querySelector('#nav');
  window.addEventListener('scroll', () => {
    let position = window.scrollY
    if(position > 69) {
        navbar.classList.add("scrolled")
    }
    else {
        navbar.classList.remove("scrolled")
    }
})
