<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php if ($wp_query->current_post == 0): ?>

		<?php get_template_part('post', 'featured'); ?>

	<?php else: ?>

		<?php get_template_part('post', 'normal'); ?>

	<?php endif; ?>

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e('Sorry, nothing to display.', 'theme'); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>