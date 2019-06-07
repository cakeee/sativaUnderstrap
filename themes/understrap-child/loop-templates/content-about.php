<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="row">
	<!-- Left Column -->
	<div class="col-md-6 p-5 text-secondary">

		<?php
			the_content();
		?>
	</div>
	
	<!-- Right Column -->
	<div class="col-md-6">

		<div class="row half-half top">
			<div class="col-md-12 text-center p-2 p-md-5 align-items-center">
					<h2 class="display-4 mb-3 d-flex align-items-center text-center justify-content-center text-white "><?php echo esc_html__( 'Online Bill Pay','understrap-child'); ?> </h2>
					<div class="row d-flex align-items-center mb-4 mb-md-0 text-center justify-content-center w-100">
						<div class="col-md-12 mb-1 mb-md-0 px-0">
							<a role="button" href="https://ww2.e-billexpress.com/ebpp/SativaWater/" class="btn btn-primary-40 btn-lg text-white font-weight-bold"><?php echo esc_html__("PAY
							BILL", 'understrap-child'); ?></a>
						</div>
					</div>
					
				</div>
			</div> <!-- End Bill Pay  -->   
		   

			<div class="row half-half bottom">
				<div class="col-md-12 align-items-center p-0">
					<div class="p-3 p-md-5 bg-dark-transparent d-flex text-center justify-content-center text-white h-100">
						<div class="text-left w-100">
							<?php the_field('feeback_form'); ?>
						</div>
						</div>
					</div>    
				</div>
			</div>
	</div>

</div>