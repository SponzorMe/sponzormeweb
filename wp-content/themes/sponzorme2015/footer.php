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
		var Modal = (function() {

				  var trigger = $qsa('.modal__trigger'); // what you click to activate the modal
				  var modals = $qsa('.modal'); // the entire modal (takes up entire window)
				  var modalsbg = $qsa('.modal__bg'); // the entire modal (takes up entire window)
				  var content = $qsa('.modal__content'); // the inner content of the modal
					var closers = $qsa('.modal__close'); // an element used to close the modal
				  var w = window;
				  var isOpen = false;
					var contentDelay = 400; // duration after you click the button and wait for the content to show
				  var len = trigger.length;

				  // make it easier for yourself by not having to type as much to select an element
				  function $qsa(el) {
				    return document.querySelectorAll(el);
				  }

				  var getId = function(event) {

				    event.preventDefault();
				    var self = this;
				    // get the value of the data-modal attribute from the button
				    var modalId = self.dataset.modal;
				    var len = modalId.length;
				    // remove the '#' from the string
				    var modalIdTrimmed = modalId.substring(1, len);
				    // select the modal we want to activate
				    var modal = document.getElementById(modalIdTrimmed);
				    // execute function that creates the temporary expanding div
				    makeDiv(self, modal);
				  };

				  var makeDiv = function(self, modal) {

				    var fakediv = document.getElementById('modal__temp');

				    /**
				     * if there isn't a 'fakediv', create one and append it to the button that was
				     * clicked. after that execute the function 'moveTrig' which handles the animations.
				     */

				    if (fakediv === null) {
				      var div = document.createElement('div');
				      div.id = 'modal__temp';
				      self.appendChild(div);
				      moveTrig(self, modal, div);
				    }
				  };

				  var moveTrig = function(trig, modal, div) {
				    var trigProps = trig.getBoundingClientRect();
				    var m = modal;
				    var mProps = m.querySelector('.modal__content').getBoundingClientRect();
				    var transX, transY, scaleX, scaleY;
				    var xc = w.innerWidth / 2;
				    var yc = w.innerHeight / 2;

				    // this class increases z-index value so the button goes overtop the other buttons
				    trig.classList.add('modal__trigger--active');

				    // these values are used for scale the temporary div to the same size as the modal
				    scaleX = mProps.width / trigProps.width;
				    scaleY = mProps.height / trigProps.height;

				    scaleX = scaleX.toFixed(3); // round to 3 decimal places
				    scaleY = scaleY.toFixed(3);


				    // these values are used to move the button to the center of the window
				    transX = Math.round(xc - trigProps.left - trigProps.width / 2);
				    transY = Math.round(yc - trigProps.top - trigProps.height / 2);

						// if the modal is aligned to the top then move the button to the center-y of the modal instead of the window
				    if (m.classList.contains('modal--align-top')) {
				      transY = Math.round(mProps.height / 2 + mProps.top - trigProps.top - trigProps.height / 2);
				    }


						// translate button to center of screen
						trig.style.transform = 'translate(' + transX + 'px, ' + transY + 'px)';
						trig.style.webkitTransform = 'translate(' + transX + 'px, ' + transY + 'px)';
						// expand temporary div to the same size as the modal
						div.style.transform = 'scale(' + scaleX + ',' + scaleY + ')';
						div.style.webkitTransform = 'scale(' + scaleX + ',' + scaleY + ')';


						window.setTimeout(function() {
							window.requestAnimationFrame(function() {
								open(m, div);
							});
						}, contentDelay);

				  };

				  var open = function(m, div) {

				    if (!isOpen) {
				      // select the content inside the modal
				      var content = m.querySelector('.modal__content');
				      // reveal the modal
				      m.classList.add('modal--active');
				      // reveal the modal content
				      content.classList.add('modal__content--active');

				      /**
				       * when the modal content is finished transitioning, fadeout the temporary
				       * expanding div so when the window resizes it isn't visible ( it doesn't
				       * move with the window).
				       */

				      content.addEventListener('transitionend', hideDiv, false);

				      isOpen = true;
				    }

				    function hideDiv() {
				      // fadeout div so that it can't be seen when the window is resized
				      div.style.opacity = '0';
				      content.removeEventListener('transitionend', hideDiv, false);
				    }
				  };

				  var close = function(event) {

						event.preventDefault();
				    event.stopImmediatePropagation();

				    var target = event.target;
				    var div = document.getElementById('modal__temp');

				    /**
				     * make sure the modal__bg or modal__close was clicked, we don't want to be able to click
				     * inside the modal and have it close.
				     */

				    if (isOpen && target.classList.contains('modal__bg') || target.classList.contains('modal__close')) {

				      // make the hidden div visible again and remove the transforms so it scales back to its original size
				      div.style.opacity = '1';
				      div.removeAttribute('style');

							/**
							* iterate through the modals and modal contents and triggers to remove their active classes.
				      * remove the inline css from the trigger to move it back into its original position.
							*/

							for (var i = 0; i < len; i++) {
								modals[i].classList.remove('modal--active');
								content[i].classList.remove('modal__content--active');
								trigger[i].style.transform = 'none';
				        trigger[i].style.webkitTransform = 'none';
								trigger[i].classList.remove('modal__trigger--active');
							}

				      // when the temporary div is opacity:1 again, we want to remove it from the dom
							div.addEventListener('transitionend', removeDiv, false);

				      isOpen = false;

				    }

				    function removeDiv() {
				      setTimeout(function() {
				        window.requestAnimationFrame(function() {
				          // remove the temp div from the dom with a slight delay so the animation looks good
				          div.remove();
				        });
				      }, contentDelay - 50);
				    }

				  };

				  var bindActions = function() {
				    for (var i = 0; i < len; i++) {
				      trigger[i].addEventListener('click', getId, false);
				      closers[i].addEventListener('click', close, false);
				      modalsbg[i].addEventListener('click', close, false);
				    }
				  };

				  var init = function() {
				    bindActions();
				  };

				  return {
				    init: init
				  };

				}());

			Modal.init();

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
