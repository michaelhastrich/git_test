<?php /* Template Name: HomePage */
get_header(); ?>
	<div class="slider group">
		<?php if (function_exists('soliloquy_slider')) soliloquy_slider('47'); ?>
	</div>
<div class="wrap">
	<!-- section -->
	<section class="group" role="main">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('intro'); ?>>

				<?php the_content(); ?>
				<a class="cta-bttn" href="#  "><?php the_field('cta-bttn'); ?></a>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e('Sorry, nothing to display.', 'theme'); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->

	<section id="home-blogrole">
		<h1>Laatste blog artikelen</h1>

		<?php
		$posts = get_posts(array('posts_per_page' => 5));
		$i=0;
		foreach ($posts as $post):
			setup_postdata($post);

			if ($i == 0):
				get_template_part('post', 'featured');
			else:
				get_template_part('post', 'normal');

			endif;

			$i++;
		endforeach;
		?>
	</section>



<?php get_footer(); ?>