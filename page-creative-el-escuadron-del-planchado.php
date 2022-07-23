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

 if(is_page("creative-el-escuadron-del-planchado")) {
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
                
                <a class="expertise__lightbox__next__prev__icon prev-btn" >&#10094;</a>

                <div class="expertise__lightbox__slide__container">
                    <div class="expertise__lightbox__slides">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-logotema.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-carrito.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-ruleta.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-diana.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-abanico.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-imanes-2.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-imanes-1.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-volante.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-folleto.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-punta-de-gondola-1-frontal.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-punta-de-gondola-1-lateral-1.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-punta-de-gondola-1-lateral-2.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-pantalla.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-contenedor-folletos.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-punta-de-gondola-2-frontal.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-punta-de-gondola-2-laterales.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-cenefa.jpg">
                    </div>
                    <div class="expertise__lightbox__slides display-none">
                        <img class="expertise__lightbox__slides__img" src="<?php bloginfo('template_directory')?>/assets/images/lightbox-creat-serv-escuadron-planchado-rompe-trafico.jpg">
                    </div>
                </div>

                <a class="expertise__lightbox__next__prev__icon next-btn">&#10095;</a>

            </div>
                    
            <div class="expertise__lightbox__caption__container">
                <p class="expertise__lightbox__caption" id="expertise-lightbox-caption">Creative Services</p>
                <!-- <p class="expertise__lightbox__counter" id="expertise-lightbox-counter">1/4</p> -->
            </div>

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

if(is_page("creative-el-escuadron-del-planchado")) {
    get_footer('invisible');
   }
   else {
    get_footer();
   }