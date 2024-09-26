<section class="why-choose section" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2><?php 
									$myoption_field = get_option( 'myuniqueidthemeoption' );
									// var_dump($myoption_field);
									echo $myoption_field['about-headone'];
									?></h2>
							<img src="<?php echo get_template_directory_uri()."/assets/img/section-img.png"?>" alt="#">
							<p><?php 
									$myoption_field = get_option( 'myuniqueidthemeoption' );
									// var_dump($myoption_field);
									echo $myoption_field['about-headtwo'];
									?></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-12">
						<!-- Start Choose Left -->
						<div class="choose-left">
							<h3><?php 
									$myoption_field = get_option( 'myuniqueidthemeoption' );
									// var_dump($myoption_field);
									echo $myoption_field['abouttitle'];
									?></h3>
							<p><?php 
									$myoption_field = get_option( 'myuniqueidthemeoption' );
									// var_dump($myoption_field);
									echo $myoption_field['aboutdes'];
									?></p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="list">
									<?php 
									$myoption_field = get_option( 'myuniqueidthemeoption' );
									// var_dump($myoption_field);
									$myfeature_list= $myoption_field['aboutfeature'];
									if(!empty($myfeature_list)){
										// var_dump($myfeature_list);
									foreach($myfeature_list as $single_feature){
										// echo $single_feature['feature-option'];
										?>
										<li><i class="fa fa-caret-right"></i><?php  echo $single_feature['feature-option'];?></li>	
										<?php
									}
									}
									else{
										echo "enter your statice feature";
									}
									
									?>
								
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="list">
									<?php 
									$myoption_field = get_option( 'myuniqueidthemeoption' );
									$myfeature_list= $myoption_field['aboutfeature2'];
									if(!empty($myfeature_list)){
										foreach($myfeature_list as $single_feature){
										
											?>
											<li><i class="fa fa-caret-right"></i><?php 
											 echo $single_feature['feature-option2'];
											 ?></li>	
											<?php
										}
									}
									else{
										echo "no";
									}
									
									?>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Choose Left -->
					</div>
					<div class="col-lg-6 col-12">
						<!-- Start Choose Rights -->
						<div class="choose-right">
							<div class="video-image">
								<!-- Video Animation -->
								<div class="promo-video">
									<div class="waves-block">
										<div class="waves wave-1"></div>
										<div class="waves wave-2"></div>
										<div class="waves wave-3"></div>
									</div>
								</div>
								<!--/ End Video Animation -->
								<iframe width="560" height="315" src="<?php 
									$myoption_field = get_option( 'myuniqueidthemeoption' );
									// var_dump($myoption_field);
									echo esc_url($myoption_field['about-video']);
									?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>
						</div>
						<!-- End Choose Rights -->
					</div>
				</div>
			</div>
		</section>