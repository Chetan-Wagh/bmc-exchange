<?php
/**
 *
 * The default template for displaying Video post format
 *
 **/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(is_single() ? 'single-page' : 'archive-page'); ?>>
	<?php get_template_part( 'content', 'header'); ?>
	<?php if(is_single()) : ?>
		<?php get_template_part( 'content', 'meta' ); ?>
	<?php endif; ?>

	<?php if ( is_home() || is_search() || is_archive() || is_tag()) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php get_template_part( 'content', 'featured'); ?>
		<?php the_content(''); ?>
		
		<?php if(is_single()) : ?>
			<?php get_template_part( 'content', 'footer' ); ?>
		<?php endif; ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php get_template_part( 'content', 'featured'); ?>
		<?php the_content(''); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'events' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		
		<?php if(is_single()) : ?>
			<?php get_template_part( 'content', 'footer' ); ?>
		<?php endif; ?>
	</div><!-- .entry-content -->
	<?php endif; ?>
	
	<?php if(is_single()) : ?>
		<?php get_template_part( 'author', 'bio' ); ?>
	<?php endif; ?>
</article><!-- #post -->