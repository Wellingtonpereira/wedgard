$(document).scroll(function() {
    if ($(this).scrollTop() > 50) {
        $('.fixed-top').addClass('animated slideInDown');
        $(".fixed-top").addClass('menu-blank')
        $(".nav-link").addClass('nav-default')
    }else{
        $('.fixed-top').removeClass('animated slideInDown');
        $(".fixed-top").removeClass('menu-blank')
        $(".nav-link").removeClass('nav-default')
    }
});

$(document).ready(function(){
    $("a").on('click', function(event) {
  
      if (this.hash !== "") {
        event.preventDefault();
  
        var hash = this.hash;
  
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
     
          window.location.hash = hash;
        });
      }
    });

    $('.simplefilter .box-filter').click(function() {
      $('.simplefilter .box-filter').removeClass('active');
      $(this).addClass('active');
    });

});

// window.sr = ScrollReveal()

// sr.reveal('.btn-contact',{
//     scale:'2.3',
//     distance: '0px'
// })

// sr.reveal('.box-services', {
//     scale: 1.3,
//     distance: '0px'
// })


// Filterizd
var filterizd = $('.filtr-container').filterizr(
    {
        "delay": 25,
        "filterOutCss": {
            "opacity": 0,
            "transform": "scale(0.75)"
        },
        "filterInCss": {
            "opacity": 1,
            "transform": "scale(1)"
        }
    }
);

$('.owl-tools').owlCarousel({
    loop:true,
    margin:50,
    nav:false,
    items:1,
    autoplay:true,
    autoplayTimeout:10000,
    autoplayHoverPause:true
})

