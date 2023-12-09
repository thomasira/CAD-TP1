import anime from "./anime.js";

const elForum = document.querySelector('[data-js-forum]');
console.log(elForum)
const lettersHtml = elForum.textContent.replace(/\S/g, '<span class="letter">$&</span>');
elForum.innerHTML = `<div class="letters">${lettersHtml}</div><span class="cursor"></span>`;

const letters = Array.from(elForum.querySelectorAll('.letter'));
console.log(letters)
 