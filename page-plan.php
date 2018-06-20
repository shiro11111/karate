<?php  /* Template Name: Plan Zajec */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

		the_content();
		} 
	} 
?>

<section class="zajecia text-center p-4">


 <img src="<?php echo get_template_directory_uri() ?>/assets/planzajec.png"></a>

</section>




<?php get_footer(); ?>