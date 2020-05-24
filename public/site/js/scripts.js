// navigation slide-in
$(window).load(function() {
  $('.nav_slide_button').click(function() {
    $('.pull').slideToggle();
  });
});
$(document).ready(function() {

  $(".navbar-toggle").click(function(){
    $(".navbar-nav").show();
    $(this).css("display","none!important");
  });
  $(".glyphicon-remove").click(function(){
    $(".navbar-nav").css("navbar-nav","none");
    $(".navbar-toggle").css("display","block!important")
  });
  $('.comment-icon').on('click',function(){
    var righ = $('.contact-form').css('right');
    var icon_i = $('.comment-icon .glyphicon');
    $('.comment-icon').toggleClass('close-icon');
    // icon_i.toggleClass('fa-comments-o').toggleClass('fa-times');
    if(righ < '0'){
      $('.contact-form').animate({
        right: "30px"},200,function(){
        $('.contact-form').animate({
          right: "0"},100);
      });
      icon_i.removeClass('glyphicon-envelope').addClass('glyphicon-remove');
    }
    else{
      $('.contact-form').animate({right: "-300px"},200);
      icon_i.addClass('glyphicon-envelope').removeClass('glyphicon-remove');
    }
  });
});