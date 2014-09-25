$(document).ready(function(){
  $('.for_the_buyers_block .learn_more_box').click(function(){
    show_slider('buyer');
  });

  $('.for_the_sellers_block .learn_more_box').click(function(){
    show_slider('seller');
  });

  // $('#background_img').css('margin-left','-' + $('#background_img').offset().left + 'px');
  // var docWidth = document.documentElement.clientWidth || document.body.clientWidth;
  var htmlpadding = scrollCompensate();
  $('.fp_panel').width($(window).width()-htmlpadding);
  $('.fp_panel').css('margin-left','-'+$('.fp_panel').offset().left + 'px');
  $('.fp_panel').height($(window).height());

  // $('.find_out_how_subbtn').click(function(){
  //   // $('html, body').animate({scrollTop: $('.how_does_it_work_block').offset().top},1000); 
  //   window.location.href = 'index.php?dispatch=billibuys.view';
  // });

});

$(function() {
 
    // grab the initial top offset of the navigation 
    var sticky_navigation_offset_top = $('#ci_top_wrapper').offset().top;
     
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top
         
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (scroll_top > sticky_navigation_offset_top) { 
            $('#ci_top_wrapper').css({ 'position': 'fixed', 'top':0, 'width':'100%'});
        } else {
            $('#ci_top_wrapper').css({ 'position': 'relative' }); 
        }   
    };
     
    // run our function on load
    sticky_navigation();
     
    // and run it again every time you scroll
    $(window).scroll(function() {
         sticky_navigation();
    });
 
});


function show_slider(group){
  if(group.indexOf('buyer') !== -1 && $('.buyerslider').css('display') == 'none'){
    $('.billibuys_home_slider').hide('slow');
    $('.da-slider').cslider({
      end: true
    });
    $('.sellerslider').hide('fast');
    $('.sellerslider').cslider({
      autoplay:true,
      current: 0,
      bgincrement: 0,
      page: 0
    });    
    $('.buyerslider').show();
    $('.billibuys_home_slider').show('slow');
    $('html, body').animate({scrollTop: $('.billibuys_home_slider').offset().top},1000); 
  }else if(group.indexOf('seller') !== -1 && $('.sellerslider').css('display') == 'none'){
    $('.billibuys_home_slider').hide('slow');
    $('.da-slider').cslider({
      end: true
    });    
    $('.buyerslider').hide('fast');
    $('.buyerslider').cslider({
      autoplay:true,
      current: 0,
      bgincrement: 0,
      page: 0
    });
    $('.sellerslider').show();
    $('.billibuys_home_slider').show('slow');
     $('html, body').animate({scrollTop: $('.billibuys_home_slider').offset().top},1000); 
  }
}

scrollCompensate = function () {
    var inner = document.createElement('p');
    inner.style.width = "100%";
    inner.style.height = "200px";

    var outer = document.createElement('div');
    outer.style.position = "absolute";
    outer.style.top = "0px";
    outer.style.left = "0px";
    outer.style.visibility = "hidden";
    outer.style.width = "200px";
    outer.style.height = "150px";
    outer.style.overflow = "hidden";
    outer.appendChild(inner);

    document.body.appendChild(outer);
    var w1 = inner.offsetWidth;
    outer.style.overflow = 'scroll';
    var w2 = inner.offsetWidth;
    if (w1 == w2) w2 = outer.clientWidth;

    document.body.removeChild(outer);

    return (w1 - w2);
}

