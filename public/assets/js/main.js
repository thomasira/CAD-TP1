import anime from "./animejs/anime.js";
import Typed from "./typed/typed.js";

var typed = new Typed('[data-js-type]', {
    strings: ["Forum"],
    cursorChar: '_',
    typeSpeed: 200,
    onComplete: (self) => { 
        setTimeout(() => {
            self.toggleBlinking();
            const endEvent = new Event('endType');
            document.dispatchEvent(endEvent);
        }, 1200);
     }, 
});

document.addEventListener('endType', () => {
    const elCursor = document.querySelector('.typed-cursor');
    const elType = document.querySelector('[data-js-type]');
    elType.innerHTML = elType.textContent.replace(/\S/g,'<span class="letter">$&</span>');

    const elLetters = Array.from(elType.querySelectorAll('.letter'));
    elLetters.push(elCursor);

    anime({
        targets: elLetters,
        translateY: 1000,
        delay: function() { return anime.random(0, 1000); },
        duration: function() { return anime.random(4000, 8000); },
        rotate: function() { return anime.random(-220, 220); },
        easing: 'easeOutExpo',
        complete: function() { elType.remove(); elCursor.remove(); }
    });
});