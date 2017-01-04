<!doctype html>
<html class="no-js">
<head>
	<title>Team Jaabaz | Achievements</title>
	<?php
	include('../meta.php');
	?>
	<?php
	include('../commoninnerstyles.php');
	?>
	<link rel="stylesheet" type="text/css" href="../styles/achievements.css">
	<style type="text/css">
		.hero-team{
			font-size: 3.5rem;

			font-weight: bold;
			color: #fff;
			text-align: center;
		}
		.cd-heading{
			color: #b00a28 !important;
			font-weight: bold;
			font-size: 1.8rem !important;
		}
	</style>
</head>
<body>
	<!-- Preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<div class="hero hero-cars underline-box text-center">
		<div class="button-div">
			<a href="../what-we-do/">
				<button class="hero-back-button wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.5s"> <i class="ion-android-arrow-back" aria-hidden="true"></i> Go back</button>
			</a>
		</div>
		
		<div class="before-heading"></div>
		<h1 class="wow fadeInDown hero-team" data-wow-duration="1s" data-wow-delay="0.5s">Team Jaabaz</h1>
		<h1 class="wow fadeInUp hero-heading display-inline-block" data-wow-duration="1s" data-wow-delay="1s">Achievements
		<span class="underline"></span>
		</h1>
	</div>
	<main>
		<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			<section id="cd-timeline" class="cd-container">

				<!-- first block-->
				<div class="cd-timeline-block underline-box" id="cd_block0">
					<div class="cd-timeline-img cd-picture">
						<!-- <img src="img/general/cars/prv16.png" class="" alt="Picture"> -->
						<h3 class="cd-img-date">16'</h3>
					</div>
					<div class="cd-timeline-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2 class="cd-heading display-inline-block">BAJA SAE TENNESSE, USA
						<span class="underline"></span>
						</h2>
						<ul>
							<li>10th position in design at international event conducted by SAE in the us</li>
						</ul>
						
						<!-- <span class="cd-date">Jan 14</span> -->
					</div> 
				</div>

				<!--Second block-->
				<div class="cd-timeline-block underline-box" id="cd_block1">
					<div class="cd-timeline-img cd-picture">
						<h3 class="cd-img-date">14'</h3>
					</div>
					<div class="cd-timeline-content wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2 class="cd-heading display-inline-block">OESA GENERATION AUTO VIDEO CONTEST
						<span class="underline"></span>
						</h2>
						<ul>
							<li>2nd Place</li>
						</ul>
						
					</div> 
				</div>

				<!-- third block-->
				<div class="cd-timeline-block underline-box" id="cd_block2">
					<div class="cd-timeline-img cd-picture">
						<h3 class="cd-img-date">11'</h3>
					</div>
					<div class="cd-timeline-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2 class="cd-heading display-inline-block">SOUTH AFRICA – SASOL BAJA
						<span class="underline"></span>
						</h2>
						<ul>
							<li>1st – feasibility of mass production</li>
							<li>3rd – cost feasibility</li>
							<li>5th – design event</li>
						</ul>
						
					</div> 
				</div>

				<!--fourth block-->
				<div class="cd-timeline-block underline-box" id="cd_block3">
					<div class="cd-timeline-img cd-picture">
						<h3 class="cd-img-date">10'</h3>
					</div>
					<div class="cd-timeline-content wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2 class="cd-heading display-inline-block">VIRTUAL MINI BAJA – SAE INDIA
						<span class="underline"></span>
						</h2>
						<ul>
							<li>1st prize in national level competition out of 150 teams.</li>
						</ul>
						
					</div> 
				</div>

				<!--Fivth block-->
				<div class="cd-timeline-block underline-box" id="cd_block4">
					<div class="cd-timeline-img cd-picture">
						<h3 class="cd-img-date">09'</h3>
					</div>
					<div class="cd-timeline-content wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2 class="cd-heading display-inline-block">BAJA SAE OREGON, USA
						<span class="underline"></span>
						</h2>
						<ul>
							<li>Came 19th out of the 100 teams that participated</li>
							<li>First ever international season for team jaabaz</li>
						</ul>
						
					</div> 
				</div>
			</section> <!-- cd-timeline -->
		</div>
	</main>
	<br>

	<?php
	include('../commonscriptstoinner.php');
	?>
	<script>
		jQuery(document).ready(function($){
			var timelineBlocks = $('.cd-timeline-block'),
			offset = 0.8;

	//hide timeline blocks which are outside the viewport
	hideBlocks(timelineBlocks, offset);

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
		? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
		: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});

	function hideBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		});
	}

	function showBlocks(blocks, offset) {
		blocks.each(function(){
			( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
		});
	}
});
</script>
</body>
</html>
