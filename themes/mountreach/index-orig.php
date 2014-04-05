<?php get_header(); ?>
	<div class="slider group">
	<?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '47' );?>
	</div>	
<div class="wrap">	
	<!-- section -->
	<section class="group" role="main">
	
	
	
	<div class="featured-challenges">
		<?php $the_query = new WP_Query( array( 'post_type' => 'uitdaging', 'posts_per_page' => 2, 'orderby' => 'date', 'order' => 'DSC' ) ); ?>
		<?php if ( $the_query->have_posts() ): ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="challenge">
			<div class="challenge-thumb">
				<?php the_post_thumbnail('challenge');?>
			</div>	
				<div class="challenge-txt">
					<h2 class="challenge-num"><?php the_field('mymountain'); ?></h2>
					<h1 class="challenge-title"><?php the_title(); ?></h1>
					<a class="bttn-register" href="<?php the_permalink(); ?>">Aanmelden</a>
					<a class="info-link" href="<?php the_permalink(); ?>">Info</a>
				</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else:  ?>
		<p><?php _e( 'Er zijn momenteel geen Uitdagingen.' ); ?></p>
		<?php endif; ?>
	</div>
	</section>
	<!-- /section -->
	
<?php get_sidebar('home'); ?>
	<!-- section -->
	<section role="main">
	
		<h1><?php _e( 'Laatste blog artikelen', 'theme' ); ?></h1>
	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>