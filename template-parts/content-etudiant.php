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


<div class="conteneurE">
    <article class="flip-card"id="post-<?php the_ID(); ?>"<?php post_class();?>><div class="flip-card-inner"><div class="flip-card-front"><?php the_post_thumbnail ('thumbnail');
?></div><div class="flip-card-back"></div></div></article></div>


