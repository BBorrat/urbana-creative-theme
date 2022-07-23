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


// // Change background Osterlogo 

// const osterMobileIsotype = document.getElementById('oster-mobile-isotype');
// const osterDesktopIsotype = document.getElementById('oster-desktop-isotype');

// const mediaQuery = '(max-width: 768px)';
// const mediaQueryList = window.matchMedia(mediaQuery);


// mediaQueryList.addEventListener('change', event => {
//   if (event.matches) {
//     osterMobileIsotype.style.display = 'block';
//     osterDesktopIsotype.style.display = 'none';
//   } else {
//     osterDesktopIsotype.style.display = 'block';
//     osterMobileIsotype.style.display = 'none';
//   }
// })

// // Change images in first placeholder
// function setBackground(images, targetId) {
//     setInterval(function() {
//         var index = Math.floor(Math.random() * (images.length));
//         var target = document.getElementById(targetId);
//         target.src = images[index];

//     }, 5000);
// }

// var images = [
//     'img/coc-rev-random-img-00001.jpg',
//     'img/coc-rev-random-img-00002.jpg',
//     'img/coc-rev-random-img-00003.jpg',
//     'img/coc-rev-random-img-00004.jpg',
//     'img/coc-rev-random-img-00005.jpg',
//     'img/coc-rev-random-img-00006.jpg',
//     'img/coc-rev-random-img-00007.jpg',
//     'img/coc-rev-random-img-00008.jpg'
// ];

// var target1 = "cocina-a-la-reversible__image-1";

// setBackground(images, target1);


// // Change images in second placeholder
// function setBackground2(images, targetId) {
//     setInterval(function() {
//         var index = Math.floor(Math.random() * (images.length));
//         var target = document.getElementById(targetId);
//         target.src = images[index];

//     }, 4500);
// }

// var images = [
//     'img/coc-rev-random-img-00009.jpg',
//     'img/coc-rev-random-img-00010.jpg',
//     'img/coc-rev-random-img-00011.jpg',
//     'img/coc-rev-random-img-00012.jpg',
//     'img/coc-rev-random-img-00013.jpg',
//     'img/coc-rev-random-img-00014.jpg',
//     'img/coc-rev-random-img-00015.jpg',
//     'img/coc-rev-random-img-00016.jpg'
// ];

// var target2 = "cocina-a-la-reversible__image-2";

// setBackground2(images, target2);


// // Change images in third placeholder
// function setBackground3(images, targetId) {
//     setInterval(function() {
//         var index = Math.floor(Math.random() * (images.length));
//         var target = document.getElementById(targetId);
//         target.src = images[index];

//     }, 4000);
// }

// var images = [
//     'img/coc-rev-random-img-00017.jpg',
//     'img/coc-rev-random-img-00018.jpg',
//     'img/coc-rev-random-img-00019.jpg',
//     'img/coc-rev-random-img-00020.jpg',
//     'img/coc-rev-random-img-00021.jpg',
//     'img/coc-rev-random-img-00022.jpg',
//     'img/coc-rev-random-img-00023.jpg',
//     'img/coc-rev-random-img-00024.jpg',
//     'img/coc-rev-random-img-00025.jpg',
// ];

// var target3 = "cocina-a-la-reversible__image-3";

// setBackground3(images, target3);


// Change recipe image

// function setRecipeImg(images, targetId) {
//     setInterval(function() {
//         var index = Math.floor(Math.random() * (images.length));
//         var target = document.getElementById(targetId);
//         target.src = images[index];

//     }, 4500);
// }

// var images = [
//     'img/coc-rev-recipe-01.jpg',
//     'img/coc-rev-recipe-02.jpg',
//     'img/coc-rev-recipe-03.jpg',
//     'img/coc-rev-recipe-04.jpg',
//     'img/coc-rev-recipe-05.jpg',
//     'img/coc-rev-recipe-06.jpg',
//     'img/coc-rev-recipe-07.jpg',
//     'img/coc-rev-recipe-08.jpg',
//     'img/coc-rev-recipe-09.jpg',
//     'img/coc-rev-recipe-10.jpg',
//     'img/coc-rev-recipe-11.jpg',
//     'img/coc-rev-recipe-12.jpg'
// ];

// var target = "cocina-a-la-reversible__recipe-book__recipe__img";

// setRecipeImg(images, target);

var picPaths = [
    'img/coc-rev-recipe-01.jpg',
    'img/coc-rev-recipe-02.jpg',
    'img/coc-rev-recipe-03.jpg',
    'img/coc-rev-recipe-04.jpg',
    'img/coc-rev-recipe-05.jpg',
    'img/coc-rev-recipe-06.jpg',
    'img/coc-rev-recipe-07.jpg',
    'img/coc-rev-recipe-08.jpg',
    'img/coc-rev-recipe-09.jpg',
    'img/coc-rev-recipe-10.jpg',
    'img/coc-rev-recipe-11.jpg',
    'img/coc-rev-recipe-12.jpg'
];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,5000);
            }

            window.onload=function() {
                imgCont = document.getElementById('cocina-a-la-reversible__recipe-book__recipe__img');
                swapImage();
            }
