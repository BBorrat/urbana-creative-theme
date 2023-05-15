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
	<title>Urbana Creative Group | Case study</title>
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
                        <li class="header__menu__items"> <a href="case-study" id="header-case-study" class="header__menu__item__link link--active">Case Study</a></li>
                        <li class="header__menu__items"> <a href="contact-us" id="header-menu-item-link" class="header__menu__item__link">Contact Us</a></li>
                        <li class="header__menu__items"> <a href="join-us" id="header-menu-item-link" class="header__menu__item__link">Join Us</a></li>                                                         
                    </ul>
                </nav> 
            </div> 

        </header>
    </main>

	<main id="primary" class="site-main">
        
        <!-- Hero -->
        <section class="case-study__hero" >
            <h3 class="case-study__hero-heading">THE ART OF <br> <span class="case-study__hero-heading-line-2">JUGGLING</span></h3>
            <div class="case-study__hero-copy-content">
                <p class="case-study__hero-copy"><span class="case-study__hero-copy-hightlighted">Getting the most of our client's budget</span> is a key goal that we always strive for. Successful production management depends on <span class="case-study__hero-copy-hightlighted">good planning</span> especially when there are a variety of variables and the main objective is <span class="case-study__hero-copy-hightlighted">maximizing productivity</span>. A good example, is our latest challenging project where we had to produce photo and video content simultaneously for our client Costa Farms within a short timeline and tight budget.</p>
            </div>
            <img src="<?php bloginfo('template_directory')?>/assets/images/case-study-hero-heading-image-large.jpg" alt="Behind the scene production image" class="case-study__hero-small-image" >
            <img src="<?php bloginfo('template_directory')?>/assets/images/case-study-hero-small-image-large.jpg" alt="Girl with plants image" class="case-study__hero-heading-image">
            <img src="<?php bloginfo('template_directory')?>/assets/images/case-study-background-leaf.svg" alt="Leaf outline illustration" class="case-study__hero-leaf-1">
            <img src="<?php bloginfo('template_directory')?>/assets/images/case-study-background-leaf.svg" alt="Leaf outline illustration" class="case-study__hero-leaf-2">
        </section>

        <!-- How to -->
        <section class="case-study__how-to" >

        </section>

        <!-- Deliverables -->
        <section class="case-study__deliverables" >

        </section>

        <!-- Carousel -->
        <section class="case-study__carousel" >

        </section>

        <!-- Challenge -->
        <section class="challenge" >

        </section>

        <!-- Images grid -->
        <section class="case-study__images-grid" >

        </section>

        <!-- Collaboration -->
        <section class="case-study__collaboration" >

        </section>
       
        <!-- Testimonials -->
        <section class="case-study__testimonial">
            <div class="case-study__testimonial__text__container">
                <h3 class="case-study__testimonial__header">CLIENT'S TESTIMONIALS</h3>                
            </div>

            <div class="arrow__container">
                <div class="arrow"></div>
            </div>
            
            <div class="case-study__testimonial__container">
                <div class="case-study__testimonial__item">
                    <!-- <img src="<?php bloginfo('template_directory')?>/assets/images/logo-coravin.svg" alt=" logotype" class="testimonial__coravin-logo">-->
                    <div class="case-study__testimonial__quotation__mark">“</div>                   
                    <div class="case-study__testimonial__item__container">
                        <h4 class="case-study__testimonial__heading" >Costa Farms</h4>
                        <p class="case-study__testimonial__testimonial">Urbana Creative Group impressed me right out of the gate. When we started working with them, we were launching two big projects. They handled both with ease and blended seamlessly with our branding agency to execute a major photo shoot. They've handled sudden changes with ease and throughout everything, have been pleasant to collaborate with. I'm glad we've found them and value our continued partnership</p>
                        <p class="case-study__testionial__name">Justin, Sr. Manager</p>
                        <p class="case-study__testimonial__job-title">Brand Marketing</p>
                        <p class="case-study-testimonial__address">Costa Farms - Miami</p>
                        <div class="case-study__testimonial__line"></div>
                    </div>                   
                </div>
                <div class="case-study__testimonial__item">
                    
                    <!-- <img src="<?php bloginfo('template_directory')?>/assets/images/logo-newell.svg" alt="Newell Brands logotype" class="testimonial__newell-logo"> -->
                    <div class="case-study__testimonial__quotation__mark">“</div>
                    <div class="case-study__testimonial__item__container">
                    <h4 class="case-study__testimonial__heading" >Agency Squid</h4>
                        <p class="case-study__testimonial__testimonial">When our Agency needed to produce a photo/video shoot for an important client in Miami, we were fortunately connected to Urbana Creative. Since our agency is not from Miami, we needed to partner with an organization that would not only be our preproduction producers but would collaborate to deliver a better-than-expected product to our client - from pre-to post-production. Urbana Creative was that partner. The preproduction was seamless with finding the perfect locations and providing a responsive styling and production team. When at the locations, logistics were flawless, and since the shoot list was extensive, staying on top and anticipating our needs was critical. Not to mention the amazing catering for the team! Urbana did that. After the shoot, the deliverable was laced out and sent so we could continue our work and meet our deadline.</p>
                        <p class="case-study__testionial__name">Brent Marmo</p>
                        <p class="case-study__testimonial__job-title">Co-Founder Agency Squid</p>
                        <p class="case-study__testimonial__address">Minneapolis</p>
                        <div class="case-study__testimonial__line"></div>
                    </div>
                </div>                
            </div>
        </section>

        <!-- Contact us -->       
        <section class="contact--container" id="contact-us">

            <div class="contact--content--width">

            <div class="contact--header--container">
                            <h3 class="contact--header">Contact Us</h3>
                            <p class="contact--first--paragraph contact__copy">Urbana is a <strong class="contact--first--paragraph "> Creative Content Creation Studio</strong> powered by the ocean breezes of Miami, Florida.</p>
                </div>

                <div class="contact--second--paragraph--container">
                            <p class="contact--second--paragraph contact__copy">We build bridges between people and brands across cultures, traditions and languages.</p>
                </div>

                <div class="contact--form--container">
                            
                    <h4 class="contact--form--cta">Get in touch and let’s talk!</h4>
                            
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

    // Contact Form
    const contactForm = document.getElementById("contact-form");
    const inputName = document.getElementById("name");
    const inputEmail = document.getElementById("email");
    const inputCompany = document.getElementById("company");
    const inputMessage = document.getElementById("message");
    
    // Contact us form
    contactForm.addEventListener("submit", function(event) {
        event.preventDefault();
        console.log('entrando al log');
        console.log(inputName.value);
        const params = "?name=" + inputName.value + "&company=" + inputCompany.value + "&email=" + inputEmail.value + "&message=" + inputMessage.value;
        console.log(params);

        fetch("https://apimangosta.galizperu.com/api/mailsb" + params)
        .then( function(resp) {
            console.log(resp);
            return resp.json();
        }).then( function(data){
           console.log('data', data);
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
