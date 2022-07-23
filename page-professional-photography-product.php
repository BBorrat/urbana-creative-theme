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

if(is_page("professional-photography-product")) {
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
                           
            <div class="expertise__lightbox__slides__and__arrow__container">

                <a class="expertise__lightbox__next__prev__icon prev-btn">&#10094;</a>

                <div class="expertise__lightbox__slide__container">
                    <div class="expertise__lightbox__slides">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-01.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-02.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-03.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-04.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-05.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-06.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-07.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-08.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-09.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-product-10.jpg">
                    </div>
                </div>

                <a class="expertise__lightbox__next__prev__icon next-btn">&#10095;</a>

            </div>
            
            <div class="expertise__lightbox__caption__container">
                <p class="expertise__lightbox__caption" id="expertise-lightbox-caption">Product</p>
                <!-- <p class="expertise__lightbox__counter" id="expertise-lightbox-counter">1/4</p> -->
            </div>
    
            <!-- <div class="expertise__lightbox__preview__container">

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-01-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-02-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-03-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-04-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-05-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-06-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-07-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-08-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-09-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-10-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-11-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>

                <div class="expertise__lightbox__preview__img__container">
                    <img class="expertise__lightbox__preview__img cursor" src="img/lightbox-drinks-12-preview.jpg" onclick="currentSlide(1)" alt="Nature and sunrise">
                </div>
                
            </div>	 -->

            <ul class="expertise__lightbox__dots__container" id="expertise-lightbox-dots-container">
                <li class="expertise__lightbox__dots expertise__lightbox__dots__active"></li>
                <li class="expertise__lightbox__dots"></li>
                <li class="expertise__lightbox__dots"></li>
                <li class="expertise__lightbox__dots"></li>
                <li class="expertise__lightbox__dots"></li>
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

if(is_page("professional-photography-product")) {
    get_footer('invisible');
   }
   else {
    get_footer();
   }