// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    if (document.body.classList.contains("page-template-page-offers")) {

      $(function() {
        $('.btn-offer-readmore').on( 'click', (e) => {
          e.preventDefault();
          $('.card-offer-content').toggleClass('open');
          $('.btn-offer-readmore').toggleClass('open');
          // Check if the content is open or closed
          const isOpen = $('.card-offer-content').hasClass('open');

          // Update the button text based on the content state
          const buttonText = isOpen ? 'Read less' : 'Read more';
          $('.btn-offer-readmore span').text(buttonText);
        });
    });

    }
  }, false);
});