<!doctype html>
<html class="no-js" lang="en-US">
<head>

  <!-- DEFAULT META TAGS -->
  <?php
  include('includes/inner_meta.php');
  ?>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="files/css/custom-music.css">
  <link rel="stylesheet" type="text/css" href="files/css/bootstrap_grid.css">
  <link rel="stylesheet" id="default-style-css"  href="files/css/style.css" type="text/css" media="all" />
  <link rel="stylesheet" id="fontawesome-style-css" href="files/css/font-awesome.min.css" type="text/css" media="all" />
  <link rel="stylesheet" id="ionic-icons-style-css" href="files/css/ionicons.css" type="text/css" media="all" />
  <link rel="stylesheet" id="isotope-style-css"  href="files/css/isotope.css" type="text/css" media="all" />
  <link rel="stylesheet" id="mqueries-style-css"  href="files/css/mqueries.css" type="text/css" media="all" />

  <link rel="stylesheet" id="common_inner"  href="files/css/common_inner.css" type="text/css" media="all" />

  <style type="text/css">
    .custom-col-achi *{
      vertical-align: middle;
    }
    .custom-col-achi{
      margin-top: 60px;
      margin-bottom: 60px;
    }
    .custom-col-achi .ion{
      font-size: 1.5rem;
      transition: all 0.5s ease;
      -webkit-transition: all 0.5s ease;
      -moz-transition: all 0.5s ease;
      -o-transition: all 0.5s ease;
      -ms-transition: all 0.5s ease;
    }
    .custom-col-achi .achi-box:hover .ion{
      color: #da2d19;
    }
    .custom-col-achi .colored strong{
      color: #da2d19;
    }
    .achi-box{
      border-bottom: 1px solid rgba(0,0,0,0.12);
      padding: 30px 10px;
      cursor: default;
      background:rgba(191, 191, 191, 0.06);
      border-radius: 10px;
    }
    .achi-trophy{
      display: inline-block;
      margin-right: 10px;
    }
    .achi-event-name{
      display: inline-block;
    }
    .achi-desc{
      display: block;
      margin-left: 40px;
    }
    .hoverable:hover{
      transition: box-shadow .25s;
      box-shadow: 0px 5px 6px 0 rgba(0, 0, 0, 0.12), 0px 0px 0px 0 rgba(0,0,0,0.19);
    }
    @media(min-width: 769px){
      .custom-col-achi{
        width: 60%;
        margin-left: auto;
        margin-right: auto;
      }
    }
  </style>
  <!-- DOCUMENT TITLE -->
  <title>Team Jaabaz | Achievements</title>

</head>

