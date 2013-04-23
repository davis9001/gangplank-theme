<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _straps
 * @since _straps 1.0
 */

get_header(); ?>
<div class="row-fluid">
	<div class="span12">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php _straps_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>
	</div>
</div>
<?php get_footer(); ?>
