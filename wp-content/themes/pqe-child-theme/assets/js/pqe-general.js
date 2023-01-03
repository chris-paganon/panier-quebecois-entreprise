jQuery(document).ready(function ($) {    
  $('.pqe-image-with-overlay').on('mouseenter mouseleave', function() {
    $(this).toggleClass('pqe-image-hovered');
  });  
});