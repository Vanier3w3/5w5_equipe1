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
	<header class="entry-header">
		<h1><?php echo $propriete['titrePartiel'];?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">

	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->