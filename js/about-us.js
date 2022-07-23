// Expertise

const aboutUsExpertiseButtons = document.getElementById("services-buttons-container").children;
const expertiseDescription = document.getElementById("expertise-descriptions").children;

const mediaQueryList = matchMedia("(max-width: 992px)");
const showAllExpertiseDesciptions = mql => {
    for (let k = 0; k < expertiseDescription.length; k++) {

        mql.matches
            ? expertiseDescription[k].classList.remove("display-none")
            : expertiseDescription[k].classList.add("display-none")
    }
};

mediaQueryList.addEventListener("change", showAllExpertiseDesciptions);
showAllExpertiseDesciptions(mediaQueryList);


for (let i = 0; i < aboutUsExpertiseButtons.length; i++) {
    aboutUsExpertiseButtons[i].addEventListener("click", function() {
    let current = document.getElementsByClassName("service__link__active");


    // If there's no active class
    if (current.length > 0) {
        current[0].className = current[0].className.replace(" service__link__active", "");
    }
  
    // Add the active class to the current/clicked button
    this.className += " service__link__active";

    // Show title and description of selected menu item
    for(let j = 0; j < expertiseDescription.length; j++) {
        const targetData = this.getAttribute('data-target');

        expertiseDescription[j].classList.remove('expertise__description__item__container');
        expertiseDescription[j].classList.add('display-none');
    
            if(expertiseDescription[j].getAttribute('data-description') == targetData) {
                expertiseDescription[j].classList.remove('display-none');
                expertiseDescription[j].classList.add('expertise__description__item__container');
            }
         } 
    });
  }

  // Founders | Francisco Personality / Bio 
const franciscoBtn = document.getElementById("francisco-info-btn");
const franciscoBio = document.getElementById("francisco-bio");
const franciscoPersonality = document.getElementById("francisco-personality");

franciscoBtn.addEventListener("click", () => {
    if( franciscoBtn.innerHTML == "See Bio") {
        franciscoBtn.innerHTML = "See Personality";
        franciscoPersonality.classList.add("display-none");
        franciscoBio.classList.remove("display-none");
    } else {
        franciscoBtn.innerHTML = "See Bio"
        franciscoBio.classList.add("display-none");
        franciscoPersonality.classList.remove("display-none");
    }
})

// Founders | Norah Personality / Bio 
const norahBtn = document.getElementById("norah-info-btn");
const norahBio = document.getElementById("norah-bio");
const norahPersonality = document.getElementById("norah-personality");

norahBtn.addEventListener("click", () => {
    if( norahBtn.innerHTML == "See Bio") {
        norahBtn.innerHTML = "See Personality";
        norahPersonality.classList.add("display-none");
        norahBio.classList.remove("display-none");
    } else {
        norahBtn.innerHTML = "See Bio"
        norahBio.classList.add("display-none");
        norahPersonality.classList.remove("display-none");
    }
});