
<?php get_header(); ?>

<div class="content-wrapper-height">
<section id="news" class="news pt-3 text-center">
        <h2 class="mt-4 mb-5"><?php single_cat_title(); ?></h2>
        <div class="row">
            <style type="text/css">
                section.news {
                    background-color: white; }
            </style>
            
                <?php
                // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                while(have_posts()) :
                    the_post(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <p class="mb-0 mt-3"><i class="fa fa-calendar"></i></p>
                <a href="<?php echo get_permalink() ?>"><p><?php echo get_the_title() ?></p></a>
                
            </div>
                <?php endwhile; ?>
        </div>
        
        <!-- pagination -->
<div  id=" pagination" class="text-center p-4">
    <?php html5wp_pagination(); ?>
</div>
<!-- /pagination -->
    </section>
    </div> <!-- end content wrapper -->

    <?php get_footer(); ?>