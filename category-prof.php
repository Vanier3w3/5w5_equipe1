<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package time1
 */

get_header();
?>

<main id="primary" class="site-main">
<?php if ( have_posts() ) : ?>

<h1 class="proff"> Professeurs  </h1>
<div class="conteneurProf">

<div class="caroussel">

<?php

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', 'prof' );

endwhile; ?>

<?php
the_posts_navigation();

else :
	
	get_template_part( 'template-parts/content', 'none' );
	

endif;
?>




</div>

</div>


</main> <!--#main -->


   </div>
 



<?php
get_sidebar();
get_footer();
