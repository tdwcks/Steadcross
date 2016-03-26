<?php get_header(); ?>
	<article class="home">
		<section class="slider">
			<div class="swiper-container">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide">
			           		<div class="grid-container">
				            	<div class="row">
				            		<div class="col-4">
					            		<h5>Helping our clients win</h5>
					            		<h1>450k</h1>
					            		<h3>New Business </br> in 3 months</h3>
					            		<a href="<?php echo get_site_url(); ?>/results/case-studies/aye-creative/">View Case Study</a>
				            		</div>
				            		<div class="col-6">
				            			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/logo-mask.png">
				            		</div>
				            	</div>
				            </div>
			            </div>
			            <div class="swiper-slide">
			            	<div class="grid-container">
				            	<div class="row">
				            		<div class="col-4">
					            		<h5>Helping our clients win</h5>
					            		<h1>450k</h1>
					            		<h3>New Business in 3 months</h3>
					            		<a href="<?php echo get_site_url(); ?>/results/case-studies/aye-creative/">View Case Study</a>
				            		</div>
				            		<div class="col-6">
				            			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/logo-mask.png">
				            		</div>
				            	</div>
				            </div>
			            </div>
			            <div class="swiper-slide">
			            	<div class="grid-container">
				            	<div class="row">
				            		<div class="col-4">
					            		<h5>Helping our clients win</h5>
					            		<h1>450k</h1>
					            		<h3>New Business in 3 months</h3>
					            		<a href="<?php echo get_site_url(); ?>/results/case-studies/aye-creative/">View Case Study</a>
				            		</div>
				            		<div class="col-6">
				            			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/logo-mask.png">
				            		</div>
				            	</div>
				            </div>
			            </div>
			            <div class="swiper-slide">
			            	<div class="grid-container">
				            	<div class="row">
				            		<div class="col-4">
					            		<h5>Helping our clients win</h5>
					            		<h1>450k</h1>
					            		<h3>New Business in 3 months</h3>
					            		<a href="<?php echo get_site_url(); ?>/results/case-studies/aye-creative/">View Case Study</a>
				            		</div>
				            		<div class="col-6">
				            			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/logo-mask.png">
				            		</div>
				            	</div>
				            </div>
			            </div>
			        </div>  
		        </div>
		        <div class="swiper-controls">
			        <div class="swiper-pagination"></div>
			        <div class="swiper-button-next"></div>
			        <div class="swiper-button-prev"></div>
			    </div>
		    </div>
		</section>
		<section class="results">
			<div class="grid-container">
				<div class="row">
					<div class="col-3">
						<h4>Working hard </br> for our clients</h4>
					</div>
					<?php 					 
						$args = array(
							'post_type' => 'result',
							'posts_per_page' => '3',
						);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
					?>
					<div class="col-3">
						<h5><?php the_title(); ?></h5>
					</div>
					<?php endwhile;?>
				</div>
			</div>
		</section>
		<section class="description">
			<div class="grid-container">
				<div class="row">
					<div class="col-8">
						<p class="large bold">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non arcu vitae ligula cursus lobortis. Maecenas at sodales nisi. </p>
						<p class="large">Sed est enim, placerat eget lacus sit amet, bibendum efficitur mi. Aliquam eleifend magna velit, sagittis auctor orci semper non. Nam placerat, lectus ac hendrerit ullamcorper, libero erat sodales nibh, sed convallis diam tellus sed erat.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="discovery">
			<div class="grid-container">
				<div class="row">
					<div class="col-4">
						<a class="discovery-item red" href="<?php echo get_site_url(); ?>/services">
							<h3>Services</h3>
							<p>Find out more</p>
						</a>
					</div>
					<div class="col-4">
						<a class="discovery-item green" href="<?php echo get_site_url(); ?>/results">
							<h3>Results</h3>
							<p>Find out more</p>
						</a>
					</div>
					<div class="col-4">
						<a class="discovery-item blue" href="<?php echo get_site_url(); ?>/why">
							<h3>Why Us?</h3>
							<p>Find out more</p>
						</a>
					</div>
				</div>
			</div>
		</section>
	</article>
	<script>
	    var swiper = new Swiper('.home .slider .swiper-container', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev'
	    });
    </script>
<?php get_footer(); ?>