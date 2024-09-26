<section class="schedule">
			<div class="container">
				<div class="schedule-inner">
					<div class="row">
					<?php
				$myservices = new WP_Query(
						array(
							'post_type'      => 'schedule',  // Replace with your custom post type
						),
					);
					if ( $myservices->have_posts() ) :
						while ( $myservices->have_posts() ) : $myservices->the_post();
					?>

						<div class="col-lg-4 col-md-6 col-12 ">
							<!-- single-schedule -->
							<div class="single-schedule first">
								<div class="inner">
									<div class="icon">
										<i class="fa fa-ambulance"></i>
									</div>
									<div class="single-content">
										<span><?php echo esc_html(the_title());?></span>
										<h4><?php echo esc_html(the_excerpt());?></h4>
										<p><?php echo esc_html(the_content());?></p>
										<a href="<?php the_permalink();?>">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
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
		</section>