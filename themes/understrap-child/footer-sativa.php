<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>


<footer class="section bg-footer-lt py-5">
    <div class="container-fluid clearfix">
       
        <div class="row">
            
            <div class="col-md-4 image-col order-1 text-center border-secondary border-right mb-3">
                
            <?php dynamic_sidebar( 'left-custom' ); ?>
                <!-- <strong class="h5 text-secondary m-md-0 m-auto">Office Location & Business Hours</strong>
               <div class="text-secondary m-md-0 m-auto d-lg-flex justify-content-lg-around">
                <span class="my-4 my-lg-0">
                    
                   <strong>Sativa Water District</strong><br>
                    2015 East Hatchway Street<br>
                    Compton, CA 90222<br>
                </span>
                <span>
                    <strong>Business Hours</strong><br>
                    8AM-5PM (M-Th)<br>
                </span>
                
               </div> -->
               
                
            </div>
            
            <div class="col-md-4 d-flex order-3 mb-2 mb-md-0 order-md-2 justify-content-center align-items-center ">
                
                <?php dynamic_sidebar( 'center-custom' ); ?>
                <!-- <div class="text-secondary text-center">
                    
                            <span class="h5">For questions, contact: <br><strong>Russ Bryden</strong>, Assistant Interim Administrator <br><strong>(626)458-4334 <br> rbryden@dpw.lacounty.gov</strong></span>
                        
                </div> -->
                

            </div>
            <hr class="d-md-none">
            <div class="col-md-4 div-col order-2 order-md-3 border-secondary border-left d-flex justify-content-center align-items-center">
                <?php dynamic_sidebar( 'right-custom' ); ?>
                 <!-- <img class="img-fluid" src="<?php echo  get_stylesheet_directory_uri() . '/inc/img/county-seal-black.svg'; ?>" width="100px"> -->
            </div>

        </div>
            
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

