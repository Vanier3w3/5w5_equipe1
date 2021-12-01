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

<header class="page-header">
	<?php
	

	echo '<h1 class="titleE"> Vie étudiante </h1>'; 
	//the_archive_description( '<div class="archive-description">', '</div>' );
	?>
</header> <!--.page-header -->

<div class="conteneurE">

<a class="prev" onclick="controleFleche(-1)">&#10094;</a>
  <a class="next" onclick="controleFleche(1)">&#10095;</a>

<div class="caroussel">

<?php

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', 'projets' );
	
endwhile; ?>

<?php
the_posts_navigation();

else :
	
	get_template_part( 'template-parts/content', 'none' );

endif;
?>

</div>	
</div>
<h1 class="proff"> Professeurs </h1>
<section class="prof"> 

<div class="imgProf">
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_Eddy.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_DSC07728.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_Caroline.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_greg_aout2016.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_Denis.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_Mathieu.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_Martin.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/12/MicrosoftTeams-image-8-scaled-e1638380616930.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Manon.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_camille.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_Dom.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_DSC07716.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/12/MicrosoftTeams-image-7-scaled-e1638380491700.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Copie_de_johanne-gd.jpg"></img>
<img src="http://localhost:8888/siteSab/wp-content/uploads/2021/11/Ahmed_photo.jpg"></img>

</section>



</main> <!--#main -->




   </div>
 



<?php
get_sidebar();
get_footer();
