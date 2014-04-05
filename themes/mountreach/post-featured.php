<article id="post-<?php the_ID(); ?>" <?php post_class('featured-post'); ?>>

  <div class="datebox">
    <span class="date-big"><?php the_time('j'); ?></span>
    <span class="date"><?php the_time('M ‘y'); ?></span>
  </div>
	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail('medium'); ?>
		</a>
	<?php endif; ?>
	<h2 class="post-title">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
  </h2>
  <?php html5wp_excerpt('html5wp_index');  ?>
</article>