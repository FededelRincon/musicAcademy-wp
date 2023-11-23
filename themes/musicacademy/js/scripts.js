// cosas para cuando este cargado todo el DOM
function academyWordPress(){
    // animacion del swipper
    if ( document.querySelector('.swiper') ) {
        const opciones = {
            loop: true , //slide infinito
            autoplay: {
                delay: 3000
            }
        }
        new Swiper('.swiper', opciones);
    }

    // animacion de letras
    // Wrap every letter in a span
    let textWrapper = document.querySelector('.ml2');

    // Verifica si el elemento existe antes de continuar
    if (textWrapper !== null) {
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.ml2 .letter',
            scale: [4,1],
            opacity: [0,1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 950,
            delay: (el, i) => 70*i
        }).add({
            targets: '.ml2',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    }

    const hamburger = document.querySelector('.hamburger-menu svg')
    hamburger.addEventListener('click', function () {
        const menuPrincipal = document.querySelector('.contenedor-menu');
        menuPrincipal.classList.toggle('mostrar');
    })
}

document.addEventListener('DOMContentLoaded', academyWordPress);


// window.onscroll = function () {
//     const scroll = window.scrollY;

//     const barraNav = document.querySelector('.barra-navegacion');


//     if (scroll > 300) {
//         barraNav.classList.add('fixed-top');
//     } else {
//         barraNav.classList.remove('fixed-top');
//     }
// }