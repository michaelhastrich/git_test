<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('blogpost'); ?>>

		<?=$post->current_post;?>
		<div class="datebox">
	    <span class="date-big"><?php the_time('j'); ?></span>
	    <span class="date"><?php the_time('M ‘y'); ?></span>
  	</div>
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a class="img-container" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('small'); ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		
		<!-- post title -->
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->
		
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		
	</article>
	<!-- /article -->
	
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'theme' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>