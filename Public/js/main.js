$(document).ready(function(){

    const menu = document.getElementById('menu_principal');

    if ( document.URL.includes("index.php") ) {    
        console.log('Estoy en el menu de inicio');

    } else if(document.URL.includes("nosotros.php")){
        // NOSOTROS
        $('.nav__list li').removeClass("active");
        $('.nav__list li:nth-child(2)').addClass("active");
        $('.list_footer li').removeClass("actF");
        $('.list_footer li:nth-child(2)').addClass("actF");
        console.log('Estoy en la página de nosotros');

    } else if(document.URL.includes("destinos.php")){
        // DESTINO
        $('.nav__list li').removeClass("active");
        $('.nav__list li:nth-child(3)').addClass("active");
        $('.list_footer li').removeClass("actF");
        $('.list_footer li:nth-child(3)').addClass("actF");
        console.log('Estoy en la página de destinos');

    } else if(document.URL.includes("faqs.php")){
        // DESTINO
        $('.nav__list li').removeClass("active");
        $('.nav__list li:nth-child(4)').addClass("active");
        $('.list_footer li').removeClass("actF");
        $('.list_footer li:nth-child(4)').addClass("actF");
        console.log('Estoy en la página de preguntas frecuentes');

    } else if(document.URL.includes("contacto.php")){
        // CONTACTO
        $('.nav__list li').removeClass("active");
        $('.nav__list li:nth-child(5)').addClass("active");
        $('.list_footer li').removeClass("actF");
        $('.list_footer li:nth-child(5)').addClass("actF");
        console.log('Estoy en la página de contacto');
    }

    /*=============== SHOW MENU ===============*/
    const navMenu = document.getElementById('nav-menu'),
    navToggle = document.getElementById('nav-toggle'),
    navClose = document.getElementById('nav-close')

    /*===== MENU SHOW =====*/
    /* Validate if constant exists */
    if(navToggle){
    navToggle.addEventListener('click', () =>{
    navMenu.classList.add('show-menu')
    })
    }

    /*===== MENU HIDDEN =====*/
    /* Validate if constant exists */
    if(navClose){
    navClose.addEventListener('click', () =>{
    navMenu.classList.remove('show-menu')
    })
    }

    /*=============== REMOVE MENU MOBILE ===============*/
    const navLink = document.querySelectorAll('.nav__link')

    function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
    }
    navLink.forEach(n => n.addEventListener('click', linkAction))

    /*=============== CHANGE BACKGROUND HEADER ===============*/
    function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 150) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
    }
    window.addEventListener('scroll', scrollHeader)

	/*=============== SMOOTH SCROLL ===============*/
	// Add smooth scrolling to all links
	$("a.icon_arrow_down_slider").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
            });
        } // End if
    });




});
