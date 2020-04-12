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
    <title>Marketing Activities</title>

</head>

<body>
<?php
 global $current;
 $current='marketing';
 include('includes/inner_nav.php');
 ?>
  <br><br><br>
<!-- HERO -->
<!-- PAGEBODY -->
<br><br>
<section id="page-body" class="notoppadding">
    <div class="wrapper">
        <div id="portfolio-grid" class="isotope-grid portfolio-container style-column-3 isotope-spaced clearfix">
            <!--Title-->
            <?php
            $no=22;
            $alts=["","","","","",
            "","","","","",
            "","","","","",
            "","","","","","",""
            ];
             $titles=["Riviera 2020","Riviera 2019","Gravitas'15","Gravitas'15","Gravitas'15","Gravitas'15","Offroadies",
            "Offroadies","Team Jaabaz with New Mexico State University","Recruitment Campaign","Engineer's Day 2015","Team Jaabaz with Tennessee Tech University",
            "ATV Stunt Show","ATV Stunt Show","ATV Stunt Show","ATV Stunt Show","ATV Stunt Show",
            "ATV Stunt Show","ATV Stunt Show","Marketing for Spigen","Team Jaabaz with University of Michigan-Ann Arbor","Team Jaabaz with Team Nemesis"
            ];
            for($i=0;$i<$no;$i++)
            {
                $ii=$i+1;
                $alt=$alts[$i];
                $title=$titles[$i];
                if(empty($alt))
                    $alt="Our Event";
                if(empty($title))
                    $title="";

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