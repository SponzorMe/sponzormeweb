<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<footer class="mdl-mini-footer">
			<div class="mdl-mini-footer__left-section"><a href="<?php site_url(); ?>?lang=es"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/spanish.png"></a>&nbsp; <a href="<?php site_url(); ?>?lang=en"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/english.png"></a>&nbsp; <a href="<?php site_url(); ?>?lang=pt-br"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/pt.png"></a></div>
        <div class="mdl-mini-footer__right-section">
					Link1 - Link2
        </div>

    </footer>
		<figure id="video_player">
      <video autoplay poster="<?php echo get_template_directory_uri(); ?>/video/fondo.jpg" id="fondo">
        <source src="<?php echo get_template_directory_uri(); ?>/video/video1_1.webm" type='video/webm; codecs="vp8, vorbis"'>
        <source src="<?php echo get_template_directory_uri(); ?>/video/video2_1.webm" type='video/webm; codecs="vp8, vorbis"'>
        <source src="<?php echo get_template_directory_uri(); ?>/video/video3_1.webm" type='video/webm; codecs="vp8, vorbis"'>
        <source src="<?php echo get_template_directory_uri(); ?>/video/video4_1.webm" type='video/webm; codecs="vp8, vorbis"'>
        <source src="<?php echo get_template_directory_uri(); ?>/video/video5_1.webm" type='video/webm; codecs="vp8, vorbis"'>
      </video>
    </figure>
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo get_template_directory_uri(); ?>/lib/material-design-lite/material.min.js"></script>

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
      //source[0].src = vidDir + link_list[index] + ".mp4";
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
