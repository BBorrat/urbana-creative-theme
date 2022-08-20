<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Urbana_Creative_Theme
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>Urbana Creative Group</title>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/assets/images/favicon.svg" type="image/svg">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<main>
        <!-- Header/Navbar --> 
        <!-- For unable navbar scroll function put this id on tag id="header" 
        and change class name for this: header__desktop__transparent -->
        <!-- For view mobile header only use the class header__mobile -->
        <!-- For view desktop header  use the class header__desktop__transparent -->
        <header class="header__desktop__scroll" id="header">  

            <div class="header__container__margin">

                <a href="http://zinaphia.com/dev/urbana" class="header__logo-link"><img src="<?php bloginfo('template_directory')?>/assets/images/small-logo.svg" alt="Logo Urbana Creative" class="header__logo" id="header__logo"></a>
                    
                <div class="header__hamburger__menu" id="header-hamburger-menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

                <nav class="header__navbar" id="header__navbar">
                    <ul class="header__menu" id="header-menu-container" >
                        <!-- For active link add link--active class to li tags-->
                        <li class="header__menu__items"> <a href="http://zinaphia.com/dev/urbana" id="header-menu-item-link" class="header__menu__item__link">Home</a></li>
                        <li class="header__menu__items"> <a href="about-us" id="header-menu-item-link" class="header__menu__item__link">About Us</a></li>
                        <li class="header__menu__items"> <a href="expertise-video-and-motion-graphics" id="header-menu-item-link" class="header__menu__item__link">Expertise</a></li>
                        <li class="header__menu__items"> <a href="featured-project" id="header-menu-item-link" class="header__menu__item__link link--active">Featured Projects</a></li>
                        <li class="header__menu__items"> <a href="contact-us" id="header-menu-item-link" class="header__menu__item__link">Contact Us</a></li>
                        <li class="header__menu__items"> <a href="join-us" id="header-menu-item-link" class="header__menu__item__link">Join Us</a></li>

                       
                                     
                    </ul>
                </nav> 
            </div> 

        </header>
    </main>

    <main id="primary" class="site-main">

        <!-- Hero -->
        <section class="hero">
            <div class="hero__container">
                <h3 class="hero__header">Featured Projects</h3>
            </div>
        </section>
        
        <!-- Cocina a la reversible -->
        <article class="cocina-a-la-reversible" id="cocina-a-la-reversible">
            
            <!-- Header -->
            <section class="cocina-a-la-reversible__header__section">
                <div class="cocina-a-la-reversible__header__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/reversible-bg-676x450.png" alt="" class="cocina-a-la-reversible__header__image">
                    <h3 class="cocina-a-la-reversible__heder">Cocina<br>a la Reversible</h3>
                </div>
                <div class="cocina-a-la-reversible__copy__container">
                    <p class="cocina-a-la-reversible__copy">To introduce Oster’s new Cocina a la Reversible blender, the Urbana team developed a full suite of visual assets, including video, imagery, recipes, packaging design and more.</p>
                </div>
                <div class="cocina-a-la-reversible__key-visual__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/coc-rev-key-visual-400x480.jpg" alt="" class="cocina-a-la-reversible__key-visual">
                </div>
            </section>

            <!-- Background logo for mobile-->
            <div class="cocina-a-la-reversible__bkg__logo__container__mobile" id="oster-mobile-isotype">
                <img src="<?php bloginfo('template_directory')?>/assets/images/oster-o-dark-blue.svg" alt="" class="cocinna-a-la-reversible__bkg__logo__img__mobile">
            </div>

            <!-- Background wood -->
            <div class="cocina-a-la-reversible__background__wood__container">
                <img src="<?php bloginfo('template_directory')?>/assets/images/wood-texture.jpeg" alt="Wood texture" class="cocina-a-la-reversible__background__wood__img">
            </div>
          
            <!-- Photography -->
            <section class="cocina-a-la-reversible">

                <div class="cocina-a-la-reversible__container">
                    <div class="cocina-a-la-reversible__image__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00001.jpg" alt="" class="cocina-a-la-reversible__image" id="cocina-a-la-reversible__image-1">
                    </div>

                    <div class="cocina-a-la-reversible__image__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00002.jpg" alt="" class="cocina-a-la-reversible__image" id="cocina-a-la-reversible__image-2">
                    </div>

                    <div class="cocina-a-la-reversible__image__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00003.jpg" alt="" class="cocina-a-la-reversible__image" id="cocina-a-la-reversible__image-3">
                    </div>
                </div>
                
            </section>           

            <!-- Video -->
            <section class="cocina-a-la-reversible__video__section">
                <div class="cocina-a-la-reversible__video__container">
                    
                    <div class="cocina-a-la-reversible__video__img__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/ipad.svg" alt="iPad image" class="cocina-a-la-reversible__video__device__img">
                        <div class="cocina-a-la-reversible__video__wrapper">
                            <video autoplay muted loop class="cocina-a-la-reversible__video">
                                <source src="<?php bloginfo('template_directory')?>/assets/videos/cocina-a-la-reversible.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="cocina-a-la-reversible__video__copy__container">
                        <p class="cocina-a-la-reversible__video__copy">Our production team shot on location with live talent to show off the features and functionality of this advanced technology, with high-speed cameras that captured the blender's reversible blades in action.</p>
                    </div>
                </div>
            </section>

            <!-- Background image 1 -->
            <div class="cocina-a-la-reversible__background__img-1__container">
                <img src="<?php bloginfo('template_directory')?>/assets/images/coc-rev-backround-img1.jpg" alt="Lifetyle background image" class="cocina-a-la-reversible__background__img-1">
            </div>

            <!-- Background logo for desktop -->
            <div class="cocina-a-la-reversible__bkg__logo__container__desktop" id="oster-desktop-isotype">
                <img src="<?php bloginfo('template_directory')?>/assets/images/oster-o-dark-blue.svg" alt="" class="cocinna-a-la-reversible__bkg__logo__img__desktop">
            </div>

            <!-- Recipe book -->
            <section class="cocina-a-la-reversible__recipe-book__section">
                <div class="cocina-a-la-reversible__recipe-book__container">
                    <div class="cocina-a-la-reversible__recipe-book__cover">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/recipe-cover.jpg" alt="" class="cocina-a-la-reversible__recipe-book__cover__img">
                    </div>
                    <div class="cocina-a-la-reversible__recipe-book__recipe">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/coc-rev-recipe-05.jpg" alt="" class="cocina-a-la-reversible__recipe-book__recipe__recipe__img" id="cocina-a-la-reversible__recipe-book__recipe__img">
                    </div>
                </div>
                <div class="cocina-a-la-reversible__recipe-book__copy__container">
                    <p class="cocina-a-la-reversible__recipe-book__copy">The final campaign came to life on social, web, in-store and more, and our rich media assets helped Oster’s new product stand apart from the competition.</p>
                </div>
            </section>

            <!-- Brochure -->  
            <section class="cocina-a-la-reversible__brochure__section">
                <div class="cocina-a-la-reversible__brochure__container">
                    <div class="cocina-a-la-reversible__brochure___front__img__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/coc-rev-brochure-front.jpg" alt="" class="cocina-a-la-reversible__brochure__front__img">
                    </div>
                    <div class="cocina-a-la-reversible__brochure__back__img__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/coc-rev-brochure-back.jpg" alt="" class="cocina-a-la-reversible__brochure__back__img">
                    </div>
                </div>
            </section>

            <!-- Background image 2 -->
            <div class="cocina-a-la-reversible__background__img-2__container">
                <img src="<?php bloginfo('template_directory')?>/assets/images/coc-rev-backround-img2.jpg" alt="Lifestyle background image" class="cocina-a-la-reversible__background__img-2">
            </div>

        </article>

        <!-- Coravin Black Friday -->
        <article class="coravin__black-friday__article" id="coravin-black-friday">
            
            <!-- header -->
            <div class="coravin__black-friday__header__section">
                <div class="coravin__black-friday__header__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/coravin-header-img-791x450.png" alt="" class="coravin__black-friday__header__img">
                    <h3 class="coravin__black-friday__header">Coravin<br>Black Friday</h3>
                </div>
            </div>
            <div class="coravin__black-friday__copy__container">
                <p class="coravin__black-friday__copy">How do you get people’s attention on the biggest shopping day of the year? Create something visually arresting, like these neon Black Friday banners we developed for Coravin – a revolutionary system that lets you pour wine without popping the cork.</p>
            </div>
            <div class="coravin__black-friday__key-visual__container">
                <video autoplay muted loop class="coravin__black-friday__key-visual__video">
                    <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin-key-visual.mp4" type="video/mp4">
                </video>

            </div>

            <!-- Video -->
            <section class="coravin__black-friday__video__section">

                <div class="coravin__black-friday__video__container">                   
                    <div class="coravin__black-friday__video__img__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/ipad.svg" alt="iPad image" class="coravin__black-friday__video__device__img">
                        <div class="coravin__black-friday__video__wrapper">
                            <video autoplay muted loop class="coravin__black-friday__video">
                                <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="coravin__black-friday__video__copy__container">
                        <p class="coravin__black-friday__video__copy">Rich media banners with eye-catching colors, motion and a real-time countdown clock led shoppers to beautiful video content featuring high-end lighting, epic hero shots and sharp editing. Our team handled every aspect of this campaign, including media placement and optimization.</p>
                    </div>               
                </div>

                <div class="coravin__black-friday__video__background__img">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/fp-coravin-bkg-texture.jpg" alt="" class="coravin__black-friday__video__background__img__image">
                </div>

            </section>

            <!-- Hours banners -->
            <section class="coravin__black-friday__hours-banners__section">
                <div class="coravin__black-friday__hours-banners__container">
                    <video autoplay loop muted class="coravin__black-friday__72hr-banner coravin__black-friday__hour-banner">
                        <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin-72hr.mov" type="video/mp4">
                    </video>
                    <video autoplay loop muted class="coravin__black-friday__48hr-banner coravin__black-friday__hour-banner">
                        <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin-48hr.mov" type="video/mp4">
                    </video>
                    <video autoplay loop muted class="coravin__black-friday__24hr-banner coravin__black-friday__hour-banner">
                        <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin-24hr.mov" type="video/mp4">
                    </video>
                </div>
                <div class="coravin__black-friday__hours-banners__copy__container">
                    <p class="coravin__black-friday__hours-banners__copy">The result? <span class="bold-text">Total sell-out before Cyber Monday</span>. We achieved 866,000 impressions, 188,000 video views and a return of 24.7X on every ad dollar spent.</p>
                </div>
                <div class="coravin__black-friday__hours-banners__bk__img__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/fp-coravin-bk-product1.jpg" alt="" class="coravin__black-friday__hours-banners__bk__img">
                </div>
                <div class="coravin__black-friday__hours-banners__bk__isotype__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/coravin-isotype.svg" alt="" class="coravin__black-friday__hours-banners__bk__isotype">
                </div>
            </section>

            <!-- Horizontal banner -->
            <section class="coravin__black-friday__horizontal-banner__section">
                <div class="coravin__black-friday__horizontal-banner__img__cntainer">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/coravin-hzl-banner.jpg" alt="" class="coravin__black-friday__horizontal-banner__img">
                </div>
            </section>

            <!-- Posts -->
            <section class="coravin__black-friday__posts__section">
                <div class="coravin__black-friday__posts__container">
                    <div class="coravin__black-friday__posts__phone__container">
                        <video autoplay loop muted class="coravin__black-friday__posts__phone__item">
                            <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin-key-visual.mp4" type="video/mp4">
                        </video>

                        <img src="<?php bloginfo('template_directory')?>/assets/images/iphone12-instagram.png" alt="" class="coravin__black-friday__posts__phone__img">
                    </div>
                    <div class="coravin__black-friday__posts__inner__container">
                        <video autoplay loop muted class="coravin__black-friday__posts__item coravin__black-friday__posts__item-1">
                            <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin-post-double.mp4" type="video/mp4">
                        </video>
                        <video autoplay loop muted class="coravin__black-friday__posts__item coravin__black-friday__posts__item-2">
                            <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin-key-visual.mp4" type="video/mp4">
                        </video>
                        <video autoplay loop muted class="coravin__black-friday__posts__item coravin__black-friday__posts__item-3">
                            <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin-post-50off.mp4" type="video/mp4">
                        </video>
                        <video autoplay loop muted class="coravin__black-friday__posts__item coravin__black-friday__posts__item-4">
                            <source src="<?php bloginfo('template_directory')?>/assets/videos/coravin-post-last-day.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="coravin__black-friday__posts__bkg__img__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/fp-coravin-bkg-product2.jpg" alt="" class="coravin__black-friday__posts__bkg__img">
                    </div>
                </div>
            </section>

        </article>

        <!-- PrimaLatte -->
        <article class="primalatte__article" id="oster-primalatte">
            
            <!-- header -->
            <section class="primalatte__header__section">
                <div class="primalatte__header__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/fp-primalatte-header-img-desktop.png" alt="" class="primalatte__header__image">
                    <h3 class="primalatte__heder">Oster<br>PrimaLatte</h3>
                </div>
                <div class="primalatte__copy__container">
                    <p class="primalatte__copy">With one simple touch, the Oster Prima Latte brews espresso coffee with a 15-bar pump system and automatically froths milk for cappuccinos and lattes. To bring this elevated coffeemaker to market, Urbana created an equally high-end visual campaign.</p>
                </div>
                <div class="primalatte__key-visual__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-key-visual-450x567.jpg" alt="" class="primalatte__key-visual">
                </div>
                <div class="primalatte__header__bkg-logo__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-logo.svg" alt="" class="primalatte__header__bkg-logo">
                </div>
            </section>

            <!-- Photography -->
            <section class="primalatte__photo-shooting__section">

                <div class="primalatte__photo-shooting__container">
                    <div class="primalatte__photo-shooting__image__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-rand-img-00003.jpg" alt="" class="primalatte__photo-shooting__image" id="primalatte__photo-shooting__image-1">
                    </div>

                    <div class="primalatte__photo-shooting__image__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-rand-img-00002.jpg" alt="" class="primalatte__photo-shooting__image" id="primalatte__photo-shooting__image-2">
                    </div>

                    <div class="primalatte__photo-shooting__image__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-rand-img-00009.jpg" alt="" class="primalatte__photo-shooting__image" id="primalatte__photo-shooting__image-3">
                    </div>
                </div>

                <div class="primalatte__background-img-1__desktop__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-coffee-bkg-desktop.jpg" alt="" class="primalatte__background-img-1__desktop">
                </div>
                <div class="primalatte__background-img-1__mobile__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-coffee-bkg-mobile.jpg" alt="" class="primalatte__background-img-1__mobile">
                </div>
            </section>    

            <!-- Video -->
            <section class="primalatte__video__section">
                <div class="primalatte__video__container">
                    
                    <div class="primalatte__video__img__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/ipad.svg" alt="iPad image" class="primalatte__video__device__img">
                        <div class="primalatte__video__wrapper">
                            <video autoplay muted loop class="primalatte__video">
                                <source src="<?php bloginfo('template_directory')?>/assets/videos/primalatte.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="primalatte__video__copy__container">
                        <p class="primalatte__video__copy">WIth a rich palette of creamy whites and soft hues of beige and brown, our visuals evoke a truly luxurious coffee experience. Our team shot lifestyle-driven video content for web and social executions that draw the viewer into the experience.</p>
                    </div>
                </div>
                <div class="primalatte__bkg-logo-2__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-logo.svg" alt="" class="primalatte__bkg-logo-2">
                </div>               
                <div class="primalatte__bkg-img1__desktop__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-lifestyle-bkg-img-1-desktop.jpg" alt="" class="primalatte__bkg-img-1__desktop">
                </div>
                <div class="primalatte__bkg-img1__mobile__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-lifestyle-bkg-img-1-mobile.jpg" alt="" class="primalatte__bkg-img-1__mobile">
                </div>
            </section>

            <!-- Print ad -->
            <section class="primalatte__print-ad__section">
                <div class="primalatte__print-ad__img__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primaLatte ad-img.jpg" alt="" class="primalatte__print-ad__img">
                </div>

                <div class="primalatte__print-ad__copy__container">
                    <p class="primalatte__print-ad__copy">We also created a recipe booklet, gift box, written content, point-of-sale materials and stunning still photos to give the Prima Latte the platform it deserves.</p>
                </div>

                <div class="primalatte__bkg-img-2__desktop__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-lifestyle-bkg-img-2-desktop.jpg" alt="" class="primalatte__bkg-img-2__desktop">
                </div>
                <div class="primalatte__bkg-img-2__mobile__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/primalatte-lifestyle-bkg-img-2-mobile.jpg" alt="" class="primalatte__bkg-img-2__mobile">
                </div>
            </section>

        </article>

        <!-- Contact us -->       
        <section class="contact--container" id="contact-us">

            <div class="contact--content--width">

                <div class="contact--header--container">
                    <h3 class="contact--header">Contact Us</h3>
                    <p class="contact--first--paragraph contact__copy">Urbana is a <strong class="contact--first--paragraph "> Content Creation Studio</strong> based in sunny Miami. We build bridges between people and brands that span cultures, traditions and languages. Reach out today to learn more.</p>
                </div>

                <!-- <div class="contact--second--paragraph--container">
                            <p class="contact--second--paragraph contact__copy">We build bridges between people and brands that span cultures, traditions and languages. Reach out today to learn more.</p>
                </div> -->

                <div class="contact--form--container">
                
                <h4 class="contact--form--cta">Get in touch and let’s talk!</h4>
                        
                <form class="contact--form">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email">
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company">
                            <label for="message">Message</label>
                            <input type="text" id="message" name="message">
                            <input type="submit" id="submit" name="submit">
                </form>

                <div class="contact__form__legal__text__container">
                    
                    <p class="contact__form__legal__text"><small>By submitting, I confirm I have read and accept your Privacy Statement and I would like to receive marketing and/or promotional emails from Urbana Creative Group.</small></p>
                    
                    <div class="contact__form__legal__tooltip">
                        
                        <button class="contact__form__legal__info__button" id="tooltip-info-icon">
                            <!-- <span class="material-icons-outlined contact__form__legal__info__icon">info</span> -->
                            <img src="<?php bloginfo('template_directory')?>/assets/images/info_icon.svg" alt="" class="contact__form__legal__info__icon">
                        </button>

                        <div class="display-none" id="tooltip-info-window">                       
                            <p class="contact__form__legal__tooltip__text"><small>By signing up, I agree to receive emails from Urbana Creative Group regarding news, updates, offers and promotions. I understand I may withdraw my consent at any time.</small></p>                       
                            <button class="contact__form__legal__tooltip_close__btn" id="tooltip-info-window-close-button">close</button>
                        </div>

                    </div>

                </div>
            
            </div>

            <div class="contact--greeting--card">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/card.jpg" alt="" class="contact--greeting--card--img">
            </div>

        </section>
		
    </main><!-- #main -->
