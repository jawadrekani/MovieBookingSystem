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
<input type="text" class="form-control" name="mname" required>
<label for="dname">Director</label>
<input type="text" class="form-control" name="dname" required>
<label for="wname">Writter</label>
<input type="text" class="form-control" name="wname" required>
<label for="pname">Producer</label>
<input type="text" class="form-control" name="pname" required>
<label for="genre">genre</label>
<input type="text" class="form-control" name="genre" required>
<label for="rdate">Release Date</label>
<input type="date" class="form-control" name="rdate" required>
<label for="Iurl">image URL</label>
<input type="file" class="form-control" name="Iurl" required>
<label for="Vurl">Video URL</label >
<input type="file" class="form-control" name="Vurl" required>
<label for="rating">Rating</label>
<input type="text" class="form-control" name="rating" required>
<label for="des">Description</label>
<input type="text" class="form-control" name="des" required>
</br>
<button type="submit" class="btn btn-primary" name="btn"> ADD MOVIE</button>

</form>
</div>
</div>


    <?php require_once("footer.php") ?>
</body>
</html>
<?php 
require_once("../Connection.php");
if(isset($_POST["btn"]))
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
$des = $_POST["des"];


    if(($video_type == "video/mp4" || $video_type == "video/mpeg") && ($image_type == "image/jpg" || $image_type == "image/jpeg" || $image_type == "image/png")){
        
        
        if(($video_size <= 50000000) && ($image_size <= 2000000 ))
        {
            $insert_query ="INSERT INTO `movie_theater`( `Name`, `director`, `producer`, `writter`, `genre`, `Release_date`, `movie_img`, `Vid_url`, `Rating`, `description`) 
            VALUES ('$Mname','$Director','$pname','$wname','$genre','$rdate','$ifolderme','$folderme','$rating','$des')";
            $ex = mysqli_query($con,$insert_query);
            move_uploaded_file($image_loc,$ifolderme);
            move_uploaded_file($video_loc,$folderme);
    echo '<script> alert ("Video Added"); </script>';
    }else{
        echo '<script> alert ("Invalid size"); </script>';
    }
}else{
        echo'<script> alert ("Invalid Extension"); </script>';
    }
}
















?>