<body>
  <?php
  global $current;
  $current='achievements';
  include('includes/inner_nav.php');
  ?>

  <!-- HERO  -->
  <section id="hero" class="hero-auto text-light" style="background:#1a1a1a;">

    <div id="page-title" class="wrapper align-center">
      <h4 class="subtitle-2"></h4>
      <h1 class="uppercase grey-text"><strong>Achievements</strong></h1>
      <h5 class="subtitle-1"></h5>
    </div> <!-- END #page-title -->

  </section>
  <!-- HERO -->
  <!--********MAIN CONTENT*********!-->
  <!-- <div class="container">
    <div class="row">
      <div class="custom-col-achi">
        <div class="table">
          <table>
            <tbody>
              <tr>
              <td><i class="ion ion-trophy"></i></td>
                <td><span class="colored achi-event-name"><strong>BAJA SAE TENNESSE, USA</strong></span></td>
                <td>10th position in design at international event conducted by SAE in the us</td>
              </tr>
              <tr>
                <td><i class="ion ion-trophy"></i></td>
                <td><span class="colored achi-event-name"><strong>OESA GENERATION AUTO VIDEO CONTEST</strong></span></td>
                <td>2nd Place</td>
              </tr>
              <tr>
                <td><i class="ion ion-trophy"></i></td>
                <td><span class="colored achi-event-name"><strong>SOUTH AFRICA – SASOL BAJA</strong></span></td>
                <td><b>1st</b> – feasibility of mass production, <b>3rd</b> – cost feasibility, <b>5th</b> – design event</td>
              </tr>
              <tr>
                <td><i class="ion ion-trophy"></i></td>
                <td><span class="colored achi-event-name"><strong>VIRTUAL MINI BAJA – SAE INDIA</strong></span></td>
                <td>1st prize in national level competition out of 150 teams.</td>
              </tr>
              <tr>
               <td><i class="ion ion-trophy"></i></td>
                <td><span class="colored achi-event-name"><strong>BAJA SAE OREGON, USA</strong></span></td>
                <td>Came 19th out of the 100 teams that participated. First ever international season for team jaabaz</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div> -->
  <div class="container">
    <div class="row">
      <div class="custom-col-achi">
      <div class="achi-box hoverable">
          <div class="achi-trophy">
            <i class="ion ion-trophy"></i>
          </div>
          <div class="achi-event-name">
            <span class="colored achi-event-name"><strong>BAJA SAE TENNESSE, USA</strong></span>
          </div>
          <div class="achi-desc">
            <ul>
              <li>10th position in design at international event conducted by SAE in the us</li>
            </ul>
          </div>
        </div>
        <div class="achi-box hoverable">
          <div class="achi-trophy">
            <i class="ion ion-trophy"></i>
          </div>
          <div class="achi-event-name">
            <span class="colored achi-event-name"><strong>BAJA SAE TENNESSE, USA</strong></span>
          </div>
          <div class="achi-desc">
            <ul>
              <li>10th position in design at international event conducted by SAE in the us</li>
            </ul>
          </div>
        </div>
        <div class="achi-box hoverable">
          <div class="achi-trophy">
            <i class="ion ion-trophy"></i>
          </div>
          <div class="achi-event-name">
            <span class="colored achi-event-name"><strong>BAJA SAE TENNESSE, USA</strong></span>
          </div>
          <div class="achi-desc">
            <ul>
              <li>10th position in design at international event conducted by SAE in the us</li>
            </ul>
          </div>
        </div>
        <div class="achi-box hoverable">
          <div class="achi-trophy">
            <i class="ion ion-trophy"></i>
          </div>
          <div class="achi-event-name">
            <span class="colored achi-event-name"><strong>SOUTH AFRICA – SASOL BAJA</strong></span>
          </div>
          <div class="achi-desc">
            <ul>
              <li><b>1st</b> – feasibility of mass production</li>
              <li><b>3rd</b> – cost feasibility</li>
              <li> <b>5th</b> – design event</li>
            </ul>
          </div>
        </div>
        <div class="achi-box hoverable">
          <div class="achi-trophy">
            <i class="ion ion-trophy"></i>
          </div>
          <div class="achi-event-name">
            <span class="colored achi-event-name"><strong>VIRTUAL MINI BAJA – SAE INDIA</strong></span>
          </div>
          <div class="achi-desc">
            <ul>
              <li>1st prize in national level competition out of 150 teams.</li>
            </ul>
          </div>
        </div>
        <div class="achi-box hoverable">
          <div class="achi-trophy">
            <i class="ion ion-trophy"></i>
          </div>
          <div class="achi-event-name">
            <span class="colored achi-event-name"><strong>BAJA SAE OREGON, USA</strong></span>
          </div>
          <div class="achi-desc">
            <ul>
              <li>Came 19th out of the 100 teams that participated.</li>
              <li>First ever international season for team jaabaz</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
              <!--   <td><i class="ion ion-trophy"></i></td>
                <td><span class="colored achi-event-name"><strong>OESA GENERATION AUTO VIDEO CONTEST</strong></span></td>
                <td>2nd Place</td>
             
                <td><i class="ion ion-trophy"></i></td>
                <td><span class="colored achi-event-name"><strong>SOUTH AFRICA – SASOL BAJA</strong></span></td>
                <td><b>1st</b> – feasibility of mass production, <b>3rd</b> – cost feasibility, <b>5th</b> – design event</td>
              </div>
            </div>
          </div>

          <!--********END MAIN CONTENT*********!-->


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