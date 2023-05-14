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
                        <li class="header__menu__items"> <a href="https://urbanacreative.com" id="header-menu-item-link" class="header__menu__item__link">Home</a></li>
                        <li class="header__menu__items"> <a href="about-us" id="header-menu-item-link" class="header__menu__item__link">About Us</a></li>
                        <li class="header__menu__items"> <a href="expertise" id="header-menu-item-link" class="header__menu__item__link link--active">Expertise</a></li>
                        <li class="header__menu__items"> <a href="featured-project" id="header-menu-item-link" class="header__menu__item__link">Featured Projects</a></li>
                        <li class="header__menu__items"> <a href="contact-us" id="header-menu-item-link" class="header__menu__item__link">Contact Us</a></li>
                        <li class="header__menu__items"> <a href="join-us" id="header-menu-item-link" class="header__menu__item__link">Join Us</a></li>

                       
                                     
                    </ul>
                </nav> 
            </div> 

        </header>
    </main>

	<main id="primary" class="site-main">

        <!-- Filter carousell -->
        <section class="expertise">

            <div class="expertise__filter__container__desktop">
                <ul class="expertise__filter__items__container__desktop" id="expertice-filter-item-container">
                    <li class="expertise__filter__items__list"><a href="expertise-video-and-motion-graphics" class="expertise__filter__items expertise__expertise" id="video-motion-graphics-menu" data-target="video-motion-graphics">Video + Motion Graphics</a></li>
                    <li class="expertise__filter__items__list"><a href="expertise-professional-photography" class="expertise__filter__items expertise__expertise" id="professional-photography-menu" data-target="professional-photography">Professional Photography</a></li>
                    <li class="expertise__filter__items__list"><a href="expertise-social-content" class="expertise__filter__items expertise__expertise expertise__filter__item__active" id="social-content-menu" data-target="social-content">Social Content</a></li>
                    <li class="expertise__filter__items__list"><a href="expertise-creative-services" class="expertise__filter__items expertise__expertise" id="creative-services-menu" data-target="creative-services">Creative Services</a></li>
                    <!-- <h2 class="expertise__filter__items expertise__expertise" id="post-production-menu" data-target="post-production">Post-Production Services</h2> -->
                    <!-- <h2 class="expertise__filter__items expertise__expertise" id="photo-retouching-menu" data-target="photo-retouching">Photo Retouching Services</h2> -->
                </ul>
                
                <div class="expertise__line"></div>

                <div class="expertise__description__container__desktop" id="expertise__description__container__desktop">

                    <div class="expertise__description__item__container__desktop__disabled" data-description="video-motion-graphics">
                        <h2 class="expertise__description__header__desktop">Video +<br> Motion Graphics</h2>
                        <div class="expertise__description__copy__container__desktop">
                            <p class="expertise__description__copy__desktop">Today, you can reach your target on any number of screens, in any number of settings: computers, conference rooms, subways, airplanes, TVs, dashboards, billboards, cell phones, gas pumps, cash registers, taxi cabs, watches, even home appliances!</p>
                            <p class="expertise__description__copy__desktop">We’ll hand pick your team of talent based on your brief, your budget, and how your video content will best serve you. Some brands need digital display advertising for their online marketing, some need short-form branded content, some need long-form branded content, some need corporate videos, some need high-quality shareable videos loaded with viral potential, some need incredible motion graphics with messages and typography that grab the viewer and don’t let go, and some need all of the above.  Our directors and videographers are great directors and videographers, regardless of the era. The same goes for our art directors, our producers, our writers, our designers, and on and on. They bring a timeless sensitivity of story and picture and craft.</p>
                        </div>
                    </div>

                    <div class="expertise__description__item__container__desktop__disabled" data-description="professional-photography">
                        <h2 class="expertise__description__header__desktop">Professional Photography</h2>
                        <div class="expertise__description__copy__container__desktop">
                            <p class="expertise__description__copy__desktop">Our talented creative directors, photographers, stylists, and designers work as one to compose both still and moving images that express powerful ideas and tell compelling, visual stories. Look no further than these creative people when your brand is looking for:</p>
                            <ul class="expertise__description__copy__desktop">
                                <li>- Men's editorial</li>
                                <li>- Women's editorial</li>
                                <li>- Design</li>
                                <li>- Advertising</li>
                                <li>- Video</li>
                                <li>- Professional portraiture</li>
                                <li>- Industrial/commercial photography</li>
                                <li>- Food photography</li>
                                <li>- Architectural photography</li>
                                <li>- Real estate photography</li>
                                <li>- Product photography</li>
                                <li>- Luxury photography</li>
                            </ul>
                        </div>
                    </div>

                    <div class="expertise__description__item__container__desktop" data-description="social-content">
                        <h2 class="expertise__description__header__desktop">Social Content</h2>
                        <div class="expertise__description__copy__container__desktop">
                            <p class="expertise__description__copy__desktop">The Urbana team can help you create social media content for a wide variety of budgets. Our team of social media content creators makes it easy to reach your target audience with compelling creative, and we have every capability needed to leverage social media to achieve marketing, sales and growth goals.</p>
                            <p class="expertise__description__copy__desktop">Our passion for creating amazing content, our commitment to your success and our seamless fusion of art and technology set us apart. If you want one team to make and distribute your content with the same level of talent and commitment, look no further.</p>
                            <p class="expertise__description__copy__desktop">We can create brand social media pages on every platform and develop every type of paid and organic social content. Our team handles video, images, graphic design, copywriting, and campaign management and reporting to optimize your efforts and make better use of your marketing dollars.</p>
                        </div>
                    </div>
                    
                    <div class="expertise__description__item__container__desktop__disabled" data-description="creative-services">
                        <h2 class="expertise__description__header__desktop">Creative Services</h2>
                        <div class="expertise__description__copy__container__desktop">
                            <p class="expertise__description__copy__desktop">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus tenetur pariatur debitis aut optio minima architecto dolorum veniam eveniet commodi perferendis, accusantium dolorem, suscipit nemo. Nemo illo, aspernatur quia nam accusamus alias, explicabo consequatur iste molestias adipisci quasi quidem illum praesentium accusantium veritatis vel possimus perspiciatis doloribus doloremque veniam deserunt.</p>
                        </div>
                    </div>
                   
                    <div class="expertise__description__item__container__desktop__disabled" data-description="post-production">
                        <h2 class="expertise__description__header__desktop">Post-Production Services</h2>
                        <div class="expertise__description__copy__container__desktop">
                            <p class="expertise__description__copy__desktop">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae porro at ut consectetur officia magnam nobis assumenda, inventore eius optio, eligendi sint libero non. Itaque nulla debitis fugit dicta, dolor ex voluptas illo nemo commodi saepe sint quis maiores, tenetur tempora! Enim cumque possimus vero, corrupti autem fuga modi quas.</p>
                        </div>
                    </div>

                    <!-- <div class="expertise__description__item__container__desktop__disabled" data-description="photo-retouching">
                        <h2 class="expertise__description__header__desktop">Photo Retouching Services</h2>
                        <div class="expertise__description__copy__container__desktop">
                            <p class="expertise__description__copy__desktop">Our post-production services for photography include, but aren’t limited to:</p>
                            <ul>
                                <li>Retouching to create the most alluring shots</li>
                                <li>Editing to highlight and sharpen creative details</li>
                                <li>Localization – adjusting images to best fit local markets’ culture and tastes</li>
                                <li>Color-correction – presenting everything in its best light</li>
                                <li>Image compositing – maximizing creativity and appeal by mixing multiple elements</li>
                                <li>Beauty retouching – making background edits and enhancements to skin, makeup, etc.</li>
                                <li>Shadow and reflection – getting rid of glare and adding highlights, shadows, and reflections in the right places</li>
                                <li>360-degree product views – capturing every angle of your product in detail</li>
                                <li>Apparel retouching – removing creases and wrinkles, improve draping, and making product enhancements</li>
                            </ul>
                        </div>
                    </div> -->
                    
                </div>
            </div>

            <div class="expertise__filter__container__mobile">
                <div class="expertise__filter__items__container__mobile" id="expertice-filter-item-container">
                    <div class="expertise__filter__items__header__mobile__container">
                        <h4 class="expertise__filter__items__header__mobile">View expertise areas</h4>
                        <div class="expertise__filter__items__header__mobile__arrow__down" id="expertise-menu-arrow"></div>
                    </div>
                           
                    <ul class="expertise__filter__items__mobile__inner__container__close" id="expertise-mobile-filter-menu-items">
                        <li class="expertise__filter__items__list__mobile" data-target="video-motion-graphics"><a href="expertise-video-and-motion-graphics" class="expertise__filter__items__mobile"> Video + Motion Graphics</a></li>
                        <li class="expertise__filter__items__list__mobile" data-target="professional-photography"><a href="expertise-professional-photography" class="expertise__filter__items__mobile">Professional Photography</a></li>
                        <li class="expertise__filter__items__list__mobile" data-target="social-content"><a href="expertise-social-content" class="expertise__filter__items__mobile expertise__filter__items__mobile__active">Social Content</a></li>
                        <li class="expertise__filter__items__list__mobile" data-target="creative-services"><a href="expertise-creative-services" class="expertise__filter__items__mobile">Creative Services</a></li>
                        <!-- <h2 class="expertise__filter__items__mobile" data-target="post-production">Post-Production Services</h2> -->
                        <!-- <h2 class="expertise__filter__items__mobile">Photo Retouching Services</h2> -->
                    </ul>
                    
                </div>
            </div>
            
            <div class="expertise__carousel" id="expertise-carousel-cover">

                <div class="expertise__description__container__mobile" id="expertise-description-container-mobile">

                    <div class="expertise__description__item__container__mobile__disable" data-description="video-motion-graphics">
                        <h2 class="expertise__description__header__mobile">Video +<br> Motion Graphics</h2>
                        <div class="expertise__description__copy__container__mobile">
                            <p class="expertise__description__copy__mobile">Today, you can reach your target on any number of screens, in any number of settings: computers, conference rooms, subways, airplanes, TVs, dashboards, billboards, cell phones, gas pumps, cash registers, taxi cabs, watches, even home appliances!</p>
                            <p class="expertise__description__copy__mobile">We’ll hand pick your team of talent based on your brief, your budget, and how your video content will best serve you. Some brands need digital display advertising for their online marketing, some need short-form branded content, some need long-form branded content, some need corporate videos, some need high-quality shareable videos loaded with viral potential, some need incredible motion graphics with messages and typography that grab the viewer and don’t let go, and some need all of the above.  Our directors and videographers are great directors and videographers, regardless of the era. The same goes for our art directors, our producers, our writers, our designers, and on and on. They bring a timeless sensitivity of story and picture and craft.</p>
                        </div>
                    </div>

                    <div class="expertise__description__item__container__mobile__disable" data-description="professional-photography">
                        <h2 class="expertise__description__header__mobile">Professional Photography</h2>
                        <div class="expertise__description__copy__container__mobile">
                            <p class="expertise__description__copy__mobile">Our talented creative directors, photographers, stylists, and designers work as one to compose both still and moving images that express powerful ideas and tell compelling, visual stories. Look no further than these creative people when your brand is looking for:</p>
                            <ul class="expertise__description__copy__mobile">
                                <li>Men’s editorial</li>
                                <li>Women’s editorial</li>
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
                    </div>

                    <div class="expertise__description__item__container__mobile" data-description="social-content" >
                        <h2 class="expertise__description__header__mobile">Social Content</h2>
                        <div class="expertise__description__copy__container__mobile">
                            <p class="expertise__description__copy__mobile">The Urbana team can help you create social media content for a wide variety of budgets. Our team of social media content creators makes it easy to reach your target audience with compelling creative, and we have every capability needed to leverage social media to achieve marketing, sales and growth goals.</p>
                            <p class="expertise__description__copy__mobile">Our passion for creating amazing content, our commitment to your success and our seamless fusion of art and technology set us apart. If you want one team to make and distribute your content with the same level of talent and commitment, look no further.</p>
                            <p class="expertise__description__copy__mobile">We can create brand social media pages on every platform and develop every type of paid and organic social content. Our team handles video, images, graphic design, copywriting, and campaign management and reporting to optimize your efforts and make better use of your marketing dollars.</p>
                        </div>
                    </div>
                    
                    <div class="expertise__description__item__container__mobile__disable" data-description="creative-services">
                        <h2 class="expertise__description__header__mobile">Creative Services</h2>
                        <div class="expertise__description__copy__container__mobile">
                            <p class="expertise__description__copy__mobile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus tenetur pariatur debitis aut optio minima architecto dolorum veniam eveniet commodi perferendis, accusantium dolorem, suscipit nemo. Nemo illo, aspernatur quia nam accusamus alias, explicabo consequatur iste molestias adipisci quasi quidem illum praesentium accusantium veritatis vel possimus perspiciatis doloribus doloremque veniam deserunt.</p>
                        </div>
                    </div>
                   
                    <div class="expertise__description__item__container__mobile__disable" data-description="post-production">
                        <h2 class="expertise__description__header__mobile">Post-Production Services</h2>
                        <div class="expertise__description__copy__container__mobile">
                            <p class="expertise__description__copy__mobile">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae porro at ut consectetur officia magnam nobis assumenda, inventore eius optio, eligendi sint libero non. Itaque nulla debitis fugit dicta, dolor ex voluptas illo nemo commodi saepe sint quis maiores, tenetur tempora! Enim cumque possimus vero, corrupti autem fuga modi quas.</p>
                        </div>
                    </div>

                    <!-- <div class="expertise__description__item__container__mobile" style="display: none;">
                        <h2 class="expertise__description__header__mobile">Photo Retouching Services</h2>
                        <div class="expertise__description__copy__container__mobile">
                            <p class="expertise__description__copy__desktop">Our post-production services for photography include, but aren’t limited to:</p>
                            <ul>
                                <li>Retouching to create the most alluring shots</li>
                                <li>Editing to highlight and sharpen creative details</li>
                                <li>Localization – adjusting images to best fit local markets’ culture and tastes</li>
                                <li>Color-correction – presenting everything in its best light</li>
                                <li>Image compositing – maximizing creativity and appeal by mixing multiple elements</li>
                                <li>Beauty retouching – making background edits and enhancements to skin, makeup, etc.</li>
                                <li>Shadow and reflection – getting rid of glare and adding highlights, shadows, and reflections in the right places</li>
                                <li>360-degree product views – capturing every angle of your product in detail</li>
                                <li>Apparel retouching – removing creases and wrinkles, improve draping, and making product enhancements</li>
                            </ul>
                        </div>
                    </div> -->
                    
                </div>

                <!-- Video + Motion Graphics images -->
                <a href="video-oster-blender-with-texture-select-settings" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="video-motion-graphics">    
                    <div class="expertise__project-name-button__container">
                            <h3 class="expertise__project-name">Oster<br>Blender with Texture Select Settings</h3>
                            <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images//ex-dk-Video-Oster-Blender-with-Texture-Select-Settings.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Video-Oster-Blender-with-Texture-Select-Settings.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="video-coravin-smart-clamps" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="video-motion-graphics">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Coravin<br> Smart Clamps</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-Video-Coravin-Smart-Clamps.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Video-Coravin-Smart-Clamps.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="video-oster-kitchen-products" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="video-motion-graphics">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Oster<br>Kitchen Products</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-Video-Oste-Kitchen-Products.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Video-Oste-Kitchen-Products.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="video-calphalon-activesense-blender" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="video-motion-graphics">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Calphalon<br>ActiveSense Blender</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-Video-Calphalon-ActiveSense-Blender.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Video-Calphalon-ActiveSense-Blender.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="video-foodsaver" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="video-motion-graphics">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">FoodSaver</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-Video-FoodSaver.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Video-FoodSaver.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="video-nuyu-health-o-meter" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="video-motion-graphics">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Nuyu<br>Health o Meter</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-Video-Nuyu-Health-o-Meter.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Video-Nuyu-Health-o-Meter.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>

                <!-- Professional Photography images -->
                <a href="professional-photography-drinks" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="professional-photography">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Drinks</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-photo-Drinks.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-photo-Drinks.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="professional-photography-food" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="professional-photography">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Food</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-photo-Food.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-photo-Food.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="professional-photography-lifestyle" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="professional-photography">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">LifeStyle</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-photo-LifeStyle.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-photo-LifeStyle.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="professional-photography-product" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="professional-photography">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Product</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-photo-Product.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-photo-Product.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>

                <!-- Social Content images -->
                <a href="social-75-anniversary-recipe-videos" target="_top" class="expertise__carousel__item expertice__carusel__cover" data-item="social-content">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">75 Anniversary<br>Recipes Videos</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-Social-75-Anniversary-Recipes-Videos.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Social-75-Anniversary-Recipes-Videos.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="social-home-made-recipes" target="_top" class="expertise__carousel__item expertice__carusel__cover" data-item="social-content">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Home made Recipes</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-Social-Home-made-recipes.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Social-Home-made-recipes.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="social-paralax" target="_top" class="expertise__carousel__item expertice__carusel__cover" data-item="social-content">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Parlax</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-Social-Paralax.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Social-Paralax.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="social-why-oster" target="_top" class="expertise__carousel__item expertice__carusel__cover" data-item="social-content">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Why Oster</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-Social-Why-Oster-Videos.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-Social-Why-Oster-Videos.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                
                <!-- Creative Services images -->
                <a href=creative-el-escuadron-del-planchado" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="creative-services">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">El escuadrón del planchado</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-creative-escuadron-planchado.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-creative-escuadron-planchado.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="creative-primalatte-campaign" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="creative-services">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">PrimaLatte Campaign</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-creative-PrimaLatte-Campaign.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-creative-PrimaLatte-Campaign.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="creative-sistema-de-accesorios-oster" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="creative-services">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Sistema de accesorios Oster</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-creative-Sistema-de-accesorios-Oster.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-creative-Sistema-de-accesorios-Oster.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>
                <a href="creative-xpert-series" target="_top" class="expertise__carousel__item__disabled expertice__carusel__cover" data-item="creative-services">
                    <div class="expertise__project-name-button__container">
                        <h3 class="expertise__project-name">Xpert series</h3>
                        <button class="expertise__btn">See more</button>
                    </div>
                    <div class="expertise__under-copy-darken"></div>
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-dk-creative-Xpert-series.jpg" alt="" class="expertise__carousel__img__desktop">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/ex-mb-creative-Xpert-series.jpg" alt="" class="expertise__carousel__img__mobile">                    
                </a>               

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
    </script>
    
<?php 

if(is_page("expertise-social-content")) {
    get_footer('invisible');
   }
   else {
    get_footer();
   }