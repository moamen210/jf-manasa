function search(){
    let searchbar = document.getElementById('search-input').value.toUpperCase();
    let productList = document.getElementById('sec-1-2-1')
    let product = document.querySelectorAll('.sup-1')
    let productName = document.getElementsByTagName('h1')
    for (let i = 0; i < productName.length; i++) {
        if (productName[i].innerHTML.toUpperCase().indexOf(searchbar) >=0){
        product[i].style.display = '';

        }else{
        product[i].style.display = 'none';
        }
}
}
