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
                strings: ["En informatique, un forum est un espace de discussion publique (ou au moins ouvert à plusieurs participants). Les discussions y sont archivées ce qui permet une communication asynchrone (c'est ce qui différencie les forums de la messagerie instantanée). Il y a deux sortes de forum, en fonction du classement des messages : soit les « forums de discussion » dont les messages sont classés par date chronologique, soit les « forums de questions / réponses » dont les messages sont classés par votes. Forum est un terme d'origine latine (popularisé par l'anglais) désignant une place de la ville consacrée à la discussion et au commerce."],
                showCursor: false,
                typeSpeed: 30,
            });
            elMain.classList.remove('hidden');
        });
    }
}