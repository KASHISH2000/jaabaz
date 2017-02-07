 
<?php
 //       ["Full Nam","Department","image","FB LINK","linked in"]
/*Team leaders 0-2*/
$team_leaders[0]=["Shubham Raghuvamshi","Team Captain","shubham","http://fb.com","https://www.linkedin.com/"];
$team_leaders[]=["Brijesh Aiyer","Team Manager","brijesh","http://fb.com","https://www.linkedin.com/"];

/*Vehicle Dynamics 7-15*/
$team_vehicle[0]=["Arvind","Vehicle Dynamics","arvind","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Shyam","Vehicle Dynamics","shyam","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Swapnil","Vehicle Dynamics","swapnil","http://fb.com","https://www.linkedin.com/"];

/*Transmission*/
$team_transmission[0]=["Aayush","Transmisssion","aayush","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Ujjwal","Transmission","ujjwal","http://fb.com","https://www.linkedin.com/"];

/*Marketing and Management-*/
$team_marketing[0]=["Aditya","Marketing and Management","aditya","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Aruna","Marketing and Management","aruna","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Hemanth","Marketing and Marketing","hemanth","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Hiten","Marketing and Management","hiten","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Raja","Marketing and Management","raja","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Tarun K","Marketing and Management","tarun","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Yashwanth","Marketing and Management","yashwanth","http://fb.com","https://www.linkedin.com/"];

/*Designs 3-6*/
$team_design[0]=["Abhishek","Design","abhishek","http://fb.com","https://www.linkedin.com/"];
$team_design[]=["Dhruvit","Design","dhruvit","http://fb.com","https://www.linkedin.com/"];
$team_design[]=["Yashwant","Design","yashwant","http://fb.com","https://www.linkedin.com/"];

/*Brakes*/
$team_brakes[0]=["Pranshu","Brakes","pranshu","http://fb.com","https://www.linkedin.com/"];
$team_brakes[]=["Srishti","Brakes","srishti","http://fb.com","https://www.linkedin.com/"];

/*Steering*/

$team_steering[0]=["Bhushan","Steering","bhushan","http://fb.com","https://www.linkedin.com/"];
?>
<div class="modal-content">
	<div class="modal-headerr" style="padding: 10px;">
		<br>
		<button type="button" class="close"  onclick="gotomeettheteam();" data-dismiss="modal" style="color:#fff !important;"><i class="ion-close-round" style="color:#fff !important;"></i>&nbsp;&nbsp;</button>
		<h1 class="modal-title text-center">Team 2015</h1>
	</div>
	<div class="modal-body">
		<div class="container">
			<ul id="output"></ul>
			<div class="row">
				<ul class="ch-grid">

					<?php
					$i=0;
					for($i=0;$i<count($team_leaders);$i++)
					{
						$name=$team_leaders[$i][0];
						$dept=$team_leaders[$i][1];
						$img=$team_leaders[$i][2];
						$fb=$team_leaders[$i][3];
						$ll=$team_leaders[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team15/<?php echo $img;?>.JPG');" data-latest="no">
								<div class="ch-overlay">
									<div class="ch-overlay-inner">
										<h3 class="ch-name"><?php echo $name?></h3>
										<h3 class="ch-position"><?php echo $dept ?></h3>
										<h4 class="ch-social">
											<a href="<?php echo $fb ;?>" target="_blank"><i class="ionclass ion-social-facebook" aria-hidden="true"></i></a>
										</h4>
									</div>
								</div>
							</div>
						</div>
						<?php
					}
					?>
				</ul>
			</div>
			<div class="row">
				<ul class="ch-grid">
					<?php
					$i=0;
					for($i=0;$i<count($team_vehicle);$i++)
					{
						$name=$team_vehicle[$i][0];
						$dept=$team_vehicle[$i][1];
						$img=$team_vehicle[$i][2];
						$fb=$team_vehicle[$i][3];
						$ll=$team_vehicle[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team15/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?>
										<br>
										<a href="<?php echo $fb ;?>" target="_blank"><i class="ionclass ion-social-facebook" aria-hidden="true"></i></a>
									</h3>
								</div>
							</div>

							<h3 class="text-center"><?php echo $name;?></h3>
							<h3 class="text-center deptname"><?php echo $dept;?></h3>

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
						$fb=$team_transmission[$i][3];
						$ll=$team_transmission[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team15/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?>
										<br>
										<a href="<?php echo $fb ;?>" target="_blank"><i class="ionclass ion-social-facebook" aria-hidden="true"></i></a>
									</h3>
								</div>
							</div>

							<h3 class="text-center"><?php echo $name;?></h3>
							<h3 class="text-center deptname"><?php echo $dept;?></h3>

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
						$fb=$team_marketing[$i][3];
						$ll=$team_marketing[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team15/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?>
										<br>
										<a href="<?php echo $fb ;?>" target="_blank"><i class="ionclass ion-social-facebook" aria-hidden="true"></i></a>
									</h3>
								</div>
							</div>

							<h3 class="text-center"><?php echo $name;?></h3>
							<h3 class="text-center deptname"><?php echo $dept;?></h3>

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
						$fb=$team_design[$i][3];
						$ll=$team_design[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team15/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?>
										<br>
										<a href="<?php echo $fb ;?>" target="_blank"><i class="ionclass ion-social-facebook" aria-hidden="true"></i></a>
									</h3>
								</div>
							</div>

							<h3 class="text-center"><?php echo $name;?></h3>
							<h3 class="text-center deptname"><?php echo $dept;?></h3>

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
						$fb=$team_brakes[$i][3];
						$ll=$team_brakes[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team15/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?>
										<br>
										<a href="<?php echo $fb ;?>" target="_blank"><i class="ionclass ion-social-facebook" aria-hidden="true"></i></a>
									</h3>
								</div>
							</div>

							<h3 class="text-center"><?php echo $name;?></h3>
							<h3 class="text-center deptname"><?php echo $dept;?></h3>

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
					for($i=0;$i<count($team_steering);$i++)
					{
						$name=$team_steering[$i][0];
						$dept=$team_steering[$i][1];
						$img=$team_steering[$i][2];
						$fb=$team_steering[$i][3];
						$ll=$team_steering[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team15/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?>
										<br>
										<a href="<?php echo $fb ;?>" target="_blank"><i class="ionclass ion-social-facebook" aria-hidden="true"></i></a>
									</h3>
								</div>
							</div>

							<h3 class="text-center"><?php echo $name;?></h3>
							<h3 class="text-center deptname"><?php echo $dept;?></h3>

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
<script type="text/javascript" src="../scripts/team_members.js"></script>