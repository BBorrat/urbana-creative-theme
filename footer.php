<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Urbana_Creative_Theme
 */

?>

	<main>

		<footer class="footer__canvas">

			<div class="footer__container">
				<ul class="footer__submenu">
					<li> <a href="https://urbanacreative.com" class="footer__submenu__item">Home</a></li>
					<li> <a href="about-us" class="footer__submenu__item">About Us</a></li>
					<li> <a href="expertise-video-and-motion-graphics" class="footer__submenu__item">Expertise</a></li>
					<li> <a href="featured-projects" class="footer__submenu__item">Featured Projects</a></li>
					<li> <a href="join-us" class="footer__submenu__item">Join Us</a></li>
					<li> <a href="contact-us" class="footer__submenu__item">Contact Us</a></li>
					<li> <a href="privacy-policy" class="footer__submenu__item">Privacy Policy</a></li>
					<li> <a href="terms-of-use" class="footer__submenu__item">Terms of use</a></li>
				</ul>
		
				<!-- <div class="footer__address__container">
					<h4 class="footer__header">Our Address</h4>
					<p class="footer__copy">Urbana Creative Group</p>
					<address class="footer__address">
					7950 NW 53rd Street<br>Suite 208<br>Miami, FL 33166<
					</address>
				</div> -->
		
				<address class="footer__contact__container">
					<h4 class="footer__header">Email Us<br> <span class="footer__copy">(General Inquiries)</span> </h4>
					<a href="mailto:info@urbanacreative.com" class="footer__link">info@urbanacreative.com</a>
					<br>
					<br>
					<!-- <h4 class="footer__header">Call Us</h4>
					<a href="tel:+786-507-1301" class="footer__link">+786-507-1301</a> -->
				</address>
		
				<div class="footer__social__media__container">
					<h4 class="footer__header">Connect With Us</h4>
					<div class="footer__icon__container">
						<a href="https://www.instagram.com/urbanacreative/" class="footer__link" target="_blank"><img src="<?php bloginfo('template_directory')?>/assets/images/logo-instagram.svg" alt="Instagram logotype" class="footer__instagram__logo"></a>
						<a href="https://www.facebook.com/urbanacreative" class="footer__link" target="_blank"><img src="<?php bloginfo('template_directory')?>/assets/images/logo-facebook.svg" alt="Facebook logotype" class="footer__facebook__logo"></a>
						<a href="https://www.linkedin.com/company/urbana-creative-group/" class="footer__link" target="_blank"><img src="<?php bloginfo('template_directory')?>/assets/images/logo-linkedin.svg" alt="Linkedin logotype" class="footer__linkedin__logo"></a>
					</div>
				</div>
			</div>

			<p class="footer__copyright" id="footer-copyright">&copy; <? echo wp_date('Y');?> Urbana Creative Group, Inc</p>
		
		</footer>

	</main>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
