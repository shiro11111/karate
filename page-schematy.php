<?php  /* Template Name: Schematy */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

		the_content();
		} 
	} 
?>

<section class="schematy p-4 mb-5">
<p>Heian Kata</p>
<ul>
    <li><a href="<?php echo get_template_directory_uri() ?>/assets/schematy/shodan.jpg" data-lightbox="heian shodan">Heian Shodan</a></li>
    <li><a href="<?php echo get_template_directory_uri() ?>/assets/schematy/nidan.jpg" data-lightbox="heian nidan">Heian Nidan</a></li>
    <li><a href="<?php echo get_template_directory_uri() ?>/assets/schematy/sandan.jpg" data-lightbox="heian sandan">Heian Sandan</a></li>
    <li><a href="<?php echo get_template_directory_uri() ?>/assets/schematy/yodan.jpg" data-lightbox="heian yodan">Heian Yodan</a></li>
    <li><a href="<?php echo get_template_directory_uri() ?>/assets/schematy/godan.jpg" data-lightbox="heian godan">Heian Godan</a></li>
</ul>

<p>Tekki Kata</p>
<ul>
    <li><a href="<?php echo get_template_directory_uri() ?>/assets/schematy/tekkishodan.jpg" data-lightbox="tekki shodan">Tekki Shodan</a></li>
</ul>

   </section> 

<?php get_footer(); ?>