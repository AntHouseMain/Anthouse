<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package anthouse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page-preloader">
		<div class="cssload-thecube">
			<div class="cssload-cube cssload-c1"></div>
			<div class="cssload-cube cssload-c2"></div>
			<div class="cssload-cube cssload-c4"></div>
			<div class="cssload-cube cssload-c3"></div>
		</div>
	</div>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'anthouse' ); ?></a>
	<header class="top-header">
		<div class="uk-container-expand turquoise">
			<div class="uk-container">
				<div uk-grid>
					<div class="uk-width-1-1@s uk-flex-right@s uk-flex-center uk-flex uk-flex-row uk-flex-wrap uk-translation">
						<a class="uk-on" href="#">Russian</a>
						<a  href="#">English</a>
					</div>
				</div>
			</div>	
		</div>
		<nav class="uk-container uk-margin-small-bottom uk-margin-small-top" uk-navbar >
			<div class="uk-navbar-left uk-flex uk-flex-wrap uk-flex-left">
				<a class="uk-logo" href="<?php echo site_url()?>">
					<img  src="<?php bloginfo('template_directory'); ?>/img/logo-new.png"  class="brand-logo" alt="" >
				</a>
			</div>

			<div class="uk-navbar-right uk-flex uk-flex-wrap uk-flex-right  uk-margin-small-right uk-visible@m">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'uk-navbar-nav',
					) );
					?>
				</div> 
				<a href="#" class="uk-hidden@m uk-navbar-right uk-navbar-toggle" uk-toggle="target: #offcanvas-nav">
					<span uk-navbar-toggle-icon></span>
					<span class="uk-margin-small-left"></span>
				</a>
				<div id="offcanvas-nav" uk-offcanvas="overlay: true">
					<div class="uk-offcanvas-bar uk-flex uk-flex-column">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu-mobile',
							'menu_class'     => 'uk-navbar-nav uk-navbar-nav uk-flex uk-flex-column',
							) );
							?>

						</div>
					</div>

				</nav>
			</header> 

			<main>