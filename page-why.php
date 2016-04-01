<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="why">
		<section class="header blue">
			<div class="grid-container">
				<div class="row">
					<h1><?php the_title();?> Steadcross?</h1>
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
					<h2>We Believe In:</h2>
				</div>
				<div class="row">
					<div class="col-4">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/megaphone.png" alt="Megaphone"/>
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
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/leaf.png" alt="Leaf"/>
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
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/graphics/owl.png" alt="Owl"/>
					</div>
				</div>
			</div>
		</section>
		<section class="cta">
			<div class="grid-container">
				<div class="row">
					<a href="<?php bloginfo('url'); ?>/approach" class="link-btn-one">
						<h3>Find out more about our approuch</h3>
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/svg/arrow-right.svg">
					</a>
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