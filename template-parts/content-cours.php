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
<<<<<<< HEAD
	<a href="<?php ;?>">
		<h2><?php echo $propriete['titre'];?></h2>
		<h3><?php echo $propriete['sigle'];?></h3>
	</a>
	<div class="contenu_projets">
		<h3><?php echo the_content()?></h3>
=======
	<h2><?php echo $propriete['titrePartiel'];?></h2>
	<h3><?php echo $propriete['sigle'];?></h3>
	<h3><?php echo $propriete['typeCours'];?></h3>
	<div class="contenu_cours">
		<?php echo the_content()?>
>>>>>>> main
	</div>
</article><!-- #post-<?php the_ID(); ?> -->