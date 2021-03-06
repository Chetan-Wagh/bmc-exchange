<?php
/**
 * The Header template for our theme
 *
 */
 
global $post;
 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php do_action('events_head'); ?>
	<?php wp_head(); ?>
<script src="//assets.adobedtm.com/e4bb86ac0ef46215a117e82e4f945d2ba5c51004/satelliteLib-ad9f8faec2eb24aadf53f0a3c30c5c624b7df808.js"></script>
<style type="text/css">
#gk-header-nav.active {
  top: 40px;
}
</style>
</head>
<body <?php body_class('frontpage ' . get_theme_mod('events_blocks_color', 'events-light-blocks')); ?>>
	<!--[if lte IE 8]>
	<div id="ie-toolbar"><div><?php _e('You\'re using an unsupported version of Internet Explorer. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/products/ie/home">upgrade your browser</a> for the best user experience on our site. Thank you.', 'events') ?></div></div>
	<![endif]-->
	
	<div id="gk-bg">
		<header id="gk-header" role="banner">
			<div class="top-header">
				<div class="container">
					<div class="vce-wrap-right">
						<ul class="top-nav-menu" id="vce_top_navigation_menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-96" id="menu-item-96"><a onclick="s_objectID=&quot;http://www.bmc.com/_1&quot;;return this.s_oc?this.s_oc(e):true" href="http://www.bmc.com">Visit BMC.com &gt;</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div id="gk-header-nav">
				<div id="gk-header-nav-wrap">
					<?php if(get_theme_mod('events_logo', '') == '') : ?>
					<a id="gk-logo-css" class="gk-small-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<span><?php bloginfo( 'name' ); ?></span>
					</a>
					<?php else : ?>
					<a id="gk-logo" class="gk-small-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/08/bmc_exchange_site_logo_31.png" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
					<?php endif; ?>
					
					<?php do_action('events_before_mainmenu'); ?>

                                         
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<h3 class="menu-toggle"><?php _e( 'Menu', 'events' ); ?></h3>
						<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'events' ); ?>"><?php _e( 'Skip to content', 'events' ); ?></a>
						
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</nav><!-- #site-navigation -->
					<?php do_action('events_after_mainmenu'); ?>
					
					<a href="#menu" id="aside-menu-toggler"><i class="fa fa-bars"></i></a>
				</div>
			</div>
			
			<div id="gk-header-mod" style="/* background-image: url('<?php header_image(); ?>'); */" class='<?php if(is_page(2026)) { echo "homedemo-header-mod"; }?>' >
				<!--<div class="frontpage-block-wrap">-->
					<?php do_action('events_before_header'); ?>
					<?php //if(get_theme_mod('events_logo', '') == '') : ?>
					<!--<a id="gk-logo-css-big" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<span><?php bloginfo( 'name' ); ?></span>
					</a>-->
					<?//php else : ?>
					<!--<a id="gk-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_theme_mod('events_logo', ''); ?>" alt="<?php bloginfo( 'name' ); ?>" />-->
					</a>
					<?php //endif; ?>
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>	
						
						<?php wp_reset_query(); ?>
					<?php endif; ?>
					<?php do_action('events_after_header'); ?>
				<!--</div>-->
		       </div>
		</header><!-- #masthead -->