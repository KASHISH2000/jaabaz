<!doctype html>
<html class="no-js">
<head>
	<title>Team Jaabaz | Media</title>
	<?php
	include('../meta.php');
	?>
	<?php
	include('../commoninnerstyles.php');
	?>
	<link rel="stylesheet" type="text/css" href="../styles/lightbox/lightbox.css">
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
			<a href="../what-we-do/?jumpto=media">
				<button class="hero-back-button wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s"> <i class="ion-android-arrow-back" aria-hidden="true"></i> Go back</button>
			</a>
		</div>
		
		<div class="before-heading"></div>
		<h1 class="wow fadeInDown hero-team" data-wow-duration="1s" data-wow-delay="0.5s">Team Jaabaz</h1>
		<h1 class="wow fadeInUp hero-heading display-inline-block" data-wow-duration="1s" data-wow-delay="1s">Media
			<span class="underline"></span>
		</h1>
	</div>
	<main>
		<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			
			<br>
			<div class="photos-div underline-box text-center">
				<h1 class="text-center display-inline-block">Photos
					<span class="underline"></span>
				</h1>
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-4 img-box">
							<a href="../img/media/img/uncompressed/1.png" data-lightbox="image" data-title="<h4>A title can be put here</h4>">
								<div class="overlay">
									<h1 class="overlay-text">A heading</h1>
								</div>
								<img src="../img/media/img/1.jpg" class="img-responsive media-img">
							</a>
						</div>
						<div class="col-xs-6 col-sm-4 img-box">
							<a href="../img/media/img/uncompressed/2.png" data-lightbox="image" data-title="A title can be put here">
								<div class="overlay">
									<h1 class="overlay-text">A heading</h1>
								</div>
								<img src="../img/media/img/2.jpg" class="img-responsive media-img">
							</a>
						</div>
						<div class="col-xs-6 col-sm-4 img-box">
							<a href="../img/media/img/uncompressed/3.png" data-lightbox="image" data-title="A title can be put here">
								<div class="overlay">
									<h1 class="overlay-text">A heading</h1>
								</div>
								<img src="../img/media/img/3.jpg" class="img-responsive media-img">
							</a>
						</div>
						<div class="col-xs-6 col-sm-4 img-box">
							<a href="../img/media/img/uncompressed/4.png" data-lightbox="image" data-title="A title can be put here">
								<div class="overlay">
									<h1 class="overlay-text">A heading</h1>
								</div>
								<img src="../img/media/img/4.jpg" class="img-responsive media-img">
							</a>
						</div>
						<div class="col-xs-6 col-sm-4 img-box">
							<a href="../img/media/img/uncompressed/5.png" data-lightbox="image" data-title="A title can be put here">
								<div class="overlay">
									<h1 class="overlay-text">A heading</h1>
								</div>
								<img src="../img/media/img/5.jpg" class="img-responsive media-img">
							</a>
						</div>

					</div>
				</div>
			</div>
			<div class="videos-box underline-box text-center">
				<h1 class="text-center display-inline-block">Videos
					<span class="underline"></span>
				</h1>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<iframe class="youtube-iframe" src="https://www.youtube.com/embed/xbm8Ulf0nkM" frameborder="0" allowfullscreen></iframe>
						</div>
						<br>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<iframe class="youtube-iframe" src="https://www.youtube.com/embed/xbm8Ulf0nkM" frameborder="0" allowfullscreen></iframe>
						</div>
						<br>
						<div class="col-xs-12 col-sm-8 col-sm-offset-2">
							<iframe class="youtube-iframe" src="https://www.youtube.com/embed/xbm8Ulf0nkM" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
			<br><br><br>
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