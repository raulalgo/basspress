<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 ?><!DOCTYPE html>
 <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/bassplate/css/base.min.css' ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="" class="">
	<a class="skip-link screen-reader-text hide" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
	
		<?php if( is_front_page() && is_home() ):?>
			<div class="flex flex-column p4 bg-teal navy">
				<h1 class="h0 bold mt4 mb0 caps ls0" style=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="h3 caps mb0"><?php echo $description; ?></p>
				<?php endif;
			?>
		<?php else: ?>
			<div class="flex py2 px3 navy">
				<h1 class="h3 bold caps" style="letter-spacing:0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php endif; ?>
			
		<!--<div class="right col-4 bg-red">
			<div class="col col-4 h3">Uno</div>
			<div class="col col-4 h3">Dos</div>
			<div class="col col-4 h3">Tres</div>
		</div>-->
	</div>

	<div id="content" class="flex flex-column px4">
