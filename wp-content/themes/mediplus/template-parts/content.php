<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Keep up with Our Most Recent Medical News.</h2>
							<img src="<?php echo get_template_directory_uri()."/assets/img/section-img.png"?>" alt="#">
							<p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
						</div>
					</div>
				</div>
				<div class="row">

                <?php

                if(have_posts()):
                    while(have_posts()): the_post();
                
                ?>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<?php the_post_thumbnail('medium',['class' => 'news-head', 'title' => 'Feature image']);?>
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">
                                        <?php the_date('d M, Y');?>
                                    </div>
									<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
									<p class="text"><?php the_content();?></p>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
                    <?php
                    endwhile;
                    endif;
                    ?>
				
				</div>
			</div>
		</section>