<?php
/**
 * Template Name: Full Width Page Loop
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published Used for loops.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('sativa');
global $post;
$container = get_theme_mod( 'understrap_container_type' );
$featuredImage_pre_loop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>
<?php	if(has_post_thumbnail()) { ?>
			<div class="bg-image" style="background-image: url(<?php  echo $featuredImage_pre_loop[0]; ?>);"></div>
<?php } ?>

<div id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">
	
		<div class="row">

			<div class="col-md-6 p-5 text-secondary content-area" id="primary">

				<main class="site-main" id="main" role="main">
				<header class="entry-header text-secondary">

<?php the_title( '<h1 class="font-weight-bold d-none d-md-block mb-4">', '</h1>' ); ?>
<?php the_title( '<h1 class="font-weight-bold d-block d-md-none text-center mb-4">', '</h1>' ); ?>
	</header><!--.entry-header -->
	<hr class="color-hr"> 
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'loop' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer('sativa'); ?>
