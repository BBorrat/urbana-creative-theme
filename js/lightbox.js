'use strict'

// Solution 1
// const dots = document.querySelectorAll(".expertise__lightbox__points");
// const slides = document.querySelectorAll(".expertise__lightbox__slides");

// // Recorrer TODOS los puntos
// dots.forEach( ( _eachDot , i )=> {
//     // Asignamos un CLICK a eachDot
//     dots[i].addEventListener('click',()=>{
               
//         // Recorremos TODOS los puntos
//         dots.forEach( ( _eachDot , i )=>{
//             // Quitamos la clase ACTIVO a TODOS los puntos
//             dots[i].classList.remove('expertise__lightbox__points__active');
//             slides[i].classList.add("display-none");
//         });

//         // Guardar posición de i
//         let current = i;
//         // Remover class display-none de cada slide
//         slides[i].classList.remove("display-none");

//         // Añadir la clase activo en el punto que hemos hecho CLICK
//         dots[i].classList.add('expertise__lightbox__points__active')
//     });
// })

// Solution 2

const slider = document.querySelector(".expertise__lightbox__slide__container");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const slides = document.querySelectorAll(".expertise__lightbox__slides");
const slideIcons = document.querySelectorAll(".expertise__lightbox__dots");
const numberOfSlides = slides.length;
var slideNumber = 0;

//image slider next button
nextBtn.addEventListener("click", () => {
    slides.forEach((slide) => {
    slide.classList.add("display-none");
    });
    slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("expertise__lightbox__dots__active");
    });

    slideNumber++;

    if(slideNumber > (numberOfSlides - 1)){
    slideNumber = 0;
    }

    slides[slideNumber].classList.remove("display-none");
    slideIcons[slideNumber].classList.add("expertise__lightbox__dots__active");
});

//image slider previous button
prevBtn.addEventListener("click", () => {
    slides.forEach((slide) => {
    slide.classList.add("display-none");
    });
    slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("expertise__lightbox__dots__active");
    });

    slideNumber--;

    if(slideNumber < 0){
    slideNumber = numberOfSlides - 1;
    }

    slides[slideNumber].classList.remove("display-none");
    slideIcons[slideNumber].classList.add("expertise__lightbox__dots__active");
});

// Back button

document.getElementById('lightbox-back-button').addEventListener('click', () => {
    history.back();
  });
  