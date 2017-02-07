<!doctype html>
<html class="no-js">
<head>
	<title>Team Jaabaz | Marketing Activities</title>
	<?php
	include('../meta.php');
	?>
	<?php
	include('../commoninnerstyles.php');
	?>
	<link rel="stylesheet" type="text/css" href="../styles/lightbox/lightbox.css">
	<link rel="stylesheet" type="text/css" href="../styles/marketing.css">
	<style type="text/css">
	</style>
</head>
<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<div class="hero hero-cars underline-box text-center">
		<div class="button-div">
			<a href="../what-we-do/?jumpto=marketing">
				<button class="hero-back-button wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s"> <i class="ion-android-arrow-back" aria-hidden="true"></i> Go back</button>
			</a>
		</div>
		
		<div class="before-heading"></div>
		<h1 class="wow fadeInDown hero-team" data-wow-duration="1s" data-wow-delay="0.5s">Team Jaabaz</h1>
		<h1 class="wow fadeInUp hero-heading display-inline-block" data-wow-duration="1s" data-wow-delay="1s">Marketing Activities
			<span class="underline"></span>
		</h1>
	</div>
	<main>
		<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			<br><br>
			<div class="row">
				<?php
			for($i=1;$i<=10;$i++)//increase this $i if have more images
			{
				?>
				<div class="col-xs-6 col-sm-4 img-box">
				<a href="../img/marketing-activities/unminified/<?php echo $i;?>.jpg" data-lightbox="image" data-title="<h4>A title can be put here</h4>">
						<div class="overlay">
							<h1 class="overlay-text">A heading</h1>
						</div>
						<img src="../img/marketing-activities/<?php echo $i;?>.jpg" class="img-responsive media-img">
					</a>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</main>
<?php
include('../commonscriptstoinner.php');
?>
<script type="text/javascript" src="../scripts/lightbox.js"></script>
<script type="text/javascript">
	$(".img-box").hover(function(){

		$( this ).find( '.overlay' ).slideDown();

			//$( this ).find( '.overlay-text' ).slideDown();
		}, function(){
			
			$( this ).find( '.overlay' ).slideUp();
			//$( this ).find( '.overlay-text' ).slideUp();
		});
	</script>
</body>
</html>