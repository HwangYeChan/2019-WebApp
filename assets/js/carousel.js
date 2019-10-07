
$('#main-content .owl-carousel').owlCarousel({
  autoplay: true,
  stagePadding: 0,
  loop: true,
  margin: 0,
  nav: true,
  dots: true,
  dotsEach: 1,
  smartSpeed: 750,
  autoplayTimeout: 8000,
  navText: [
    '<i class="fa fa-angle-left" aria-hidden="true"></i>',
    '<i class="fa fa-angle-right" aria-hidden="true"></i>'
  ],
  navContainer: '#main-content .custom-nav',
  responsive:{
        0:{
            items: 1,
            dotsEach: 2,
        },
        400:{
            items: 2
        },
        600:{
            items: 3
        },
        1000:{
            items: 4
        },
        1200:{
            items: 5
        }
    }
});
