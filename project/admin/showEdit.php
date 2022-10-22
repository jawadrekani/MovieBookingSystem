<?php 
     require_once("../Connection.php");
     $id=$_GET["Id"];
     $data="select * from `movie_show` where id=$id";
     $run=mysqli_query($con,$data);
     $array=mysqli_fetch_array($run);
     ?>
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
    <div class="container" > 
    <form method="POST"  action="" enctype="multipart/form-data" >
<label for="mname">Movie name</label>
<select name="mname" value="" class="form-control">
   <?php 
   $iid=$array[1];
   $fetch = "SELECT * FROM `movie_theater`where id='$iid'";
   $run = mysqli_query($con , $fetch);
   $num = mysqli_num_rows($run);
   if($num > 0)
   {
       while($data = mysqli_fetch_array($run))
       {
           echo "<option value = '$data[0]'>$data[1] </option>";
       }
    }
   else{
       echo"<option value='0'>Nothing to show </option> ";
   }
    
   ?>
</select>

<label for="tname">Theater Name</label>
<select name="tname"   value="" class="form-control">
   <?php 
   $fetch = "SELECT * FROM `cinema_table`";
   $run = mysqli_query($con , $fetch);
   $num = mysqli_num_rows($run);
   if($num > 0)
   {
       while($data = mysqli_fetch_array($run))
       {
           echo "<option value = '$data[0]'>$data[1] </option>";
       }
    }
   else{
       echo"<option value='0'>Nothing to show </option> ";
   }
    
   ?>
</select>

</select>

<label for="ticname">Ticket Name</label>
<select name="ticname" value="" class="form-control">
   <?php 
   $fetch = "SELECT * FROM `ticket`";
   $run = mysqli_query($con , $fetch);
   $num = mysqli_num_rows($run);
   if($num > 0)
   {
       while($data3 = mysqli_fetch_array($run))
       {
           echo "<option value = '$data3[0]'>$data3[1] </option>";
       }
    }
   else{
       echo"<option value='0'>Nothing to show </option> ";
   }
    
   ?>
</select>






<label for="mtime">Movie Time</label>
<input type="time" class="form-control" value="" name="mtime">
<br>
<button type="submit" class="btn btn-primary" name="btn"> Edit </button>

</form>
</div>
</div>




    <?php require_once("footer.php") ?>
</body>
</html>
<?php 

if(isset($_POST["btn"]))
{
    $mname  = $_POST["mname"];
    $tname  = $_POST["tname"];
    $ticname  = $_POST["ticname"];
    $mtime  = $_POST["mtime"];
    
    $insert = "UPDATE `movie_show` SET Movie_id='$mname',`Time`='$mtime',Theater_id='$tname',`ticket_id`='$ticname' 
    WHERE id='$Id'";
    $ex = mysqli_query($con , $insert);
    if($ex = true)
    {
        echo '<script> alert ("Data Added Successfully"); </script>';
    }
    else{
        mysqli_error($con);
    }
}





?>
