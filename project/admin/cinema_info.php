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

<label for="cname">Cinema Name</label>
<input type="text" class="form-control" name="cname" required>

<label for="cap">Capcity</label>
<input type="text" class="form-control" name="cap" required>

<label for="type">Screen Type</label>
<select name="stype" class="form-control" required>
<option value="">Select Cinema Type</option>
    <option value="2D">2D</option>
    <option value="3D">3D</option>
    <option value="BOTH">BOTH</option>
</select>
<label for="ssize">Screen Size</label>
<select name="size" class="form-control" required>
    <option value="">Select Screen Size</option>
    <option value="4:3 or 1.33:1">4:3 or 1.33:1</option>
    <option value="16:9">16:9</option>
    <option value="1.85:1">1.85:1</option>
    <option value="2.39:1">2.39:1</option>
    <option value="2.76:1 (70mm)">2.76:1 (70mm)</option>
</select>


</br>
<button type="submit" class="btn btn-primary" name="btn"> ADD INFO</button>

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
$cname = $_POST["cname"];
$cap = $_POST["cap"];
$stype = $_POST["stype"];
$size = $_POST["size"];

$fetch = " SELECT * FROM `cinema_table` WHERE `name` = '$cname'";
$ex  = mysqli_query($con , $fetch);
$run = mysqli_num_rows($ex);
if($run == 0)
{
$insert_query = "INSERT INTO `cinema_table`(`name`, `capcity`, `cinema_type`, `screen_size`) VALUES('$cname','$cap','$stype','$size')";
$ex = mysqli_query($con , $insert_query);
if($ex == true){
    echo '<script> alert ("Data Added Sucessfully"); </script>';
}
else{
    echo mysqli_error($con);
}

}
else{
    echo '<script> alert ("Data Already Added "); </script>';
}

}







?>