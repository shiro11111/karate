<?php /* Template Name: Gadzety */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

		the_content();
		
	}
} 
?>

<section class="sklep p-4">
    <p>Zapraszamy do zapoznania się z ofertą gadżetów Akademii Karate Daniela Iwanka. Zamówienia przyjmujemy telefonicznie, e-mailowo lub u instruktora prowadzącego.</p>
    <div class="row text-center">
        <div class="col-12">
            <a href="<?php echo get_template_directory_uri() ?>/assets/gadzety.png" data-lightbox="gadzety"><img src="<?php echo get_template_directory_uri() ?>/assets/gadzety.png" width="600px"></a>          
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p>Nasze produkty:</p>
           <ul class="w-25">
               <li><a href="<?php echo get_template_directory_uri() ?>/assets/kalendarz.jpg" data-lightbox="kalendarz">Kalendarz 2018</a></li>
               <li><a href="<?php echo get_template_directory_uri() ?>/assets/bluzaczarna1.jpg" data-lightbox="bluza">Bluzy</a></li>
               <a href="<?php echo get_template_directory_uri() ?>/assets/bluzaczarna2.jpg" data-lightbox="bluza"></a>
               <a href="<?php echo get_template_directory_uri() ?>/assets/bluzaszara1.jpg" data-lightbox="bluza"></a>
               <a href="<?php echo get_template_directory_uri() ?>/assets/bluzaszara2.jpg" data-lightbox="bluza"></a>
               <li><a href="<?php echo get_template_directory_uri() ?>/assets/plecak.png" data-lightbox="plecak">Plecak</a></li>
               <li><a href="<?php echo get_template_directory_uri() ?>/assets/kubek.jpg" data-lightbox="kubek">Kubek</a></li>
               <li><a href="<?php echo get_template_directory_uri() ?>/assets/czapki.jpg" data-lightbox="czapki">Czapki i kominy</a></li>
           </ul>
        </div>
    </div>

</section>


<?php get_footer();
 ?>