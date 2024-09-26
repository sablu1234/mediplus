<div class="clients overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="owl-carousel clients-slider">

						<?php
				$myservices = new WP_Query(
						array(
							'post_type'      => 'client',  // Replace with your custom post type
						),
					);
					if ( $myservices->have_posts() ) :
						while ( $myservices->have_posts() ) : $myservices->the_post();
					?>
							<div class="single-clients">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
							</div>

							<?php 
					    endwhile;
						else :
							_e( 'Sorry, no posts were found.', 'textdomain' );
						endif;
					
					?>
							
						</div>
					</div>
				</div>
			</div>
		</div> 