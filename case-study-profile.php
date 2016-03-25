<?php /* Template Name: Case Study Profile */ ?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="case-study-profile">
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
					<a class="base" href="<?php echo get_site_url(); ?>/case-studies">Case Studies</a>
					<a class="current-page" href="/services"><?php the_title();?></a>
				</div>
			</div>
		</section>
		<section class="description">
			<div class="grid-container">
				<div class="row">
					<div class="col-8">
						<h3><?php the_field('aims'); ?></h3>
						<?php the_post_thumbnail(); ?>
						<?php the_content(); ?>
					</div>
					<div class="col-4">
						<h5>Services</h5>
						<?php 

							$field = get_field_object('services');
							$value = $field['value'];
							$choices = $field['choices'];

							if( $value ): ?>
							<ul>
								<?php foreach( $value as $v ): ?>
								<li>
									<?php echo $choices[ $v ]; ?>
								</li>
								<?php endforeach; ?>
							</ul>
							<?php endif; ?>
					</div>
				</div>
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