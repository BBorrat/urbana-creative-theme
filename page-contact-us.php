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

                <a href="https://urbanacreative.com" class="header__logo-link"><img src="<?php bloginfo('template_directory')?>/assets/images/small-logo.svg" alt="Logo Urbana Creative" class="header__logo" id="header__logo"></a>
                    
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
                        <li class="header__menu__items"> <a href="featured-project" id="header-menu-item-link" class="header__menu__item__link">Featured Projects</a></li>
                        <li class="header__menu__items"> <a href="case-study" id="header-case-study" class="header__menu__item__link">Case Study</a></li>
                        <li class="header__menu__items"> <a href="contact-us" id="header-menu-item-link" class="header__menu__item__link link--active">Contact Us</a></li>
                        <li class="header__menu__items"> <a href="join-us" id="header-menu-item-link" class="header__menu__item__link">Join Us</a></li>                                                           
                    </ul>
                </nav> 
            </div> 

        </header>
    </main>

	<main id="primary" class="site-main">

        <!-- Contact us -->       
        <section class="contact--container" id="contact-us">

            <div class="contact--content--width">

            <div class="contact--header--container">
                            <h3 class="contact--header">Contact Us</h3>
                            <p class="contact--first--paragraph contact__copy">Urbana is a <strong class="contact--first--paragraph "> Content Creation Studio</strong> based in sunny Miami.</p>
                </div>

                <div class="contact--second--paragraph--container">
                            <p class="contact--second--paragraph contact__copy">We build bridges between people and brands that span cultures, traditions and languages. Reach out today to learn more.</p>
                </div>

                <div class="contact--form--container">
                            
                    <h4 class="contact--form--cta">Get in touch and let's talk!</h4>
                            
                    <form class="contact--form" id="contact-form">
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

            </div>

        </section>	      
		
	</main><!-- #main -->

    <script>
        const responsiveHeader = document.getElementById("header");
        const headerHamburgerMenu = document.getElementById("header-hamburger-menu");
        const contactForm = document.getElementById("contact-form");
        const inputName = document.getElementById("name");
        const inputEmail = document.getElementById("email");
        const inputCompany = document.getElementById("company");
        const inputMessage = document.getElementById("message");

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

        // Contact us form
        contactForm.addEventListener("submit", function(event) {
            console.log('entrando al log');
            event.preventDefault();
            console.log(inputName.value);
            

            const params = "?name=" + inputName.value + "&company=" + inputCompany.value + "&email=" + inputEmail.value + "&message=" + inputMessage.value;
            console.log(params);

            // const body = {
            //     name: inputName.value,
            //     email: inputEmail.value,
            //     company: inputCompany.value,
            //     message: inputMessage.value
            // };
            // console.log("Body", body);

            // body: JSON.stringify(body);

            fetch("https://apimangosta.galizperu.com/api/mailsb" + params)
            .then( function(resp) {
                console.log(resp);
            });

            // Bloque de borrado
            inputName.value = "";
            inputEmail.value = "";
            inputCompany.value = "";
            inputMessage.value = "";

        }, true );

    </script>
    
<?php

get_footer();