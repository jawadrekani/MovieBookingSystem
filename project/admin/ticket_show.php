<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="main-content">
<?php require_once("header.php");?>
<?php
    require_once("../Connection.php");
    
    $fetch = "SELECT * FROM `ticket`";
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
               <th>Ticket Type</th>
               <th>Screen Type</th>
               <th>Price</th>
               <th>Action</th>
              
               
             
           </thead></tr><tbody>";
       while($rec = mysqli_fetch_array($execute)){
            echo' <tr>
                <td>'.$rec[0].'</td>
                <td>'.$rec[1].'</td>
                <td>'.$rec[2].'</td>
                <td>'.$rec[3].'</td>
                <td><a href="ticketEdit.php?EditWaliId='. $rec[0] .'" class="btn border border-danger text-danger">Edit</a></td>
               
              
                </tr> </tbody>';
       }
           echo "</table>";
    } 
    

    

?>
</div>
<?php
require_once("Footer.php");

?>
</body>
</html>