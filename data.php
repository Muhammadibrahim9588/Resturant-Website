<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Watery Fastfood Makers</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body id="order-body">
	<header>
		<nav id="header-nav" class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a href="index.html" class="pull-left visible-md visible-lg">
						<div id="logo-img"></div>
					</a>

					<div class="navbar-brand">
						<a href="index.html"><h1>Watery Fastfood Makers</h1></a>
						<p>
							<img src="images/star-k-logo.png" alt="Kosher certification">
							<span>! The Taste You Will Never Forget !</span>
						</p>
					</div>

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				
				<div id="collapsable-nav" class="collapse navbar-collapse">
					<ul id="nav-list" class="nav navbar-nav navbar-right">
						<li class="visible-xs">
							<a href="index.html">
								<span class="glyphicon glyphicon-home"></span> Home</a>
							</li>
							<li>
								<a href="menu-categories.html">
									<span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs"> Menu</a>
								</li>
								<li>
									<a href="review.html">
										<span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> Reviews</a>
									</li>
									<li class="active">
										<a href="reserve.html">
											<span class="glyphicon glyphicon-tags"></span><br class="hidden-xs"> Reservation</a>
										</li>
										<li id="phone" class="hidden-xs">
											<a href="tel:410-602-5008">
												<span>0332-3051037</span></a><div>* We Deliver</div>
											</li>
										</ul><!-- #nav-list -->
									</div><!-- .collapse .navbar-collapse -->
								</div><!-- .container -->
							</nav><!-- #header-nav -->
						</header>

						<div id="call-btn" class="visible-xs">
							<a class="btn" href="tel:410-602-5008">
								<span class="glyphicon glyphicon-earphone"></span>
								0332-3051037
							</a>
						</div>
						<div id="xs-deliver" class="text-center visible-xs">* We Deliver</div>

						<div id="main-content_order" class="container">
							<!-- storing data in mysql database -->
							<?php
							$connection=mysqli_connect("localhost","root","","resturant");
							if(isset($_POST['submit']))
							{
								//details sql mein store ho rahin hain 
								$fname=$_POST['fname'];
								$phone=$_POST['phone'];
								$date=$_POST['date'];
								$time=$_POST['time'];
								$people=$_POST['people'];
								$specialreq=$_POST['specialreq'];

								$insert_query="INSERT INTO customer (fname,phone,date,time,specialreq,people) VALUES ('$fname','$phone','$date','$time','$specialreq','$people')";

								//query excecute
								$insert_result=mysqli_query($connection,$insert_query);
							}
							?>
							<div id="alldata">
								<div id="banner" >
									<?php
									$sql = "select fname from customer ORDER BY id DESC LIMIT 1";    
									$result = mysqli_query($connection,$sql);    
									while($row = mysqli_fetch_object($result)){    
									echo $row->fname." your table has been reserved";  
								}
								?>
							</div>
							<p id="follow">Following Are Your Details:</p>
							<i id="downlogo" class="fa fa-caret-down" style="font-size:24px;color: white;margin-left: 100px"></i>

							<div id="name">
								<?php
								$sql = "select fname from customer ORDER BY id DESC LIMIT 1";    
								$result = mysqli_query($connection,$sql);    
								while($row = mysqli_fetch_object($result)){    
								echo "Name: ".$row->fname;  
							}
							?>
						</div>

						<div id="phoness">
							<?php
							$sql = "select phone from customer ORDER BY id DESC LIMIT 1";    
							$result = mysqli_query($connection,$sql);    
							while($row = mysqli_fetch_object($result)){    
							echo "Phone No.: ".$row->phone;  
						}
						?>
					</div>

					<div id="date">
						<?php
						$sql = "select date from customer ORDER BY id DESC LIMIT 1";    
						$result = mysqli_query($connection,$sql);    
						while($row = mysqli_fetch_object($result)){    
						echo "Date: ".$row->date;  
					}
					?>
				</div>

				<div id="time">
					<?php
					$sql = "select time from customer ORDER BY id DESC LIMIT 1";    
					$result = mysqli_query($connection,$sql);    
					while($row = mysqli_fetch_object($result)){    
					echo "Time: ".$row->time;  
				}
				?>
			</div>

			<div id="people">
				<?php
				$sql = "select people from customer ORDER BY id DESC LIMIT 1";    
				$result = mysqli_query($connection,$sql);    
				while($row = mysqli_fetch_object($result)){    
				echo "People: ".$row->people;  
			}
			?>
		</div>
		<a href="index.html"><button id="return-to-home">Return To Home</button></a>
	</div>

</div>

</div><!-- End of #main-content -->

<footer class="panel-footer">
	<div class="container">
		<div class="row">
			<section id="hours" class="col-sm-4">
				<span>Hours:</span><br>
				Sun-Thurs: 11:15am - 10:00pm<br>
				Fri: 11:15am - 2:30pm<br>
				Saturday Closed
				<hr class="visible-xs">
			</section>
			<section id="address" class="col-sm-4">
				<span>Address:</span><br>
				Naya Nazimabad<br>
				A1-68 Block B, Main Gate
				<p>* Delivery area within 3-4 miles, with minimum order of $20 plus $3 charge for all deliveries.</p>
				<hr class="visible-xs">
			</section>
			<section id="testimonials" class="col-sm-4">
				<p>"Established in 2002"</p>
				<p>"Recoginized by Cothm Insitute of Chef and Skills"</p>
			</section>
		</div>
		<div class="text-center">&copy; Copyright Watery Fastfood Makers 2022</div>
	</div>
</footer>

<!-- jQuery (Bootstrap JS plugins depend on it) -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>

<style type="text/css">
	#banner{
		color: #F2AA4CFF;
		font-size: 30px;
	}
	#follow{
		font-size: 16px;
		font-style: italic;
	}
	#alldata{
		padding-bottom: 90px;
	}
	#name{
		padding-bottom: 20px;
		font-size: 25px;
	}
	#phoness{
		padding-bottom: 20px;
		font-size: 25px;
	}
	#date{
		padding-bottom: 20px;
		font-size: 25px;
	}
	#time{
		padding-bottom: 20px;
		font-size: 25px;
	}
	#people{
		padding-bottom: 50px;
		font-size: 25px;
	}
	#return-to-home{
		background-color: #F2AA4CFF;
		color: black;
		color: black;
		padding: 14px 20px;
		margin-top: 20px;
		border: none;
		cursor: pointer;
		width: 240px;
		opacity: 0.9;
		font-size: 20px;
		border-radius: 10px;
	}
	#return-to-home:hover{
		opacity:5;
	}
</style>

