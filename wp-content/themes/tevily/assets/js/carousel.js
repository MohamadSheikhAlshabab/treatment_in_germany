// $(document).ready(function () {
//     var silder = $(".owl-carousel");
//     silder.owlCarousel({
//         autoplay: true,
//         autoplayTimeout: 3000,
//         autoplayHoverPause: false,
//         items: 1,
//         stagePadding: 20,
//         center: true,
//         nav: false,
//         margin: 50,
//         dots: true,
//         loop: true,
//         responsive: {
//             0: { items: 1 },
//             480: { items: 2 },
//             575: { items: 2 },
//             768: { items: 2 },
//             991: { items: 3 },
//             1200: { items: 4 }
//         }
//     });
// });

jQuery(document).ready(function($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $('#customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        items: 3,
        margin: 0,
        autoplay: true,
        dots:true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          1170: {
            items: 3
          }
        }
    });
});