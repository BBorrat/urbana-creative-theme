// Contact form tooltip

const tooltipInfoIcon = document.getElementById("tooltip-info-icon");
const tooltipInfoWindow = document.getElementById("tooltip-info-window");
const tooltipInfoWindowCloseBtn = document.getElementById("tooltip-info-window-close-button")

tooltipInfoIcon.addEventListener("click", () => {
    if (tooltipInfoWindow.classList.contains("contact__form__legal__tooltip__content")) {
        tooltipInfoWindow.classList.replace("contact__form__legal__tooltip__content", "display-none");
    } else { tooltipInfoWindow.classList.replace("display-none", "contact__form__legal__tooltip__content");
    }
});

tooltipInfoWindowCloseBtn.addEventListener("click", () => {
    if(tooltipInfoWindow.classList.contains("contact__form__legal__tooltip__content")) {
        tooltipInfoWindow.classList.replace("contact__form__legal__tooltip__content", "display-none");
    };
});


// Hamburger menu

// const responsiveIndexHeader = document.getElementById("indexHeader");
// const responsiveHeader = document.getElementById("header");
// const headerHamburgerMenu = document.getElementById("header-hamburger-menu");

// // headerHamburgerMenu.addEventListener("click", function() {
// //     headerHamburgerMenu.classList.toggle("change");
  
// //     if (responsiveHeader.classList.contains("header__desktop__scroll")) {
// //             responsiveHeader.classList.remove("header__desktop__scroll");
// //             responsiveHeader.classList.add("header__mobile");
// //         } else {
// //             responsiveHeader.classList.remove("header__mobile");
// //             responsiveHeader.classList.add("header__desktop__scroll");
// //         };
           
// // });

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

// Footer | show year

let myDate = new Date();
let year = myDate.getFullYear();
const copyright = document.getElementById("footer-copyright");

copyright.innerHTML = "@ " + year + " Urbana Creative Group, Inc.";