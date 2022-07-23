<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
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
        <header class="header__desktop__transparent" id="indexHeader">  

            <div class="header__container__margin">

                <a href="https://urbanacreative.com/" class="header__logo-link"><img src="<?php bloginfo('template_directory')?>/assets/images/logo.svg" alt="Logo Urbana Creative" class="header__logo" id="header__logo"></a>
                    
                <div class="header__hamburger__menu" id="header-hamburger-menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

                <nav class="header__navbar" id="header__navbar">
                    <ul class="header__menu" id="header-menu-container" >
                        <!-- For active link add link--active class to li tags-->
                        <li class="header__menu__items"> <a href=/" id="header-menu-item-link" class="header__menu__item__link link--active">Home</a></li>
                        <li class="header__menu__items"> <a href="about-us" id="header-menu-item-link" class="header__menu__item__link">About Us</a></li>
                        <li class="header__menu__items"> <a href="expertise-video-and-motion-graphics" id="header-menu-item-link" class="header__menu__item__link">Expertise</a></li>
                        <li class="header__menu__items"> <a href="featured-project" id="header-menu-item-link" class="header__menu__item__link">Featured Projects</a></li>
                        <li class="header__menu__items"> <a href="contact-us" id="header-menu-item-link" class="header__menu__item__link">Contact Us</a></li>
                        <li class="header__menu__items"> <a href="join-us" id="header-menu-item-link" class="header__menu__item__link">Join Us</a></li>
                                    
                    </ul>
                </nav> 
            </div> 

        </header>
    </main>
    

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<!-- Hero banner -->
        <section class="hero">

            <div class="hero__video__container" id="hero-video">
                <!-- <div class="hero__gradient" id="hero__gradient"></div> -->
                <video autoplay muted loop  class="hero__video">
                    <source src="<?php bloginfo('template_directory')?>/assets/videos/hero-video.mp4" type="video/mp4">
                </video>
            </div>

            <div class="hero__elements__container" id="hero-copy">
                
                <div class="hero__elements__position">
                    <div class="hero__copy__container">
                        <p class="hero__copy">Urbana Creative is an award-winning <strong>CONTENT CREATION</strong> studio in Miami that blends the attentive, agile service of a <strong>BOUTIQUE CREATIVE AGENCY</strong> with the cutting-edge media expertise and rapid workflow of a <strong>PRODUCTION HOUSE</strong></p>                    
                    </div>  

                    <div class="hero__cta__container">
                        <!-- <a href="#" class="hero__btn">                          
                            <p class="hero__btn__cta">Watch our reel</p>
                        </a> -->
                       
                        <div class="hero__scroll__down__container">
                            <p class="hero__scroll__down__copy">Scroll down</p> 
                            <div class="hero__scroll__down__arrow">
                                <a class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules" data-ca3_icon=""></a>
                            </div>
                        </div>
                    </div>
                               
                </div>
            </div>       
                
        </section>

        <!-- Promise banner -->
        <section class="promise-banner__canvas">
            <div class="promise-banner">
                <div class="promise-banner__container">
                    <h3 class="promise-banner__header">REAL RESULTS,<br>LESS RED TAPE</h3>
                    <p class="promise-banner__copy">Marketing directors and brand managers are tired of overloaded agency personnel. They don’t want to cut through layers of slow-moving people just to be heard. That’s why our team stays lean and responsive. We don’t just get to work. Urbana gets it done.</p>
                    <h4 class="promise-banner__sub-header">Our Services</h4>

                    <div class="promise-banner__arrow__container">
                        <div class="promise-banner__arrow"></div>
                    </div>

                    <img src="<?php bloginfo('template_directory')?>/assets/images/massive-results-bkg.png" alt="" class="promise-banner__img">
                    
                </div> 
            </div>
            
        </section>

        <!-- Service grid -->
        <section class="services__canvas">
           
            <div class="service--grid--container">
               
                <div class="service--grid--image service__first-img">
                </div>               
                <div class="service--grid--image service__second-img">
                </div>
                <div class="service--grid--image service__third-img">
                </div>
                <div class="service--grid--image service__fourth-img">
                </div>
                <div class="service--grid--image service__fifth-img">
                </div>
                <div class="service--grid--image service__sixth-img">
                </div>
                
                <a href="expertise-video-and-motion-graphics" class="service--grid--link video" id="service-grid-button-video">                    
                    <div class="service__grid__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/clapperboard.svg" alt="Clapperboard icon" class="service__grid__video__icon">
                        <h2 class="service__name">Video<br>+<br>Motion Graphics</h2>
                    </div>
                    <div class="service__grid__inner-frame"></div>    
                </a>
                <a href="expertise-professional-photography" class="service--grid--link photography" id="service-grid-button-photography">
                    <div class="service__grid__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/camera.svg" alt="Photographic camera icon" class="service__grid__photography__icon">
                        <h2 class="service__name">Professional<br>Photography</h2>
                    </div>
                    <div class="service__grid__inner-frame"></div>              
                </a>
                <a href="expertise-social-content" class="service--grid--link social" id="service-grid-button-social">
                    <div class="service__grid__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/like.svg" alt="Social like icon" class="service__grid__social__icon">
                        <h2 class="service__name">Social Content</h2>
                    </div>
                    <div class="service__grid__inner-frame"></div>              
                </a>
                <a href="expertise-creative-services" class="service--grid--link creative" id="service-grid-button-creative">
                    <div class="service__grid__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/creative.svg" alt="Creative icon" class="service__grid__creative__icon">
                        <h2 class="service__name">Creative Services</h2>
                    </div>
                    <div class="service__grid__inner-frame"></div>         
                </a>
                <a href="expertise-video-and-motion-graphics" class="service--grid--link post" id="service-grid-button-post">
                    <div class="service__grid__container">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/postproduction.svg" alt="Postproduction icon" class="service__grid__postproduction__icon">
                        <h2 class="service__name">Post-Production<br>&<br>Photo Retouching<br>Services</h2>
                    </div>
                    <div class="service__grid__inner-frame"></div>           
                </a>
                <!-- <div class="service--grid--link post"> 
                    <a href="#">
                        <img src="img/postproduction.svg" alt="Postproduction icon" class="service__grid__postproduction__icon">
                        <h2 class="service__name">Post-Production<br>&<br>Photo Retouching<br>Services</h2>
                    </a>
                    <div class="service__grid__inner-frame"></div>             
                </div> -->
            </div>
            
        </section>

        <!-- Featured Projects -->
        <section class="featured-projects">
            <div class="featured-projects__carousell">

                  <!-- Next and previous buttons -->
                <div class="arrows__container arrow__prev__container" id="arrow-prev">
                    <a class="featured-projects__carousell__arrow prev">&#10094;</a>
                </div>
                <div class="arrows__container arrow__next__container" id="arrow-next">
                    <a class="featured-projects__carousell__arrow next">&#10095;</a>
                </div>
                
                <div class="featured-projects__img__container" id="featured-project-img-container">
                    <div class="featured-project__item__container">
                        <div class="featured-projects__name-button__container">
                            <h3 class="featured-projects__name">Cocina a la reversible</h3>
                            <a href="<?php get_template_directory_uri()?>/dev/urbana/featured-projects#cocina-a-la-reversible" class="featured-projects__btn"><p>See more</p></a>
                        </div>

                        <!-- Desktop image size: 1366 x 704 | Mobile image size: 750 x 1210 -->
                        <img src="<?php bloginfo('template_directory')?>/assets/images/fw-blenders-desktop.jpg" alt="" class="featured-projects__image">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/fw-blenders-mobile.jpg" alt="" class="featured-projects__image--mobile">
                    </div>
                    <div class="featured-project__item__container">
                        <div class="featured-projects__name-button__container">
                            <h3 class="featured-projects__name">Coravin - Black Friday</h3>
                            <a href="<?php get_template_directory_uri()?>/dev/urbana/featured-projects#coravin-black-friday" class="featured-projects__btn">
                                <p class="featured-projects__btn__cta">See more</p>
                            </a>
                            
                        </div>

                        <!-- Desktop image size: 1366 x 704 | Mobile image size: 750 x 1210 -->
                        <img src="<?php bloginfo('template_directory')?>/assets/images/fw-coravin-desktop.jpg" alt="" class="featured-projects__image">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/fw-coravin-mobile.jpg" alt="" class="featured-projects__image--mobile">
                    </div>
                    <div class="featured-project__item__container">
                        <div class="featured-projects__name-button__container">
                            <h3 class="featured-projects__name">Oster - PrimaLatte</h3>
                            <a href="<?php get_template_directory_uri()?>/dev/urbana/featured-projects#oster-primalatte" class="featured-projects__btn">
                                <p class="featured-projects__btn__cta">See more</p>
                            </a>
                            
                        </div>

                        <!-- Desktop image size: 1366 x 704 | Mobile image size: 750 x 1210 -->
                        <img src="<?php bloginfo('template_directory')?>/assets/images/fw-primalatte-desktop.jpg" alt="" class="featured-projects__image">
                        <img src="<?php bloginfo('template_directory')?>/assets/images/fw-primalatte-mobile.jpg" alt="" class="featured-projects__image--mobile">
                    </div>
                </div>

                <!-- <ul class="featured-projects__points--container">
                    <li class="featured-projects__point featured-projects__point--active" id="featured-project-dot"></li>
                    <li class="featured-projects__point" id="featured-project-dot"></li>
                    <li class="featured-projects__point" id="featured-project-dot"></li>
                </ul> -->
            </div>
        </section>

        <!-- Brands banner -->
        <section class="brands-banner">
            
            <div class="brands--banner--text--container">
                <h3 class="brands--banner--header">Built on Partnership</h3>
                <p class="brands--banner-paragraph">Clients stay with Urbana for years because we become an extension of their team. From production to post, copy to design, everything we touch has one goal: To help our clients succeed. That’s why they love us and stick around.</p>
                <p class="brands--banner-paragraph">Here are some of the brands we've helped.</p>
            </div>
            <div class="brands-background">              
                <img src="<?php bloginfo('template_directory')?>/assets/images/brands.svg" alt="Brands" class="brands__img">       
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonial">
            <div class="testimonial__text__container">
                <h3 class="testimonial__header">FEEL THE LOVE</h3>
                <p class="testimonial__copy">We've been rocking clients’ worlds for over 20 years and would love to knock your socks off, too. But don't take our word for it. Listen to the glowing feedback we’ve received from such high-profile clients as Coravin, Oster, Princess House and more.</p>
            </div>

            <div class="arrow__container">
                <div class="arrow"></div>
            </div>
            
            <div class="testimonial__container">
                <div class="testimonial__item">

                    <img src="<?php bloginfo('template_directory')?>/assets/images/logo-coravin.svg" alt="Coravin logotype" class="testimonial__coravin-logo">                    
                    <div class="testimonial__quotation__mark">“</div>                   
                    <div class="testimonial__item__container">
                        <p class="testimonial__testimonial">We partnered with Urbana Creative to help us bring the content strategy of our brand to the next level and amplify our social voice. They took the time to analyze our baseline and came in with a solid proposal, identifying the elements that worked and proposing a plan to amplify them. They also revamped our social look and feel to properly reflect the character of our brand, and helped us implement engagement tactics to increase our relevance. With Urbana, we saw an increase of 15% in the community size just in the first 3 months and the trend continued. Our partnership with Urbana definitely has brought Coravin to a new, higher level and elevated our brand’s image in the social sphere.</p>
                        <p class="testionial__name">Yvethe Tyszka</p>
                        <p class="testimonial__job-title">VP Marketing Americas</p>
                        <div class="testimonial__line"></div>
                    </div>                   
                </div>
                <div class="testimonial__item">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/logo-newell.svg" alt="Newell Brands logotype" class="testimonial__newell-logo">
                    <div class="testimonial__quotation__mark">“</div>
                    <div class="testimonial__item__container">
                        <p class="testimonial__testimonial">Our experience during our 10+ years with Urbana has been very positive. They get involved in every step of the process from ideation to production. Their commitment and advocacy for the brands are extremely high. I love the fact they are a boutique agency with big ideas and always up to date with the consumers' trends. Their experience with the Latin America market is fantastic, they know very well the consumer, the media, and the countries’ culture.</p>
                        <p class="testionial__name">Mari Carrasquillo</p>
                        <p class="testimonial__job-title">Senior Marketing Director</p>
                        <div class="testimonial__line"></div>
                    </div>
                </div>
                <div class="testimonial__item">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/logo-ph.svg" alt="Princess House logotype" class="testimonial__ph-logo">
                    <div class="testimonial__quotation__mark">“</div>
                    <div class="testimonial__item__container">
                        <p class="testimonial__testimonial">On behalf on the Princess House Creative and Branding team, we are exited to have the opportunity to share our experience developing video assets with Urbana. We changed them with some very successful product introduction videos for us in 2016, we asked them to create the most important marketing tool for launch of a our Vida Sana Water Filtration System in two languages. This was a new and unfamiliar category for us sales force and our customers with a clear understanding of the key aspects of the product. Urbana not only delivered an excellent final product, but did so on budget and on time. We werw all extremelu impressed by their level of commitment, professionalism and the final product.</p>
                        <p class="testionial__name">Victoria Vilbrandt</p>
                        <p class="testimonial__job-title">VP Marketing, Strategy<br> and Solutions</p>
                        <div class="testimonial__line"></div>
                    </div>
                </div>
            </div>
        </section>

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

            </div>

        </section>  

	</main><!-- #main -->
