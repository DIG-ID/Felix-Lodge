import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import Lenis from '@studio-freight/lenis'



document.addEventListener('DOMContentLoaded', function() {
    //Gsap ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    //Lenis smooth scroll configuration
    const lenis = new Lenis()

    function raf(time) {
    lenis.raf(time)
    requestAnimationFrame(raf)
    }

    requestAnimationFrame(raf)
    /*const lenis = new Lenis({
        duration: 1.5,
        smooth: true
      });
      
      function raf(time) {
        lenis.raf(time)
        requestAnimationFrame(raf)
      }
      
      requestAnimationFrame(raf);
      
      //GSAP ScrollTrigger integration
      lenis.on('scroll', ScrollTrigger.update);
      
      gsap.ticker.add((time)=>{
        lenis.raf(time * 1000)
      });
      gsap.ticker.lagSmoothing(0);*/

    //Gsap configuration
    if ($(window).width() > 640 && document.querySelector('.home')) {
        // Get the logo element
        const logo = document.querySelector('.home .header-logo');

        // Define the scroll threshold in pixels where you want to trigger the resize
        const scrollThreshold = 0;

        // Animate the logo size using GSAP with ScrollTrigger
        setupScrollTrigger();

        function setupScrollTrigger() {
            gsap.to('.home .header-logo', {
                width: '7rem',
                ease: 'linear',
                scrollTrigger: {
                    trigger: '.home',
                    start: 'top top',
                    end: 'top+=600',
                    scrub: true,
                },
            });

            gsap.to('.home-intro-img', {
                rotation: -360,
                duration: 150,
                ease: 'linear',
                repeat: -1,
            });

            // Delay the overlay-img animation to allow SASS styles to apply
            setTimeout(function() {
                // Animate the "overlay-img" to rotate right automatically
                gsap.to('.overlay-img', {
                    rotation: 360,
                    duration: 150,
                    ease: 'linear',
                    repeat: -1,
                });
            }, 100); // Adjust the delay time if needed

        }
    }
});