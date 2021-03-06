<?php
/**
 * The template for displaying posts in the Image post format on index and archive pages.
 *
 * @package WordPress
 * @subpackage WP_Forge
 * @since WP-Forge 5.2.2.2
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wpforge' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">
        	<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'image' ) ); ?>" title="View all Image Posts"><i class="fa fa-picture-o"></i> <?php echo get_post_format_string( 'image' ); ?></a>
			<?php wpforge_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'wpforge' ), '<span class="edit-link"><i class="fa fa-pencil"></i> ', '</span>' ); ?>
			<?php get_template_part( 'content', 'author' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
