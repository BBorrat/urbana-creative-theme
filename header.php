<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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

                <a href="http://zinaphia.com/dev/urbana" class="header__logo-link"><img src="<?php bloginfo('template_directory')?>/assets/images/logo.svg" alt="Logo Urbana Creative" class="header__logo" id="header__logo"></a>
                    
                <div class="header__hamburger__menu" id="header-hamburger-menu">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

                <nav class="header__navbar" id="header__navbar">
                    <ul class="header__menu" id="header-menu-container" >
                        <!-- For active link add link--active class to li tags-->
                        <li class="header__menu__items"> <a href="http://zinaphia.com/dev/urbana" id="header-menu-item-link" class="header__menu__item__link link--active">Home</a></li>
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