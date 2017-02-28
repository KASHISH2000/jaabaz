  <?php
  global $baseUrl;
  ?>
  <meta charset="utf-8">
  <meta name="description" content="We, Team Jaabaz, are a team of undergraduate students operating out of VIT University Vellore, and we manufacture an All-Terrain Vehicle, indigenously designed, every year and compete with teams internationally, in Baja SAE competitions organized by the Society of Automotive Engineers (SAE) in the United States of America.">
  <meta name="keywords" content="Team Jaabaz,VIT University,Racing,All-Terrain,Baja SAE,ACM VIT, Harshit Kedia">
  <meta name="og:description" content="We, Team Jaabaz, are a team of undergraduate students operating out of VIT University Vellore, and we manufacture an All-Terrain Vehicle, indigenously designed, every year and compete with teams internationally, in Baja SAE competitions organized by the Society of Automotive Engineers (SAE) in the United States of America."/>
  <meta name="og:url" content="https://www.teamjaabaz.com/"/>
  <meta name="og:title" content="Team Jaabaz | VIT University"/>
  <meta name="og:image" content="<?php echo $baseUrl;?>img/logo_small.png"/>
  <meta name="author" content="ACM VIT, Harshit Kedia">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" content="#000">
  <!--favicons-->
  <!-- <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $baseUrl?>img/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $baseUrl?>img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $baseUrl?>img/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $baseUrl?>img/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $baseUrl?>img/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $baseUrl?>img/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $baseUrl?>img/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $baseUrl?>img/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $baseUrl?>img/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $baseUrl?>img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $baseUrl?>img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $baseUrl?>img/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $baseUrl?>img/favicons/manifest.json"> -->

  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
  <style type="text/css">
  	#preloader {
      position:fixed;
      top:0;
      left:0;
      right:0;
      bottom:0;
      background-color:#4b4b4b; /* change if the mask should have another color then white */
      z-index:99; /* makes sure it stays on top */
    }

    #status {
      width:400px;
      height:400px;
      position:absolute;
      left:43%; /* centers the loading animation horizontally one the screen */
      top:22%; /* centers the loading animation vertically one the screen */
      background-image:url(../img/pleasewait.gif); /* path to your loading animation */
      background-repeat:no-repeat;
      background-position:center;
      background-size: cover;
      margin:-100px 0 0 -100px; /* is width and height divided by two */
    }
    #home #status {
      background-image:url(img/pleasewait.gif); /* path to your loading animation */
    }
    @media(max-width: 769px){
      #status{
        width: 250px;
        height: 250px;
        left: 46%;
        top: 30%;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../styles/bootstrap.css">
 <!--  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->