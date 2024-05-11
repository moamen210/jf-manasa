let button1 = document.getElementById('button-1')
let button2 = document.getElementById('button-2')
let button3 = document.getElementById('button-3')
let sec121 = document.getElementById('sec-1-2-1')
let sec122 = document.getElementById('sec-1-2-2')
let sec123 = document.getElementById('sec-1-2-3')

button1.onclick = function(){
    sec121.style.display = 'block' ;
    sec122.style.display = 'none' ;
    sec123.style.display = 'none' ;
};
button2.onclick = function(){
    sec122.style.display = 'block' ;
    sec121.style.display = 'none' ;
    sec123.style.display = 'none' ;
};
button3.onclick = function(){
    sec123.style.display = 'block' ;
    sec121.style.display = 'none' ;
    sec122.style.display = 'none' ;
};