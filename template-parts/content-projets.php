<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package time1
 */
?>

<div class="conteneur1" id="<?php the_ID();?>" >
	<div class="info">
		<?php the_post_thumbnail ('thumbnail'); 
		echo '<h1>' . get_the_title() . '</h1>';
		?>
	</div>
	<div class="contenu" id="desc-<?php the_ID();?>">
		<div>
			<?php
			echo "<h2>" . get_the_title() . "</h2>"; 
			the_post_thumbnail("large");
			echo  get_the_content() ?>
		</div>
	</div>

</div>