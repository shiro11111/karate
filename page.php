<?php 

get_header();


while(have_posts()) {
the_post(); ?>


<div class="p-4 content-wrapper-height">
	
	<?php the_content(); ?>
</div>
<?php }



get_footer();
?>