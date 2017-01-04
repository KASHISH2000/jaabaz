<!doctype html>
<html class="no-js">
<head>
	<title>Team Jaabaz | Cars</title>
	<?php
	include('../meta.php');
	?>
	<?php
	include('../commoninnerstyles.php');
	?>
	<style type="text/css">
		.car-spec li{
			margin-top: 15px;
		}
		
		#carTitle{
			width: 25rem;
			max-width: 70%;
			display: inline-block;
		}
		.ion{
			font-weight: bold;
			font-weight: 9000;
			font-size: 40px;
			-webkit-transition: all 0.4s ease-in-out;
			-moz-transition: all 0.4s ease-in-out;
			-o-transition: all 0.4s ease-in-out;
			-ms-transition: all 0.4s ease-in-out;
			transition: all 0.4s ease-in-out;
		}
		.ion:hover{
			color: #b00a28;
			cursor: pointer;
		}
		
		.multiple-borders {
			-webkit-box-shadow:
			0px 0px 0px 2px rgba(0,0,0,0.6),
			0px 0px 0px 14px #fff,
			0px 0px 0px 18px rgba(0,0,0,0.2),
			6px 6px 8px 17px #555;

			-moz-box-shadow:
			0px 0px 0px 2px rgba(0,0,0,0.6),
			0px 0px 0px 14px #fff,
			0px 0px 0px 18px rgba(0,0,0,0.2),
			6px 6px 8px 17px #555;

			box-shadow:
			0px 0px 0px 2px rgba(0,0,0,0.6),
			0px 0px 0px 14px #fff,
			0px 0px 0px 18px rgba(0,0,0,0.2),
			6px 6px 8px 17px #555;
		}
		.hero-team{
			font-size: 3.5rem;

			font-weight: bold;
			color: #fff;
			text-align: center;
		}
		@media(max-width: 769px){
			.car-spec ul{
				margin-bottom: 60px;
			}
		}
		@media(min-width: 770px){
			.car-spec ul{
				margin-top: 60px;
			}
			.car-heading{
				margin-bottom: 40px;
			}
			.carPic{
				height: 400px;
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
		<h1 class="wow fadeInDown hero-team" data-wow-duration="1s" data-wow-delay="0.5s">Team Jaabaz</h1>
		<h1 class="wow fadeInUp hero-heading display-inline-block" data-wow-duration="1s" data-wow-delay="1s">Cars
			<span class="underline"></span>
		</h1>
	</div>
	<main>
		<div class="container wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
			<h1 class="car-heading text-center"><b><i class="ion ion-android-arrow-back" aria-hidden="true" onclick="back()"></i></b>&nbsp;<span id="carTitle">Car 2016</span>&nbsp;<b><i class="ion ion-android-arrow-forward" aria-hidden="true" onclick="forward()"></i></b></h1>
			<div class="car-content">
				<br>
				<div class="row" id="wrapper">
					<div class="carinfo" id="2016">
						<div class="car-spec col-md-6">
							<ul class="">
								<li><b>Weight : </b>190Kg</li>
								<li><b>Engine : </b>Briggs and Stratton Model 20</li>
								<li><b>Front Suspension : </b>Double A-Arm</li>
								<li><b>Rear Suspension : </b>5-Link</li>
								<li><b>Transmission : </b>Custom gears with DANA casing and Gaged CVT</li>
								<li><b>Suspension : </b>Fox Float 3</li>
								<li><b>Brakes : </b>Apache Dual Piston,	Custom Brake Discs, Cutting Brakes </li>
							</ul>
						</div>
						<div class="car-pic col-md-6">
							<img src="../img/cars/2016.jpg" class="multiple-borders car-pic carPic img-responsive">
						</div>
					</div>

					<div class="carinfo" id="2015">
						<div class="car-spec col-md-6">
							<ul class="">
								<li><b>Weight : </b>220Kg</li>
								<li><b>Engine : </b>Briggs and Stratton Model 20</li>
								<li><b>Front Suspension : </b>Double A-Arm</li>
								<li><b>Rear Suspension : </b>H and I Arm</li>
								<li><b>Transmission : </b>Gaged CVT with Dana</li>
								<li><b>Suspension : </b>Fox Float 3</li>
								<li><b>Brakes : </b>Apache Dual Piston,	Custom Brake Discs
								</li>
							</ul>
						</div>
						<div class="car-pic col-md-6">
							<img src="../img/cars/2015.jpg" class="multiple-borders car-pic carPic img-responsive">
						</div>
					</div>

					<div class="carinfo" id="2014">
						<div class="car-spec col-md-6">
							<ul class="">
								<li><b>Weight : </b>245Kg</li>
								<li><b>Engine : </b>Briggs and Stratton Model 20</li>
								<li><b>Front Suspension : </b>Double A-Arm</li>
								<li><b>Rear Suspension : </b>Double A-Arm</li>
								<li><b>Transmission : </b>Manual Transmission</li>
								<li><b>Suspension : </b>Coilovers</li>
								<li><b>Brakes : </b>Apache Dual Piston,	Custom Brake Discs
								</li>
							</ul>
						</div>
						<div class="car-pic col-md-6">
							<img src="../img/cars/2014.jpg" class="multiple-borders car-pic carPic img-responsive">
						</div>
					</div>

					<div class="carinfo" id="2013">
						<div class="car-spec col-md-6">
							<ul class="">
								<li><b>Weight : </b>230Kg</li>
								<li><b>Engine : </b>Briggs and Stratton Model 20</li>
								<li><b>Front Suspension : </b>Double A-Arm</li>
								<li><b>Rear Suspension : </b>Semi Trailing</li>
								<li><b>Transmission : </b>Comet CVT with stock gearbox</li>
								<li><b>Suspension : </b>Coilovers</li>
								<li><b>Brakes : </b>Apache Dual Piston,	Custom Brake Discs
								</li>
							</ul>
						</div>
						<div class="car-pic col-md-6">
							<img src="../img/cars/2013.jpg" class="multiple-borders car-pic carPic img-responsive">
						</div>
					</div>

					<div class="carinfo" id="2011">
						<div class="car-spec col-md-6">
							<ul class="">
								<li><b>Weight : </b>260Kg</li>
								<li><b>Engine : </b>Briggs and Stratton Model 20</li>
								<li><b>Front Suspension : </b>Double A-Arm</li>
								<li><b>Rear Suspension : </b>Semi Trailing</li>
								<li><b>Transmission : </b>Comet CVT with stock gearbox</li>
								<li><b>Suspension : </b>Coilovers</li>
								<li><b>Brakes : </b>Apache Dual Piston,	Custom Brake Discs
								</li>
							</ul>
						</div>
						<div class="car-pic col-md-6">
							<img src="../img/cars/2011.jpg" class="multiple-borders car-pic carPic img-responsive">
						</div>
					</div>

					<div class="carinfo" id="2010">
						<div class="car-spec col-md-6">
							<ul class="">
								<li><b>Weight : </b>278Kg</li>
								<li><b>Engine : </b>Briggs and Stratton Model 20</li>
								<li><b>Front Suspension : </b>Double A-Arm</li>
								<li><b>Rear Suspension : </b>Semi Trailing</li>
								<li><b>Transmission : </b>Comet CVT with stock gearbox</li>
								<li><b>Suspension : </b>Coilovers</li>
								<li><b>Brakes : </b>Apache Dual Piston,	Custom Brake Discs
								</li>
							</ul>
						</div>
						<div class="car-pic col-md-6">
							<img src="../img/cars/2010.jpg" class="multiple-borders car-pic carPic img-responsive">
						</div>
					</div>

					<div class="carinfo" id="2009">
						<div class="car-spec col-md-6">
							<ul class="">
								<li><b>Weight : </b>290Kg</li>
								<li><b>Engine : </b>Briggs and Stratton Model 20</li>
								<li><b>Front Suspension : </b>Double A-Arm</li>
								<li><b>Rear Suspension : </b>Semi Trailing</li>
								<li><b>Transmission : </b>Comet CVT with stock gearbox</li>
								<li><b>Suspension : </b>Coilovers</li>
								<li><b>Brakes : </b>Apache Dual Piston,	Custom Brake Discs
								</li>
							</ul>
						</div>
						<div class="car-pic col-md-6">
							<img src="../img/cars/2009.jpg" class="multiple-borders car-pic carPic img-responsive">
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
	<script type="text/javascript">
		var car_ids=["2016","2015","2014","2013","2011","2010","2009"];
		var car_heads=["Car 2016","Car 2015","Car 2014","Car 2013","Car 2011","Car 2010","Car 2009"];
		var cur=0;
		function decre_cur(){
			return cur==0 ? (car_ids.length-1):(cur-1);
		}
		function incre_cur(){
			return (cur+1)%car_ids.length;
		}
		function hideall(){
			for(var i=0;i<car_ids.length;i++){
				$("#"+car_ids[i]).hide();
			}
		}
		function fadein(no) {
			$("#"+car_ids[no]).fadeIn();
		}
		function back(){
			hideall();
			cur=decre_cur();
			$("#carTitle").text(car_heads[cur]);
			fadein(cur);
		}
		function forward(){
			hideall();
			cur=incre_cur();
			$("#carTitle").text(car_heads[cur]);
			fadein(cur);
		}
		function init(){
			hideall();
			fadein(0);
		}
		init();

	</script>
</body>
</html>