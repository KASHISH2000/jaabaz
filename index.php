<?php
global $baseUrl;
$baseUrl="http://marimuthuk.com/jaabaz/";
?>
<!-- Developed by Harshit Kedia as a part of ACM VIT-->
<!doctype html>
<html class="no-js">
<head>
    <title>Team Jaabaz | VIT University</title>
    <?php
    include('meta.php');
    ?>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
    <link rel="apple-touch-icon" href="img/logo_small.png">
    <link rel="icon" type="image/png" href="img/logo_small.png">
    <meta name="msapplication-TileImage" content="img/logo_small.png">
    <link rel="stylesheet" type="text/css" href="styles/ionicons.min.css">
    <link href="styles/main.css" rel="stylesheet"/>
    <link href="styles/vendor.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="styles/buttonloader.css">
    <link rel="stylesheet" type="text/css" href="styles/mystyle.css">
    <link rel="stylesheet" type="text/css" href="styles/slider_demo3.css">

    <style type="text/css">
        body,html,#home{
            overflow-y: hidden !important;
        }
        .link-landing{
            text-decoration: none !important;
        }
        .moldura-landing__borda{
         background-color: transparent;
         position: relative;
     }
     .acmvit-made-div{
        text-align: center;
        color: #ccc;
        font-size: 0.77rem;
        padding-bottom: 20px;
        padding-top: 5px;
    }
    .acmvit-made-div a{
        text-decoration: none !important;
        transition: all 0.5s ease;
        -webkit-transition: all 0.5s ease;
        -ms-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        z-index: 20000;
    }
    .acmvit-made-div a:hover{

    }
    .anytrack{
        letter-spacing: 7px;
    font-weight: bold;
    }
    @media (min-width: 769px){
         .table__vAlign {
            vertical-align: middle;
        }
    }
    @media(max-width: 960px){
        .moldura-landing{
            padding-bottom: 30px;
        }
        .contact-us-div{
            bottom: 45px;
        }
        .support-us-div{
            bottom: 45px;
        }
        .acmvit-made-div{
            margin-bottom: -10px;
        }
        .table__vAlign {
            vertical-align: top;
        }
    }
     .ionclass{
      color: #f2f2f2 !important;
    }
    .ion-social-youtube:hover {
      color: #cc181e !important;
    }
    .ion-social-linkedin:hover{
      color: #0077B5 !important;
    }
     .ion-social-facebook:hover{
      color:#3b5998 !important;
    } 
</style>
</head>
<body id="home">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
        <!-- <div id="awwwards" class="sotd white left">
            <a href="http://www.awwwards.com" target="_blank">Awwwards</a>
        </div> -->
        <div id="fb-root"></div>
        
        <div class="barra-menu"></div>

        <nav class="menu --hide">
           <div class="menu__link --about">
            <a class="menu__logo" href="index.html"></a>
            <a class="menu__text link-page" href="who-are-we/">Who are we ?</a>
        </div>
        <div class="menu__link --works">
           <a class="menu__logo" href="index.html"></a>
           <a class="menu__text link-page" href="what-we-do/">What we do ?</a>
       </div>
   </nav>
   <a href="works/index.html" class="back-works link-page --hide">Back to Works <span class="back-works__icon"></span></a>


   <div id="home" class="animation-container --in">

<!-- <div class="barra-loading">
    <div class="barra-loading__barra">
        <div class="barra-loading__porcentagem"></div>
    </div>
</div> -->
<div class="gifs-landing"></div>
<!-- <div class="overlay-landing --flat"></div> -->
<div class="overlay-landing"></div>
<!-- <div class="moldura-landing hide"> -->
<div class="moldura-landing">
    <div class="moldura-landing__borda" id="bg-div-1">
        <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 06</span></li>
        </ul>
        <div class="moldura-landing__left"></div>
        <div class="moldura-landing__right"></div>
    </div>

    <div class="contact-us-div">

        <a href="contactus.html" id="contactuslinkid" class="jaabaz-link" data-toggle="modal" href="#contactusmodal" data-target="#contactusmodal">Contact Us</a>
    </div>
    <div class="support-us-div">
        <a href="supportus.html" class="jaabaz-link" data-toggle="modal" href="#supportusmodal" data-target="#supportusmodal">Support Us</a>
    </div>
    <div class="acmvit-made-div">
       <a href="https://www.facebook.com/ACM.VITU/" target="_blank">
           developed by ACM-VIT
       </a>
   </div>
