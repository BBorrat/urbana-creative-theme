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

if(is_page("social-75-anniversary-recipe-videos")) {
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
				<button type="button" class="lightbox__back__button" id="lightbox-video-back-button">&#10094; Back</button>
			</div>
                        
            <div class="expertise__lightbox__video__slides__and__arrow__container">
                
                <a class="expertise__lightbox__next__prev__icon prev-video-btn">&#10094;</a>
                
                <div class="expertise__lightbox__video__slide__container">
                
                    <video class="expertise__lightbox__video__slides" controls>
                        <source class="expertise__lightbox__video__slides__img" src="<?php bloginfo('template_directory')?>/assets/videos/lightbox-540p-SC-_75-aniv-recipe-vid-1.mp4">
                    </video>
                    
                    <video class="expertise__lightbox__video__slides display-none"  controls>
                        <source class="expertise__lightbox__video__slides__img" src="<?php bloginfo('template_directory')?>/assets/videos/lightbox-540p-SC-_75-aniv-recipe-vid-2.mp4">
                    </video>
                    
                    <video class="expertise__lightbox__video__slides display-none" controls>
                        <source class="expertise__lightbox__video__slides__img" src="<?php bloginfo('template_directory')?>/assets/videos/lightbox-540p-SC-_75-aniv-recipe-vid-3.mp4">
                    </video>
                    
                    <video class="expertise__lightbox__video__slides display-none"  controls>
                        <source class="expertise__lightbox__video__slides__img" src="<?php bloginfo('template_directory')?>/assets/videos/lightbox-540p-SC-_75-aniv-recipe-vid-4.mp4">
                    </video>
                    
                    <video class="expertise__lightbox__video__slides display-none" controls>
                        <source class="expertise__lightbox__video__slides__img" src="<?php bloginfo('template_directory')?>/assets/videos/lightbox-540p-SC-_75-aniv-recipe-vid-5.mp4">
                    </video>
                    
                    <video class="expertise__lightbox__video__slides display-none" controls>
                        <source class="expertise__lightbox__video__slides__img" src="<?php bloginfo('template_directory')?>/assets/videos/lightbox-540p-SC-_75-aniv-recipe-vid-6.mp4">
                    </video>
                
                </div>
                
                <a class="expertise__lightbox__next__prev__icon next-video-btn">&#10095;</a>
            
            </div>
    
            <div class="expertise__lightbox__caption__container">
                <p class="expertise__lightbox__caption" id="expertise-lightbox-caption">75 Anniversary recipe videos</p>
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
            </ul>
    
        </div>
    
    </section>
</main>

<?php 

if(is_page("social-75-anniversary-recipe-videos")) {
    get_footer('invisible');
   }
   else {
    get_footer();
   }