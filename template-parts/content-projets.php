<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package time1
 */
?>

<article class="flip-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="flip-card-inner">
<div class="flip-card-front">
	<?php
		the_post_thumbnail();
		echo '<h2>' . the_title() . '</h2>';
	?>
</div>
</div>
<div class="flip-card-back">
    
     <h1><a href="<?php echo get_permalink() ?>"><?php the_title();?></a></h1>
     <p><a href="<?php echo get_permalink() ?>"><?php the_archive_title();?></a></p>
    <p><a href="<?php echo get_permalink() ?>"><?php the_author();?></a> </p>
</div>
</div>

</article><!-- #post-<?php the_ID(); ?> -->