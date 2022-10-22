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


  <div class="main-content">
    <?php
    require_once "../Connection.php"; ?>
    <div class="slider movie-items">
      <div class="container">
        <div class="row">

          <div class="slick-multiItemSlider">
            <?php $id = $_GET['id'];
            $fetch2 = "Select * from `movie_show` where movie_id='$id'";
            $query = mysqli_query($con, $fetch2);
            if(mysqli_num_rows($query) > 0){
              while ($dd = mysqli_fetch_array($query)) {
                ?><div class="movie-item">
                    <div class="mv-img">
                      <a href=""><img src="<?php
                                            $a = mysqli_query($con, "select * from `movie_theater` where id = $dd[1]");
                                            $arr = mysqli_fetch_array($a);
                                            echo $arr[7];
                                            ?>" alt="" width="285" height="437"></a>
                    </div>
                    <div class="title-in">
                      <div class="cate">
                        <span class="blue"><a href="#">
                            <?php
                            $a = mysqli_query($con, "select * from `movie_theater` where id = $dd[1]");
                            $arr = mysqli_fetch_array($a);
                            echo $arr[1];
                            ?>
                          </a></span>
                      </div>
                      <h6><a href="#"><?php
                                      $a2 = mysqli_query($con, "select * from `ticket` where id = $dd[4]");
                                      $arr1 = mysqli_fetch_array($a2);
                                      echo $arr1[1];
                                      ?></a>
                                      </h6>
                      <p><i class="ion-android-star"></i><span> <?php
                                                                $a3 = mysqli_query($con, "select * from `cinema_table` where id = $dd[3]");
                                                                $arr2 = mysqli_fetch_array($a3);
                                                                echo $arr2[1];
                                                                ?></span></p>
    
    
                      <p><i class="ion-android-star"></i><span> <?php                                                         
                                                                echo $dd[2];
                                                                ?></span></p>
                      <div class="cate">
                        <span class="blue">
                          <a href="book_form.php?id=<?php echo $dd[0] ?>">
                            Book
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>
                  </td>
    
    
    
                <?php  }
            }
           
else{?>
  <div class="slider movie-items">
	<div class="container">
		<div class="row">
		
	    	<div  class="slick-multiItemSlider">
  <div class="movie-item">
	    			<div class="mv-img">
	    				<a href="#"><img src="https://media.istockphoto.com/photos/pop-corn-and-on-red-armchair-cinema-picture-id1271522601?k=20&m=1271522601&s=612x612&w=0&h=y3NLBCVMWO8wHGwjEcXIuGOSL_0K6iFTvySCM-X5TxM=" alt="" width="285" height="437"></a>
	    			</div>
	    			<div class="title-in">
	    				<div class="cate">
	    					<span class="blue"><a href="#">No Movie show Available</a></span>
	    				</div>
	    			
	    			</div>
          </div>
          </div>
	    </div>
	</div>
</div>
 <?php }



            ?>

          </div>
        </div>
      </div>
    </div>




    <?php require_once("footer.php") ?>
</body>

</html>