</div><!-- #primary -->

<script>
    "use strict"
    
    const slider = document.querySelector("#featured-project-img-container");
    let sliderSection = document.querySelectorAll(".featured-project__item__container");
    let sliderSectionLast = sliderSection[sliderSection.length -1];
    const btnLeft = document.querySelector("#arrow-prev");
    const btnRight = document.querySelector("#arrow-next");

    slider.insertAdjacentElement("afterbegin", sliderSectionLast);

    function next() {
        let sliderSectionFirst = document.querySelectorAll(".featured-project__item__container")[0];
        slider.style.marginleft = "-200%";
        slider.style.transition = "all 0.5s";
        setTimeout(() => {
            slider.style.transition = "none";
            slider.insertAdjacentElement("beforeend", sliderSectionFirst);
            slider.style.marginleft = "-100%";
        }, 500);
    };

    function prev() {
        let sliderSection = document.querySelectorAll(".featured-project__item__container");
        let sliderSectionLast = sliderSection[sliderSection.length -1];
        slider.style.marginleft = "0%";
        slider.style.transition = "all 0.5s";
        setTimeout(() => {
            slider.style.transition = "none";
            slider.insertAdjacentElement("afterbegin", sliderSectionLast);
            slider.style.marginleft = "-100%";
        }, 500);
    };

    btnRight.addEventListener("click", function() {
        next();
    });

    btnLeft.addEventListener("click", function() {
        prev();
    });

    setInterval(() => {
        next()
    }, 6000);

</script>

<?php
get_footer();