<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style='background-color:black;'>

<?php require_once("header.php") ?>
<br> <br>
<br> <br>
<br> <br>
<br> <br>

<div class="main-content">
<div class="mt-4 container ">
    <h1 class="text-info">Your Seats has been booked,Thank You! for Choosing us </h1><br>
<table class = "mt-4 table table-border table-dark">   
   <tr>
       <th class='text-light'>User Name</th>
       <th class='text-light'><?php echo $_SESSION["uname"] ?></th>
   </tr>
     
   <tr>
       <th class='text-light'>Ticket</th>
       <th class='text-light'><?php echo $_SESSION["ticket"]; ?></th>
   </tr>        
         
   <tr>
       <th class='text-light'>Movie</th>
       <th class='text-light'><?php echo $_SESSION["movie"]; ?></th>
   </tr> 
 
   <tr>
       <th class='text-light'>Bill</th>
       <th class='text-light'><?php echo $_SESSION["bill"]; ?></th>
   </tr> 

   <tr>
       <th class='text-light'>Booking Id</th>
       <th class='text-light'><?php echo $_SESSION["bookid"]; ?></th>
   </tr> 
    <tr>
        <td colspan="2"> <a href="home.php" style="background-color:white ; padding:5px;">Back to Home</a></td>
    </tr>
           </table>  
          
          
</div>
 </div>
<?php require_once("footer.php") ?>

    
</body>
</html>