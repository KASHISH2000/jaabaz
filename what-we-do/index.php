<?php
$jumpto="";
if(isset($_GET['jumpto']))
  $jumpto=$_GET['jumpto'];
?>
<!doctype html>
<html class="no-js">
<head>
  <title>Team Jaabaz | What We Do</title>
  <?php
  include('../meta.php');
  ?>
  <?php
  include('../childcommonlinks.php');
  ?>
  <link rel="stylesheet" type="text/css" href="../styles/circlehover.css">
  <link href="../styles/whatwedo.css" rel="stylesheet" />
  <link href="../styles/circlehoverdemo.css" rel="stylesheet" />
  <style type="text/css">
    .onhover-nounderline:hover{
      text-decoration: none !important;
    }
    .jaabaz-link{
      font-weight: bold;
      -webkit-transition: all 0.4s ease-in-out;
      -moz-transition: all 0.4s ease-in-out;
      -o-transition: all 0.4s ease-in-out;
      -ms-transition: all 0.4s ease-in-out;
      transition: all 0.4s ease-in-out;
    }
    .jaabaz-link:hover{
      color: #dc092f !important;
      cursor: pointer;
    }
    .jaabaz-icon:hover .jaabaz-link{
     color: #dc092f !important;
     cursor: pointer;
   }
   .jaabaz-icon:hover{
     color: #dc092f !important;
     cursor: pointer;
   }

   hr.thoda-light{
    border-top: 1px solid #7b7070 !important;
  }
</style>

</head>
<body>
  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
        <!-- <div id="awwwards" class="sotd white left">
            <a href="http://www.awwwards.com" target="_blank">Awwwards</a>
          </div> -->
          <div id="fb-root"></div>

          <div class="barra-menu"></div>
          <a href="../">
            <nav class="menu --works">
             <div class="menu__link --about">
              <a class="menu__logo jaabaz-link" href="../"></a>
              <a class="menu__text link-page onhover-nounderline jaabaz-link" href="../">Jaabaz</a>
            </div>
            <div class="menu__link --works">
             <a class="menu__logo jaabaz-link" href="../"></a>
             <a class="menu__text link-page onhover-nounderline jaabaz-link" href="../">Jaabaz</a>
           </div>
         </nav>
       </a>
       <div id="works" class="animation-container --in">
         <div class="container --height">
          <nav class="menu-works">
            <span class="menu-works__line"></span>
            <span class="menu-works__line-active"></span>
            <div class="table">
              <div class="table__vAlign">
                <a class="menu-works__item onhover-nounderline" id="a_cars" data-menuanchor="work-beach-park" href=""><span class="menu-works__item__text">Cars</span></a>
                <a class="menu-works__item onhover-nounderline" id="a_achievements" data-menuanchor="work-shopping-recife"><span class="menu-works__item__text">Achievements</span></a>
                <a class="menu-works__item onhover-nounderline" id="a_media" data-menuanchor="work-damas" ><span class="menu-works__item__text">Media</span></a>
                <a class="menu-works__item onhover-nounderline" id="a_marketing" data-menuanchor="work-richester"><span class="menu-works__item__text">Marketing Activities</span></a>
                <a class="menu-works__item onhover-nounderline" id="a_sponsors" data-menuanchor="work-radio"><span class="menu-works__item__text">Sponsors</span></a>
              </div>
            </div>
          </nav>
        </div>
        <div class="count-works"><span class="count-works__current">1</span><span class="count-works__total"></span></div>
        <div class="setas-works"></div>
        <div class="works">
          <div class="work --beach-park carsbg">
            <div class="layer" data-depth="0.40">
              <div class="work__obj --bg">
                <div class="layerbg"></div>
              </div>
            </div>
            <div class="table">
              <div class="table__vAlign">
                <div class="container">
                  <a class="work__link link-page">
                    <h2 class="work__title">Cars</h2>
                    <p class="work__tags">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      <br>

                      <span class="spanbut onhover-nounderline" onclick="gotocars_window();">
                        <i class="ion-android-arrow-dropright" aria-hidden="true"></i>
                        Read More
                      </span>

                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="work --shopping-recife achievementsbg">
            <div class="layer" data-depth="0.40">
              <div class="work__obj --bg">
                <div class="layerbg"></div>
              </div>
            </div>
            <div class="table">
              <div class="table__vAlign">
                <div class="container">
                 <a class="work__link link-page">
                  <h2 class="work__title">Achievements</h2>
                  <p class="work__tags">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <br>
                    <span class="spanbut onhover-nounderline" onclick="gotoachievements_window()">
                      <i class="ion-android-arrow-dropright" aria-hidden="true"></i>
                      Read More
                    </span>
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div  class="work --damas mediabg">
          <div class="layer" data-depth="0.40">
            <div class="work__obj --bg">
              <div class="layerbg"></div>
            </div>
          </div>
          <div class="table">
            <div class="table__vAlign">
              <div class="container">
               <a class="work__link link-page">
                <h2 class="work__title">Media</h2>
                <p class="work__tags">
                 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                 <br>
                 <span class="spanbut onhover-nounderline" onclick="gotomedia_window()">
                  <i class="ion-android-arrow-dropright" aria-hidden="true"></i>
                  Read More
                </span>
              </p>

            </a>
            <br><br><br>
          </div>
        </div>
      </div>
    </div>
    <div  class="work --richester marketingbg" id="meettheteam">
      <div class="layer" data-depth="0.40">
        <div class="work__obj --bg">
          <div class="layerbg"></div>
        </div>
      </div>
      <div class="table">
        <div class="table__vAlign">
          <div class="container">
           <a class="work__link link-page onhover-nounderline">
            <h2 class="work__title">Marketing Activities</h2>
            <p class="work__tags">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              <br>
              <span class="spanbut onhover-nounderline" onclick="gotomarketing_window()">
                <i class="ion-android-arrow-dropright" aria-hidden="true"></i>
                Read More
              </span>
              
            </p>
            <br><br><br>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div  class="work --damas sponsorsbg">
    <div class="layer" data-depth="0.40">
      <div class="work__obj --bg">
        <div class="layerbg"></div>
      </div>
    </div>
    <div class="table">
      <div class="table__vAlign">
        <div class="container">
         <a class="work__link link-page">
          <h2 class="work__title">Sponsors</h2>
          <p class="work__tags">
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
           consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
           cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
           proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
           <br>
           <span class="spanbut onhover-nounderline" onclick="gotosponsors_window()">
            <i class="ion-android-arrow-dropright" aria-hidden="true"></i>
            Read More
          </span>
        </p>
      </a>
      <br><br><br>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- Contact us Modal -->