</div>


<script>

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


    // Change background Osterlogo 

    const osterMobileIsotype = document.getElementById('oster-mobile-isotype');
    const osterDesktopIsotype = document.getElementById('oster-desktop-isotype');

    const mediaQuery = '(max-width: 768px)';
    const mediaQueryList = window.matchMedia(mediaQuery);


    mediaQueryList.addEventListener('change', event => {
        if (event.matches) {
            osterMobileIsotype.style.display = 'block';
            osterDesktopIsotype.style.display = 'none';
        } else {
            osterDesktopIsotype.style.display = 'block';
            osterMobileIsotype.style.display = 'none';
        }
    })
   

    // Change images in first placeholder

    function setBackground(images, targetId) {
        setInterval(function() {
            var index = Math.floor(Math.random() * (images.length));
            var target = document.getElementById(targetId);
            target.src = images[index];

        }, 5000);
    }

    var images = [
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00001.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00002.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00003.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00004.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00005.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00006.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00007.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00008.jpg'
    ];

    var target1 = "cocina-a-la-reversible__image-1";

    setBackground(images, target1);


    // Change images in second placeholder

    function setBackground2(images, targetId) {
        setInterval(function() {
            var index = Math.floor(Math.random() * (images.length));
            var target = document.getElementById(targetId);
            target.src = images[index];

        }, 4500);
    }

    var images = [
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00009.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00010.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00011.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00012.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00013.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00014.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00015.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00016.jpg'
    ];

    var target2 = "cocina-a-la-reversible__image-2";

    setBackground2(images, target2);


    // Change images in third placeholder

    function setBackground3(images, targetId) {
        setInterval(function() {
            var index = Math.floor(Math.random() * (images.length));
            var target = document.getElementById(targetId);
            target.src = images[index];

        }, 4000);
    }

    var images = [
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00017.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00018.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00019.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00020.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00021.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00022.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00023.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00024.jpg',
        '<?php bloginfo('template_directory')?>/assets/images/coc-rev-random-img-00025.jpg',
    ];

    var target3 = "cocina-a-la-reversible__image-3";

    setBackground3(images, target3);

</script>

<?php

get_footer();