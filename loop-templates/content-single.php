<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<div class="col-md-6">
	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
	<div class="posted-on-wrap">
		<?php understrap_posted_on(); ?>
	</div>
	<div class="addthis_inline_share_toolbox"></div>

	<?php
	wp_link_pages( array(
		'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
		'after'  => '</div>',
	) );
	?>

</div>

<div class="col-md-8">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_content(); ?>
</div>
</article><!-- #post-## -->
