
<?php
 //       ["Full Nam","Department","image","FB LINK","linked in"]
/*Team leaders 0-2*/
$team_leaders[0]=["Bhuvanesh Jain","Team Captain","bhuvanesh","http://fb.com","https://www.linkedin.com/"];
$team_leaders[]=["Som Dwivedi","Team Co-Captain","som","http://fb.com","https://www.linkedin.com/"];
$team_leaders[]=["Hari Krishna","Team Manager","harikrishna","http://fb.com","https://www.linkedin.com/"];

/*Vehicle Dynamics 7-15*/
$team_vehicle[0]=["Aditya G","Vehicle Dynamics Lead","adityag","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Santosh Kumar","Vehicle Dynamics Lead","santosh","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Shubham","Vehicle Dynamics","shubham","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Yash","Vehicle Dynamics","yash","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Pulkit","Vehicle Dynamics","pulkit","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Lakshya","Vehicle Dynamics","lakshya","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Shreyas","Vehicle Dynamics","shreyas","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Tanay","Vehicle Dynamics","tanay","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Arun","Vehicle Dynamics","arun","http://fb.com","https://www.linkedin.com/"];

/*Transmission*/
$team_transmission[0]=["Manikandan","Transmisssion Lead","manikandan","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Felix","Transmisssion","felix","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Nikhil","Transmisssion","nikhil","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Palash","Transmisssion","palash","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Chiranjeev","Transmisssion","chiranjeev","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Himanvesh","Transmisssion","himanvesh","http://fb.com","https://www.linkedin.com/"];


/*Marketing and Management-*/
$team_marketing[0]=["Tuhin","Marketing and Management","tuhin","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Divyansh","Marketing and Marketing","divyansh","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Arizul Islam","Marketing and Management","arizul","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Sameer","Marketing and Management","sameer","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Sanjay","Marketing and Management","sanjay","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Aditya","Marketing and Management","aditya","http://fb.com","https://www.linkedin.com/"];

/*Designs 3-6*/
$team_design[0]=["Parth Deshpande","Design Lead","parth","http://fb.com","https://www.linkedin.com/"];
$team_design[]=["Aayush","Design","aayush","http://fb.com","https://www.linkedin.com/"];
$team_design[]=["Suhas H G","Design","suhas","http://fb.com","https://www.linkedin.com/"];
$team_design[]=["Vignesh","Design","vignesh","http://fb.com","https://www.linkedin.com/"];

/*Brakes*/
$team_brakes[0]=["Rishikesh Joshi","Brakes Lead","rishikesh","http://fb.com","https://www.linkedin.com/"];
$team_brakes[]=["Dhruv","Brakes","dhruv","http://fb.com","https://www.linkedin.com/"];
$team_brakes[]=["Yashaswi","Brakes","yashaswi","http://fb.com","https://www.linkedin.com/"];
$team_brakes[]=["Naman","Brakes","naman","http://fb.com","https://www.linkedin.com/"];

/*Steering*/
$team_steering[0]=["Prithvesh Ashok","Steering Lead","prithvesh","http://fb.com","https://www.linkedin.com/"];
$team_steering[]=["Srijan Saha","Steering Lead","srijan","http://fb.com","https://www.linkedin.com/"];

/*Manufacturing*/
$team_manufacturing[0]=["Priyank Agarwal","Manufacturing Lead","priyank","http://fb.com","https://www.linkedin.com/"];

/*Electrical*/
$team_manufacturing[]=["Rutwij","Electrical","rutwij","http://fb.com","https://www.linkedin.com/"];
?>
<div class="modal-content">
	<div class="modal-headerr" style="padding: 10px;">
		<br>
		<button type="button" class="close"  onclick="gotomeettheteam();" data-dismiss="modal" style="color:#fff !important;"><i class="ion-close-round" style="color:#fff !important;"></i>&nbsp;&nbsp;</button>
		<h1 class="modal-title text-center">Team 20177</h1>
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
						$fb=$team_leaders[$i][3];
						$ll=$team_leaders[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team17/<?php echo $img;?>.JPG');">
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
					for($i=0;$i<count($team_vehicle);$i++)
					{
						$name=$team_vehicle[$i][0];
						$dept=$team_vehicle[$i][1];
						$img=$team_vehicle[$i][2];
						$fb=$team_vehicle[$i][3];
						$ll=$team_vehicle[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team17/<?php echo $img;?>.JPG');">
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
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team17/<?php echo $img;?>.JPG');">
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
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team17/<?php echo $img;?>.JPG');">
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
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team17/<?php echo $img;?>.JPG');">
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
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team17/<?php echo $img;?>.JPG');">
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
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team17/<?php echo $img;?>.JPG');">
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
					for($i=0;$i<count($team_manufacturing);$i++)
					{
						$name=$team_manufacturing[$i][0];
						$dept=$team_manufacturing[$i][1];
						$img=$team_manufacturing[$i][2];
						$fb=$team_manufacturing[$i][3];
						$ll=$team_manufacturing[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team17/<?php echo $img;?>.JPG');">
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
