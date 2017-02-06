<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<div class="col-md-5">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
			<h2><?php the_title(); ?></h2>

		<?php
		the_excerpt();
		?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->

</div>
