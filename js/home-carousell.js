'use strict'

// const grande    = document.querySelector('.featured-projects__img__container')
// const punto     = document.querySelectorAll('.featured-projects__point')

// Cuando CLICK en punto
    // Saber la posición de ese punto
    // Aplicar un transform translateX al grande
    // QUITAR la clase activo de TODOS puntos
    // AÑADIR la clase activo al punto que hemos hecho CLICK

// // Recorrer TODOS los punto
// punto.forEach( ( cadaPunto , i )=> {
//     // Asignamos un CLICK a cadaPunto
//     punto[i].addEventListener('click',()=>{

//         // Guardar la posición de ese PUNTO
//         let posicion  = i
//         // Calculando el espacio que debe DESPLAZARSE el GRANDE
//         let operacion = posicion * -33.333

//         // MOVEMOS el grand
//         grande.style.transform = `translateX(${ operacion }%)`

//         // Recorremos TODOS los punto
//         punto.forEach( ( cadaPunto , i )=>{
//             // Quitamos la clase ACTIVO a TODOS los punto
//             punto[i].classList.remove('featured-projects__point--active')
//         })
//         // Añadir la clase activo en el punto que hemos hecho CLICK
//         punto[i].classList.add('featured-projects__point--active')

//     })
// })

// Solución 3 --------------------------

// let carouselSlideSection = document.getElementById("featured-project__item__container");
// let carouselArrowPrev = document.getElementById("arrow-prev");
// let carouselArrowNext = document.getElementById("arrow-next");
// let carouselDots = document.getElementsByClassName("featured-projects__point");
// let position = 0;
// let carouselAdvanceCalculation = position * -33.333;

// carouselArrowNext.addEventListener("click", () => {    

//     // avanzar una posición el carousel
//     carouselSlideSection.style.transform = `translateX(${ carouselAdvanceCalculation }%)`
// });