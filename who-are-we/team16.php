 
<?php
 //       ["Full Nam","Department","image","FB LINK","linked in"]
/*Team leaders 0-2*/
$team_leaders[0]=["Yashwant Singh","Team Co-Captain","yashwant","http://fb.com","https://www.linkedin.com/"];
$team_leaders[]=["Shyam","Team Co-Captain","shyam","http://fb.com","https://www.linkedin.com/"];
$team_leaders[]=["Raja Singhal","Team Manager","raja","http://fb.com","https://www.linkedin.com/"];

/*Vehicle Dynamics 7-15*/
$team_vehicle[0]=["Swapnil Ghiya","Vehicle Dynamics Lead","vehicle","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Aditya G","Vehicle Dynamics","adityag","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Santosh Kumar","Vehicle Dynamics","santosh","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Chaitanya","Vehicle Dynamics","chaitanya","http://fb.com","https://www.linkedin.com/"];
$team_vehicle[]=["Vishwas","Vehicle Dynamics","vishwas","http://fb.com","https://www.linkedin.com/"];

/*Transmission*/
$team_transmission[0]=["Ujjwal","Transmisssion Lead","ujjwal","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Akshay","Transmission","akshay","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Manikandan","Transmisssion","manikandan","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Priyank Agarwal","Transmisssion","priyank","http://fb.com","https://www.linkedin.com/"];
$team_transmission[]=["Tarun","Transmisssion","tarun","http://fb.com","https://www.linkedin.com/"];

/*Marketing and Management-*/
$team_marketing[0]=["Deva Harsha","Marketing and Management","deva","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Affrid","Marketing and Management","affrid","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Devaraaj","Marketing and Management","devaraaj","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Harikrishna","Marketing and Management","harikrishna","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Jayanth","Marketing and Management","jayanth","http://fb.com","https://www.linkedin.com/"];
$team_marketing[]=["Shylendhar","Marketing and Management","shylendhar","http://fb.com","https://www.linkedin.com/"];

/*Designs 3-6*/
$team_design[0]=["Dhruvit","Design Lead","dhruvit","http://fb.com","https://www.linkedin.com/"];
$team_design[]=["Bhuvanesh Jain","Design","bhuvanesh","http://fb.com","https://www.linkedin.com/"];
$team_design[]=["Parth Deshpande","Design","parth","http://fb.com","https://www.linkedin.com/"];
$team_design[]=["Shubham","Design","shubham","http://fb.com","https://www.linkedin.com/"];

/*Brakes*/
$team_brakes[0]=["Pranshu","Brakes Lead","pranshu","http://fb.com","https://www.linkedin.com/"];
$team_brakes[]=["Avinash","Brakes","avinash","http://fb.com","https://www.linkedin.com/"];
$team_brakes[]=["Mridul","Brakes","mridul","http://fb.com","https://www.linkedin.com/"];
$team_brakes[]=["Rishikesh Joshi","Brakes","rishikesh","http://fb.com","https://www.linkedin.com/"];

/*Steering*/

$team_steering[0]=["Bhushan","Steering Lead","bhushan","http://fb.com","https://www.linkedin.com/"];
$team_steering[]=["Prithvesh Ashok","Steering","prithvesh","http://fb.com","https://www.linkedin.com/"];
$team_steering[]=["Srijan Saha","Steering","srijan","http://fb.com","https://www.linkedin.com/"];
$team_steering[]=["Som Dwivedi","Steering","som","http://fb.com","https://www.linkedin.com/"];

/*Manufacturing*/
$team_manufacturing[0]=["Aayush Dhir","Manufacturing Lead","aayush","http://fb.com","https://www.linkedin.com/"];

/*Public Relation*/
$team_manufacturing[]=["Yashwanth","Public Relation Lead","yashwanth","http://fb.com","https://www.linkedin.com/"];
/*Business*/
$team_manufacturing[]=["Aditya Bhansali","Business Head","aditya","http://fb.com","https://www.linkedin.com/"];
?>
<div class="modal-content">
	<div class="modal-headerr" style="padding: 10px;">
		<br>
		<button type="button" class="close"  onclick="gotomeettheteam();" data-dismiss="modal"><i class="ion-close-round"></i>&nbsp;&nbsp;</button>
		<h1 class="modal-title text-center">Team 2016</h1>
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
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team16/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
									<br>


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
						$fb=$team_vehicle[$i][3];
						$ll=$team_vehicle[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team16/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?>	</h3>
									<br>
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
						$fb=$team_transmission[$i][3];
						$ll=$team_transmission[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team16/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
									<br>					
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
						$fb=$team_marketing[$i][3];
						$ll=$team_marketing[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team16/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
									<br>
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
						$fb=$team_design[$i][3];
						$ll=$team_design[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team16/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
									<br>
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
						$fb=$team_brakes[$i][3];
						$ll=$team_brakes[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team16/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
									<br>	
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
					for($i=0;$i<count($team_steering);$i++)
					{
						$name=$team_steering[$i][0];
						$dept=$team_steering[$i][1];
						$img=$team_steering[$i][2];
						$fb=$team_steering[$i][3];
						$ll=$team_steering[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team16/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
									<br>
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
						$fb=$team_manufacturing[$i][3];
						$ll=$team_manufacturing[$i][4];
						?>
						<div class="col-xs-6 col-sm-3 col-md-2 boxcol box-col">
							<div class="ch-item ch-img-1 box" style="background-image: url('../img/team16/<?php echo $img;?>.JPG');">
								<div class="ch-info">
									<h3><?php echo $name;?></h3>
									<br>
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
