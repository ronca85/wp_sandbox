import barba from '@barba/core';
import gsap from "gsap";
import LocomotiveScroll from '../../loco_src/locomotive-scroll';

// console.log("barba");

let scroll;

barba.init({
	debug: true,
	transitions: [{
		// name: 'second-transition',
		once({ next }) {
			smooth(next.container);
		},
		leave({ current }) {
			return gsap.to(current.container, {
			    opacity: 0
			});
		},
		beforeEnter({ next }) {

			// destroy the previous scroll
			scroll.destroy();

			// init LocomotiveScroll regarding the next page
			smooth(next.container);
		}
	}]
});

document.documentElement.classList.add('is-loaded');
document.documentElement.classList.remove('is-loading');

setTimeout(() => {
	document.documentElement.classList.add('is-ready');
}, 300)

function smooth(container) {
	setTimeout(() => {
		scroll = new LocomotiveScroll({
			el: container.querySelector('[data-scroll-container]'),
			smooth: true
		});
	}, 0);
}












// window.addEventListener("DOMContentLoaded", function() {
    
//     console.log("DOMContentLoaded");
    
//     scroll = new LocomotiveScroll({
//         el: document.querySelector('#js-scroll'),
//         smooth: true,
//         getSpeed: true,
//         getDirection: true,
//         useKeyboard: true
//     });

// });
