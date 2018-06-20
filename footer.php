<footer class="footer p-3">
        <div class="row d-flex text-center align-self-center justify-content-around footer-row">
            <div class="col-lg-3">
                <a href="<?php echo site_url() ?>"><img id="logo-karate-footer" src="<?php echo get_template_directory_uri() ?>/assets/logo.png"></a>
            </div>
            <div class="col-lg-3 d-none d-lg-block align-self-center">
                <ul class="linki">
                    <li>
                        <a href="<?php echo site_url() ?>">Główna</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/category/newsy') ?>">Aktualności</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/plan-zajec') ?>">Plan zajęć</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 d-none d-lg-block align-self-center">
                <ul class="linki">
                    <li>
                        <a href="<?php echo site_url('/o-akademii')?>">Akademia</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/category/media')?>">Wydarzenia</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('/gadzety') ?>">Sklep</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 d-flex align-self-center text-center">
                <ul class="footer-menu mx-auto">
                    <li><a class="footer-link" href="https://www.facebook.com/DanielIwanekkarate" target="_blank"><i
                            class="fa fa-facebook-square fa-2x"></i></a></li>
                    <li><a class="footer-link" href="https://www.youtube.com/channel/UCeDTfE9SitWOH0KVkx4uxNg"
                           target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a></li>
                    <li><a class="footer-link modal-link" data-target="#emailModal" data-toggle="modal"><i
                            class="fa fa-envelope fa-2x"></i></a></li>
                </ul>

                <!-- Button trigger modal -->
                <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
                <!--Launch demo modal-->
                <!--</button>-->

                <!-- Modal -->
                <div class="modal fade" id="emailModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">

                            <?php $page = get_page_by_title('Kontakt');
                                echo apply_filters( 'the_content', $page->post_content );
                                 ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>


<?php wp_footer(); ?>

        <script type="text/javascript">
            let iframes = Array.from(document.getElementsByTagName('iframe'));

            if (iframes && iframes.length > 0) {
                iframes.forEach(frame => {
                    frame.classList.add('embed-responsive', 'w-75', 'mx-auto', 'mt-3');
                });
            }
        </script>
</body>
</html>