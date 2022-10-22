<?php 
require_once("../Connection.php");

session_start();
if(isset($_POST["btn"] ))
{
    $email = $_POST["email"];
    $pwd = $_POST["pass"];

    $login ="select * from user where email = '$email' and password = '$pwd'";
    $ex = mysqli_query($con , $login);
    $check = mysqli_num_rows($ex);
    if ($check > 0) {
       $data = mysqli_fetch_array($ex);
       $role = $data[4];
       if($role == "user")
       {
           $_SESSION["uname"] = $data[1];
           $_SESSION["id"] = $data[0];
           $_SESSION["email"] = $data[2];
           $_SESSION["role"] = "User";
           header("location: ../user/home.php"); 
       }
       else if($role == "admin")
       {
        $_SESSION["name"] = $data[1];
        $_SESSION["email"] = $data[2];
        $_SESSION["role"] = "Admin";
        header("location: ../admin/home.php"); 
       }
    }
    else{
        echo"<script>alert('Invalid Credentials');</script>";
       }
}




?>