$(window).ready(function(){
  // $('.fp_panel').css('margin-left','-'+$('.fp_panel').offset().left + 'px');
  $('.abt_panel').height($(window).height());
  // $('.footer').css('margin-top',$('.fp_panel').height());
  // $('.footer').css('margin-top', $('.footer').offset().top + $('.fp-4').height() + $(window).height());
  // $('.fp_panel').height($('.buyerslider').offset().top+50);
  // console.log($('.fp_panel'));
  var buyertop = $('.buyer-panel').offset().top;  
  $('.abt_panel .learn-more').click(function(){

    $('html, body').animate({scrollTop: buyertop - $('#ci_top_wrapper').height()},1000,function(){return false});
  });

  //Firefox
  // var mousewheelevt = (/Firefox/i.test(navigator.userAgent)) ? "DOMMouseScroll" : "mousewheel" //FF doesn't recognize mousewheel as of FF3.x
  // $('body').bind(mousewheelevt, function(e){

  //     var evt = window.event || e //equalize event object     
  //     evt = evt.originalEvent ? evt.originalEvent : evt; //convert to originalEvent if possible               
  //     var delta = evt.detail ? evt.detail*(-40) : evt.wheelDelta //check for detail first, because it is used by Opera and FF

  //     if(delta > 0) {
  //         $('#ci_top_wrapper').slideDown('fast');
  //     }
  //     else{
  //         $('#ci_top_wrapper').slideUp('fast');
  //     }   
  // });
  // $('.bx-buyer').bxSlider({
  //   mode: 'vertical',
  //   slideMargin: 5,
  //   auto: 'true',
  //   preventDefaultSwipeY: 'true',
  //   autoDelay: Math.floor((Math.random() * 1000) + 1),
  //   pause: Math.floor((Math.random() * 6000) + 4000),
  //   speed: 1300,
  // });

  // $('.bx-seller').bxSlider({
  //   mode: 'vertical',
  //   slideMargin: 5,
  //   auto: 'true',
  //   preventDefaultSwipeY: 'true',
  //   autoDelay: Math.floor((Math.random() * 1000) + 1),
  //   pause: Math.floor((Math.random() * 6000) + 4000),
  //   speed: 1300,
  // });

  // FIXME: Touch delta needs to be worked out same way as scroll delta up there based on the following events:
  // touchstart
  // touchmove
  // touchend
  // touchcancel
  // e.g. http://stackoverflow.com/questions/4755505/how-to-recognize-touch-events-using-jquery-in-safari-for-ipad-is-it-possible
  
  // window.blockMenuHeaderScroll = false;
  // $(window).bind('touchstart', function(e)
  // {
  //     if ($(e.target).closest('.bxslider').length == 1)
  //     {
  //         blockMenuHeaderScroll = true;
  //     }
  // });
  // $(window).bind('touchend', function()
  // {
  //     blockMenuHeaderScroll = false;
  // });
  // $(window).bind('touchmove', function(e)
  // {
  //     if (blockMenuHeaderScroll)
  //     {
  //         e.preventDefault();
  //     }
  // });
});

$(function() {
 
    // grab the initial top offset of the navigation 
    // var sticky_navigation_offset_top = $('#ci_top_wrapper').offset().top;

    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
      
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top

        if (scroll_top > $('.buyer-panel').offset().top - $('#ci_top_wrapper').height()){
          console.log("Test");
          // $('#ci_top_wrapper').css({'background' : '-webkit-gradient(linear, 100% 1%, 0% 0%, from(#3FB2D1), to(#087594))'});
         $('#ci_top_wrapper').addClass('header-solid');
         $('#ci_top_wrapper').removeClass('header-transparent');
        }else{
          $('#ci_top_wrapper').removeClass('header-solid');
          $('#ci_top_wrapper').addClass('header-transparent');
        }
    };
     
    // run our function on load
    sticky_navigation();
     
    // and run it again every time you scroll
    $(window).scroll(function() {
         sticky_navigation();
    });
});
 


// function show_slider(group){
//   if(group.indexOf('buyer') !== -1 && $('.buyerslider').css('display') == 'none'){
//     $('.billibuys_home_slider').hide('slow');
//     $('.da-slider').cslider({
//       end: true
//     });
//     $('.sellerslider').hide('fast');
//     $('.sellerslider').cslider({
//       autoplay:true,
//       current: 0,
//       bgincrement: 0,
//       page: 0
//     });    
//     $('.buyerslider').show();
//     $('.billibuys_home_slider').show('slow');
//     $('html, body').animate({scrollTop: $('.billibuys_home_slider').offset().top},1000); 
//   }else if(group.indexOf('seller') !== -1 && $('.sellerslider').css('display') == 'none'){
//     $('.billibuys_home_slider').hide('slow');
//     $('.da-slider').cslider({
//       end: true
//     });    
//     $('.buyerslider').hide('fast');
//     $('.buyerslider').cslider({
//       autoplay:true,
//       current: 0,
//       bgincrement: 0,
//       page: 0
//     });
//     $('.sellerslider').show();
//     $('.billibuys_home_slider').show('slow');
//      $('html, body').animate({scrollTop: $('.billibuys_home_slider').offset().top},1000); 
//   }
// }

// scrollCompensate = function () {
//     var inner = document.createElement('p');
//     inner.style.width = "100%";
//     inner.style.height = "200px";

//     var outer = document.createElement('div');
//     outer.style.position = "absolute";
//     outer.style.top = "0px";
//     outer.style.left = "0px";
//     outer.style.visibility = "hidden";
//     outer.style.width = "200px";
//     outer.style.height = "150px";
//     outer.style.overflow = "hidden";
//     outer.appendChild(inner);

//     document.body.appendChild(outer);
//     var w1 = inner.offsetWidth;
//     outer.style.overflow = 'scroll';
//     var w2 = inner.offsetWidth;
//     if (w1 == w2) w2 = outer.clientWidth;

//     document.body.removeChild(outer);

//     return (w1 - w2);
// }

