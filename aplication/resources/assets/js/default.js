$(document).scroll(function() {
  if ($(this).scrollTop() > 100) {
      $(".fixed-top").addClass('menu-fixed')
  }else{
      $(".fixed-top").removeClass('menu-fixed')
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