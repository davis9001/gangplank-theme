<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _straps
 * @since _straps 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', '_straps' ), 'after' => '</div>' ) ); ?>
	<?php edit_post_link( __( 'Edit', '_straps' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->


