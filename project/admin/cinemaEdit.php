<?php 
     require_once("../Connection.php");
     $id=$_GET["Id"];
     $data="select * from `cinema_table` where id=$id";
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

<label for="cname">Cinema Name</label>
<input type="text" value="<?php echo $array[1]?>"class="form-control" name="cname">

<label for="cap">Capcity</label>
<input type="text"value="<?php echo $array[2]?>" class="form-control" name="cap">

<label for="type">Screen Type</label>
<select name="stype" class="form-control">
<option value="<?php echo $array[3]?>"><?php echo $array[3]?></option>
    <option value="2D">2D</option>
    <option value="3D">3D</option>
    <option value="BOTH">BOTH</option>
</select>

<label for="ssize">Screen Size</label>
<select name="size" class="form-control">
    <option value="<?php echo $array[4]?>"><?php echo $array[4]?> </option>
    <option value="4:3 or 1.33:1">4:3 or 1.33:1</option>
    <option value="16:9">16:9</option>
    <option value="1.85:1">1.85:1</option>
    <option value="2.39:1">2.39:1</option>
    <option value="2.76:1 (70mm)">2.76:1 (70mm)</option>
</select>


</br>
<button type="submit" class="btn btn-primary" name="btn2"> Update INFO</button>

</form>
</div>
</div>





    <?php require_once("footer.php") ?>
</body>
</html>
<?php 


if(isset($_POST["btn2"]))
{
$cname = $_POST["cname"];
$cap = $_POST["cap"];
$stype = $_POST["stype"];
$size = $_POST["size"];



$query = "UPDATE `cinema_table` SET `name`='$cname',capcity='$cap',
cinema_type='$stype',screen_size='$size' WHERE id='$id'";
$ex = mysqli_query($con , $query);
if($ex == true){
    echo '<script> alert ("Data Updated Sucessfully"); 
    window.location.href="cinema_datashow.php";</script>';
}
else{
    echo mysqli_error($con);
}


}







?>