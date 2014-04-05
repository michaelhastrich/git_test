<div class="feature-post">
	<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
		</a>
	<?php endif; ?>
	<h1 class="feature-title">
		<?php the_title() ?>
	</h1>
</div>