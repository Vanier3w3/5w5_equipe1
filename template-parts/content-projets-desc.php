<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package time1
 */
?>
<div class="contenu" id="desc-<?php the_ID();?>">
	<a class="close">&#9746;</a>
	<div>
		<?php
		echo "<h2>" . get_the_title() . "</h2>"; 
		the_post_thumbnail("large");
		echo  get_the_content() ?>
	</div>
</div>
