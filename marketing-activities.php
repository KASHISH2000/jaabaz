<!doctype html>
<html class="no-js" lang="en-US">
<head>

    <!-- DEFAULT META TAGS -->
    <?php
    include('includes/inner_meta.php');
    ?>
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="files/css/bootstrap_grid.css">
    <link rel="stylesheet" id="default-style-css"  href="files/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="fontawesome-style-css" href="files/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="ionic-icons-style-css" href="files/css/ionicons.css" type="text/css" media="all" />
    <link rel="stylesheet" id="isotope-style-css"  href="files/css/isotope.css" type="text/css" media="all" />
    <link rel="stylesheet" id="mqueries-style-css"  href="files/css/mqueries.css" type="text/css" media="all" />
    <link rel="stylesheet" id="common-style-css"  href="files/css/common_inner.css" type="text/css" media="all" />

    <style type="text/css">
        .cars-desp-ul{
            list-style-type: initial;
            padding: 5px;
        }
    </style>
    <!-- DOCUMENT TITLE -->
    <title>Team Jaabaz | Marketing Activities</title>

</head>

<body>
 <?php
 global $current;
 $current='sponsors';
 include('includes/inner_nav.php');
 ?>

 <!-- HERO  -->
 <section id="hero" class="hero-auto text-light" style="background:#1a1a1a;">

    <div id="page-title" class="wrapper align-center">
        <h4 class="subtitle-2"></h4>
        <h1 class="uppercase grey-text"><strong>Marketing Activities</strong></h1>
        <h5 class="subtitle-1"></h5>
    </div> <!-- END #page-title -->

</section>
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

        <div id="portfolio-grid" class="isotope-grid portfolio-container style-column-3 clearfix">
            <!--Title-->
            <?php
            $no=20;
            $alts=["","","","","",
            "","","","","",
            "","","","","",
            "","","","",""
            ];
             $titles=["","","","","",
            "","","","","",
            "","","","","",
            "","","","",""
            ];
            for($i=0;$i<$no;$i++)
            {
                $ii=$i+1;
                $alt=$alts[$i];
                $title=$titles[$i];
                if(empty($alt))
                    $alt="Our Event";
                if(empty($title))
                    $title="Our Event";

                ?>
                <div class="isotope-item portfolio-item allsp">
                  <div class="portfolio-media">
                    <a class="thumb-overlay overlay-effect-1 text-light">
                        <img src="img/marketing/<?php echo $ii;?>.JPG" alt="<?php echo $alt?>">
                        <div class="overlay-caption hidden-on-start">
                            <h4 class="caption-name portfolio-name uppercase"><?php echo $title;?></h4>
                        </div>
                    </a>
                </div>
            </div>
            <?php
        }
        ?>

    </div> <!-- END #portfolio-grid .isotope-grid -->

</div> <!-- END .wrapper -->

<div class="spacer-big"></div>

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
<script type="text/javascript">
    //<![CDATA[
        $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
        })
    //]]>
</script>
<!-- SCRIPTS -->

</body>
</html>