<?php 
     require_once("../Connection.php");
     $id=$_GET["Id"];
     $data="select * from movie_theater where id=$id";
     $run=mysqli_query($con,$data);
     $array=mysqli_fetch_array($run);
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require_once("header.php") ?>
    <div class="main-content">
    <div class="container" > 
    <form method="POST"  action="" enctype="multipart/form-data" >

<label for="mname">Movie Name</label>
<input type="text" value="<?php echo $array[1]?>" class="form-control" name="mname">

<label for="dname">Director</label>
<input type="text"value="<?php echo $array[2]?>" class="form-control" name="dname">

<label for="wname">Writter</label>
<input type="text"value="<?php echo $array[4]?>" class="form-control" name="wname">

<label for="pname">Producer</label>
<input type="text"value="<?php echo $array[3]?>" class="form-control" name="pname">

<label for="genre">genre</label>
<input type="text"value="<?php echo $array[5]?>" class="form-control" name="genre">

<label for="rdate">Release Date</label>
<input type="date" value="<?php echo $array[6]?>" class="form-control" name="rdate">

<label for="Iurl">image URL</label>
<input type="file" value="<?php echo $array[7]?>"class="form-control" name="Iurl" readonly>

<label for="Vurl">Video URL</label>
<input type="file"value="<?php echo $array[8]?>" class="form-control" name="Vurl" readonly>

<label for="rating">Rating</label>
<input type="text" value="<?php echo $array[9]?>" class="form-control" name="rating">

</br>
<button type="submit" class="btn btn-primary" name="btn1"> Edit MOVIE</button>

</form>
</div>
</div>


</body>
</html>
<?php 

if(isset($_POST["btn1"]))
{
$Mname = $_POST["mname"];
$Director = $_POST["dname"];

$wname = $_POST["wname"];
$pname = $_POST["pname"];
$genre = $_POST["genre"];
$rdate = $_POST["rdate"];
$image_name = $_FILES["Iurl"]["name"];
            $image_loc = $_FILES["Iurl"]["tmp_name"];
            $image_type = $_FILES["Iurl"]["type"];
            $image_size = $_FILES["Iurl"]["size"];
            $ifolderme = "../image/" . $image_name;
$video_name = $_FILES["Vurl"]["name"];
$video_loc = $_FILES["Vurl"]["tmp_name"];
$video_type = $_FILES["Vurl"]["type"];
$video_size = $_FILES["Vurl"]["size"];
$folderme = "../videos/" . $video_name;

$rating = $_POST["rating"];


  
        
            $insert_query =" UPDATE `movie_theater` SET `Name`='$Mname', director='$Director', producer='$pname', writter='$wname',genre='$genre',
            Release_date='$rdate', Rating='$rating' WHERE id='$id'";
            $ex = mysqli_query($con,$insert_query);
            if ($ex == true) {
                echo "<script>
                     alert('Data Updated Successfully');
                     window.location.href='movie_datashow.php';
                </script>";
             } 
             else {
                 echo "Error is " . mysqli_error($conn);
             }
         
}




require_once("footer.php");












?>