<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Form 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="contact/css/style.css">

	</head>
	<body>
        <?php
		require_once "../Connection.php";
			session_start();
			if(!isset($_SESSION["uname"])){
				header("location:../Login/index.html");
			}
			
				$id = $_GET["id"];
				$fetch_movie = mysqli_query($con, "SELECT * FROM `movie_show` where Id = '$id'");
				$data = mysqli_fetch_array($fetch_movie);
			

		?>
	<section class="ftco-section img bg-hero" style="background-image: url(contact/images/bg_1.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Booking Form</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="wrapper">
						<div class="row no-gutters justify-content-between">
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5">
									<h3 class="mb-4">Movie Info</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span>Movie Name</span><?php 
								 	$a = mysqli_query($con, "select * from `movie_theater` where id = $data[1]");
									$arr = mysqli_fetch_array($a);
									echo $arr[1]; 
									$_SESSION["movie"] = $arr[1];
									?>
									 
									</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span>Ticket Type</span> <a href="tel://1234567920">
								<?php
                                  $a2 = mysqli_query($con, "select * from `ticket` where id = $data[4]");
                                  $arr1 = mysqli_fetch_array($a2);
								  echo $arr1[1];
								  $_SESSION["ticket"] = $arr1[1];
                                  ?>
								</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span>Cinema</span> <a href="mailto:info@yoursite.com"><?php
                                                            $a3 = mysqli_query($con, "select * from `cinema_table` where id = $data[3]");
                                                            $arr2 = mysqli_fetch_array($a3);
                                                            echo $arr2[1];
                                                            ?></a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span>Time</span> <a href="#"><?php                                                         
                                                            echo $data[2];
                                                            ?></a></p>
					          </div>
				          </div>
			          </div>
							</div>
							<div class="col-lg-5">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4"></h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		
									<form method="POST">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" value="<?php echo $_SESSION["uname"] ?>">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="number" min="1" max="50" class="form-control" name="email" id="email" placeholder="No Of Tickets">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="date" class="form-control" name="dates" >
												</div>
											</div>
										
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Book" class="btn btn-primary" name="btn">
													<div class="submitting"></div>
                                                    <a href="home.php" class="btn btn-primary">Back to Home</a>
                                                </div>
                                                
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="contact/js/jquery.min.js"></script>
  <script src="contact/js/popper.js"></script>
  <script src="contact/js/bootstrap.min.js"></script>
  <script src="contact/js/jquery.validate.min.js"></script>
  <script src="contact/js/main.js"></script>

	</body>
</html>
<?php 

if(isset($_POST["btn"]))
{
	$name = $_POST["name"];
	$not = $_POST["email"];
	$dates = $_POST["dates"];
	$uid = $_SESSION["id"];
	$price = $arr1[2];

 $totalprice = $not * $price;
 $GST = $totalprice * 0.13;
 $totalbill = $totalprice - $GST;
 $t = "Rs " .$totalbill ;
 $bookid = $arr1[1]. $not . $dates . $uid;
$_SESSION['bookid'] = $bookid;
$_SESSION['bill'] = $t;

$check = mysqli_query($con , "SELECT * FROM `booking` where userid = $uid and dates = '$dates'");
$num = mysqli_num_rows($check);
if($num == 0){
	$query = "INSERT INTO `booking`(`BookingID`, `UserId`, `Show_id`, `Dates`, `NoOfPerson`, `TotalPrice`) 
	VALUES('$bookid','$uid','$id','$dates','$not','$t') ";
	   $ex = mysqli_query($con , $query);
	   if($ex == true)
	   {
		   echo'<script> alert ("Seats Has been Booked");
		 window.location.href= "bookingconfirm.php";  
		   </script>';
	   }
	   else{
		   echo'<script> alert ("Something went wrong "); </script>';
	   }
}
 else{
	echo'<script> alert ("You have already Booked"); </script>';

 }
}














?>

