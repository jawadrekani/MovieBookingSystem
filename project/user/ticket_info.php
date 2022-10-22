<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    tr{
        color:white;
    }
    
    
    </style>
    
</head>
<body style='background-color:black;'>
<?php require_once("header.php");?><br> <br>
<div class="main-content">
<div class="mt-4 container ">
<?php
    require_once("../Connection.php");
   
    $fetch = "SELECT * FROM `ticket`";
    $execute = mysqli_query($con , $fetch);
    $num = mysqli_num_rows($execute);

    if ($num > 0) {
      echo "<div class='container-fluid'><table class='table table-dark'>
      <br>
      <br>
      <br>
      <br>     
     <thead  <tr>
     
               <th class='text-light'>Type</th>
               <th class='text-light'>Price</th>
               <th class='text-light'>Screen Type</th>
               
           </tr></thead><tbody>";
       while($rec = mysqli_fetch_array($execute)){
            echo' <tr>
           
                <td>'.$rec[1].'</td>
                <td>'.$rec[2].'</td>
                <td>'.$rec[3].'</td>
             
                </tr>';
       }
           echo "</tbody></table>";
    } 
    

    

?>
</div>
 </div>
<?php

require_once("Footer.php");

?>
</body>
</html>