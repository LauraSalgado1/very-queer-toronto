<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package veryqueertoronto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site vqt">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'veryqueertoronto' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			//the_custom_logo();
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			?>
			<a href="/" class="custom-logo-link" rel="home">
				<img src="<?php echo $image[0] ?>" alt="VQT" width="150" height="59" />
				<span>Events</span>
			</a>
			
			

			<?php
			//$veryqueertoronto_description = get_bloginfo( 'description', 'display' );
			//if ( $veryqueertoronto_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><?php // echo  $veryqueertoronto_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p> -->
			<!-- <?php  // endif; ?> -->
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php // esc_html_e( 'Primary Menu', 'veryqueertoronto' ); ?></button>
			<?php
			// wp_nav_menu(
				// array(
				//	'theme_location' => 'menu-1',
				//	'menu_id'        => 'primary-menu',
				// )
			// );
			?>
		</nav> -->
		<!-- #site-navigation -->
	</header><!-- #masthead -->
