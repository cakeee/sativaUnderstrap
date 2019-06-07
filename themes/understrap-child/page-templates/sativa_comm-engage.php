<?php
/**
 * Template Name: Community Engagement Loop Page
 *
 * Template for For the Community Engagement Page
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

	<main class="site-main" id="main" role="main">
		<div class="<?php echo esc_attr( $container ); ?>" id="content">
	
			<div class="row" id="primary">

			<?php while ( have_posts() ) : the_post(); ?>

					<div class="row">

						<!-- 	This outputs the post TITLE -->
						<h3 class="text-seal-blue h4 font-weight-bold">
							<?php the_title(); 
							
							if (get_field('update_subtitle')) {  ?>
							<br><span>
								<?php the_field('update_subtitle'); 
							}?>
							</span>
						</h3>
						<!-- <h2 class="entry-title"><a href="<?php //the_permalink(); ?>"><?php //the_title(); ?></a></h2> -->

						<!-- 	This outputs the post EXCERPT.  To display full content including images and html, 
							replace the_excerpt(); with the_content();  below. -->
						<div class="entry-summary">
							<?php the_content(); ?>
						</div>

						<!--	This outputs the post META information -->
						<div class="entry-utility">
							
							<?php edit_post_link( __( 'Edit', 'posts-in-page' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
						</div>
					</div>


					<?php endwhile; // end of the loop. ?>

			
			</div><!-- .row end -->
		</div><!-- #content -->
	</main><!-- #main -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer('sativa'); ?>
