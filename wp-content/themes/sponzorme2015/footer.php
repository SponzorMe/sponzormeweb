<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<footer class="mdl-cell--12-col">
      <div class="mdl-cell--12-col">

        <div class="mdl-mega-footer__drop-down-section itemspeek mdl-cell mdl-cell--9-col">
          <ul class="mdl-mega-footer__link-list">
            <div class="col-md-4 padding-top-10">&nbsp;&nbsp;&nbsp; <a href="<?php site_url(); ?>?lang=es"><img height="16px" src="<?php echo get_template_directory_uri(); ?>/img/spanish.png"></a>&nbsp; <a href="<?php site_url(); ?>?lang=en"><img height="16px" src="<?php echo get_template_directory_uri(); ?>/img/english.png"></a>&nbsp; <a href="<?php site_url(); ?>?lang=pt-br"><img height="16px" src="<?php echo get_template_directory_uri(); ?>/img/pt.png"></a></div>
          </ul>
        </div>

        <div class="mdl-mega-footer__drop-down-section itemmy mdl-cell mdl-cell--3-col">
						<?php wp_nav_menu(array(
							'container' => '',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
							'container_class' => 'mdl-mega-footer__link-list',         // class of container (should you choose to use it)
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
      </div>
    </footer>
		<figure id="video_player" class="mdl-cell mdl-cell--12-col">
      <video autoplay poster="<?php echo get_template_directory_uri(); ?>/video/fondo.jpg" id="fondo">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video1.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video2.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video3.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video4.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video5.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video6.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video7.mp4" type="video/mp4">
      </video>
    </figure>
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo get_template_directory_uri(); ?>/lib/material-design-lite/material.min.js"></script>
	</body>
</html> <!-- end of site. what a ride! -->
