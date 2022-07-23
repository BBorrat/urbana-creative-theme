<?php
/**
 * The template for displaying all category $slug
 *
 * This is the template that displays all category $slug.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Urbana_Creative_Theme
 */
?>

<?php 

if(is_page("creative-sistema-de-accesorios-oster")) {
    get_header('invisible');
   }
   else {
    get_header();
   }
    wp_head();

?>

<main>

    <section class="expertise__lightbox__container" id="expertise-lightbox">

        <div class="expertise__lightbox__content">
    
            <!-- <span class="expertise__lightbox__close-icon cursor">&times;</span> -->
            <div class="lightbox__back__button__container">
				<button type="button" class="lightbox__back__button" id="lightbox-back-button">&#10094; Back</button>
			</div>
                            
            <div class="expertise__lightbox__slides__and__arrow__container expertise__lightbox__video__slide__container">
                
                <a class="expertise__lightbox__next__prev__icon prev-btn">&#10094;</a>

                <div class="expertise__lightbox__slide__container expertise__lightbox__video__slide__container">

                    <div class="expertise__lightbox__slides">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-sist-accesorios-aviso.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-sist-accesorios-brochure.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-sist-accesorios-muebles-01.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-sist-accesorios-muebles-02.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-sist-accesorios-muebles-de exhibicion.jpg">
                    </div>
                    
                    <video class="expertise__lightbox__slides expertise__lightbox__video__slides display-none" controls>
                        <source class="expertise__lightbox__video__slides__img" src="<?php bloginfo('template_directory')?>/assets/videos/lightbox-creat-serv-sist-accesorios.mp4">
                    </video>
                
                </div>

                <a class="expertise__lightbox__next__prev__icon next-btn">&#10095;</a>

            </div>
                    
            <div class="expertise__lightbox__caption__container">
                <p class="expertise__lightbox__caption" id="expertise-lightbox-caption">Sistema de accesorios Oster</p>
                <!-- <p class="expertise__lightbox__counter" id="expertise-lightbox-counter">1/4</p> -->
            </div>

            <ul class="expertise__lightbox__dots__container" id="expertise-lightbox-dots-container">
                <li class="expertise__lightbox__dots expertise__lightbox__dots__active"></li>
                <li class="expertise__lightbox__dots"></li>
                <li class="expertise__lightbox__dots"></li>
                <li class="expertise__lightbox__dots"></li>
                <li class="expertise__lightbox__dots"></li>
                <li class="expertise__lightbox__dots"></li>
            </ul>
    
        </div>
    
    </section>

</main>

<?php

if(is_page("creative-sistema-de-accesorios-oster")) {
    get_footer('invisible');
   }
   else {
    get_footer();
   }