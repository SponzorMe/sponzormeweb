<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body>
	  <section>
	    <header class="mdl-cell mdl-cell--12-col" >
	      <section class="mdl-layout__header-row">
	          <section class="logo mdl-cell mdl-cell--8-col">
	            <a href="<?php site_url(); ?>/?lang=<?php if(isset($_GET['lang'])){ echo $_GET['lang']; }else{ echo 'en';} ?>"><p>Sponzor<strong>Me</strong></p></a>
	          </section>
	          <section class="redes mdl-cell mdl-cell--4-col">

									<a class="" href="https://www.facebook.com/SponzorMe"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/facebok.png"></a>&nbsp;
									<a class="" href="http://j.mp/1ROIb0l"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/gplus.png"></a>&nbsp;
									<a class="" href="https://instagram.com/sponzorme/"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/instagram.png"></a>&nbsp;
									<a class="" href="https://www.pinterest.com/sponzorme/"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/pinterest.png"></a>&nbsp;
									<a class="" href="http://sponzorme.tumblr.com/"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/tumblr.png"></a>&nbsp;
									<a class="" href="https://twitter.com/sponzorme"><img height="32px" src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"></a>&nbsp;

	          </section>
	      </section>
	    </header>
