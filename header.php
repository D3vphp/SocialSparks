<?php
/**
 * The header template file.
 * @package SocialSparks
 * @since SocialSparks 1.0.0
*/
?>
<!DOCTYPE html>
	<head>
		<title><?php wp_title('|', true, 'right'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon1.ico">
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<!--[if lt IE 8]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	<div id="top-navigation-wrapper" role="navigation" aria-label="navigation">
		<div class="container">
			<div class="top-navigation col-md-8">
				<?php
					wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'menu_class'        => 'nav navbar-nav socialsparksTopNav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
			</div>
			<div class="col-md-4 hd-search"><?php get_search_form(); ?></div>
		</div>
	</div>
	<div class = "container">
		<div class="col-md-6 col-md-offset-3" id="header-img">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo" width="566px" height="180px" />
			</a>
		</div>
	</div>