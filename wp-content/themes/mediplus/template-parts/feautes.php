<section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Are Always Ready to Help You & Your Family</h2>
							<img src="<?php echo get_template_directory_uri()."/assets/img/section-img.png"?>" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
					
					$myservices = new WP_Query(
						array(
							'post_type'      => 'mywonlider',  // Replace with your custom post type
						),
					);
					if ( $myservices->have_posts() ) :
						while ( $myservices->have_posts() ) : $myservices->the_post();
					$icon=get_post_meta(get_the_id(),'unique_key',true);
					?>
					<div class="col-lg-4 col-12">
						<!-- Start Single features -->
						<div class="single-features">
							<div class="signle-icon">
								<i class="<?php echo $icon;?>"></i>
							</div>
							<a href="<?php the_permalink();?>"><h3><?php echo esc_html(the_title());?></h3></a>
							<p><?php the_excerpt();?></>
						</div>
						<!-- End Single features -->
					</div>
					<?php 
					    endwhile;
						else :
							_e( 'Sorry, no posts were found.', 'textdomain' );
						endif;
					
					?>
					
				</div>
			</div>
		</section>