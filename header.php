<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>
			<?php wp_title('&middot;'); ?>
		</title>

		<?php // mobile meta (hooray!) ?>
			<meta name="HandheldFriendly" content="True">
			<meta name="MobileOptimized" content="320">
			<meta name="viewport" content="width=device-width, initial-scale=1" />

			<!-- http://www.favicomatic.com/ to automatically create favicons -->
			<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon-57x57.png" />
			<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon-114x114.png" />
			<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon-72x72.png" />
			<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon-144x144.png" />
			<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon-120x120.png" />
			<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon-152x152.png" />
			<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon-32x32.png" sizes="32x32" />
			<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon-16x16.png" sizes="16x16" />
			<meta name="application-name" content="Linden Foods" />
			<meta name="msapplication-TileColor" content="#FFFFFF" />
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/mstile-144x144.png" />
			<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

			<meta name="theme-color" content="#aa198d">

			<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">



			<?php // wordpress head functions ?>
				<?php wp_head(); ?>
					<?php // end of wordpress head ?>

						<?php // drop Google Analytics Here ?>
							<?php // end analytics ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

		<div class="container">

				<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri();?>/library/images/logo.png" alt="Barclay Telecoms Machine to Machine">
					</a>
				<div class="nav-container">
					<a href="#" id="menu-icon" class="menu-icon">
						<div class="line"></div>
					</a>
					<nav class="nav-collapse " role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
			         'container' => false,                           // remove nav container
			         'container_class' => 'menu',                 // class of container (should you choose to use it)
			         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
			         'menu_class' => 'nav main-nav',               // adding custom nav class
			         'theme_location' => 'main-nav',                 // where it's located in the theme
			         'before' => '',                                 // before the menu
			               'after' => '',                                  // after the menu
			               'link_before' => '',                            // before each link
			               'link_after' => '',                             // after each link
			               'depth' => 0,                                   // limit the depth of the nav
			         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>

					</nav>
				</div>

		</div>
		<!-- /container -->

	</header>
