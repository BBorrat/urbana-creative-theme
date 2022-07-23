'use strict'

// Solution 1
// const dots = document.querySelectorAll(".expertise__lightbox__points");
// const videoSlides = document.querySelectorAll(".expertise__lightbox__video__slides");

// // Recorrer TODOS los puntos
// dots.forEach( ( _eachDot , i )=> {
//     // Asignamos un CLICK a eachDot
//     dots[i].addEventListener('click',()=>{
               
//         // Recorremos TODOS los puntos
//         dots.forEach( ( _eachDot , i )=>{
//             // Quitamos la clase ACTIVO a TODOS los puntos
//             dots[i].classList.remove('expertise__lightbox__points__active');
//             videoSlides[i].classList.add("display-none");
//             videoSlides[i].pause();
//             videoSlides[i].currentTime = 0;
//         });

//         // Guardar posición de i
//         let current = i;
//         // Remover class display-none de cada slide
//         videoSlides[i].classList.remove("display-none");
//         videoSlides[i].play();

//         // Añadir la clase activo en el punto que hemos hecho CLICK
//         dots[i].classList.add('expertise__lightbox__points__active')
//     });
// });

// Solution 2
const videoSlider = document.querySelector(".expertise__lightbox__video__slide__container");
const nextVideoBtn = document.querySelector(".next-video-btn");
const prevVideoBtn = document.querySelector(".prev-video-btn");
const videoSlides = document.querySelectorAll(".expertise__lightbox__video__slides");
const videoSlidesIcons = document.querySelectorAll(".expertise__lightbox__dots");
const numberOfVideoSlides = videoSlides.length;
var videoSlideNumber = 0;

//image slider next button
nextVideoBtn.addEventListener("click", () => {
    videoSlides.forEach((slide) => {
    slide.classList.add("display-none");
    });
    videoSlidesIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("expertise__lightbox__dots__active");
    });

    videoSlideNumber++;

    if(videoSlideNumber > (numberOfVideoSlides - 1)){
    videoSlideNumber = 0;
    }

    videoSlides[videoSlideNumber].classList.remove("display-none");
    videoSlidesIcons[videoSlideNumber].classList.add("expertise__lightbox__dots__active");
});

//image slider previous button
prevVideoBtn.addEventListener("click", () => {
    videoSlides.forEach((slide) => {
    slide.classList.add("display-none");
    });
    videoSlidesIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("expertise__lightbox__dots__active");
    });

    videoSlideNumber--;

    if(videoSlideNumber < 0){
    videoSlideNumber = numberOfVideoSlides - 1;
    }

    videoSlides[videoSlideNumber].classList.remove("display-none");
    videoSlidesIcons[videoSlideNumber].classList.add("expertise__lightbox__dots__active");
});

// Back button

document.getElementById('lightbox-video-back-button').addEventListener('click', () => {
    history.back();
  });
