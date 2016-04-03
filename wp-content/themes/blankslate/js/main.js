$(document).ready(function () {
    
   //$('#video-bg').tubular({videoId: 'N33v7M4blxA'});

    $('.collapse').on('shown.bs.collapse', function(){
        $(this).parent().find(".close-arrow").removeClass("close-arrow").addClass("open-arrow");
        }).on('hidden.bs.collapse', function(){
        $(this).parent().find(".open-arrow").removeClass("open-arrow").addClass("close-arrow");
    });
    
    $("html, body").animate({ scrollTop: 0 }, "fast");
    
    $('#career').removeClass("ready");
    $('#career').fadeOut(200);
    $(".loading").delay(2000).fadeOut("fast");
    $('#career').delay(2000).fadeIn(600);
    $("#career").delay(600).queue(function(next) {
      $(this).addClass("ready");
      next();
    });
    
    $("html, body").animate({ scrollTop: 0 }, "fast");
    $('#contactus').removeClass("ready");
    $('#contactus').fadeOut(200);
    $(".loading").delay(2000).fadeOut("fast");
    $('#contactus').delay(2000).fadeIn(600);
    $("#contactus").delay(500).queue(function(nextcontact) {
      $(this).addClass("ready");
      nextcontact();
    });
    
    
    $("html, body").animate({ scrollTop: 0 }, "fast");
    $('#service').removeClass("ready");
    $('#service').fadeOut(200);
    $(".loading").delay(2000).fadeOut("fast");
    $('#service').delay(2000).fadeIn(600);
    $("#service").delay(500).queue(function(nextservice) {
      $(this).addClass("ready");
      nextservice();
    });
    
    
    $("html, body").animate({ scrollTop: 0 }, "fast");
    $('#home').removeClass("ready");
    $('#home').fadeOut(200);
    $(".loading").delay(3000).fadeOut(600);
    $('#home').delay(2000).fadeIn(600);
    $("body,#home").delay(600).queue(function(next) {
      $(this).addClass("ready");
      next();
    });
    
    $("html, body").animate({ scrollTop: 0 }, "fast");
    $('#showcase').removeClass("ready");
    $('#showcase').fadeOut(200);
    $(".loading").delay(3000).fadeOut(500);
    $('#showcase').delay(2000).fadeIn(600);
    $("#showcase").delay(600).queue(function(nextshowcase) {
      $(this).addClass("ready");
      nextshowcase();
    });

    $(".flipcard").flip({
      axis: 'x',
      trigger: 'hover'
    });
    
    $("a.toggleNav").click(function(){
         $(this).toggleClass("opened");
         $('nav#mobile').toggleClass("device-opened");
    });
    
    $(".showcase-list .col-md-4").flip({
      axis: 'x',
      trigger: 'hover'
    });
});



