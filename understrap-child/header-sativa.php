<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900|Raleway:300,400,500,600,700|Crete+Round:400i"
        rel="stylesheet" type="text/css">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<!-- Header -->
        <header>
            <section class="navbar navbar-expand-lg bg-med-blue">
                <div class="container-fluid mx-5 d-flex justify-content-md-between justify-content-center">

                    <a class="navbar-brand mr-0 align-items-center pt-3 p-lg-2" role="heading" aria-level="1" href="/">
                        <img src="<?php echo trailingslashit( get_stylesheet_directory_uri() ) . 'inc/img/Sativa-Logo.svg'?>" class="d-inline-block img-fluid mb-1" style="width:15.5em;" alt="Sativa Los Angeles County Water District">
                    </a>

                    <a class="btn btn-warning btn-lg btn-responsive" role="button" href="https://ww2.e-billexpress.com/ebpp/SativaWater/"> PAY BILL / PAGO DE FACTURA</a>


                </div>
                <!-- ./container -->
            </section>
        </header>
    <!-- End Header -->


	<nav class="navbar navbar-expand-lg bg-seal-blue">
            
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
        


		<!-- The WordPress Menu goes here -->
		<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
           
         
    </div>
</nav>
	</div><!-- #wrapper-navbar end -->
