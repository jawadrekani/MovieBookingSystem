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

    <div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1> movie listing - grid</h1>
					<ul class="breadcumb">
						<li class="active"><a href="home.php">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movie listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="flex-wrap-movielist">
			<?php 
		   $fetch = "SELECT * FROM `movie_theater`";
		   $execute = mysqli_query($con , $fetch);
		   $num = mysqli_num_rows($execute);
		   if($num > 0)
		   {

	while($arr = mysqli_fetch_array($execute)){?>
				
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="<?php echo $arr[7]; ?>" alt="">
							<div class="hvr-inner">
	            				<a  href="moviesingle.php?id=<?php echo $arr[0]; ?>"> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#"><?php echo $arr[1]; ?></a></h6>
								<p class="rate"><i class="ion-android-star"></i><span><?php echo $arr[9]; ?></span> /5</p>
							</div>
						</div>					
						<?php }


}
 ?>	
				</div>		
				
			</div>
			
			</div>
		</div>
	</div>
</div>



    <?php require_once("footer.php") ?>
</body>
</html>