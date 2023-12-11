import anime from "./animejs/anime.js";
import Typed from "./typed/typed.js";

export default class{

    constructor() {
        this.init();
    }

    init() {      
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
                strings: ["n.m. Lieu où l'on discute les affaires publiques ; place où avaient lieu les assemblées du peuple, dans l'Antiquité romaine. Lieu virtuel permettant une réunion, un discussion ouverte à propos d'un sujet particulier ; service permettant l'échange et la discussion sur un thème donné. Service permettant discussions et échanges sur un thème donné : chaque utilisateur peut lire à tout moment les interventions de tous les autres et apporter sa propre contribution sous forme d'articles.Par extension, on désigne également par ce terme les systèmes de discussion télématiques, qui offrent généralement un service de téléchargement (connus en anglais sous le nom de,).(date de la publication : 01/09/2000 - éd. commission de l'informatique et des composants électroniques) *langue-francaise TV-5*"],
                showCursor: false,
                typeSpeed: 30,
            });
            elMain.classList.remove('hidden');
        });
    }
}