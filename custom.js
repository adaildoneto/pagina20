jQuery(window).load(function() {
 var container = document.querySelector('#grid');
 var msnry = new Masonry( container, {

   itemSelector: '.grid-item',
   columnWidth: '.grid-item',
   columnHeight: '.bloco-img-noticias2'
 });

   });

jQuery(document).ready(function($) {
   $('#slider').slick({
       dots:false,
       arrows: false,
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
        infinite: true,
        vertical: true,
        autoplaySpeed: 8000
    });
  });
