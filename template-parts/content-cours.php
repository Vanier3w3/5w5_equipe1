<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package time1
 */
global $propriete;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php ;?>">
		<h2><?php echo $propriete['titre'];?></h2>
		<a href="<?php echo esc_url( home_url('/category/cours/' . $propriete['typeLabel']));?>">
			<h3><?php echo $propriete['typeLabel'];?></h3>
		</a>
	</a>
	<div style="display: none;">
		<h3><?php echo the_content()?></h3>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->