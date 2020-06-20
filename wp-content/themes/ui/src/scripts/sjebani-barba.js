import barba from '@barba/core';
import LocomotiveScroll from '../../loco_src/locomotive-scroll';

// console.log("barba");

barba.init({
	debug: true,
	// sync: true,
	// timeout: 1000,
	transitions: [{
		// name: 'second-transition',
		once({ next }) {
			smooth(next.container);
		},
		// beforeEnter({ next }) {
		//     console.log("beforeEnter", next.container);
		//     scroll.destroy();
		//     smooth(next.container);
		// },
		// beforeOnce(data) {
		//     console.log("beforeOnce");
		//     return gsap.from(data.next.container, {
		//         opacity: 0
		//     });
		// },
		// once(data) {
		//     console.log("once");
		// },
		// afterOnce(data) {
		//     console.log("afterOnce");
		// },
		// before(data) {
		//     console.log("before");
		// },
		// beforeLeave(data) {
		//     console.log("beforeLeave");
		// },
		leave({ next }) {
			console.log("leave");
			scroll.destroy();
			// return gsap.to(data.current.container, {
			//     opacity: 0
			// });
		},
		enter({ next }) {
			console.log("enter");
			scroll.init();
		},
		// beforeEnter(data) {
		//     console.log("beforeEnter");
		// },
		//
		// afterLeave(data) {
		//     console.log("afterLeave");
		// },
		// afterEnter(data) {
		//     console.log("afterEnter");
		// },
		// after(data) {
		//     console.log("after");
		// },
	}]
});

// console.log(barba);


document.documentElement.classList.add('is-loaded');
document.documentElement.classList.remove('is-loading');

setTimeout(() => {
	document.documentElement.classList.add('is-ready');
}, 300)
    
let scroll = new LocomotiveScroll({
	el: document.querySelector('#js-scroll'),
	smooth: true,
	getSpeed: true,
	getDirection: true,
	useKeyboard: true
});

// if ( document.querySelector(".js-nav-button") ) {
//     document.querySelector(".js-nav-button").addEventListener("click", function(e) {
//         document.documentElement.classList.toggle("menu-is-open");
//     });
// }

// document.querySelector(".js-scrollto").addEventListener("click", function(e) {
//     // e.getAttribute("data-route")
//     console.log(window.location.href);
//     document.documentElement.classList.removeClass("menu-is-open")
// })


function smooth(container) {
	console.log("smooth", container);
	scroll.init();
	console.log("smooth after", scroll);
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
