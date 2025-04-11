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
			<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			?>
			<a href="/" class="custom-logo-link" rel="home">
				<img src="<?php echo $image[0] ?>" alt="VQT" width="150" height="59" />
				<span>Events</span>
			</a>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-5.0 -10.0 110.0 135.0" aria-hidden="true" focusable="false" width="50" height="50">
						<path d="m87.5 75c0 3.4531-2.7969 6.25-6.25 6.25h-62.5c-3.4531 0-6.25-2.7969-6.25-6.25s2.7969-6.25 6.25-6.25h62.5c3.4531 0 6.25 2.7969 6.25 6.25zm-6.25-31.25h-62.5c-3.4531 0-6.25 2.7969-6.25 6.25s2.7969 6.25 6.25 6.25h62.5c3.4531 0 6.25-2.7969 6.25-6.25s-2.7969-6.25-6.25-6.25zm-62.5-12.5h62.5c3.4531 0 6.25-2.7969 6.25-6.25s-2.7969-6.25-6.25-6.25h-62.5c-3.4531 0-6.25 2.7969-6.25 6.25s2.7969 6.25 6.25 6.25z"/>
						</svg>
					<span class="screen-reader-text"><?php  esc_html_e( 'Primary Menu', 'veryqueertoronto' ); ?></span>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>  
	</header><!-- #masthead -->
