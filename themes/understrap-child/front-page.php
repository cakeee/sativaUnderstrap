<?php 

global $post;  
get_header('sativa'); 

?>
<style>
.bg-image {
    background-image: url(<?php echo get_theme_mod('homepage_image'); ?>);
}
</style>
<div class="bg-image home d-sm-none"></div>
<main class="bg-image home">

	<div class="container box-padding" >
		<div class="row content-box" >
				
				
			<div class="col-md-6 p-2 p-sm-5 m-4 m-md-0">
				
					<h1 class="font-weight-bold text-white text-center mt-md-4 mb-3 pb-md-4"><?php echo get_the_title(17); ?></h1>
					
					<div class="text-area-style mb-3 news">
						
						
							<?php 
							// WP_Query arguments
								$args = array(
									'post_type'              => array( 'update' ),
									'post_status'            => array( 'publish' ),
									'category_name' 		 => 'English',
								);

								// The Query
								$query = new WP_Query( $args );

								// The Loop
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post();
									?>
								<div class="news-loop">
									<h2 class="text-warning h5"><?php the_title()  ?> <br> <span><?php the_field('update_subtitle'); ?></span></h2>
									<h3 class="h6 text-white"> <?php  the_content(); ?></h3>
								
								</div>
								
								<?php }
								} else {
									// no posts found
								}

								// Restore original Post Data
								wp_reset_postdata();
								
							
							?>
						
						
						
						
					
					</div>
					
					<a role="button" class="btn btn-warning btn-md btn-responsive" href="/about-us"><?php echo esc_html__("LEARN MORE","understrap-child");  ?></a>
				
			</div>

			<div class="col-md-6 p-2 p-sm-5 m-4 m-md-0">

				<h1 class="font-weight-bold text-white text-center mb-3">Noticias y<br>Actualizaciones</h1>
					
					
				<div class="text-area-style mb-3 news" >
						
						<div class="news-loop">

						<h2 class="text-warning h5"><?php echo $title  ?></h2>
						<h3 class="h6 text-white"> <?php  echo $update ?> </h3>
						
						</div>
						
						
					</div>
					
					<a role="button" class="btn btn-warning btn-md btn-responsive" href="/about-us">APRENDA MÁS</a>
					
			</div>

			
		</div>
					
			
	</div>

   

	


</main>
<div class="section p-5">
		<div class="container">
							
					<form id="signup" name="login-form" action="https://public.govdelivery.com/accounts/CALACOUNTY/subscriber/qualify?qsp=CALACOUNTY_535"
							 accept-charset="UTF-8" method="post" target="_blank">
						<div class="row">
							<div class="col-md-6 offset-md-2">
								<input name="utf8" type="hidden" value="&#x2713;" />
								<input type="hidden" name="authenticity_token" value="QKN8ivbzMYAbFj53wFedWqzqTnwEvW56EXD7MTkUxomJoJATEJqYpJq7jc0KqP67wkVx03oSJhFcV22z16k8tA==" /> 
								<div class="form-group">
									<label for="customerEmail" class="sr-only">Email/Correo Electrónico</label>
									<input class="form-control light " id="customerEmail" name="customerEmail" type="email"
										onfocus="if(this.value == 'Email/Correo Electrónico') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Email/Correo Electrónico'; }"
										value="Email/Correo Electrónico" autocomplete="on">
								</div>
								
							</div>
							<div class="col-md-4">
								<button type="button" class="btn btn-primary-40 btn-lg text-white font-weight-bold btn-responsive"><?php echo esc_html__("SUBMIT/ENVIAR","understrap-child"); ?></button>
							</div>
						</div>
					</form>
					
					<div class="row">
						<div class="col-md-12 text-center pt-3 align-items-center text-white">
							<?php echo "<strong>" . esc_html__("Sign Up for Savita Los Angeles County Water District News &amp; Updates","understrap-child") .  "</strong>"; ?>
							<br>
							<?php echo esc_html__("Inscríbase para recibir las noticias y actualizaciones de Savita del Distrito de Agua del Condado de Los Angeles","understrap-child"); ?>
						</div>
					</div>
					
				
				</div>

			</div>
		</div>
</div>     




<?php get_footer('sativa');  ?>
