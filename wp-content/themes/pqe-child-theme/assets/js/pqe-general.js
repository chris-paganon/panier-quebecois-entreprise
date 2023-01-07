jQuery(document).ready(function ($) {
  window.addEventListener('scroll', function() {
    $('.pqe-image-with-overlay').each(function () {
      console.log($(this));
      const position = $(this)[0].getBoundingClientRect();
      const centerBoxHeight = Math.min(2 * position.height, window.innerHeight) - 5;
      const distToCenterBox = ( window.innerHeight - centerBoxHeight ) / 2;

      if ( position.top > distToCenterBox && position.bottom < (window.innerHeight - distToCenterBox) ) {
        $(this)[0].classList.add('viewportVisible');
      } else {
        $(this)[0].classList.remove('viewportVisible');
      }
    });
  }); 
});