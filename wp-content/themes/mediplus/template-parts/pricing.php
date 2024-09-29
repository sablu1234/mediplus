<section class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Provide You The Best Treatment In Resonable Price</h2>
							<img src="<?php echo get_template_directory_uri()."/assets/img/section-img.png"?>" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">
				<?php
				$myservices = new WP_Query(
						array(
							'post_type'      => 'mprice',  // Replace with your custom post type
						),
					);
					if ( $myservices->have_posts() ) :
						while ( $myservices->have_posts() ) : $myservices->the_post();
					$iconclass=get_post_meta(get_the_id(),'iconclass',true);
					$package_price=get_post_meta(get_the_id(),'package_price',true);
					$bookingurl=get_post_meta(get_the_id(),'bookingurl',true);
					$myfeaturelist=get_post_meta(get_the_id(),'yourprefix_group_demo',true);
					
					
					?>

					<!-- Single Table -->
					<div class="col-lg-4 col-md-12 col-12">
						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
								<div class="icon">
									<i class="<?php echo esc_html($iconclass);?>"></i>
								</div>
								<h4 class="title"><?php echo esc_html(the_title());?></h4>
								<div class="price">
									<p class="amount"><?php echo esc_html($package_price);?><span>/ Per Visit</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<?php 
								if (is_array($myfeaturelist)) {
							
								foreach($myfeaturelist as $single_feature){	
									
								?>
								<li><i class="icofont icofont-ui-check"></i><?php echo esc_html($single_feature['title']);?></li>
						<?php 
								}
								}
						?>
							<div class="table-bottom">
								<a class="btn" href="<?php echo esc_html($bookingurl);?>">Book Now</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					<!-- End Single Table-->
				
					<?php 
					
					    endwhile;
						else :
							_e( 'Sorry, no posts were found.', 'textdomain' );
						endif;
					
					?>
				</div>	
			</div>	
		</section>	