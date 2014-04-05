<?php get_header(); ?>
	
	<!-- section -->
	<section role="main">
	
		<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
		<?php
		if (is_home() ){?>
		<?php
        $latest_post = new WP_Query("showposts=1");
        if($latest_post->have_posts()) :
    ?>
    <div class="feature-post">
        <?php
            while($latest_post->have_posts()):
                $latest_post->the_post();
        ?>
        <!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
        <h1 class="feature-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h1>
        <!-- post details -->
    <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
    <span class="author"><?php _e( 'Published by', 'theme' ); ?> <?php the_author_posts_link(); ?></span>
    <span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'theme' ), __( '1 Comment', 'theme' ), __( '% Comments', 'theme' )); ?></span>
    <!-- /post details -->
    
    <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
        <?php endwhile ?>
    </div>
    <?php endif ?>


		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->
	<?php } else { ?>
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	<?php } ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>