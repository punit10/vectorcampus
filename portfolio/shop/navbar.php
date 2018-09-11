<?php
require_once 'class.user.php';
$user_home = new USER();
if($user_home->is_logged_in())
{
 //$user_home->redirect('index.php');
  $stmt = $user_home->runQuery("SELECT * FROM users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
            <meta property="og:url"                content="http://vectorcampus.com/" />
            <meta property="og:type"               content="Website" />
            <meta property="og:title"              content="Vector Campus Leading Web Development Firm" />
            <meta property="og:description"        content="Vector Campus Leading Web Development Firm for Web Designing, Development And Marketing." />
            <meta property="og:image"              content="http://vectorcampus.com/images/logovc.png" />
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--<link rel="stylesheet" href="css/bootstrap.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" >
        <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-dark bg-primary navbar-fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="http://vectorcampus.com/portfolio/shop/">
     <img src="logovc.png" width="30" height="30" class="d-inline-block align-top" alt="">
     VectorCampus Shop
    </a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">


      <ul class="navbar-nav float-right">
        <li class="nav-item active">
          <a class="nav-link" href="http://vectorcampus.com/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown active">
           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Services </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#
              ">Web Development</a>
              <a class="dropdown-item" href="#">Web Solutions</a>
              <a class="dropdown-item" href="#">Search Engine Optimization</a>
            </div>
        </li>

          <li class="nav-item dropdown active">
            <?php 
            if(!isset($_SESSION['userSession']))
            { ?>
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-user"></i>Account</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="login.php">Log In</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="signup.php">Sign Up</a>
              </div>  
            <?php }
            else
            { ?>
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                    <?php echo $row['userName'];?></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="logout.php">Log Out</a>
              </div>
            <?php }
           ?>  
          </li>

           <li class="nav-item active">

          <a class="nav-link" href="checkout.php"><span class="badge">
              <?php
              if(isset($_SESSION["shopping_cart"]))
              {
                echo count($_SESSION["shopping_cart"]);
              }
              else { echo 0; }
                ?>
          </span>Cart</a>
        </li>
      </ul>

       

                               
      
    </div>
</nav>

                           
                        
               

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" ></script>
        
    </body>
</html>