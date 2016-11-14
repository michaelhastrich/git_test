<?php
	/*
	Template Name: HomePage
	*/ 
get_header(); ?>
<div class="slider group">
	<?php if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '47' );?>
</div>	
<div class="wrap group">	
	<!-- section -->
	<section class="primary group" role="main">
	
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('intro'); ?>>
			
				<?php the_content(); ?>
				<a class="cta-bttn" href="<?php the_field('cta-url'); ?>"><?php the_field('cta-bttn'); ?></a>
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
	
		<div class="featured-challenges group">
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
					<a class="bttn-register" href="<?php the_permalink();echo'#form'  ?>">Aanmelden</a>
					<a class="info-link" href="<?php the_permalink();?>">Info</a>
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
	<section class="home-blogrole group">
		<h1 class="blogheader">Laatste blog artikelen</h1>
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
	<a class="all-posts" href="<?php 
		if( get_option( 'show_on_front' ) == 'page' ) echo get_permalink( get_option('page_for_posts' ) );
		else echo bloginfo('url');?>">Bekijk al het nieuws</a>	
	</section>
	
	<section class="secondary group">
		<div class="complementary-content group">
			<?php get_sidebar(); ?>

			<div class="about group">
				<div class="testimonial">
					<h3>Testimonials</h3>
					<?php $the_testimonial = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => 3, 'orderby' => 'rand') ); ?>
					<div id="owl-example" class="owl-carousel">
							
					<?php if ( $the_testimonial->have_posts() ): ?>
					<?php while ( $the_testimonial->have_posts() ) : $the_testimonial->the_post(); ?>
						<div class="testimonial-item">
							<p class="testimonial-txt"><?php the_field('short_test'); ?></p>	
							<span class="client"> <?php the_title(); ?></span>
							<a href="<?php echo get_permalink();?>">Lees de hele testimonial</a>
							<a class="overview-link" href="<?php echo site_url();?>/testimonials">Bekijk alle testimonials</a>
						</div>		
					<?php endwhile; ?>
					
					</div>
					<?php wp_reset_postdata(); ?>
					<?php else:  ?>
					<p><?php _e( 'Er zijn momenteel testimonials.' ); ?></p>
					<?php endif; ?>
				</div><!-- /testimonial -->
				<div class="personal">
						<?php
						$personal = new WP_Query('page_id=73');?>	 
						<?php if ( $personal->have_posts() ) : ?>
						<?php while ( $personal->have_posts() ) : $personal->the_post(); ?>
							<?php global $more;
							$more = 0;
							?>
    					<h3>Over <?php the_title(); ?></h3>
    					<?php the_post_thumbnail(array(75,75,true) ); ?>
    					<p><?php the_field('profiel'); ?></p>
    					<a href="<?php the_permalink();?>">Lees verder</a>
  					<?php endwhile; ?>
  
  					<?php wp_reset_postdata(); ?>

						<?php else:  ?>
  						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
				</div>
			</div><!-- /about -->

			<div class="challenges group">
				<?php 
				$args = array( 
					'post_type' => 'uitdaging', 
					'posts_per_page' => 4, 
					'orderby' => 'date', 
					'order' => 'DSC',
					'offset' => 2
					);
				$the_query = new WP_Query($args); ?>
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
				<p><?php _e( 'Hier vind je binnenkort nog meer MyMountain-uitdagingen.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<!-- /complementary-content -->
	</section>
<?php get_footer(); ?>