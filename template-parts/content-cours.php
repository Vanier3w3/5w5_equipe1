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
	<div class="infoCours">
		<h2><?php echo $propriete['titrePartiel'];?></h2>
		<h3><?php echo $propriete['sigle'];?></h3>
		<h3><?php echo $propriete['typeCours'];?></h3>
<<<<<<< HEAD
	</div>
	<div class="contenu_cours">
		<?php echo the_content()?>
=======
>>>>>>> a668f360474323df1dd4d6c77afa575762617b08
	</div>
	<div class="contenu_cours">
		<?php echo the_content()?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

