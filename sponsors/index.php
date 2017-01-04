<!doctype html>
<html class="no-js">
<head>
	<title>Team Jaabaz | Sponsors</title>
	<?php
	include('../meta.php');
	?>
	<?php
	include('../commoninnerstyles.php');
	?>
	<link rel="stylesheet" type="text/css" href="../styles/sponsors.css">
	<style type="text/css">
		.sponsor-img{
			width: 95%;
			vertical-align: middle;
			max-width: 100%;
			max-height: 100%;

		}
		.overlay-text{
			margin-top: 5%;
			vertical-align: middle;
			font-size: 3rem;
		}
		.overlay{
			vertical-align: middle;
			cursor: default;
		}
		.sponsors-img-box{
			height: 150px;
			vertical-align: middle;
			margin-bottom: 1rem;
			
		}
		.img-box{
			vertical-align: middle;
		}
		.helper {
			display: inline-block;
			height: 100%;
			vertical-align: middle;
		}
		@media(max-width: 769px){
			.sponsors-img-box{
				height: 100px;
			}
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
		<h1 class="wow fadeInUp hero-heading display-inline-block" data-wow-duration="1s" data-wow-delay="1s">Sponsors
			<span class="underline"></span>
		</h1>
	</div>
	<main>
		<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			<br><br>
			<div class="row">
				<?php
				$headings=["","The Pen World","Wire India Corporation","TekkiTake","Fox",
				"Motilal Oswal","Lankmark Constructions","India Builders","Sequel",
				"Caresoft","Britannia","Gahfar","CP World",
				"Duke","Good Year","Hovert","Dalmia",
				"WAM Racing","Dinamalar","Spigen","Magod Laser",
				"Servo Lubricants","Roots","Briggs & Stratton","Welstuf",
				"Zoom Communications","ISC","Transpek-Silox","Expofreight",
				"Sibridge Technology","BKT ATV","Venus","Endurance",
				"GSPC","Govt of Jharkhand","Solid Works","Toyota",
				"Velman"
				];
				for($i=1;$i<=37;$i++)
				{
					?>
					<div class="col-xs-6 col-sm-3 sponsors-img-box img-box">
						<div class="overlay" id="overlay_<?php echo $i;?>">
							<h1 class="overlay-text"><?php echo $headings[$i];?></h1>
						</div>
						<img src="../img/sponsors/<?php echo $i;?>.jpg" class="img-responsive sponsor-img" id="img_<?php echo $i;?>">
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
	<script type="text/javascript">
		$(".sponsors-img-box").hover(function(){
			
			$( this ).find( '.overlay' ).slideDown();
			
			//$( this ).find( '.overlay-text' ).slideDown();
		}, function(){
			
			$( this ).find( '.overlay' ).slideUp();
			//$( this ).find( '.overlay-text' ).slideUp();
		});

		setInterval(function(){
		 	//this function is to make the overlay same height of image
		 	var i=0;
		 	for(i=1;i<=37;i++){//increase i if no. of aponsors increased
		 		var ht0 = $("#img_"+i).height();
		 		var wd0 = $("#img_"+i).width();
		 		var ht=ht0+"px";
		 		var wd=wd0+"px";
		 		//console.log("Height of image "+i+" is:"+ht);
		 		$("#overlay_"+i).css({'height':ht});
		 		$("#overlay_"+i).css({'width':wd});
		 	}
		 },500);
		</script>
	</body>
	</html>