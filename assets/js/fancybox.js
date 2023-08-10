import { Fancybox } from "@fancyapps/ui/src/Fancybox/Fancybox.js";

// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded

  window.addEventListener("load", () => {
    Fancybox.defaults = {
      Toolbar: {
        display: {
          left: [],
          middle: [],
          right: ["close"],
        },
      },
    }; 
  }, false);
});
