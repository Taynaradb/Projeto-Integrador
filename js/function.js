// PRELOADER

window.addEventListener('load', () => {
    const preload = document.querySelector(".preload");
    preload.classList.add("preload-finish");
});

// PRELOADER

//SPONSER
$('.owl-one').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})

//SPONSER
 //VIDEO

 $('.owl-two').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
})

$('.owl-three').owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 1
        }
    }
})
//VIDEO

$(document).ready(function($){
$("#cpf").mask("000.000.000-00");
})