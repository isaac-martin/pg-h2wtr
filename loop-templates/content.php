<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<?php
// $event_index = 1;
// $term_list_name = wp_get_post_categories($post->ID, array("fields" => "names"));
$categories = get_the_category($post->ID);
$slug_out = array();

foreach($categories as $category){
    $slug_out[] = $category->slug;
}



echo '<div class="content_filterable col-md-5 article-wrap '.implode(' ', $slug_out).'">'; ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink(); ?>">

<div class="image-bg">
	<div class="img-wrap" data-mh="single-blog">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' ); ?>
			<img src="<?php echo $image[0]; ?>" class="">
	</div>
	<span class="read-article">Read Article</span>
</div>

	<div class="entry-content">
			<h2 class="text-center"><?php the_title(); ?></h2>

		<!-- <?php
		the_excerpt();
		?> -->

    <?php
  $content = get_the_content();
  echo substr(strip_tags($content), 0, 118) . '...';
?>


		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->
</a>
</article><!-- #post-## -->

</div>
