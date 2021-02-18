$(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('header').addClass("header--sticky");
  }
  else{
    $('header').removeClass("header--sticky");
  }
});