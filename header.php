<?php 
session_start();
include "functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="assets/favicon-1.ico"  >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
<link href="assets/style.css" rel="stylesheet">
    </head>
    <style>
  .dropdown-menu { 
      right: 0;
       left: auto; 
    }
    .navbar-brand {
    position: relative;
    background: url(../images/logo.png);
    height: 50px;
    left: 15px;
    background-size: contain;
}
    </style>

    <nav class="navbar navbar-expand-md bg-dark  ">
        <img class="navbar-brand" src="assets/logo_transparent.png" alt="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php isActive("index"); ?>">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="nav-item <?php isActive("locations"); ?>">
        <a class="nav-link" href="locations.php"><i class="fas fa-atlas"></i> Locations</a>
        </li>
		<li class="nav-item <?php isActive("gallery"); ?>">
        <a class="nav-link" href="gallery.php"><i class="far fa-images"></i> Gallery</a>
        </li>
        <li class="nav-item <?php isActive("contact"); ?>">
        <a class="nav-link" href="contact.php"><i class="far fa-envelope-open"></i> Contact Us</a>
        </li>
        <?php 

if(isset($_SESSION['user'])){
    echo '    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" class="dropdown-toggle" >
    <i class="fas fa-user"></i>
    </a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="/sign-out.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
    </div>
  </li>';
    }else{
        echo '  <li class="nav-item isActive("register");">
        <a class="nav-link" href="register.php"><i class="far fa-user"></i> Login & Register</a>
        </li>';

    }
?>
     
        </ul>

        

        
        </div>
    </nav>
    
</html>

<?php function isActive($page){
    $curPage = basename($_SERVER['REQUEST_URI'], ".php");
    if($curPage == ""){
        $curPage == "index";
    }
    if($curPage == $page){
    echo 'active';
    }

}
?>