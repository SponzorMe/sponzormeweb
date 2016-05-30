<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<div class="footer white-background">
			<div class="row">
				<div class="col-md-6" style="padding-left:10%">
				<a href="<?php site_url(); ?>?lang=es"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/spanish.png"></a>&nbsp; <a href="<?php site_url(); ?>?lang=en"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/english.png"></a>&nbsp; <a href="<?php site_url(); ?>?lang=pt-br"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/pt.png"></a>
			 </div>
        <div class="col-md-6 text-right footermini" style="padding-right:10%; padding-top:5px">
					<?php
					if(!isset($_GET['lang']))
					{
						$_GET['lang'] = "en";
					}
					if($_GET['lang']=="es"){
					?>
					<a href="/testimonials-3/?lang=es">Testimonios</a> <a href="/pagina-de-precios/?lang=es">Precios</a><a href="/support-3/?lang=es">Soporte</a> <a target="_blank" href="http://bloges.sponzor.me/">Blog</a> <a href="/privacy/?lang=es">Privacidad</a>
					<?php
					}
					elseif($_GET['lang']=="en"){
					?>
					<a href="/testimonials-3/?lang=en">Testimonials</a> <a href="/pricing/?lang=en">Pricing</a> <a href="/support-3/?lang=en">Support</a> <a target="_blank" href="http://bloges.sponzor.me/">Blog</a> <a href="/privacy/?lang=en">Privacy</a>
					<?php
					}
					elseif($_GET['lang']=="pt-br"){
					?>
					<a href="/testimonials-3/?lang=pt-br">Depoimentos</a> <a href="/support-3/?lang=pt-br">Apoio</a><a target="_blank" href="/planos-e-precos/?lang=pt-br">Planos</a> <a target="_blank" href="http://blogpt.sponzor.me/">Blog</a> <a href="/privacy/?lang=pt-br">Privacidade</a>
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
    </div>
		</div>
		<figure id="video_player">
      <video autoplay poster="<?php echo get_template_directory_uri(); ?>/video/fondo.jpg" id="fondo">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video1.mp4" type='video/mp4'>
				<source src="<?php echo get_template_directory_uri(); ?>/video/video2.mp4" type='video/mp4'>
      </video>
    </figure>
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/js/bootstrap.min.js"></script>
		<script>

		  var video_player = document.getElementById("video_player");
		  video = video_player.getElementsByTagName("video")[0],
		  source = video.getElementsByTagName("source"),
		  console.log(source)
		  link_list = [],
		  vidDir = "<?php echo get_template_directory_uri(); ?>/video/",
		  currentVid = 0,
		  lnkNum = source.length;
		  video.removeAttribute("controls");
		  video.removeAttribute("poster");

		  for (var i=0; i<lnkNum; i++) {
		    var filename = source[i].src;
		    link_list[i] = filename.match(/([^\/]+)(?=\.\w+$)/)[0];
		  }

		  (function() {
		    function playVid(index) {
		        source[1].src = vidDir + link_list[index] + ".webm";
		        source[0].src = vidDir + link_list[index] + ".mp4";
		        currentVid = index;
		        video.load();
		        video.muted = true;
		        video.play();
		    }

		    video.addEventListener('ended', function () {
		      console.log('fin');
		        // allLnks[currentVid].classList.remove("currentvid");
		        if ((currentVid + 1) >= lnkNum) { nextVid = 0 } else { nextVid = currentVid+1 }
		        playVid(nextVid);
		    })

		    // video.addEventListener('mouseenter', function() {
		    //     video.setAttribute("controls","true");
		    // })

		    // video.addEventListener('mouseleave', function() {
		    //     video.removeAttribute("controls");
		    // })

		    var indexOf = function(needle) {
		        if(typeof Array.prototype.indexOf === 'function') {
		            indexOf = Array.prototype.indexOf;
		        } else {
		            indexOf = function(needle) {
		                var i = -1, index = -1;
		          for(i = 0; i < this.length; i++) {
		                    if(this[i] === needle) {
		                        index = i;
		                        break;
		                    }}
		                return index;
		            };}
		        return indexOf.call(this, needle);
		    };

		  })();
		</script>
	</body>
</html> <!-- end of site. what a ride! -->
