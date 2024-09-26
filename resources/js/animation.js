import { gsap } from "gsap";
import { TextPlugin } from "gsap/TextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";


gsap.registerPlugin(TextPlugin,ScrollTrigger);


const locations = Array.from(document.querySelectorAll(".numbers_wrapper .number_element .n span"))
locations.forEach((elem) => {
    ScrollTrigger.create({
    trigger: elem,
    // markers:true,
    start:'top bottom',
    animation: gsap.from(elem, {
        textContent: 0,
        duration: .5,
        snap: { textContent: 1 },
        stagger: 1,
    }),
})
})
