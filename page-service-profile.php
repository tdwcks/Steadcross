<?php /* Template Name: Service Profile */ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="service-profile">
		<section class="header blue">
			<div class="grid-container">
				<div class="row">
					<h1><?php the_title();?></h1>
				</div>
			</div>
		</section>
		<section class="page-nav">
			<div class="grid-container">
				<div class="row">
					<a class="base" href="<?php echo get_site_url(); ?>/services">Services</a>
					<a class="current-page" href="#"><?php the_title();?></a>
				</div>
			</div>
		</section>
		<section class="description">
			<div class="grid-container">
				<div class="row">
					<div class="col-8">
						<?php the_content(); ?>
					</div>
					<div class="col-4">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="metric">
			<div class="grid-inner">
				<div class="row">
					<div class="col-4">
						<?php if( get_field('metric_graphic') ): ?>
							<img src="<?php the_field('metric_graphic'); ?>" />
						<?php endif; ?>
					</div>
					<div class="col-6">
						<?php if( get_field('metric') ): ?>
							<h3><?php the_field('metric'); ?></h3>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<section class="cta">
			<div class="grid-container">
				<div class="row">
					<a href="<?php bloginfo('url'); ?>/contact" class="link-btn-one">
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