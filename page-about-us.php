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
                        <li class="header__menu__items"> <a href="about-us" id="header-menu-item-link" class="header__menu__item__link link--active">About Us</a></li>
                        <li class="header__menu__items"> <a href="expertise-video-and-motion-graphics" id="header-menu-item-link" class="header__menu__item__link">Expertise</a></li>
                        <li class="header__menu__items"> <a href="featured-project" id="header-menu-item-link" class="header__menu__item__link">Featured Projects</a></li>
                        <li class="header__menu__items"> <a href="case-study" id="header-case-study" class="header__menu__item__link">Case Study</a></li>
                        <li class="header__menu__items"> <a href="contact-us" id="header-menu-item-link" class="header__menu__item__link">Contact Us</a></li>
                        <li class="header__menu__items"> <a href="join-us" id="header-menu-item-link" class="header__menu__item__link">Join Us</a></li>                                                         
                    </ul>
                </nav> 
            </div> 

        </header>
    </main>

	<main id="primary" class="site-main">

       <!-- This is us -->
	    <section class="this-is-us__section">
            <div class="this-is-us__container">
                <!-- <div class="this-is-us__bkg-img__desktop__container">
                    <img src="img/this-is-us-bkg-img-desktop.jpg" alt="" class="this-is-us__bkg-img__desktop">
                </div>
                <div class="this-is-us__bkg-img__mobile__container">
                    <img src="img/this-is-us-bkg-img-mobile.jpg" alt="" class="this-is-us__bkg-img__mobile">
                </div> -->
                <div class="this-is-us__text__container">                   
                    <h3 class="this-is-us__header">THIS IS WHO WE ARE</h3>
                    <div class="this-is-us__copy__container">
                        <p class="this-is-us__copy">Located in the city that bridges North America, Latin America and the Caribbean, Urbana Creative is an award-winning content creation studio. From our offices in Miami, we create work that speaks to the general U.S. market, U.S. Hispanics and diverse people across Latin America.</p><br>
                        <p class="this-is-us__copy">Being flexible, multicultural and multilingual make Urbana uniquely qualified to help businesses break into diverse markets. They leverage our experience, resources and multilingual team to produce content designed to achieve real business results.</p><br>
                    </div>              
                </div> 
            </div>        
        </section>

        <!-- Our Work -->
        <section class="about-us__services__section">

            <div class="about-us__services__container">

                <h3 class="services__header">OUR WORK</h3>

                <div class="services__copy__container">
                    <p class="services__copy">We recognize that each business, large or small, comes with its own set of challenges, and our lean structure allows us to efficiently develop creative content solutions for any size organization. Through a results-centric approach, we combine strategic creative work with continuous optimization to move your business forward.</p>
                </div>

                <div class="services__buttons__container" id="services-buttons-container">

                    <button name="video-button" type="button" class="service__link video" id="service-button-video" data-target="service-button-video">                    
                        <div class="service__container">
                            <img src="<?php bloginfo('template_directory')?>/assets/images/clapperboard.svg" alt="Clapperboard icon" class="service__video__icon">
                            <h2 class="service__name">Video<br>+<br>Motion Graphics</h2>
                        </div>
                        <div class="service__inner-frame"></div>    
                    </button>

                    <button name="photography-button" type="button" class="service__link photography" id="service-button-photography" data-target="service-button-photography">
                        <div class="service__container">
                            <img src="<?php bloginfo('template_directory')?>/assets/images/camera.svg" alt="Photographic camera icon" class="service__photography__icon">
                            <h2 class="service__name">Professional<br>Photography</h2>
                        </div>
                        <div class="service__inner-frame"></div>              
                    </button>

                    <button name="social-button" type="button" class="service__link social" id="service-button-social" data-target="service-button-social">
                        <div class="service__container">
                            <img src="<?php bloginfo('template_directory')?>/assets/images/like.svg" alt="Social like icon" class="service__social__icon">
                            <h2 class="service__name">Social<br>Content</h2>
                        </div>
                        <div class="service__inner-frame"></div>              
                    </button>

                    <button name="creative-button" type="button" class="service__link creative" id="service-button-creative" data-target="service-button-creative">
                        <div class="service__container">
                            <img src="<?php bloginfo('template_directory')?>/assets/images/creative.svg" alt="Creative icon" class="service__creative__icon">
                            <h2 class="service__name">Creative<br>Services</h2>
                        </div>
                        <div class="service__inner-frame"></div>         
                    </button>

                    <button name="post-button" type="button" class="service__link post" id="service-button-post" data-target="service-button-post">
                        <div class="service__container">
                            <img src="<?php bloginfo('template_directory')?>/assets/images/postproduction.svg" alt="Postproduction icon" class="service__postproduction__icon">
                            <h2 class="service__name">Post-Production &<br>Photo Retouching<br>Services</h2>
                        </div>
                        <div class="service__inner-frame"></div>           
                    </button>
                
                </div>

                <div class="services__text__container" id="expertise-descriptions">

                    <div class="expertise__description__item__container display-none" data-description="service-button-video">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/clapperboard.svg" alt="" class="expertise__description__icon video__icon">
                        <h2 class="expertise__description__header">Video + Motion Graphics</h2>
                        <div class="expertise__description__copy__container" id="expertise-video-copy-container">
                            <p class="expertise__description__copy">Today, you can reach your target on any number of screens, in any number of settings: computers, conference rooms, subways, airplanes, TVs, dashboards, billboards, cell phones, gas pumps, cash registers, taxi cabs, watches, even home appliances!</p>
                            <p class="expertise__description__copy">We’ll hand pick your team of talent based on your brief, your budget, and how your video content will best serve you. Some brands need digital display advertising for their online marketing, some need short-form branded content, some need long-form branded content, some need corporate videos, some need high-quality shareable videos loaded with viral potential, some need incredible motion graphics with messages and typography that grab the viewer and don’t let go, and some need all of the above.  Our directors and videographers are great directors and videographers, regardless of the era. The same goes for our art directors, our producers, our writers, our designers, and on and on. They bring a timeless sensitivity of story and picture and craft.</p>
                        </div>
                        <a href="expertise-video-and-motion-graphics" class="expertise__description__btn">See works</a>
                    </div>

                    <div class="expertise__description__item__container display-none" data-description="service-button-photography">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/camera.svg" alt="" class="expertise__description__icon  photography__icon">
                        <h2 class="expertise__description__header">Professional Photography</h2>
                        <div class="expertise__description__copy__container">
                            <p class="expertise__description__copy">Our talented creative directors, photographers, stylists, and designers work as one to compose both still and moving images that express powerful ideas and tell compelling, visual stories. Look no further than these creative people when your brand is looking for:</p>
                            <ul class="expertise__description__copy">
                                <li>Men's editorial</li>
                                <li>Women's editorial</li>
                                <li>Design</li>
                                <li>Advertising</li>
                                <li>Video</li>
                                <li>Professional portraiture</li>
                                <li>Industrial/commercial photography</li>
                                <li>Food photography</li>
                                <li>Architectural photography</li>
                                <li>Real estate photography</li>
                                <li>Product photography</li>
                                <li>Luxury photography</li>
                            </ul>
                        </div>
                        <a href="expertise-professional-photography" class="expertise__description__btn">See works</a>

                    </div>

                    <div class="expertise__description__item__container display-none" data-description="service-button-social">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/like.svg" alt="" class="expertise__description__icon social__icon">
                        <h2 class="expertise__description__header">Social Content</h2>
                        <div class="expertise__description__copy__container">
                            <p class="expertise__description__copy">We can help you create social media content for a wide variety of budgets. Our team of social media content creators can make it easier for you to reach your target audience. We help you and your team achieve (and often exceed) your marketing, sales, and growth goals. Our passion to create amazing content, our commitment to your success, and our seamless fusion of art and technology are some of the things that set us apart. We can help you get your content to the right audience and inspire them to take action.</p>
                            <p class="expertise__description__copy">We can create:</p>
                            <ul class="expertise__description__copy">
                                <li>Brand pages</li>
                                <li>Ads</li>
                                <li>Posts</li>
                                <li>Campaigns, and more</li>
                            </ul>
                        </div>
                        <a href="expertise-social-content" class="expertise__description__btn">See works</a>

                    </div>
                    
                    <div class="expertise__description__item__container display-none" data-description="service-button-creative">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/creative.svg" alt="" class="expertise__description__icon creative__icon">
                        <h2 class="expertise__description__header">Creative Services</h2>
                        <div class="expertise__description__copy__container">
                            <p class="expertise__description__copy">We've done so much - and continue to evolve our portfolio of expertise - that Creative Services has become a catch-all for the many things we offer our clients. As an extension of their marketing team, we provide an extensive list of support services across every dimension of creative marketing. At the end of the day, Urbana is here to help our clients develop great ideas, sell them internally and then launch them into the marketplace. Whatever that entails…we do.</p>
                        </div>
                        <a href="expertise-creative-services" class="expertise__description__btn">See works</a>

                    </div>
                   
                    <div class="expertise__description__item__container display-none" data-description="service-button-post">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/postproduction.svg" alt="" class="expertise__description__icon post__icon">
                        <h2 class="expertise__description__header">Post-Production Services</h2>
                        <div class="expertise__description__copy__container">
                            <p class="expertise__description__copy">Our highly talented and passionate content post-production services team specializes in enhancing your native and branded media and increasing your content’s visual appeal. From post-production services such as video editing, incorporating visual effects relevant to your brand and aesthetic, to photo editing, our creators have you covered. Our experts will turn a good video and photo into striking and shareable content across social media and throughout your digital presence.</p>
                        </div>
                        <a href="expertise-video-and-motion-graphics" class="expertise__description__btn">See works</a>
                        <!-- <button class="expertise__description__btn">See works</button> -->

                    </div>

                </div>

            </div>

        </section>

        <!-- Our approach -->
        <section class="our-approach">

            <div class="our-approach__container">

                <div class="our-approach__intro__container">
                    <h3 class="our-approach__intro__header">Our Approach</h3>
                    <p class="our-approach__intro__copy">Our proven approach and experienced team of creators allows us to deliver high-quality content that will exceed your expectations.</p>
                </div>

                <div class="our-approach__item__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/hands.svg" alt="Hands icon" class="our-approach__icons hands__icon">
                    <p class="our-approach__item__copy">We recruit talented creatives and arm them with world-class technology so they can create beautiful content that tells your brand story and connects with customers.</p>
                </div>

                <div class="our-approach__item__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/calendar.svg" alt="Calendar icon" class="our-approach__icons calendar__icon">
                    <p class="our-approach__item__copy">We co-produce video and photo content simultaneously so brands can make optimal use of locations, models, props, lighting and more. This workflow is ideal for developing cost-effective integrated campaigns and allows us to produce creative assets for multiple mediums.</p>
                </div>

                <div class="our-approach__item__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/cloud.svg" alt="Cloud computing icon" class="our-approach__icons cloud__icon">
                    <p class="our-approach__item__copy">We leverage cutting-edge production equipment, including cloud-based platforms that streamline the creative process and support real-time collaboration with clients and partners anywhere in the world.</p>
                </div>

                <div class="our-approach__item__container">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/communication.svg" alt="Communication icon" class="our-approach__icons communication__icon">
                    <p class="our-approach__item__copy">We magnify the effectiveness of our specialists by seamlessly connecting them to our clients while in production and post-production through these cloud-based, robust platforms. With the ever-changing landscape nowadays, we will continue to evolve as technology does and find faster ways to create content and reduce production costs.</p>
                </div>

            </div>
            
        </section>
        

        <!-- Founders -->
        <section class="founders">
            <div class="founders__container">
                <h3 class="founders__header">Founders</h3>

                <div class="founders__cards__container">

                    <!-- Francisco Manrique card -->
                    <div class="founders__cards">
                        <div class="founder__img">

                            <button class="founder__info__button" id="francisco-info-btn">See Bio</button>

                            <img src="<?php bloginfo('template_directory')?>/assets/images/francisco.jpg" alt="" class="francisco__img">
                        </div>
                        <h4 class="founder__name">Francisco Manrique</h4>
                        <div class="founders__copy__container">
                                                     
                            <div class="founders__personality__container" id="francisco-personality">
                                
                                <h5 class="founders__card__header">I consider myself:</h5>
                                <p class="founders__card__copy">Kind, full of expressive impulses, a thinker but also a doer.</p>
                                <h5 class="founders__card__header">Fun fact:</h5>
                                <p class="founders__card__copy">I'd rather buy food and chocolates than clothes.</p>
                                <h5 class="founders__card__header">Social media platforms I use most:</h5>
                                <div class="founders__social__media__logos">
                                    <img src="<?php bloginfo('template_directory')?>/assets/images/logo-instagram-kale.svg" alt="Instagram logotype" class="instagram__logo">
                                    <img src="<?php bloginfo('template_directory')?>/assets/images/logo-tik-tok-kale.svg" alt="TikTok logotype" class="tiktok__logo">
                                </div>
                                <h5 class="founders__card__header">Most accounts I follow:</h5>
                                <p class="founders__card__copy">My friends.</p>
                                <h5 class="founders__card__header">My aim for this agency:</h5>
                                <p class="founders__card__copy">Create meaningful work with inclusivity and empowerment to meet the challenges of this crazy planet called "Earth".</p>
                            </div>
                            <div class="founders__bio__container display-none" id="francisco-bio">

                                <h5 class="founders__bio__header">Bio</h5>

                                <p class="founders__bio__copy">Francisco has been in the advertising and marketing field for more than three decades. As an experienced entrepreneur in both Venezuela and the U.S. he involves himself deeply in every aspect of Urbana’s day-to-day operations. His intense attention to detail and understanding of what business-owners face has helped position the agency as an invaluable client partner.</p>

                                <p class="founders__bio__copy">Francisco takes care of his clients like family and almost becomes part of their team. By developing a comprehensive understanding of their product, customer and business goals, he bridges the gap between marketing and creative. Every day, he looks forward to helping clients bring ideas to life and solve business problems with strategic content solutions across web, video, copy and more.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Norah Lossada card -->
                    <div class="founders__cards">
                        <div class="founder__img">
                            <button class="founder__info__button" id="norah-info-btn">See Bio</button>
                            <img src="<?php bloginfo('template_directory')?>/assets/images/norah.jpg" alt="" class="norah__img">
                        </div>
                        <h4 class="founder__name">Norah Lossada</h4>
                        <div class="founders__copy__container">
                            <div class="founders__personality__container" id="norah-personality">                               
                                <h5 class="founders__card__header">I consider myself:</h5>
                                <p class="founders__card__copy">Passionate, hyperactive and positive.</p>
                                <h5 class="founders__card__header">Fun fact:</h5>
                                <p class="founders__card__copy">Cooking relaxes me more than my yoga.</p>
                                <h5 class="founders__card__header">Social media platforms I use most:</h5>
                                <div class="founders__social__media__logos">
                                    <img src="<?php bloginfo('template_directory')?>/assets/images/logo-instagram-kale.svg" alt="Instagram logotype" class="instagram__logo">
                                    <img src="<?php bloginfo('template_directory')?>/assets/images/logo-whatsapp-kale.svg" alt="WhatsApp logotype" class="whatsapp__logo">
                                </div>
                                <h5 class="founders__card__header">Most accounts I follow:</h5>
                                <p class="founders__card__copy">Food and health accounts.</p>
                                <h5 class="founders__card__header">My aim for this agency:</h5>
                                <p class="founders__card__copy">Deliver great results keeping my job creative and fun at the same time.</p>
                            </div>
                            <div class="founders__bio__container display-none" id="norah-bio">

                                <h5 class="founders__bio__header">Bio</h5>

                                <p class="founders__bio__copy">Norah is passionate about giving form to intangible ideas, starting with a client’s need and consolidating team expectations into creative executions that bring their ideas to life. She delivers innovative creative that makes our clients look and sound amazing, but more importantly, her work achieves real business goals while staying on budget.</p>

                                <p class="founders__bio__copy">Norah has been a production professional for decades, and she is deeply inspired by the complex, emotional, challenging process involved in turning abstract concepts into creative reality. She strives to create solid client and team relationships built on trust and mutual respect, so that together they can create something bigger than the sum of its parts.</p>

                            </div>
                        </div>
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
