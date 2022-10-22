<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    tr{
        color:white;
    }
    
    
    </style>
    
</head>
<body >

<?php require_once("header.php");?>

<div class="slider movie-items">
	<div class="container">
		<div class="row">
		
	    	<div  class="slick-multiItemSlider">
<?php
    require_once("../Connection.php");
   
    $fetch = "SELECT * FROM `cinema_table`";
    $execute = mysqli_query($con , $fetch);
    $num = mysqli_num_rows($execute);

    if ($num > 0) {
    
       while($rec = mysqli_fetch_array($execute)){?>
           
        
            <div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="https://media.istockphoto.com/photos/pop-corn-and-on-red-armchair-cinema-picture-id1271522601?k=20&m=1271522601&s=612x612&w=0&h=y3NLBCVMWO8wHGwjEcXIuGOSL_0K6iFTvySCM-X5TxM=" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="#"><?php echo $rec[1] ?></a></span>
	    				</div>
	    				<h6><a href="#"><?php echo $rec[4] ?></a></h6>
	    				<p><i class="ion-android-star"></i><span><?php echo $rec[3] ?></span></p>
	    			</div>
	    		</div>

       <?php }
           
    } 
    

    

?>

</div>
	    </div>
	</div>
</div>
<?php

require_once("Footer.php");

?>
</body>
</html>