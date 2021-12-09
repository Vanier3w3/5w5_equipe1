<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-sc
 */
global $tPropriété;

?>
<div class="conteneur1">
	<div class="info">
		<?php the_post_thumbnail ('thumbnail'); 
		echo '<h1>' . get_the_title() . '</h1>';
		?>
	</div>
	<div class="contenu">
		<!--?php the_content();?-->
	</div>



</div>

