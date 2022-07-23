// Hamburger menu

// const responsiveIndexHeader = document.getElementById("indexHeader");
// const responsiveHeader = document.getElementById("header");
// const headerHamburgerMenu = document.getElementById("header-hamburger-menu");

// headerHamburgerMenu.addEventListener("click", function() {
//     headerHamburgerMenu.classList.toggle("change");
  
//     if (responsiveHeader.classList.contains("header__desktop__scroll")) {
//             responsiveHeader.classList.remove("header__desktop__scroll");
//             responsiveHeader.classList.add("header__mobile");
//         } else {
//             responsiveHeader.classList.remove("header__mobile");
//             responsiveHeader.classList.add("header__desktop__scroll");
//         };
           
// });

// headerHamburgerMenu.addEventListener("click", function() {
//     headerHamburgerMenu.classList.toggle("change");
    
//     if(document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        
//         if (responsiveIndexHeader.classList.contains("header__desktop__scroll")) {
//             responsiveIndexHeader.classList.remove("header__desktop__scroll");
//             responsiveIndexHeader.classList.add("header__mobile");
//         } else {
//             responsiveIndexHeader.classList.remove("header__mobile");
//             responsiveIndexHeader.classList.add("header__desktop__scroll");
//         };
        
//     } else {
        
//         if (responsiveIndexHeader.classList.contains("header__desktop__transparent") ) {
//             responsiveIndexHeader.classList.remove("header__desktop__transparent");
//             responsiveIndexHeader.classList.add("header__mobile");
//         } else {
//             responsiveIndexHeader.classList.remove("header__mobile");
//             responsiveIndexHeader.classList.add("header__desktop__transparent");
//         };
//     };         
// });

// Desktop
// const expertiseMenu = document.getElementById("expertice-filter-item-container").children;
// const expertiseCover = document.querySelectorAll('.expertice__carusel__cover');
// const expertiseDescription = document.getElementById("expertise__description__container__desktop").children;

// // Menu clic activation and change color of selected filter menu item
// for (let i = 0; i < expertiseMenu.length; i++) {
//     expertiseMenu[i].addEventListener("click", function() {
//         const current = document.getElementsByClassName("expertise__filter__item__active");
//         current[0].className = current[0].className.replace(" expertise__filter__item__active", "");
//         this.className += " expertise__filter__item__active";
//         // Show filtered project covers
//         const targetData = this.getAttribute('data-target');
//         console.log('Cambiando...');
//         for(let k = 0; k < expertiseCover.length; k++){
//             expertiseCover[k].classList.remove('expertise__carousel__item');
//             expertiseCover[k].classList.add('expertise__carousel__item__disabled');

//             if(expertiseCover[k].getAttribute('data-item') == targetData){
//                 expertiseCover[k].classList.remove('expertise__carousel__item__disabled');
//                 expertiseCover[k].classList.add('expertise__carousel__item');
//             }                       
//         }

//         // Show title and description of selected menu item
//         for(let j = 0; j < expertiseDescription.length; j++) {

//             expertiseDescription[j].classList.remove('expertise__description__item__container__desktop');
//             expertiseDescription[j].classList.add('expertise__description__item__container__desktop__disabled');

//             if(expertiseDescription[j].getAttribute('data-description') == targetData) {
//                 expertiseDescription[j].classList.remove('expertise__description__item__container__desktop__disabled');
//                 expertiseDescription[j].classList.add('expertise__description__item__container__desktop');
//             }
//         }       
//     });
// };

// Open project in popup window


// Mobile

// Menu arrow rotate function
const expertiseMenuArrow = document.getElementById("expertise-menu-arrow");
const expertiseMobileFilterMenuItemsContainer = document.getElementById("expertise-mobile-filter-menu-items");
const expertiseMobileFilterMenuItems = document.getElementById("expertise-mobile-filter-menu-items").children;

// Open and close filter menu
expertiseMenuArrow.addEventListener("click", function() {
    if(expertiseMenuArrow.className == "expertise__filter__items__header__mobile__arrow__down"){
        expertiseMenuArrow.className = "expertise__filter__items__header__mobile__arrow__up";
        expertiseMobileFilterMenuItemsContainer.className = "expertise__filter__items__mobile__inner__container__open"       
    } else {
        expertiseMenuArrow.className = "expertise__filter__items__header__mobile__arrow__down";
        expertiseMobileFilterMenuItemsContainer.className = "expertise__filter__items__mobile__inner__container__close"       
    }  
});

// Menu clic activation and change color of selected filter menu item
for (let i = 0; i < expertiseMobileFilterMenuItems.length; i++) {
    expertiseMobileFilterMenuItems[i].addEventListener("click", function() {
        const currentMobile = document.getElementsByClassName("expertise__filter__items__mobile__active");
        currentMobile[0].className = currentMobile[0].className.replace(" expertise__filter__items__mobile__active", "");
        this.className += " expertise__filter__items__mobile__active";    
              
        // Show filtered project mobile covers
        const targetData = this.getAttribute('data-target');

        for(let k = 0; k < expertiseCover.length; k++){
            expertiseCover[k].classList.remove('expertise__carousel__item');
            expertiseCover[k].classList.add('expertise__carousel__item__disabled');

            if(expertiseCover[k].getAttribute('data-item') == targetData){
                expertiseCover[k].classList.remove('expertise__carousel__item__disabled');
                expertiseCover[k].classList.add('expertise__carousel__item');
            }                       
        }

        // Show title and description of selected menu item
        const expertiseDescriptionMobile = document.getElementById("expertise-description-container-mobile").children;
        for(let j = 0; j < expertiseDescriptionMobile.length; j++) {

            expertiseDescriptionMobile[j].classList.remove('expertise__description__item__container__mobile');
            expertiseDescriptionMobile[j].classList.add('expertise__description__item__container__mobile__disable');

            if(expertiseDescriptionMobile[j].getAttribute('data-description') == targetData) {
                expertiseDescriptionMobile[j].classList.remove('expertise__description__item__container__mobile__disable');
                expertiseDescriptionMobile[j].classList.add('expertise__description__item__container__mobile');
            }
        }  
    })
}

// Fernando Morales
const current_hash = window.top.location.hash;
switch(current_hash){
    case '#video-motion-graphics':
        document.getElementById("video-motion-graphics-menu").click();
        break;
    case '#professional-photography':
        document.getElementById("professional-photography-menu").click();
        break;
    case '#social-content':
        document.getElementById("social-content-menu").click();
        break;
    case '#creative-services':
        document.getElementById("creative-services-menu").click();
        break;
}
// Fin Fernando Morales

// Ligthbox 


// SOLUTION 2



// SOLUTION 1

// var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("expertise__lightbox__slides");
//   var dots = document.getElementsByClassName("expertise__lightbox__preview__img");
//   var captionText = document.getElementById("expertise-lightbox-caption");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
// }