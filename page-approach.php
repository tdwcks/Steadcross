<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="approach">
		<section class="header blue">
			<div class="grid-container">
				<div class="row">
					<h1>Our <?php the_title();?></h1>
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
		<section class="list">
			<div class="grid-inner">
				<div class="row">
					<div class="col-4">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/tea.png" alt="Brew"/>
					</div>
					<div class="col-8">
						<h3>Shouting About Your Successes</h3>
						<p>Sed est enim, placerat eget lacus sit amet, bibendum efficitur mi. Aliquam eleifend magna velit est enim.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-8">
						<h3>Helping to unlock your businesses’ full potential</h3>
						<p>Sed est enim, placerat eget lacus sit amet, bibendum efficitur mi. Aliquam eleifend magna velit est enim.</p>
					</div>
					<div class="col-4">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/lock.png" alt="Unlock"/>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/book.png" alt="Leaf"/>
					</div>
					<div class="col-8">
						<h3>We nourish your business relationships</h3>
						<p>Sed est enim, placerat eget lacus sit amet, bibendum efficitur mi. Aliquam eleifend magna velit est enim.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-8">
						<h3>Finding new opportunities for your business</h3>
						<p>Sed est enim, placerat eget lacus sit amet, bibendum efficitur mi. Aliquam eleifend magna velit est enim.</p>
					</div>
					<div class="col-4">
						<img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-symbol.svg" alt="Owl"/>
					</div>
				</div>
			</div>
		</section>
		<section class="cta">
			<div class="grid-container">
				<div class="row">
					<a href="#" class="link-btn-one">
						<h3>Interested? Book a </br> free coffee today</h3>
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