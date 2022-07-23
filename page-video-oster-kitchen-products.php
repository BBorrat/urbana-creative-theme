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

if(is_page("video-oster-kitchen-products")) {
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
                
                <!-- <a class="expertise__lightbox__next__prev__icon">&#10094;</a> -->
                
                <div class="expertise__lightbox__video__slide__container">
                    <video class="expertise__lightbox__video__slides"  width="540px" autoplay controls>
                        <source class="expertise__lightbox__video__slides__img" src="<?php bloginfo('template_directory')?>/assets/videos/lightbox-540p-oster_kitchen_products.mp4">
                    </video>
                </div>
                
                <!-- <a class="expertise__lightbox__next__prev__icon">&#10095;</a> -->
            
            </div>
    
            <div class="expertise__lightbox__caption__container">
                <p class="expertise__lightbox__caption" id="expertise-lightbox-caption">Oster® | Kitchen Products</p>
                <!-- <p class="expertise__lightbox__counter" id="expertise-lightbox-counter">1/4</p> -->
            </div>

            <!-- <ul class="expertise__lightbox__points__container" id="expertise-lightbox-points-container"> -->
                <!-- <li class="expertise__lightbox__points expertise__lightbox__points__active"></li>
            </ul> -->
    
        </div>
    
    </section>
    
</main>

<script>
	
// Back button

document.getElementById('lightbox-video-back-button').addEventListener('click', () => {
    history.back();
  });

</script>

<?php 

if(is_page("video-oster-kitchen-products")) {
    get_footer('invisible');
   }
   else {
    get_footer();
   }