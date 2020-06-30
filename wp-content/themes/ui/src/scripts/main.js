import './barbajs_config';

(function() {

	console.log("main.js loaded");
	
    // document.documentElement.classList.add('is-loaded');
    // document.documentElement.classList.remove('is-loading');
    // setTimeout(() => {
    //     document.documentElement.classList.add('is-ready');
    // },300)

    // setTimeout(() => {
    //     const scroll = new LocomotiveScroll({
    //         el: document.querySelector('#js-scroll'),
    //         smooth: true,
    //         getSpeed: true,
    //         getDirection: true,
    //         useKeyboard: true
    //     });

    //     let dynamicBackgrounds = [];
    //     let dynamicColorElements = [];

    //     scroll.on('scroll', (instance) => {
    //         let progress = 360 * instance.scroll.y / instance.limit;

    //         let rotate = 7 * 360 * instance.scroll.y / instance.limit;
            
    //         // if ( progress <= 65 ) {
    //         //     progress = 65
    //         // }
    //         // else if ( progress >= 200 ) {
    //         //     progress = 200
    //         // }

    //         // scroll.el.style.backgroundColor = `hsl(${progress}, 100%, 72%)`;

    //         // dynamicBackgrounds.forEach(obj => {
    //         //     obj.el.style.backgroundColor = `hsl(${progress}, 100%, 55%)`;
    //         // });
    //         // dynamicColorElements.forEach(obj => {
    //         //     obj.el.style.color = `hsl(${progress}, 100%, 100%)`;
    //         // });

    //         document.documentElement.setAttribute('data-direction', instance.direction)

    //         // document.querySelector(".js-logo-rotate").style.transform = `rotate(${rotate}deg)`

    //     });

    //     scroll.on('call', (value, way, obj) => {
    //         if (value === 'dynamicBackground') {
    //             if(way === 'enter') {
    //                 dynamicBackgrounds.push({
    //                     id: obj.id,
    //                     el: obj.el
    //                 });
    //             } else {
    //                 for (var i = 0; i < dynamicBackgrounds.length; i++) {
    //                     if(obj.id === dynamicBackgrounds[i].id) {
    //                         dynamicBackgrounds.splice(i,1);
    //                     }
    //                 }
    //             }
    //         } else if (value === 'dynamicColor') {
    //             if(way === 'enter') {
    //                 dynamicColorElements.push({
    //                     id: obj.id,
    //                     el: obj.el
    //                 });
    //             } else {
    //                 for (var i = 0; i < dynamicColorElements.length; i++) {
    //                     if(obj.id === dynamicColorElements[i].id) {
    //                         dynamicColorElements.splice(i,1);
    //                     }
    //                 }
    //             }
    //         }
    //     });

    // }, 1000)

})();
