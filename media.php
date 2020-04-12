<!doctype html>
<html class="no-js" lang="en-US">

<head>

    <!-- DEFAULT META TAGS -->
    <?php
    include('includes/inner_meta.php');
    ?>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="files/css/bootstrap_grid.css">
    <link rel="stylesheet" id="default-style-css" href="files/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="fontawesome-style-css" href="files/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="ionic-icons-style-css" href="files/css/ionicons.css" type="text/css" media="all" />
    <link rel="stylesheet" id="isotope-style-css" href="files/css/isotope.css" type="text/css" media="all" />
    <link rel="stylesheet" id="mqueries-style-css" href="files/css/mqueries.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="styles/lightbox/lightbox.css">
    <link rel="stylesheet" id="common-style-css" href="files/css/common_inner.css" type="text/css" media="all" />
    <!-- DOCUMENT TITLE -->
    <title>Media</title>
    <style type="text/css">
        .youtube-iframe {
            width: 100%;
            height: 315px;
            margin-bottom: 2rem;
        }

        @media(min-width: 992px) {

            /* for md-up */
            .youtube-iframe {
                width: 100%;
                height: 415px;
            }
        }
    </style>
</head>

<body>
    <?php
    global $current;
    $current = 'media';
    include('includes/inner_nav.php');
    ?>
    <br><br><br>
    <!-- HERO -->
    <!-- PAGEBODY -->
    <br><br>
    <section id="page-body" class="notoppadding">
        <div class="wrapper">

            <!-- <ul id="portfolio-filter" class="filter" data-related-grid="portfolio-grid">
            <li class="active" ><a href="#" data-filter="*" title="Show All">Show All</a></li>
            <li><a data-filter=".titlesp" href="#" title="Title Sponsors">Title</a></li>
            <li><a data-filter=".platinumsp" href="#" title="Platinum Sponsors">Platinum</a></li>
            <li><a data-filter=".goldsp" href="#" title="Gold Sponsors">Gold</a></li>
            <li><a data-filter=".silversp" href="#" title="Silver Sponsors">Silver</a></li>
        </ul> -->

            <div id="portfolio-grid" class="isotope-grid portfolio-container style-column-3 isotope-spaced clearfix">
                <!--Title-->
                <?php
                $no = 5;
                $alts = [
                    "", "", "", "", "",
                    "", "", "", "", "",
                    "", "", "", "", "",
                    "", "", "", "", ""
                ];
                $titles = [
                    "", "", "", "", "",
                    "", "", "", "", "",
                    "", "", "", "", "",
                    "", "", "", "", ""
                ];
                for ($i = 0; $i < $no; $i++) {
                    $ii = $i + 1;
                    $alt = $alts[$i];
                    $title = $titles[$i];
                    if (empty($alt))
                        $alt = "Our Event";
                    if (empty($title))
                        $title = "";

                ?>
                    <div class="isotope-item portfolio-item allsp">
                        <div class="portfolio-media">
                            <a href="img/media/img/uncompressed/<?php echo $ii; ?>.png" data-lightbox="image" data-title="" class="thumb-overlay overlay-effect-1 text-light" style="cursor: zoom-in;">
                                <img src="img/media/img/<?php echo $ii; ?>.jpg" alt="<?php echo $alt ?>">
                                <div class="overlay-caption hidden-on-start">
                                    <h4 class="caption-name portfolio-name uppercase"><?php echo $title; ?></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div> <!-- END #portfolio-grid .isotope-grid -->
            <br>
            <div class="video-wrap">
                <div class="video-div col-md-6 col-md-offset-3">
                    <iframe class="youtube-iframe" src="https://www.youtube.com/embed/ZJOUAQdh8j8" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <br>
            <div class="video-wrap">
                <div class="video-div col-md-6 col-md-offset-3">
                    <iframe class="youtube-iframe" src="https://www.youtube.com/embed/Oqx3E2sCs5I" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>

        </div> <!-- END .wrapper -->
    </section>
    <!-- PAGEBODY -->
    <!-- FOOTER -->
    <?php include('includes/inner_footer.php');
    ?>
    <!-- FOOTER -->

    </div> <!-- END #page-content -->
    <!-- PAGE CONTENT -->

    <!-- SCRIPTS -->
    <script src="files/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="files/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="files/js/jquery.visible.min.js"></script>
    <script type="text/javascript" src="files/js/tweenMax.js"></script>
    <script type="text/javascript" src="files/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="files/js/jquery.imagesloaded.min.js"></script>
    <script type="text/javascript" src="files/js/script.js"></script>
    <script type="text/javascript" src="scripts/lightbox.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({
                'overflow': 'visible'
            });
        })
        //]]>
    </script>
    <!-- SCRIPTS -->

</body>

</html>