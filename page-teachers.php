<?php /* Template Name: Our Teachers */ 

get_header();

 
?>

<section class="nauczyciele mt-3 text-center p-4 ">

    <div class="row justify-content-center">
        <div col-sm-3>
            <img class="sensei" src="<?php echo get_template_directory_uri() ?>/assets/funakoshi.jpg">
            <p>Gihin Funakoshi</p>
        </div>
        <div col-sm-3>
            <img class="sensei" src="<?php echo get_template_directory_uri() ?>/assets/nishiyama.jpg">
            <p>Hidetaka Nishiyama</p>
        </div>
        <div col-sm-3>
            <img class="sensei" src="<?php echo get_template_directory_uri() ?>/assets/jorga.jpg">
            <p>Ilija Jorga</p>
        </div>
        <div col-sm-3>
            <img class="sensei" src="<?php echo get_template_directory_uri() ?>/assets/hubert.jpg">
            <p>Kiyoshi Hubert Leanen</p>
        </div>
    </div>

</section>

<section class="piramida p-4">

<div class="text-center">
    <h3>Teoria potrzeb Maslowa</h3>
    <img id="piramida" src="<?php echo get_template_directory_uri() ?>/assets/piramida_potrzeb.png">
</div>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 

        the_content();
        } 
    }
?>
</section>


<?php
get_footer();
?>

