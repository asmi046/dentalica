import { gsap } from "gsap";
import { TextPlugin } from "gsap/TextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";


gsap.registerPlugin(TextPlugin,ScrollTrigger);

let tl = gsap.timeline({delay:1})

tl.fromTo('.top_blk',
    {
        opacity:0,
        y:-200
    },
    {
        opacity:1,
        y:0,
        duration:.5
    }
)
.fromTo(
    '.center_blk',
    {
        opacity:0,
    },
    {
        opacity:1,
        duration:.5
    },
)

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

const services = Array.from(document.querySelectorAll(".services .service"))
services.forEach((elem) => {
    ScrollTrigger.create({
    trigger: elem,
    start:'bottom bottom',
    animation: gsap.fromTo(elem,
        {
            opacity:0,
            x:-200
        },
        {
            opacity:1,
            x:0,
            duration:0.5
        }
    )
})
})