</div>
<div class="table">
    <div class="table__vAlign">
        <h2 class="frase"><span class="teamjaabaz"><b><strong>Team Jaabaz</strong></b></span>
            <br>
           <span class="anytrack"> Any Track. Any Day.</span></h2>
        </div>
    </div>
<!-- <div class="text-loading">
    <div class="table" >
        <div class="table__vAlign">
            <h2 class="text-loading__title">Hi, we are Cappen</h2>
            <p class="text-loading__descricao">A DIGITAL CREATIVE PRODUCTION AGENCY THAT LOVES TO MAKE THINGS HAPPEN.</p>
        </div>
    </div>
    <p class="text-loading__bottom">We are loading the website, if you want go straight to the point, write us at <a href="mailto:email@cappen.com">email@cappen.com</a></p>
</div> -->
<!-- <a class="link-landing link-page hide --left" href="http://www.cappen.com/en/about"> -->
<a class="link-landing link-page --left" href="who-are-we">
    <span class="link-landing__text">
        <span class="link-landing__out">Who are we ?</span>
        <span class="link-landing__over --amarelo">Who are we ?</span>
    </span>
</a>
<!-- <a class="link-landing link-page hide --right" href="http://www.cappen.com/en/works"> -->
<a class="link-landing link-page --right" href="what-we-do">
    <span class="link-landing__text">
        <span class="link-landing__out">What we do ?</span>
        <span class="link-landing__over --amarelo">What we do ?</span>
    </span>
</a>
<!-- <a href="javascript:;" class="link-landing clickgif hide --bottom --circle">click and find out</a> -->
</div>


<footer>
 <nav class="social">
    <a class="social__media" target="_blank" href="https://www.facebook.com/teamjaabaz/"><i class="ionclass ion-social-facebook" aria-hidden="true"></i></a>
    <a class="social__media" target="_blank" href="https://www.linkedin.com/company/9241675?trk=prof-exp-company-name"><i class="ionclass ion-social-linkedin" aria-hidden="true"></i></a>
    <a class="social__media" target="_blank" href="https://www.youtube.com/channel/UCQYPdJIlSCqqYTSI9OAZ0OQ"><i class="ionclass ion-social-youtube" aria-hidden="true"></i></a>
</nav>
</footer>
<!-- Contact us Modal -->
<div id="contactusmodal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="contactusmodaldialog">
      <div class="modal-body text-center">
        <img src="img/loading.gif" style="width:100px !important;" />
    </div>
    <div class="modal-footerr text-center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
<!-- Support us Modal -->
<div id="supportusmodal" class="modal fade" role="dialog">
    <div class="modal-dialog" id="supportusmodaldialog">
      <div class="modal-body text-center">
        <img src="img/loading.gif" style="width:100px !important;" />
    </div>
    <div class="modal-footerr text-center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
<!-- support us modal end-->
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
<script src="scripts/vendor/modernizr.js"></script>
<script type = "text/javascript">
    $('#contactusmodaldialog').load("contactusmodal.php");
    $('#supportusmodaldialog').load("supportusmodal.php");
</script>
<script type="text/javascript" src="scripts/buttonloader.js"></script>
<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
    (function(){
        emailjs.init("user_KdsHYnbwRPgcqHJkuyTH7");
    })();
</script>
<script type="text/javascript">
    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
  }
  function send_mail()
  {
    var name_var=$("#name").val();
    var email_var=$("#email").val();
    var subject_var=$("#subject").val();
    var message_var=$("#message").val();
    if(name_var=="")
    {
        alert("Please fill the required fields");
    }
    else if(email_var=="")
    {
        alert("Please fill the required fields");
    }
    else if(!isEmail(email_var))
    {
        alert("Please Enter correct Email id");
    }
    else if(subject_var=="")
    {
        alert("Please fill the required fields");
    }
    else if(message_var=="")
    {
        alert("Please fill the required fields");
    }
    else
    {
        var btn = $('#contact-form-submit');
        $(btn).buttonLoader('start');
        emailjs.send("gmail","jaabaz",{name: name_var ,email: email_var, subject:subject_var,message:message_var})
        .then(function(response) {
            $(btn).buttonLoader('stop');
            setTimeout(function () {
                $("#name").val('');
                $("#email").val('');
                $("#subject").val('');
                $("#message").val('');
            }, 100);
            alert("Thank you for contacting us. We will get back to you soon.");
            console.log("SUCCESS. status=%d, text=%s", response.status, response.text);
        }, function(err) {
            $(btn).buttonLoader('stop');
            alert("There was an error. Please try again");
            console.log("FAILED. error=", err);
        });
    }
}
</script>
</body>
</html>
