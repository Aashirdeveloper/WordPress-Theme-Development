// alert("loading");



// 17-09-2024/Tuesday

jQuery(document).ready(function(){
    jQuery(".owl-carousel").owlCarousel({
      
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:5000,
            smartSpeed:100,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:true,
                    loop:false
                }
            }
        })
    });
 