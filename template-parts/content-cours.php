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
		<h3><?php echo $propriete['sigle'];?></h3>
	</a>
	<div class="contenu_projets">
		<h3><?php echo the_content()?></h3>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->