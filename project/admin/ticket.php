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

    <?php require_once("header.php") ?>
    <div class="main-content">
    <div class="container" > 
    <form method="POST"  action="" enctype="multipart/form-data" >


<label for="ttype">Ticket Type</label>
<select name="ttype" class="form-control" required>
<option value="">Select Ticket Type</option>
    <option value="Silver">Silver</option>
    <option value="Gold">Gold</option>
    <option value="Platinium">Platinium</option>
</select>
<label for="stype">Screen Type</label>
<select name="stype" class="form-control" required>
<option value="">Select Screen Type</option>
    <option value="2D">2D</option>
    <option value="3D">3D</option>
    <option value="BOTH">Both</option>
</select>
<label for="cname">Price</label>
<input type="text" class="form-control" name="pp" required>


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
    $T_type = $_POST["ttype"];
    $TP = $_POST["pp"];
    $ST = $_POST["stype"];
    $insert_query = "INSERT INTO `ticket`(`Type`, `Price`, `Screen_type`) VALUES('$T_type','$TP','$ST')";
    $ex = mysqli_query($con , $insert_query);
if($ex == true)
{
    echo '<script> alert ("Data Added Sucessfully"); </script>';
}
else{
    echo mysqli_error($con);
}
}





?>