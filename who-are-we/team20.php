<?php
// Have removed fb, email and linkedin links as it's not shown in the website. Consult previous year templates if they need to be added in the future. [HelixW]
// ["Full Name","Department","image"]

/*Team leaders*/
$team_leaders[0]=["Satwik Darivemula","Team Captain","satwik"];
$team_leaders[]=["Kush Taneja","Team Vice Captain","kush"];
$team_leaders[]=["Shadhir Haja","Team Manager","shadhir"];

/*Manufacturing*/
$team_manufacturing[0]=["Amal Mohammed Sirshad","Manufacturing Head","amal"];

/*Vehicle Dynamics*/
$team_vehicle[0]=["Shlok Deshmukh","Vehicle Dynamics Head","shlok"];
$team_vehicle[]=["Arsh Thakur","Vehicle Dynamics","arsh"];
$team_vehicle[]=["Sheshendra Kalyan Papakayala","Vehicle Dynamics","sheshendra"];
$team_vehicle[]=["Mayur M","Vehicle Dynamics","mayur"];
$team_vehicle[]=["Kishore K","Vehicle Dynamics","kishore"];
$team_vehicle[]=["Ashutosh Shrivastava","Vehicle Dynamics","ashutosh"];
$team_vehicle[]=["Jayant Kumar Pal","Vehicle Dynamics","jayant"];

/*Transmission*/
$team_transmission[0]=["Nitin SB","Transmission Head","nitin"];
$team_transmission[]=["Srikar Reddy","Drivetrain Head","srikar"];
$team_transmission[]=["Avinaash Jagan","Transmission","avinaash"];
$team_transmission[]=["Aryaman Bhardwaj","Transmission","aryaman"];
$team_transmission[]=["Vighnesh Sharma","Transmission","vighnesh"];
$team_transmission[]=["Kartikey Bajaj","Transmission","kartikey"];

/*Designs 3-6*/
$team_design[0]=["Tejas Singhal","Design Head","tejas"];
$team_design[]=["Sannil Nambiar","Composites and Aerodynamics Head","sannil"];
$team_design[]=["Srinjoy Bhattacharya","Design","srinjoy"];
$team_design[]=["Moxesh Bhupendrakumar Shah","Design","moxesh"];

/*Brakes*/
$team_brakes[0]=["Hriday Jain","Brakes Head","hriday"];
$team_brakes[]=["Darshit Agrawal","Brakes","darshit"];
$team_brakes[]=["Piyush Kumar","Brakes","piyush"];

/*Electrical*/
$team_electrical[0]=["Yash Agarwal","Electrical Head","yash"];
$team_electrical[]=["Suchitra S","Electrical","suchitra"];

/*Management and Marketing*/
$team_marketing[0]=["Shoumith M","Management and Marketing","shoumith"];
$team_marketing[]=["Daksh Sanjay Malik","Management and Marketing","daksh"];

?>
<div class="modal-content">
	<div class="modal-headerr" style="padding: 10px;">
		<br>
		<button type="button" class="close"  onclick="gotomeettheteam();" data-dismiss="modal" style="color:#fff !important;"><i class="ion-close-round"></i>&nbsp;&nbsp;</button>
		<h1 class="modal-title text-center">Team 2020</h1>
	</div>
	<div class="modal-body">
		<div class="container">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_leaders);$i++)
					{
						$name=$team_leaders[$i][0];
						$dept=$team_leaders[$i][1];
						$img=$team_leaders[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team20/<?php echo $img;?>.jpeg');
							height: 169px;
  							background-position: center;
  							background-repeat: no-repeat;
  							background-size: cover;">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_manufacturing);$i++)
					{
						$name=$team_manufacturing[$i][0];
						$dept=$team_manufacturing[$i][1];
						$img=$team_manufacturing[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team20/<?php echo $img;?>.jpeg');
							height: 169px;
  							background-position: center;
  							background-repeat: no-repeat;
  							background-size: cover;
							">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>
						</div>
						<?php
					}
					?>
				</ul>
			</div>
      <hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_vehicle);$i++)
					{
						$name=$team_vehicle[$i][0];
						$dept=$team_vehicle[$i][1];
						$img=$team_vehicle[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team20/<?php echo $img;?>.jpeg');
							height: 169px;
  						background-position: center;
  						background-repeat: no-repeat;
  						background-size: cover;
							">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>
						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_transmission);$i++)
					{
						$name=$team_transmission[$i][0];
						$dept=$team_transmission[$i][1];
						$img=$team_transmission[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team20/<?php echo $img;?>.jpeg');
							height: 169px;
  							background-position: center;
  							background-repeat: no-repeat;
  							background-size: cover;">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_design);$i++)
					{
						$name=$team_design[$i][0];
						$dept=$team_design[$i][1];
						$img=$team_design[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team20/<?php echo $img;?>.jpeg');
							height: 169px;
  							background-position: center;
  							background-repeat: no-repeat;
  							background-size: cover;">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_brakes);$i++)
					{
						$name=$team_brakes[$i][0];
						$dept=$team_brakes[$i][1];
						$img=$team_brakes[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team20/<?php echo $img;?>.jpeg');
							height: 169px;
  							background-position: center;
  							background-repeat: no-repeat;
  							background-size: cover;">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
      <div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_electrical);$i++)
					{
						$name=$team_electrical[$i][0];
						$dept=$team_electrical[$i][1];
						$img=$team_electrical[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team20/<?php echo $img;?>.jpeg');
							height: 169px;
  							background-position: center;
  							background-repeat: no-repeat;
  							background-size: cover;">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<hr class="thoda-light">
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_marketing);$i++)
					{
						$name=$team_marketing[$i][0];
						$dept=$team_marketing[$i][1];
						$img=$team_marketing[$i][2];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team20/<?php echo $img;?>.jpeg');
							height: 169px;
  							background-position: center;
  							background-repeat: no-repeat;
  							background-size: cover;">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
								</div>
							</div>
							<h3 class="text-center"><?php echo $dept;?></h3>

						</div>
						<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<div class="modal-footerr text-center">
		<hr class="white-hr">
		<button type="button" class="btn btn-default font-black" data-dismiss="modal" onclick="gotomeettheteam();">Close</button>
	</div>
</div>
