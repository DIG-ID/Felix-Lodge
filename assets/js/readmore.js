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
        });
    
      
    });

    }


  }, false);
});