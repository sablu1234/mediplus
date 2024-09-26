<section class="portfolio section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
							<img src="<?php echo get_template_directory_uri()."/assets/img/section-img.png"?>" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="owl-carousel portfolio-slider">
						<?php
				$myservices = new WP_Query(
						array(
							'post_type'      => 'portfolio',  // Replace with your custom post type
						),
					);
					if ( $myservices->have_posts() ) :
						while ( $myservices->have_posts() ) : $myservices->the_post();
					?>

						
							<div class="single-pf">
								<!-- <img src="<?php //echo get_template_directory_uri()."/assets/img/pf1.jpg"?>" alt="#"> -->
								<?php the_post_thumbnail();?>
								<a href="<?php the_permalink();?>" class="btn"><?php echo esc_html(the_title());?></a>
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
		</section>