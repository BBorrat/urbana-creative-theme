// Hamburger menu

const responsiveIndexHeader = document.getElementById("indexHeader");
const responsiveHeader = document.getElementById("header");
const headerHamburgerMenu = document.getElementById("header-hamburger-menu");

headerHamburgerMenu.addEventListener("click", function() {
    headerHamburgerMenu.classList.toggle("change");
  
    if (responsiveHeader.classList.contains("header__desktop__scroll")) {
            responsiveHeader.classList.remove("header__desktop__scroll");
            responsiveHeader.classList.add("header__mobile");
        } else {
            responsiveHeader.classList.remove("header__mobile");
            responsiveHeader.classList.add("header__desktop__scroll");
        };
           
});

headerHamburgerMenu.addEventListener("click", function() {
    headerHamburgerMenu.classList.toggle("change");
    
    if(document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        
        if (responsiveIndexHeader.classList.contains("header__desktop__scroll")) {
            responsiveIndexHeader.classList.remove("header__desktop__scroll");
            responsiveIndexHeader.classList.add("header__mobile");
        } else {
            responsiveIndexHeader.classList.remove("header__mobile");
            responsiveIndexHeader.classList.add("header__desktop__scroll");
        };
        
    } else {
        
        if (responsiveIndexHeader.classList.contains("header__desktop__transparent") ) {
            responsiveIndexHeader.classList.remove("header__desktop__transparent");
            responsiveIndexHeader.classList.add("header__mobile");
        } else {
            responsiveIndexHeader.classList.remove("header__mobile");
            responsiveIndexHeader.classList.add("header__desktop__transparent");
        };
    };         
});