
<?php get_header(); ?>
 
<!--    FIRST SECTION   -->

    <section class="first-section">
        <div class="d-flex h-100 mx-auto align-items-center">
            <div class="p-2 text-center mx-auto">
                <blockquote class="blockquote justify-content-center">
                    <p class="mb-0 phrase">„Celem wszystkich form życia jest rozwój, a wszystko co żyje ma taki poziom
                        rozwoju,
                        jaki jest w stanie osiągnąć.”</p>
                    <footer class="blockquote-footer"><cite class="sign" title="Daniel Iwanek">Daniel Iwanek</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>


    <!--    SECTION NEWS    -->

    <section id="news" class="news pt-3 text-center">
        <h2 class="mt-4 mb-5">Aktualności</h2>
        <div class="row">
            

                <?php
                $counter = 0;

                $homepagePosts = new WP_query(array(
                    'posts_per_page' => 3,
                    'cat' => 3
                ));


                while($homepagePosts->have_posts()) {
                    $homepagePosts->the_post(); ?>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                <a href="<?php echo get_permalink() ?>"><h4><?php echo get_the_title() ?></h4></a>
                <a href="<?php echo get_the_post_thumbnail_url()?>" data-lightbox="image-<?php echo $counter++ ?>"><img href="<?php echo get_the_post_thumbnail_url()?>" class="plakat" src="<?php echo get_the_post_thumbnail_url()?>"></a>
            </div>

                <?php } wp_reset_postdata();?>
        </div>
        <p class="my-5"><a class="more" href="<?php echo get_category_link(get_cat_ID('Aktualności')) ?>">Więcej...</a></p>
    </section>


    <!--       DANIEL SECTION      -->

    <section class="daniel-info px-4 mb-0">
        <div class="row">
            <div class="col-md-12 col-lg-6 d-none d-md-block">
                <img src="<?php echo get_template_directory_uri() ?>/assets/daniel.jpg">
            </div>
            <div class="col-md-12 col-lg-6">
                <h3>Daniel Iwanek 3 DAN</h3>
                <p> Urodzony w Biłgoraju 1980.10.01,żona Agnieszka, syn Dawid. Licencjonowany Sędzia i Instruktor
                    Polskiego
                    Związku Karate Tradycyjnego. Szkoleniowiec klubów w Biłgoraju, Puławach i Lublinie. Trener Kadr
                    Wojewódzkich Młodzików i Juniorów. Od 22 lat propagator zdrowia, sportu, rekreacji dzieci, młodzieży
                    i
                    dorosłych w województwie lubelskim. Współtwórca i organizator programów ,,Trzymaj Pion” i ,,Pierwszy
                    krok” kierowanych do dzieci w wieku przedszkolnym oraz organizator Olimpiad Sportowych dla
                    przedszkoli w
                    Województwie Lubelskim. Twórca grup ,,Rodzinnych” oraz ,,50+’’ dla seniorów. Wielokrotnie wybierany
                    do
                    pierwszej trójki na najlepszego i najpopularniejszego sportowca Lubelszczyzny (2012r. drugie
                    miejsce)(III miejsce w plebiscycie na Człowieka Roku 2012 za wkład i rozwój dzieci i młodzieży w
                    mieście
                    Lublin.</p>
                <p><strong>NAJWAŻNIEJSZE SUKCESY SPORTOWE</strong><br>
                    Wielokrotny medalista Mistrzostw Polski i Europy,
                    Wielokrotny zdobywca Pucharów Europy,
                    Zdobywca Pucharu Europy Lublin 2006 (Wydarzenie Roku 2006 na Lubelszczyźnie),
                    Mistrz Świata w Fukugo(dwubój) Wilno, Litwa 2008 (Wydarzenie Roku 2008 na Lubelszczyźnie),
                    Mistrz Świata w Kumite Ind. (walki) Curityba, Brazylia 2010r (Nagroda dla Najlepszego Sportowca Roku
                    2010 Miasta Lublin),
                    Aktualny Mistrz Świata w Kumite Drużynowym(walki) oraz W-ce Mistrz Świata w Kogo Kumite (walki)
                    Łódź,
                    Polska 2012.</p>
                <p><strong>SZCZEGÓLNE ODZNACZENIA</strong><br>
                    ,,Honorowy Medal Prezydenta Miasta Lublin za wybitne osiągnięcia sportowe, promocję miasta oraz
                    popularyzację sportu wśród dzieci, młodzieży i dorosłych.’’
                    ,,Odznaka za zasługi dla Sportu Ministra Sportu i Rekreacji’’</p>
            </div>
        </div>
    </section>


    <!--    SECTION PROGRAMS       -->

    <section class="programs pt-4 text-center">

        <h3 class="py-4">Wybierz zajęcia</h3>
        <div class="row">
            <div class="col-md-12 col-lg-4 mb-4">
                <img class="group-foto" src="<?php echo get_template_directory_uri() ?>/assets/karatekids.jpg">
                <h5>Karate dla najmłodszych</h5>
                <p class="ml-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum elit a
                    sagittis maximus. Mauris in justo nisi. Sed euismod libero.</p>
                
            </div>
            <div class="col-md-12 col-lg-4 mb-4">
                <img class="group-foto" src="<?php echo get_template_directory_uri() ?>/assets/karatekick.jpg">
                <h5>Zajęcia dla dorosłych</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum elit a sagittis maximus.
                    Mauris in justo nisi. Sed euismod libero..</p>
                
            </div>
            <div class="col-md-12 col-lg-4 mb-4">
                <img class="group-foto" src="<?php echo get_template_directory_uri() ?>/assets/familykarate1.jpg">
                <h5>Grupy rodzinne</h5>
                <p class="mr-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dictum elit a
                    sagittis maximus. Mauris in justo nisi. Sed euismod libero.</p>
                
            </div>
        </div>
    </section>


    <!--        SECTION TRAINERS           -->

    <section class="trainers p-3">
        <h3 class="text-center">Nasz zespół</h3>
        <div class="row text-center">
            <div class="col-sm-12 col-md-6 col-lg-3 pt-3">
                <a href="<?php echo site_url('/sebastian-batorski')?>"><img src="<?php echo get_template_directory_uri() ?>/assets/seba.jpg"></a>
                <p class="mt-3">Sebastian Batorski 1 DAN</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 pt-3">
                <a href="<?php echo site_url('/kamil-mendzelewski')?>"><img src="<?php echo get_template_directory_uri() ?>/assets/kamil.jpg"></a>
                <p class="mt-3">Kamil Mendzelewski 1 DAN</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 pt-3">
                <a href="<?php echo site_url('/laura-zarzeczna')?>"><img src="<?php echo get_template_directory_uri() ?>/assets/laura.jpg"></a>
                <p class="mt-3">Laura Zarzeczna 1 DAN</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 pt-3">
                <a href="<?php echo site_url('/maciej-kowalczyk')?>"><img src="<?php echo get_template_directory_uri() ?>/assets/maciej.jpg"></a>
                <p class="mt-3">Maciej Kowalczyk 1 DAN</p>
            </div>

        </div>
    </section>



    <!-- SECTION LINKI -->
 
    <section class="linki py-5 mb-0">
        <h3 class="text-center mb-4">Nasza działalność</h3>
        <div class="row text-center">
            <div class="col-sm-12 col-md-6 col-lg-3 mt-sm-2 mt-lg-0">
                <a href="<?php echo site_url('/fundacja-rozwoju')?>"><img class="circle" src="<?php echo get_template_directory_uri() ?>/assets/fundacja.png"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-sm-2 mt-lg-0">
                <a href="<?php echo site_url('/centrum-zdrowia')?>"><img class="circle" src="<?php echo get_template_directory_uri() ?>/assets/centrumzdrowia.png"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-sm-2 mt-lg-0">
                <a href="<?php echo site_url('/fighting-show')?>"><img class="circle" src="<?php echo get_template_directory_uri() ?>/assets/fightingshow.png"></a>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-3 mt-sm-2 mt-lg-0">
                <a href="<?php echo site_url('/rywalizacja-sportowa')?>"><img class="circle" src="<?php echo get_template_directory_uri() ?>/assets/rywalizacja.png"></a>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-12 col-md-6 col-lg-4 d-lg-flex justify-content-lg-end mt-sm-2 mt-lg-0">
                <a href="<?php echo site_url('/aktywny-wypoczynek-latem')?>"><img class="circle" src="<?php echo get_template_directory_uri() ?>/assets/lato.png"></a>
            </div>
            <div class="col-sm-12 col-md-6 d-lg-flex justify-content-lg-center col-lg-4 mt-sm-2 mt-lg-0">
                <a href="<?php echo site_url('/aktywny-wypoczynek-zima')?>"><img class="circle" src="<?php echo get_template_directory_uri() ?>/assets/zima.png"></a>
            </div>
            <div class="col-sm-12 col-md-6  col-lg-4 d-lg-flex justify-content-lg-start mt-sm-2 mt-lg-0">
                <a href="<?php echo site_url('/dzialalnosc-charytatywna')?>"><img class="circle" src="<?php echo get_template_directory_uri() ?>/assets/charytatywne.png"></a>
            </div>
        </div>
       
    </section> 


    <section id="map-section" class="mb-0">
        <style>
            #map {
                height: 400px;
                width: 100%;
            }
        </style>

        <div id="map"></div>
    </section>



<?php get_footer();
?>

<script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgjNLm2KycT3fPgHrww4iPfNvr27C86Zg&callback=initMap">
        </script>