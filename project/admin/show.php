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
   
    $fetch = "SELECT * FROM `movie_show`";
    $execute = mysqli_query($con , $fetch);
    $num = mysqli_num_rows($execute);

    if ($num > 0) {
      echo "<div class='container-fluid'><table class='table table-border' id='myTable'>
      <br>
      <br>
      <br>
      <br>     
     <thead> <tr>
               <th>Id</th>
               <th>Movie name</th>
               <th>Time</th>
               <th>Theater Name</th>
               <th>Ticket Type</th>
               <th>Action</th>
              
               
           </tr></thead><tbody>";
       while($rec = mysqli_fetch_array($execute)){
            ?> <tr>
                <td><?php echo $rec[0] ?></td>
                <td><?php
                $a= mysqli_query($con , "select * from `movie_theater` where id = $rec[1]");
                $arr = mysqli_fetch_array($a);
                echo $arr [1];
                ?></td>
                <td><?php echo $rec[2] ?></td>
                <td><?php
                $a= mysqli_query($con , "select * from `cinema_table` where id = $rec[3]");
                $arr = mysqli_fetch_array($a);
                echo $arr [1];
                ?></td>
                <td><?php
                $a= mysqli_query($con , "select * from `ticket` where id = $rec[1]");
                $arr = mysqli_fetch_array($a);
                echo $arr [1];
                ?></td>
                
                <?php echo '<td><a href="showEdit.php?Id='. $rec[0] .'" class="btn border border-danger text-danger">Edit</a></td>

                </tr>';?>
      <?php }
           echo "</tbody></table>";
    } 
    

    

?>
 </div>
<?php
require_once("Footer.php");

?>
</body>
</html>
