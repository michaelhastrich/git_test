<?php get_header(); ?>
<div class="wrap singlepost group"	
	<!-- section -->
	<section class="singlepost-content" role="main">
	<!-- post title -->
			<h1 class="post-title"><span><?php the_field('mymountain'); ?></span><?php the_title(); ?></h1>
			<!-- /post title -->
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
			
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			
			<?php the_content(); // Dynamic Content ?>
			<div id="form"><?php the_field('form');?></div>
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h1><?php _e( 'Sorry, nothing to display.', 'theme' ); ?></h1>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /section -->
	<section class="secondary group">
		<?php $the_intro = new WP_Query (array('post_type' => 'page', 'page_id' => 5));?>
		<?php while ($the_intro->have_posts()) : $the_intro->the_post();?>
		
		<article id="post-<?php the_ID(); ?>" <?php post_class('intro'); ?>>
			<?php the_content(); ?>
			<a class="cta-bttn" href="<?php the_field('cta-url'); ?>"><?php the_field('cta-bttn'); ?></a>
		</article>
	
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	

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
					<a class="info-link" href="<?php the_permalink(); ?>">Info</a>
				</div>
			</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else:  ?>
				<p><?php _e( 'Er zijn momenteel geen Uitdagingen.' ); ?></p>
			<?php endif; ?>
		</div><!-- /featured-challenges -->
		
		<div class="complementary-content group">
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
			</div>
		<!-- /complementary-content -->
	</section>	

</div><!-- /singlepost -->
<?php get_footer(); ?>