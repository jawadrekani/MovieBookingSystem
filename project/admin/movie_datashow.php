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
   
    $fetch = "SELECT * FROM `movie_theater`";
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
               <th>Name</th>
               <th>Director</th>
               <th>producer</th>
               <th>Writter</th>
               <th>Genre</th>
               <th>Release Date</th>
               <th> Video URL</th>
               <th> Action</th>
           </tr></thead><tbody>";
       while($rec = mysqli_fetch_array($execute)){
            echo' <tr>
                <td>'.$rec[0].'</td>
                <td>'.$rec[1].'</td>
                <td>'.$rec[2].'</td>
                <td>'.$rec[3].'</td>
                <td>'.$rec[4].'</td>
                <td>'.$rec[5].'</td>
                <td>'.$rec[6].'</td>
                <td><img src="'.$rec[7].'" alt="" width="100px" height="100px"></td>
               
                <td><a href="movieEdit.php?Id='. $rec[0] .'" class="btn border border-danger text-danger">Edit</a></td>
      </tr>';  }
           echo "</tbody></table>";
    } 
    

    

?>
 </div>
<?php
require_once("Footer.php");

?>
</body>
</html>
