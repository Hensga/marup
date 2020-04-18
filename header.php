<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'marup' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container-fluid">		
			<nav class="navbar navbar-expand-md navbar-light ">
				<div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
					<ul class="navbar-nav ml-auto">
					<?php
							wp_nav_menu( array(
								'theme_location'    => 'menu-2',
								'menu_id'           => 'primary-menu',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
						?>
					</ul>
				</div>
				<div class="mx-auto order-0">
					<a class="navbar-brand mx-auto" href="#"><?php the_custom_logo();?></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
					<ul class="navbar-nav mr-auto">
					<?php
							wp_nav_menu( array(
								'theme_location'    => 'menu-1',
								'menu_id'           => 'primary-menu',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							) );
						?>
					</ul>
				</div>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">


