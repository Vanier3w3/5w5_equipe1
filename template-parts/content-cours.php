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
	<h1><?php echo $propriete['titrePartiel'];?></h1>
	<h2><?php echo $propriete['typeCours'];?></h2>
	<section>
		<h2><?php echo the_content()?></h2>
	</section>
</article><!-- #post-<?php the_ID(); ?> -->