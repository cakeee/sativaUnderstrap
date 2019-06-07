<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<!-- <header class="entry-header"> -->

		<?php // the_title( '<h1 class="font-weight-bold d-none d-md-block mb-4">', '</h1>' ); ?>
		<?php //the_title( '<h1 class="font-weight-bold d-block d-md-none text-center mb-4">', '</h1>' ); ?>
	<!-- </header>.entry-header -->
	<!-- <hr class="color-hr"> -->
	
	 <?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

	<div class="news-loop page">
	
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
		<?php echo do_shortcode("[ic_add_posts post_type='update']"); ?>
	</div>

	<!--	This outputs the post META information -->
	<div class="entry-utility">
		
		<?php edit_post_link( __( 'Edit', 'posts-in-page' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
	</div>
</div>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
