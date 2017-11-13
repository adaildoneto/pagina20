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
    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: false, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
      }
    );
  });
