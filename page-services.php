<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="approach">
		<section class="header red">
			<div class="grid-container">
				<div class="row">
					<h1>Our <?php the_title();?></h1>
				</div>
			</div>
		</section>
		<section class="description">
			<div class="grid-container">
				<div class="row">
					<div class="col-8">
						<p class="large bold">With a variety of different services, we help our clients in all aspects of their businesses.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="discovery-sub">
			<div class="grid-container">
			<?php query_posts(array('post_parent' => $post->ID, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>
				<div class="row">
					<a class="discovery-sub-item">
						<h2><?php the_title(); ?></h2>
						<?php the_post_thumbnail(); ?>
						<img class="arrow" src="<?php bloginfo('stylesheet_directory'); ?>/img/svg/arrow-right-green.svg">
					</a>
				</div>
			<?php }  
			 wp_reset_query(); 
			?>
			</div>
		</section>
		<section class="cta">
			<div class="grid-container">
				<div class="row">
					<a href="#" class="link-btn-one">
						<h3>Interested? Book a free coffee today</h3>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/svg/arrow-right.svg">
					</a>
				</div>
			</div>
		</section>
	</article>
	<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
<?php get_footer(); ?>