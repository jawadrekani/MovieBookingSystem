<?php 
     require_once("../Connection.php");
     $id=$_GET["EditWaliId"];
     $data="select * from ticket where id=$id";
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


<label for="ttype">Ticket Type</label>
<select name="ttype"  class="form-control">
<option value="<?php echo $array[1]?>"><?php echo $array[1]?></option>
    <option value="Silver">Silver</option>
    <option value="Gold">Gold</option>
    <option value="Platinium">Platinium</option>
</select>
<label for="stype" >Screen Type</label>
<select name="stype" class="form-control">
<option value="<?php echo $array[3]?>"><?php echo $array[3]?></option>
    <option value="2D">2D</option>
    <option value="3D">3D</option>
    <option value="BOTH">Both</option>
</select>
<label for="cname">Price</label>
<input type="text" value="<?php echo $array[2]?>" class="form-control" name="pp">


</br>
<button type="submit" class="btn btn-primary" name="btn">Update INFO</button>

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
   
    $insert_query = "UPDATE `ticket` SET  `Type`='$T_type',Price='$TP',Screen_type='$ST' WHERE id='$id'";
    $ex = mysqli_query($con , $insert_query);
if($ex == true)
{
    echo '<script> alert ("Data updated Sucessfully"); 
    window.location.href="ticket_show.php";</script>';

}
else{
    echo mysqli_error($con);
}
}





?>