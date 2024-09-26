<div id="fun-facts" class="fun-facts section overlay">
			<div class="container">
				<div class="row">

						<?php
				$myservices = new WP_Query(
						array(
							'post_type'      => 'count_down',  // Replace with your custom post type
						),
					);
					if ( $myservices->have_posts() ) :
						while ( $myservices->have_posts() ) : $myservices->the_post();
					$icon=get_post_meta(get_the_id(),'unique_key_count',true);
					?>

					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Fun -->
						<div class="single-fun">
							<i class="<?php echo $icon;?>"></i>
							<div class="content">
								
								<a href="<?php the_permalink();?>"><span class="counter"><?php echo esc_html(the_title());?></span></a>
								<p><?php echo esc_html(the_excerpt());?></p>
							</div>
						</div>
						<!-- End Single Fun -->
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