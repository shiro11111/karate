
<?php get_header(); ?>

<div class="content-wrapper-height">
<section id="news" class="news pt-3 text-center">
        <h2 class="mt-4 mb-5">Aktualności</h2>
        <div class="row">
            
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $homepagePosts = new WP_query(array(
                    //'category_name' => 'Aktualności',
                    'cat' => 3,
                    'paged' => $paged
                    // 'posts_per_page' => -1
                ));


                while($homepagePosts->have_posts()) {
                    $homepagePosts->the_post(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="<?php echo get_permalink() ?>"><p><?php echo get_the_title() ?></p></a>
                <p><i class="fa fa-calendar"></i> <?php the_time('d F Y'); ?></p>
                
            </div>
                <?php } 
                wp_reset_postdata();
                ?>
        </div>
        <!-- pagination -->
<div class="pagination text-center">
    <?php html5wp_pagination(); ?>
</div>
<!-- /pagination -->
    </section>
    </div> <!-- end content wrapper -->

    <?php get_footer(); ?>