<div id="contactusmodal" class="modal fade" role="dialog">
  <div class="modal-dialog" id="contactusmodaldialog">
    <div class="modal-body text-center">
      <img src="../img/loading.gif" style="width:100px !important;" />
    </div>
    <div class="modal-footerr text-center">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
<!-- contact us modal end-->

<div class="contact-us-div"><a class="jaabaz-link" data-toggle="modal" href="#contactusmodal" data-target="#contactusmodal">Contact Us</a></div>
<div class="support-us-div"><a class="jaabaz-link" href="supportus.html">Support Us</a></div>
<footer>
  <nav class="social">
    <a class="social__media" target="_blank" href="https://www.facebook.com/teamjaabaz/"><i class="ionclass ion-social-facebook" aria-hidden="true"></i></a>
    <a class="social__media" target="_blank" href="https://twitter.com/team_jaabaz"><i class="ionclass ion-social-twitter" aria-hidden="true"></i></a>
    <a class="social__media" target="_blank" href="https://www.youtube.com/channel/UCQYPdJIlSCqqYTSI9OAZ0OQ"><i class="ionclass ion-social-youtube" aria-hidden="true"></i></a>
  </nav>
</footer>

<script>
    // var idioma = 'en';
    // var baseUrl = 'http://www.cappen.com/';
    // var wow;
  </script>
  <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript">
    //<![CDATA[
        $(window).on('load', function() { // makes sure the whole site is loaded 
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
          })
    //]]>
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="../scripts/vendor/modernizr.js"></script>
  <script src="../scripts/vendor.js"></script>
  <script src="../scripts/main.js"></script>
  <script type = "text/javascript">
    $('#contactusmodaldialog').load("../contactusmodal.php");
  </script>
  <script type="text/javascript">
    function gotocars_window(){
      window.location="../cars/";
    }
    function gotoachievements_window(){
      window.location="../achievements/";
    }
    function gotomedia_window(){
      window.location="../media/";
    }
    function gotosponsors_window(){
      window.location="../sponsors/";
    }
    function gotomarketing_window(){
      window.location="../marketing-activities/";
    }
    function jumpto_cars(){
      $("#a_cars").click();
    }
    function jumpto_achievements(){
      $("#a_achievements").click();
    }
    function jumpto_media(){
      $("#a_media").click();
    }
    function jumpto_marketing(){
      $("#a_marketing").click();
    }
    function jumpto_sponsors(){
      $("#a_sponsors").click();
    }
  </script>
  <script type="text/javascript">
    <?php
    if(isset($jumpto))
    {
      if($jumpto=='cars')
        echo "jumpto_cars()";
      if($jumpto=='achievements')
        echo "jumpto_achievements()";
      if($jumpto=='media')
        echo "jumpto_media()";
      if($jumpto=='marketing')
        echo "jumpto_marketing()";
      if($jumpto=='sponsors')
        echo "jumpto_sponsors()";
    }
    ?>
  </script>
</body>
</html>
