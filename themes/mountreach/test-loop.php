<?php $postnum = 0; if (have_posts()) : ?>
<?php while (have_posts()) : $postnum = $postnum + 1; the_post(); ?>
<?php if ($postnum == 1 ) { ?>
<h1><?php the_title(); ?></h1>
<?php } ?>

<?php if ($postnum >= 2 ) { ?>
<h2><?php the_title(); ?></h2>
<?php } ?>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'theme' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>