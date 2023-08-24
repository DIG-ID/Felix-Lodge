import Lenis from '@studio-freight/lenis';

//Lenis configuration
const lenis = new Lenis({
  //content: document.querySelector("#foo:bar")
  duration: 1.2,
  smooth: true
});

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)

//GSAP ScrollTrigger integration
//lenis.on('scroll', ScrollTrigger.update)

/*gsap.ticker.add((time)=>{
  lenis.raf(time * 1000)
})*/