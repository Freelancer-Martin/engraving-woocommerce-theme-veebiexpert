<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Graveering
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'graveering' ); ?></a>

	<div class="navbar navbar-expand-lg navbar-light bg-light shadow">
		<div class="container">
			<a class="navbar-brand" href="#">			
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$graveering_description = get_bloginfo( 'description', 'display' );
					if ( $graveering_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $graveering_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
				<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'graveering' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
	</nav><!-- #site-navigation -->
			</ul>
			</div>
		</div>
	</div>


	<!-- Full Page Image Header with Vertically Centered Content -->
	<header class="masthead">
		<div class="row align-items-center">
				<div class="header-img-container col-xs-12 col-sm-6 col-lg-6 text-center">
					<div class="container text-center"  >
						<h1 class="header-image-title font-weight-light">VALI TOODE JA LISA GRAVEERING</h1>
						<h1 class="header-image-title font-weight-light">--------</h1>
						<p class="lead header-image-text">A great starter layout for a landing page</p>
					<button type="button" class="header-image-text btn btn-default">Default</button>
					</div>
				</div>
				<div class="box col-xs-12 col-sm-12 col-lg-12" >
				<div class="col-xs-12 col-sm-12 col-lg-12 text-center">
					<div class="white-box-container" >	
						<div class="white-vert-box"  ></div>
					</div>
					<img class="header-image"  src="https://images.pexels.com/photos/1303081/pexels-photo-1303081.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
				</div>
			</div>
		</div>
		
				
	</header>
	
	

