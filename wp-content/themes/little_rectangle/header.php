<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Little Rectangle
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="//cloud.webtype.com/css/eee06fe8-6a1d-4a2a-9e94-14529608c0d7.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/fonts/blair.css">
<script type="text/javascript" src="//use.typekit.net/wzc2hyn.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( 'template_directory' ); ?>/js/jquery.pixelentity.flare.min.css" rel="stylesheet"/>
<link href="<?php bloginfo( 'template_directory' ); ?>/js/themes/default/skin.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.pixelentity.flare.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<?php

if (is_single() AND has_post_thumbnail()) {

		?>



<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'original' ); ?>


    	<div style="width:100%; height:500px;" class="image huge" data-stretch="<?php echo $image[0]; ?>"></div>
		<div class="huge" style="width:100%; height:500px;"><p style="color:<?php echo get_field('byline_color', $post->ID) ?>"><?php echo get_field('byline', $post->ID) ?></p></div>


<?php } ?>


<script>
	jQuery(document).ready(function() {
		jQuery("*[data-stretch]").anystretch();
		jQuery('a[data-target="flare"]').peFlareLightbox();
		var browserHeight = jQuery( window ).height();
		jQuery(".huge").height( browserHeight );
	});
</script>

	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div>

		<nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'little_rectangle' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'little_rectangle' ); ?>"><?php _e( 'Skip to content', 'little_rectangle' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="page" class="hfeed site">

	<div id="main" class="site-main">

		<script type="text/javascript">

jQuery(document).ready(function() {
var _url = window.location.pathname;

jQuery(".site-main *[data-stretch]").each(function(index) {
var _img = jQuery(this).attr("data-stretch");
jQuery(this).append('<a href="http://pinterest.com/pin/create/button/?url=http://littlerectangle.com' + _url + '&media=' + _img + '&description=%23littlerectangle" class="pin-it-button" count-layout="none"><img border="0" src="/wp-content/themes/little_rectangle/images/pin-it.png" title="Pin It" /></a>');
});
jQuery(".image_1x img").each(function(index) {
var _img = jQuery(this).attr("src");
jQuery(this).parents('a').before('<a href="http://pinterest.com/pin/create/button/?url=http://littlerectangle.com' + _url + '&media=' + _img + '&description=%23littlerectangle" class="pin-it-button" count-layout="none"><img border="0" src="/wp-content/themes/little_rectangle/images/pin-it.png" title="Pin It" /></a>');
});

jQuery(".pull img").each(function(index) {
var _img = jQuery(this).attr("src");
jQuery(this).before('<a href="http://pinterest.com/pin/create/button/?url=http://littlerectangle.com' + _url + '&media=' + _img + '&description=%23littlerectangle" class="pin-it-button" count-layout="none"><img border="0" src="/wp-content/themes/little_rectangle/images/pin-it.png" title="Pin It" /></a>');
});

});

</script>
