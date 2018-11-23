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
  $('.current').addClass('chip blue darken-4 white-text');
  });
