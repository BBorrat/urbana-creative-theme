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

                <a href="/" class="header__logo-link"><img src="<?php bloginfo('template_directory')?>/assets/images/small-logo.svg" alt="Logo Urbana Creative" class="header__logo" id="header__logo"></a>
                    
                <div class="header__hamburger__menu" id="header-hamburger-menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

                <nav class="header__navbar" id="header__navbar">
                    <ul class="header__menu" id="header-menu-container" >
                        <!-- For active link add link--active class to li tags-->
                        <li class="header__menu__items"> <a href="/" id="header-menu-item-link" class="header__menu__item__link">Home</a></li>
                        <li class="header__menu__items"> <a href="about-us" id="header-menu-item-link" class="header__menu__item__link">About Us</a></li>
                        <li class="header__menu__items"> <a href="expertise-video-and-motion-graphics" id="header-menu-item-link" class="header__menu__item__link">Expertise</a></li>
                        <li class="header__menu__items"> <a href="featured-project" id="header-menu-item-link" class="header__menu__item__link">Featured Projects</a></li>
                        <li class="header__menu__items"> <a href="contact-us" id="header-menu-item-link" class="header__menu__item__link">Contact Us</a></li>
                        <li class="header__menu__items"> <a href="join-us" id="header-menu-item-link" class="header__menu__item__link link--active">Join Us</a></li>

                       
                                     
                    </ul>
                </nav> 
            </div> 

        </header>
    </main>

	<main id="primary" class="site-main">
        
        <!-- Join us -->       
        <section class="join-us__container" id="join-us">

            <div class="join-us__content--width">

                <div class="join-us__header__container">
                    <h3 class="join-us__header">Join Us</h3>
                </div>
                
                <div class="join-us__form__container">

                    <h4 class="join-us__form__cta">We are always seeking new inspiration and talent to fuel our creative team.<br>We sincerely appreciate your interest to join us! </h4>
                    
                    <form class="join-us__form" id="join-us-form" >
                        <label for="talents">*Choose your talent</label>
                        <select name="talents" id="talents" required>
                            <option value="2d-3d-animator">2D-3D Animator 1</option>
                            <option value="art-director">Art Director</option>
                            <option value="audio-engineer-music-producer">Audio Engineer/Music Producer</option>
                            <option value="copywriter">Copywriter</option>
                            <option value="Cceative-director">Creative Director</option>
                            <option value="director">Director</option>
                            <option value="dp">DP</option>
                            <option value="editor">Editor</option>
                            <option value="efx-artist">Efx Artist</option>
                            <option value="executive-producer">Executive Producer</option>
                            <option value="food-stylist">Food Stylist</option>
                            <option value="graphic-designer">Graphic Designer</option>
                            <option value="hair-make-up-stylist">Hair/Make-up Stylist</option>
                            <option value="ideation-concept-development">Ideation/Concept Development</option>
                            <option value="videographer">Videographer</option>
                            <option value="photographer">Photographer</option>
                            <option value="photo-retouching">Photo Retouching</option>
                            <option value="production-assistant">Production Assistant</option>
                            <option value="professional-voice-talent">Professional Voice Talent</option>
                            <option value="prop-master">Prop Master</option>
                            <option value="set-stylist">Set Stylist</option>
                            <option value="translation-services">Translation Services</option>
                            <option value="video-color-correction-specialist">Video Color Correction Specialist</option>
                            <option value="wardrobe-stylist">Wardrobe Stylist</option>
                            <option value="other">Other</option>
                        </select>
                        <label for="name">*Name</label>
                        <input type="text" id="name" name="name" required>
                        <label for="last-name">*Last Name</label>
                        <input type="text" id="last-name" name="last-name" required>
                        <label for="email">*Email</label>
                        <input type="email" id="email" name="email" required>
                        <label for="linkedin">Linkedin</label>
                        <input type="url" id="linkedin" name="linkedin">
                        <label for="online-portfolio">Online portfolio</label>
                        <input type="url" id="online-portfolio" name="online-portfolio">
                        <label  class="custom-file-upload" for="resume-upload">Resume upload</label>
                        <input type="file" id="resume-upload" name="resume-upload">
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

            </div>

        </section>   
		
	</main><!-- #main -->

    <script>
    const responsiveHeader = document.getElementById("header");
    const headerHamburgerMenu = document.getElementById("header-hamburger-menu");
    const joinUsForm = document.getElementById("join-us-form");
    const joinUsInputName = document.getElementById("name");
    const joinUsInputLastName = document.getElementById("last-name");
    const joinUsInputEmail = document.getElementById("email");
    const joinUsInputLastLinkedin = document.getElementById("linkedin");
    const joinUsInputLastOnLinePortfolio = document.getElementById("online-portfolio");

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

    // Join us form
    joinUsForm.addEventListener("submit", function(event) {
            console.log('entrando al log')
            console.log(joinUsInputName.value);
            event.preventDefault();

            const params= "?name=" + joinUsInputName.value + "&last-name=" + joinUsInputLastName.value + "&email=" + joinUsInputEmail.value + "&linkedin=" + joinUsInputLastLinkedin.value + "&online-portfolio=" + joinUsInputLastOnLinePortfolio.value;
            console.log(params);

            
            joinUsInputName.value = "";
            joinUsInputLastName.value = "";
            joinUsInputEmail.value = "";
            joinUsInputLastLinkedin.value = "";
            joinUsInputLastOnLinePortfolio.value = "";
            

        }, true );
    </script>

<?php

get_footer();