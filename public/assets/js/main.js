import anime from "./animejs/anime.js";
import Typed from "./typed/typed.js";

new Typed('[data-js-type="1"]', {
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
    const elType1 = document.querySelector('[data-js-type="1"]');
    const elType2 = document.querySelector('[data-js-type="2"]');
    const elMain = document.querySelector('[data-js-main]');
    elType1.innerHTML = elType1.textContent.replace(/\S/g,'<span class="letter">$&</span>');

    const elLetters = Array.from(elType1.querySelectorAll('.letter'));
    elLetters.push(elCursor);

    const typeFall = anime({
        targets: elLetters,
        translateY: 800,
        delay: function() { return anime.random(0, 1000); },
        duration: function() { return anime.random(4000, 8000); },
        rotate: function() { return anime.random(-220, 220); },
        easing: 'easeOutExpo',
        complete: function() { elType1.remove(); elCursor.remove(); }
    });
    new Typed('[data-js-type="2"]', {
        strings: ["Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non expedita est, reiciendis delectus voluptates incidunt voluptate rerum omnis dignissimos illo ea. Tenetur aliquid reprehenderit, qui delectus recusandae mollitia quo cumque! "],
        showCursor: false,
        typeSpeed: 40,
    });
    elMain.classList.remove('hidden');
});