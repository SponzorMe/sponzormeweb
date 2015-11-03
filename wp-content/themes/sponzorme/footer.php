<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<div class="footer">
		<div class="row">
			<div class="col-md-4 padding-top-10">&nbsp;&nbsp;&nbsp;
				<?php do_action('icl_language_selector'); ?>
					<a class="" href="" ng-click="changeLanguage('es')"><img height="16px" src="images/spanish.png"></a>&nbsp;
					<a class="" href="" ng-click="changeLanguage('en')"><img height="16px" src="images/english.png"></a>&nbsp;
					<a class="" href="" ng-click="changeLanguage('pt')"><img height="16px" src="images/pt.png"></a>
			</div>

				<?php wp_nav_menu(array(
					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
					'container_class' => 'col-md-4 padding-top-10',         // class of container (should you choose to use it)
					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
					'menu_class' => '',            // adding custom nav class
					'theme_location' => 'footer-links',             // where it's located in the theme
					'before' => '',                                 // before the menu
					'after' => '',                                  // after the menu
					'link_before' => '',                            // before each link
					'link_after' => '',                             // after each link
					'depth' => 0,                                   // limit the depth of the nav
					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
				)); ?>

			<div class="col-md-4" align="right">
					<a class="" href="https://www.facebook.com/SponzorMe"><img height="32px" src="images/facebok.png"></a>&nbsp;
					<a class="" href="http://j.mp/1ROIb0l"><img height="32px" src="images/gplus.png"></a>&nbsp;
					<a class="" href="https://instagram.com/sponzorme/"><img height="32px" src="images/instagram.png"></a>&nbsp;
					<a class="" href="https://www.pinterest.com/sponzorme/"><img height="32px" src="images/pinterest.png"></a>&nbsp;
					<a class="" href="http://sponzorme.tumblr.com/"><img height="32px" src="images/tumblr.png"></a>&nbsp;
					<a class="" href="https://twitter.com/sponzorme"><img height="32px" src="images/twitter.png"></a>&nbsp;
					<a class="" href="http://www.startupchile.org/"><img height="32px" src="images/startupchile.png"></a>&nbsp;
			</div>
		</div>
		</div>
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/transition.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/alert.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/modal.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/dropdown.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/scrollspy.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/tab.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/tooltip.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/popover.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/button.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/collapse.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/lib/typeahead.js/dist/typeahead.jquery.js"></script>
	</body>
</html> <!-- end of site. what a ride! -->
