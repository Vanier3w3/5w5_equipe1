<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package time1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		the_post_thumbnail();
		echo '<h2>' . the_title() . '</h2>';
	?>
</article><!-- #post-<?php the_ID(); ?> -->