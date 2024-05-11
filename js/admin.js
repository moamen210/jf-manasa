let button1 = document.getElementById('button-1')
let button2 = document.getElementById('button-2')
let button3 = document.getElementById('button-3')
let button4 = document.getElementById('button-4')
let button5 = document.getElementById('button-5')
let button6 = document.getElementById('button-6')
let button7 = document.getElementById('button-7')
let sec121 = document.getElementById('sec-1-2-1')
let sec122 = document.getElementById('sec-1-2-2')
let sec123 = document.getElementById('sec-1-2-3')
let sec124 = document.getElementById('sec-1-2-4')
let sec125 = document.getElementById('sec-1-2-5')
let sec126 = document.getElementById('sec-1-2-6')
let sec127 = document.getElementById('sec-1-2-7')


button1.onclick = function(){
    sec121.style.display = 'flex';
    sec122.style.display = 'none';
    sec123.style.display = 'none';
    sec124.style.display = 'none';
    sec125.style.display = 'none';
    sec126.style.display = 'none';
    sec127.style.display = 'none';
    
};
button2.onclick = function(){
    sec122.style.display = 'block';
    sec121.style.display = 'none';
    sec123.style.display = 'none';
    sec124.style.display = 'none';
    sec125.style.display = 'none';
    sec126.style.display = 'none';
    sec127.style.display = 'none';
};
button3.onclick = function(){
    sec123.style.display = 'block';
    sec121.style.display = 'none';
    sec122.style.display = 'none';
    sec124.style.display = 'none';
    sec125.style.display = 'none';
    sec126.style.display = 'none';
    sec127.style.display = 'none';
};
button4.onclick = function(){
    sec124.style.display = 'block';
    sec121.style.display = 'none';
    sec123.style.display = 'none';
    sec122.style.display = 'none';
    sec125.style.display = 'none';
    sec126.style.display = 'none';
    sec127.style.display = 'none';
};
button5.onclick = function(){
    sec125.style.display = 'block';
    sec121.style.display = 'none';
    sec123.style.display = 'none';
    sec124.style.display = 'none';
    sec122.style.display = 'none';
    sec126.style.display = 'none';
    sec127.style.display = 'none';
};
button6.onclick = function(){
    sec126.style.display = 'block';
    sec121.style.display = 'none';
    sec123.style.display = 'none';
    sec124.style.display = 'none';
    sec125.style.display = 'none';
    sec122.style.display = 'none';
    sec127.style.display = 'none';
};
button7.onclick = function(){
    sec127.style.display = 'block';
    sec121.style.display = 'none';
    sec123.style.display = 'none';
    sec124.style.display = 'none';
    sec125.style.display = 'none';
    sec126.style.display = 'none';
    sec122.style.display = 'none';
};