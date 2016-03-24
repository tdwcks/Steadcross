<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="about">
		<section class="header blue">
			<div class="grid-container">
				<div class="row">
					<h1><?php the_title();?></h1>
				</div>
			</div>
		</section>
		<section class="description">
			<div class="grid-container">
				<div class="row">
					<div class="col-10">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
	</article>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>