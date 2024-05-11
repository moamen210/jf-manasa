let materialstudy = document.getElementById('material-study');
let academicyear = document.getElementsByClassName('academic-year');
let term = document.getElementsByClassName('term');

materialstudy.addEventListener('click', () =>{
    materialstudy.style.display = 'none';
    var academicyear = document.getElementsByClassName('academic-year');
    academicyear[0].style.display = 'block';
});
academicyear[0].addEventListener('click', () =>{
    academicyear[0].style.display = 'none';
    term[0].style.display = 'block';
    term[1].style.display = 'block';
});