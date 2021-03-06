<?php
/**
 * The template for displaying all single posts.
 *
 * @package Great Outdoors
 */

get_header(); ?>

	<div class="row" data-equalizer>
		    <?php echo great_outdoors_create_primary_column(); ?>
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'templates/content', 'single' ); ?>

						<?php great_outdoors_post_nav(); ?>

		        	<?php
			        	// If comments are open or we have at least one comment, load up the comment template
				        if ( comments_open() || '0' != get_comments_number() ) :
					        comments_template();
				        endif;
        			?>

		            <?php endwhile; // end of the loop. ?>

        		</main><!-- #main -->
	        </div><!-- #primary -->
        </div><!-- .columns -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>