const btn = document.querySelector('.btn-menu');
const nav = document.querySelector('.menu-wrapper');
const btnTop = document.querySelector('.btn-top');
const btnMiddle = document.querySelector('.btn-middle');
const btnBottom = document.querySelector('.btn-bottom');

btn.addEventListener('click', () => {

  nav.classList.toggle('open-menu');
  btnTop.classList.toggle('rotateTop');
  btnMiddle.classList.toggle('hideMiddle');
  btnBottom.classList.toggle('rotateBottom');

});