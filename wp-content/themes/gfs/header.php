<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site container">
		<header id="masthead" class="site-header row" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"
				title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
				rel="home"></a>

			<div id="menu" class="menu row">
                <div id="navbar" class="navbar col-lg-12">
                    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                        <button class="menu-toggle"><?php _e( 'Primary Menu', 'nav-menu' ); ?></button>
                        <?php wp_nav_menu ( array ('theme_location' => 'nav-menu', 'menu_class' => 'nav-menu') ); ?>
                    </nav><!-- #site-navigation -->
                </div><!-- #navbar -->
            </div><!-- #menu -->

            <div id="menu-social" class="menu-social row">
                <ul class="socialbar col-lg-6">
                    <li class="socialbar-facebook"></li>
                    <li class="socialbar-twitter"></li>
                    <li class="socialbar-googleplus"></li>
                    <li class="socialbar-youtube"></li>
                    <li class="socialbar-dailymotion"></li>
                    <li class="socialbar-rss"></li>
                </ul>
                <span class="col-lg-6"><?php get_search_form(); ?></span>
            </div><!-- #menu-social -->



		</header>
		<!-- #masthead -->

		<div id="main" class="site-main">