<?php
/**
 * Template Name: About Us Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('sativa'); 
?>

<main class="site-main container-fluid" id="about" role="main">
<?php 
while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'about' );
endwhile;
?>
</main>
<?php
get_footer('sativa');
