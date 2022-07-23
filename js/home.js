// Service grid

const expertiseButtons = document.getElementsByClassName("service--grid--link");

// recorrer el array
for (let i = 0; i < expertiseButtons.length; i++) {
    // escuchar el evento click  
    expertiseButtons[i].addEventListener("click", (event) => {
        // ir a la página expertise
        // Fernando Morales
        // const targetUrl =  "expertise" + "#" +  event.target.getAttribute("data-target");
        // window.open(targetUrl, "_self");
        // Fin Fernando Morales
        for (let j = 0; j < expertiseMenu.length; j++) {
            
            const expertiseMenu = document.getElementById("expertice-filter-item-container").children;
            expertiseMenu[i].classList.toggle("expertise__filter__item__active");
        }
    });
};