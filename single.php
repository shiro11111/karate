<?php 

get_header(); ?>

<h3 class="p-4"><?php echo get_the_title(); ?></h3>


<?php while(have_posts()) {
the_post(); ?>

 <div class="p-4 content-wrapper-height">

   <?php get_content_without_images();

    ?> 


    
    <div class="row p-4"> 
     <?php 
     if (get_the_category()[0] -> name !== 'Wydarzenia') {
        echo '<a href="' .  get_the_post_thumbnail_url(get_the_ID(), 'full') . '" data-lightbox="info"><img src="' . get_the_post_thumbnail_url(get_the_ID(), 'custom-size') . '"></a>';   
     }
      ?>
        </div>



    
    <?php $imgIds = get_post_gallery(get_the_ID(), false)['ids'];

    $idsArray = explode(',', $imgIds);

    if($imgIds) {
    
    	echo '<div class="row p-4">';
    	$counter = 0;

    	foreach ($idsArray as $id) {
        	echo ' <div class="col-sm-4 mb-3"><a href="' . wp_get_attachment_image_src($id, 'full')[0] . '" data-lightbox="image"><img src="' . wp_get_attachment_image_src($id, 'custom-size')[0] . '"></img></a> </div>';
    	};
    	echo '</div>';
	   }
    ?> 
</div> 
 <?php }
 get_footer();
?>

