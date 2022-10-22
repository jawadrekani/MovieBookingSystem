<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once("header.php") ?>    
<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <h1> movie listing - list</h1>
				<ul class="breadcumb">
					<li class="active"><a href="#">Home</a></li>
					<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
				</ul> -->
			</div>
		</div>
	</div>
</div>
<?php  
				$id = $_GET['id'];
				$fetch = "SELECT * FROM `movie_theater` where id = $id";
		   $execute = mysqli_query($con , $fetch);
		   $arr = mysqli_fetch_array($execute);  
		   ?>
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="<?php echo $arr[7]; ?>" alt="">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a href="<?php echo $arr[8]; ?>" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
							<div><a href="#" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd"><?php echo $arr[1]; ?> <span><?php echo $arr[6]; ?></span></h1>
				
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span><?php echo $arr[9]; ?></span> /5<br>

							</p>
						</div>
						
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
							                      
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p><?php echo $arr[10]; ?></p>
						            		
											
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Director: </h6>
						            			<p><a href="#"><?php echo $arr[2]; ?></a></p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Writer: </h6>
						            			<p><a href="#"><?php echo $arr[4]; ?></a> </p>
						            		</div>
						            	
						            		<div class="sb-it">
						            			<h6>Genres:</h6>
						            			<p><a href="#"><?php echo $arr[5]; ?> </p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Release Date:</h6>
						            			<p><?php echo $arr[6]; ?></p>
						            		</div>
						            	
						            		
						            		<div class="ads">
												<img src="<?php echo $arr[7]; ?>" alt="">
											</div>
						            	</div>
						            </div>
						        </div>
						       
						       
					       	 	
					       	 
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require_once("footer.php") ?>
</body>
</html>