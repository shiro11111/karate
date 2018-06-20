<?php get_header(); ?>

<section class="pt-3 text-center">
        <h3 class="mt-4 mb-5">Wydarzenia</h3>
        <div class="row">
            
                <?php
                $eventsPosts = new WP_query(array(
                    // 'category_name' => 'Wydarzenia',
                    'paged' => get_query_var('page') ? get_query_var('page') : 1
                    // 'posts_per_page' => -1
                ));


                while($eventsPosts->have_posts()) {
                    $eventsPosts->the_post(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="<?php echo get_permalink() ?>"><p><?php echo get_the_title() ?></p></a>
                
            </div>
                <?php } 
                wp_reset_postdata();
                ?>
        </div>

        <div class="pagination">
    <?php html5wp_pagination(); ?>
</div>
    </section>

<?php get_footer(); ?>