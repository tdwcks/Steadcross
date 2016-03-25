<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="contact">
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
					<div class="col-8">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="contact-block">
			<div class="grid-container">
				<div class="row">
					<div class="col-4">
						<h4>Phone</h4>
						<a href="tel:01484 294490">01484 294490</a>
						<h4>Email</h4>
						<a href="mailto:info@steadcross.com">info@steadcross.com</a>
						<h4>Address</h4>
						<p>The Media Centre </br>7 Northumberland Street</br> Huddersfield</br> West Yorkshire HD1 1RL</p>
					</div>
					<div class="col-8">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
		</section>
	</article>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>