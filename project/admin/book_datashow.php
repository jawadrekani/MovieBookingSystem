<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once("header.php");?>
<div class="main-content">
<?php
    require_once("../Connection.php");
   
    $fetch = "SELECT * FROM `booking`";
    $execute = mysqli_query($con , $fetch);
    $num = mysqli_num_rows($execute);

    if ($num > 0) {
      echo "<div class='container-fluid'><table class='table table-border' id='myTable'>
      <br>
      <br>
      <br>
      <br>     
     <thead> <tr>
               
               <th>Book</th>
               <th>Name</th>
               <th>time</th>

               <th>Dates</th>
               <th>No of Seats</th>
               <th> Total price</th>

           </tr></thead><tbody>";
       while($rec = mysqli_fetch_array($execute)){
           ?> <tr>
                <td><?php echo $rec[0] ?></td>
                <td><?php
                $a= mysqli_query($con , "select * from `user` where id = $rec[1]");
                $arr = mysqli_fetch_array($a);
                echo $arr [1];
                ?></td>
                <td><?php
                $b= mysqli_query($con , "select * from `movie_show` where id = $rec[2]");
                $arr2 = mysqli_fetch_array($b);
                echo $arr2 [2];
                ?></td>
                <td><?php echo $rec[3] ?></td>
                <td><?php echo $rec[4] ?></td>
                <td><?php echo $rec[5] ?></td>

                
                
               
      </tr> <?php }
           echo "</tbody></table>";
    } 
    

    

?>
 </div>
<?php
require_once("Footer.php");

?>
</body>
</html>
