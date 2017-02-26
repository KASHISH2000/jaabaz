 <?php
 global $current;
 ?>
 <!-- PAGELOADER -->
 <!-- Preloader -->
 <div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<!-- PAGELOADER -->
<!--Facebook SDK-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=297540167315276";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- PAGE CONTENT -->
<div id="page-content">

 <!-- HEADER -->
 <header id="header" class="header-bordered sub-dark">        
  <div class="header-inner clearfix">
  <div class="button-div" style="margin: 10px;">
      <a href="what-we-do/?jumpto=<?php echo $current;?>">
        <button class="hero-back-button wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s"> <i class="ion-android-arrow-back" aria-hidden="true"></i> Go back</button>
      </a>
    </div>
  </div>
</header>