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

	</a>
	<div class="contenu_futur">
		<h3><?php echo the_content()?></h3>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->