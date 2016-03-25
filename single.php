<?php get_header(); ?>	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="case-study-profile">
		<section class="header green">
			<div class="grid-container">
				<div class="row">
					<h1>Updates</h1>
				</div>
			</div>
		</section>
		<section class="page-nav">
			<div class="grid-container">
				<div class="row">
					<a class="base" href="<?php echo get_site_url(); ?>/updates">Updates</a>
					<a class="current-page" href="#"><?php the_title();?></a>
				</div>
			</div>
		</section>
		<section class="description">
			<div class="grid-container">
				<div class="row">
					<div class="col-8">
						<h3><?php the_title();?></h3>
						<?php echo the_content(); ?>
					</div>
					<div class="col-4">
					<h5>Category</h5>
					<ul>
						<li><?php $categories = get_the_category();
							if ( ! empty( $categories ) ) {
							    echo esc_html( $categories[0]->name );   
							} ?></li>
					</ul>
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