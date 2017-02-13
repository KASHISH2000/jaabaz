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

    <!-- LOGO -->
    <div id="logo" class="left-float">
      <a href="index.php">
      <!--  <img id="scroll-logo" src="img/logo.png" srcset="img/logo.png 1x, img/logo.png 2x" alt="Team Jaabaz"> -->
       <img id="dark-logo" src="img/logo_light2.png" srcset="img/logo_light2.png 1x, img/logo_light2.png 2x" alt="Logo Dark">
     </a>
   </div>

   <!-- MAIN NAVIGATION -->
   <div id="menu" class="right-float">
     <a href="#" class="responsive-nav-toggle"><span class="hamburger"></span></a>
     <div class="menu-inner">
      <nav id="main-nav">
        <ul>
          <li class="menu-item<?php if($current=='home') echo ' current-menu-item';?>"><a href="what-we-do/">Home</a>
          </li>
          <li class="menu-item<?php if($current=='cars') echo ' current-menu-item';?>"><a href="cars.php">Cars</a>
          </li>
          <li class="menu-item<?php if($current=='achievements') echo ' current-menu-item';?>"><a href="achievements.php">Achievements</a>
          </li>
          <li class="menu-item<?php if($current=='media') echo ' current-menu-item';?>"><a href="#">Media</a>
          </li>
          <li class="menu-item<?php if($current=='marketing') echo ' current-menu-item';?>"><a href="marketing-activities.php">Marketing Activities</a>
          </li>
          <li class="menu-item<?php if($current=='sponsors') echo ' current-menu-item';?>"><a href="sponsors.php">Sponsors</a>
          </li>
        </ul>
      </nav>
    </div><!-- END #menu -->
  </div> <!-- END .header-inner -->
</div>
</header>