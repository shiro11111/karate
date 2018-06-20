<!DOCTYPE html>
<html>
<head>

<?php wp_head(); ?>
</head>
<body>
<header>
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 d-flex justify-content-center justify-content-lg-start">
            <a href="<?php echo site_url() ?>"><img id="logo-karate" alt="logo" src="<?php echo get_template_directory_uri() ?>/assets/logo.png"></a>
        </div>
        <div class="col-lg-2 d-none d-lg-block modal-link">
            <a class="icon-link" data-target="#emailModal" data-toggle="modal"><i class="fa fa-envelope"></i>
                Napisz do nas</a>

        </div>
        <div class="col-lg-2 d-none d-lg-block">
            <a class="icon-link" href="<?php echo site_url('/#map-section') ?>"><i class="fa fa-map-marker"></i> Znajdź nas</a>
        </div>


        <div class="col-lg-2 d-none d-lg-block">
            <a target="_blank" class="icon-link" href="https://www.facebook.com/DanielIwanekkarate"><i
                    class="fa fa-facebook-square"></i> Facebook</a>

        </div>
    </div>


    <!--    MENU    -->

    <div id='cssmenu'>
        <ul class=text-centered>
            <li class='has-sub text-centered'><a href='#news'><span>Aktualności</span></a>
                <ul>
                    <li><a href='<?php echo site_url('/category/newsy') ?>'><span>Wszystkie</span></a>
                    <li><a href='<?php echo site_url('/category/media') ?>'><span>Wydarzenia</span></a>
                </ul>
            </li>
            <li class='active has-sub text-centered'><a href='#'><span>O nas</span></a>
                <ul>
                    <li class='has-sub'><a href='#'><span>Akademia</span></a>
                        <ul>
                            <li href="#"><a href="<?php echo site_url('/o-akademii')?>"><span>O Akademii</span></a></li>
                            <li><a href="<?php echo site_url('/budo-droga-rozwoju') ?>"><span>Budo: Droga Rozwoju</span></a></li>
                            <li><a href="<?php echo site_url('/nasi-nauczyciele-i-tworcy') ?>"><span>Nasi Nauczyciele i Twórcy</span></a></li>
                            <li><a href="<?php echo get_template_directory_uri() . '/assets/downloads/wymagania.compressed.pdf' ?>" target="_blank"><span>Wymagania Egzaminacyjne</span></a></li>
                            <li><a href="<?php echo site_url('/schematy-kata') ?>"><span>Schematy Kata</span></a></li>

                        </ul>
                    <li><a href="<?php echo site_url('/karate') ?>""><span>Karate</span></a>

                    </li>
                </ul>
            </li>
            <li class="has-sub"><a href='#'><span>Sklepik</span></a>
                <ul>
                    <li><a href="<?php echo site_url('/gadzety') ?>"><span>Gadżety</span></a>
                    <li><a href="<?php echo site_url('/odzywianie') ?>"><span>Odżywianie</span></a>
                </ul>
            </li>
            <li class='last text-centered'><a href="<?php echo site_url('/plan-zajec') ?>"><span>Plan Zajęć</span></a></li>
        </ul>
    </div>
</header>