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
<select name="mname" class="form-control">
   <?php 
   $fetch = "SELECT * FROM `movie_theater`";
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
       echo"<option value='0'>Nothing to shiw </option> ";
   }
    
   ?>
</select>

<label for="tname">Theater Name</label>
<select name="tname" class="form-control">
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
       echo"<option value='0'>Nothing to shiw </option> ";
   }
    
   ?>
</select>

</select>

<label for="ticname">Ticket Name</label>
<select name="ticname" class="form-control">
   <?php 
   $fetch = "SELECT * FROM `ticket`";
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
       echo"<option value='0'>Nothing to shiw </option> ";
   }
    
   ?>
</select>






<label for="mtime">Movie Time</label>
<input type="time" class="form-control" name="mtime">
<br>
<button type="submit" class="btn btn-primary" name="btn"> ADD </button>

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

    $insert_query = "INSERT INTO `movie_show`( `Movie_id`, `Time`, `Theater_id`, `ticket_id`) VALUES('$mname',' $mtime','$tname','$ticname ')";
    $ex = mysqli_query($con , $insert_query);
    if($ex = true)
    {
        echo '<script> alert ("Data Added Successfully"); </script>';
    }
    else{
        mysqli_error($con);
    }
}





?>
