<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<footer class="mdl-mini-footer">
			<div class="mdl-mini-footer__left-section"><a href="<?php site_url(); ?>?lang=es"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/spanish.png"></a>&nbsp; <a href="<?php site_url(); ?>?lang=en"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/english.png"></a>&nbsp; <a href="<?php site_url(); ?>?lang=pt-br"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/pt.png"></a></div>
        <div class="mdl-mini-footer__right-section footermini">
					<?php
					if(!isset($_GET['lang']))
					{
						$_GET['lang'] = "en";
					}
					if($_GET['lang']=="es"){
					?>
					<a href="/testimonials-3/?lang=es">Testimonios</a> <a href="/support-3/?lang=es">Soporte</a> <a target="_blank" href="http://bloges.sponzor.me/">Blog</a> <a href="/privacy/?lang=es">Privacidad</a>
					<?php
					}
					elseif($_GET['lang']=="en"){
					?>
					<a href="/testimonials-3/?lang=en">Testimonials</a> <a href="/support-3/?lang=en">Support</a> <a target="_blank" href="http://bloges.sponzor.me/">Blog</a> <a href="/privacy/?lang=en">Privacy</a>
					<?php
					}
					elseif($_GET['lang']=="pt-br"){
					?>
					<a href="/testimonials-3/?lang=pt-br">Depoimentos</a> <a href="/support-3/?lang=pt-br">Apoio</a> <a target="_blank" href="http://blogpt.sponzor.me/">Blog</a> <a href="/privacy/?lang=pt-br">Privacidade</a>
					<?php
					}
					?>

					<?php wp_nav_menu(array(
						'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
						'container_class' => 'col-md-4 padding-top-10',         // class of container (should you choose to use it)
						'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
						'menu_class' => 'centeredmenu',            // adding custom nav class
						'theme_location' => 'footer-links',             // where it's located in the theme
						'before' => '',                                 // before the menu
						'after' => '',                                  // after the menu
						'link_before' => '',                            // before each link
						'link_after' => '',                             // after each link
						'depth' => 0,                                   // limit the depth of the nav
						'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
					)); ?>
        </div>

    </footer>
		<figure id="video_player">
      <video autoplay poster="<?php echo get_template_directory_uri(); ?>/video/fondo.jpg" id="fondo">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video1.mp4" type='video/mp4'>
				<source src="<?php echo get_template_directory_uri(); ?>/video/video2.mp4" type='video/mp4'>
      </video>
    </figure>
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/lib/videoscript/videoscript.js"></script>
	</body>
</html> <!-- end of site. what a ride! -->
