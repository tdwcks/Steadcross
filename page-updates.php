<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="updates">
		<section class="header green">
			<div class="grid-container">
				<div class="row">
					<h1><?php the_title();?></h1>
				</div>
			</div>
		</section>
		<section class="description">
			<div class="grid-container">
				<div class="row">
					<div class="col-8">
					<?php query_posts(array('post_type' => 'post')); while (have_posts()) { the_post(); ?>
						<a class="blog-post" href="<?php echo get_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
							<h5><?php $categories = get_the_category();
								if ( ! empty( $categories ) ) {
								    echo esc_html( $categories[0]->name );   
								} ?></h5>
							<p>
							<?php
								$words = explode(" ",strip_tags(get_the_content()));
								$content = implode(" ",array_splice($words,0,35));
								echo $content;
							?>
							</p>
							<?php the_post_thumbnail(); ?>
						</a>
					<?php }  
					 wp_reset_query(); ?>
					</div>
					<div class="col-4">
						<h5>Categories</h5>
						<ul>
							<li>News</li>
							<li>Opinion</li>
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