jQuery(window).load(function() {
 var container = document.querySelector('#grid');
 var msnry = new Masonry( container, {
   percentPosition: true,
   itemSelector: '#item',
   columnWidth: '.grid-sizer',
   columnHeight: '.bloco-img-noticias2'
 });

   });

jQuery(document).ready(function($) {
   $('#slider').slick({
       dots:true,
       arrows: true,
       slidesToShow: 1,
       slidesToScroll: 1,
       speed: 800,
       autoplay: true,
       infinite: true,
       autoplaySpeed: 4000
   });
 });

 jQuery(document).ready(function($) {
    $('#slider-destaque').slick({
        dots:false,
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 5000,
        autoplay: true,
        centerMode: false,
        variableHeight: true,
        infinite: true,
        autoplaySpeed: 8000
    });
  });

  jQuery(document).ready(function($) {
    $('#tabs').tabs();
  });

  jQuery(document).ready(function($) {
      jQuery(".nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false, coverTrigger:false,});
      jQuery(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false,});
      jQuery(".sidenav").sidenav();
  });

  jQuery(document).ready(function($) {
    $('#post').find('img').addClass('responsive-img');
$('.wp_pagination').find('ul').addClass('pagination');
$('.pagination').find('li').addClass('waves-effect');
$('.calendar_wrap').addClass('white-text');
$('#wp-calendar').addClass('centered');
$('.bump-view').addClass('news black-text collection-item');
$('.widget_top-posts').find('ul').addClass('collection');
$('#wp-calendar').find('a').addClass('chip orange lighten-4 red-text darken-text-3');
$(".nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false, coverTrigger:false,});
$(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false, hover: false,});
$(".sidenav").sidenav();
$(".parallax").parallax();
$(".modal").modal();
$(".wp-caption").width('auto').height('auto');
$(".wp-caption-text").width('auto').height('auto');
$(".collapsible").collapsible();
$(".rpwe-ul").addClass('collection');
$(".rpwe-li").addClass('collection-item');
$(".rpwe-title").find('a').addClass('grey-text text-darken-4 news-recente');
$('.current').addClass('chip blue darken-4 white-text');
  });
