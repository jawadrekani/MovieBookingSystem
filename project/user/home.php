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
<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us: </p>
				<a href="#"><i class="ion-social-facebook"></i></a>
				<a href="#"><i class="ion-social-twitter"></i></a>
				<a href="#"><i class="ion-social-googleplus"></i></a>
				<a href="#"><i class="ion-social-youtube"></i></a>
			</div>
	    	<div  class="slick-multiItemSlider">
			<?php 
		   $fetch = "SELECT * FROM `movie_theater`";
		   $execute = mysqli_query($con , $fetch);
		   $num = mysqli_num_rows($execute);
		   if($num > 0)
		   {




while($img = mysqli_fetch_array($execute)){?>
<div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="<?php echo $img[7] ?>" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="avail_shows.php?id=<?php echo $img[0] ?>"><?php echo $img[5] ?></a></span>
	    				</div>
	    				<h6><a href="#"><?php echo $img[1] ?></a></h6>
	    				<p><i class="ion-android-star"></i><span><?php echo $img[9] ?></span> /5</p>
	    			</div>
	    		</div>

<?php }


		   }
			?>
	    		

	    	</div>
	    </div>
	</div>
</div>

<?php require_once("footer.php") ?>
</body>
</html>