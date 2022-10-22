<?php require_once("../Connection.php");
 
 
 
 session_start();
 if(!isset($_SESSION["name"] ))
 {
   header("location:../login/index.html");
 }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
   <!-- jquery table -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
 
 
 
   

</head>
<body>


  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
         
         
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/icon.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title"><?php echo $_SESSION["name"]; ?></div>
             
              <div class="dropdown-divider"></div>
              <a href="../logout.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Dashboard</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="home.php" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Movie</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="Movie_threater.php">Add Movie</a></li>
                <li><a class="nav-link" href="movie_datashow.php">Movie Show</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Cinema</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="cinema_info.php">Cinema Add</a></li>
                <li><a class="nav-link" href="cinema_datashow.php">Cinema Show</a></li>
           
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Ticket</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="ticket.php">Ticket Add</a></li>
                <li><a class="nav-link" href="ticket_show.php">Tickets</a></li>
              
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Show movie</span></a>
              <ul class="dropdown-menu">
              <li><a class="nav-link" href="movie_show.php">Show Add</a></li>
              <li><a class="nav-link" href="show.php">Show </a></li>
              
              </ul>
            </li>
            <li><a class="nav-link" href="book_datashow.php"><i data-feather="command"></i>Book Data </a></li>

            <li><a class="nav-link" href="contact_datashow.php"><i data-feather="command"></i>Contact Show</a></li>


          </ul>
        </aside>
      </div>
 
</body>
</html>