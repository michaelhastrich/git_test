<?php get_header(); ?>
	<div class="wrap singlepage group">
		<!-- section -->
		<section class="single-page-content group" role="main">
			<h1><?php _e( 'Pagina werd niet gevonden', 'theme' ); ?></h1>
				
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>
			
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Terug naar de homepage', 'theme' ); ?></a>
				</h2>

			</article>
			<!-- /article -->
		</section>
	</div><!-- /wrap -->
<?php get_footer(); ?>