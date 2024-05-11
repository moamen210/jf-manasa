let firstsectionheader = document.getElementById('icon');
let secondsectionheader = document.getElementById('links');
let firstimgsrctionone = document.getElementById('firstimgsrctionone');

window.addEventListener('scroll', () =>{
    let value = window.scrollY;

    firstimgsrctionone.style.left = value * -2 + 'px';

});
