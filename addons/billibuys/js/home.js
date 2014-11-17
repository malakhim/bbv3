$(window).ready(function(){
  $('.abt_panel').height($(window).height());
  var buyertop = $('.buyer-panel').offset().top;  
  $('.abt_panel .learn-more').click(function(){
    $('html, body').animate({scrollTop: buyertop - $('#ci_top_wrapper').height()},1000,function(){return false});
  });

  $('#search-submit').click(function(){
    $(this).parent().submit();
  });

  if(navigator.userAgent.match(/android 2.3/i)){
    $("meta[name=viewport]").attr('content','user-scalable=yes','minimum-value=1.0','maximum-value=1.0');
  }else if(navigator.userAgent.match(/android 4/i)){
      $("meta[name=viewport]").attr('content','width=620','user-scalable=no');
  }
});

$(function() {
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
      
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top

        if (scroll_top > $('.buyer-panel').offset().top - $('#ci_top_wrapper').height()){
         $('#ci_top_wrapper').addClass('header-solid');
         $('.top-nav-submenu').addClass('header-solid');
         $('#ci_top_wrapper').removeClass('header-transparent');
         $('.top-nav-submenu').removeClass('header-transparent');
        }else{
          $('#ci_top_wrapper').removeClass('header-solid');
          $('.top-nav-submenu').removeClass('header-solid');
          $('#ci_top_wrapper').addClass('header-transparent');
          $('.top-nav-submenu').addClass('header-transparent');
        }
    };
     
    // run our function on load
    sticky_navigation();
     
    // and run it again every time you scroll
    $(window).scroll(function() {
         sticky_navigation();
    });
});