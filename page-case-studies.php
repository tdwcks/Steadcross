<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="case-studies">
		<section class="header green">
			<div class="grid-container">
				<div class="row">
					<h1><?php the_title();?></h1>
				</div>
			</div>
		</section>
		<section class="page-nav">
			<div class="grid-container">
				<div class="row">
					<a class="base" href="<?php echo get_site_url(); ?>/results">Results</a>
					<a class="current-page" href="<?php echo get_site_url(); ?>/case-studies"><?php the_title();?></a>
				</div>
			</div>
		</section>
		<section class="discovery-sub">
			<div class="grid-container">
			<?php query_posts(array('post_parent' => $post->ID, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>
				<div class="row">
					<a href="<?php echo get_permalink(); ?>" class="discovery-sub-item-two">
						<h2><?php the_title(); ?></h2>
						<h3><?php the_field('client_description'); ?></h3>
						<div class="diagonal"></div>
						<?php the_post_thumbnail(); ?>
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