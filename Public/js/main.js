$(document).ready(function(){

    const menu = document.getElementById('menu_principal');

    if ( document.URL.includes("index.html") ) {    
        console.log('Estoy en el menu de inicio');
    } else if(document.URL.includes("contacto.html")){
        // CONTACTO
        $('.navbar-nav li').removeClass("active");
        $('.navbar-nav li:nth-child(6)').addClass("active");
        console.log('Estoy en la página de contacto');
    }



});
