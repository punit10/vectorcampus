<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user']))
{
 header("Location: login.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);


$link = mysqli_connect("$servername","$username","$password")  or die("failed to connect to server !!");
mysqli_select_db($link,"$dbname");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
//$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
//$zipcode=$_POST['zipcode'];
//$region=$_POST['region'];
$phone=$_POST['phone'];
//$email=$_POST['email'];


$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$name = $userRow['username'];
$userid =  $userRow['user_id'];



// Validation will be added here
 

//Inserting record in table using INSERT query
if(mysql_query("INSERT INTO`Category`
(`name`, `lastname`, `dob`, `amount`,
`restaurant_id`, `image`, `userid`) VALUES ('$firstname', '$name', '$dob', '$address', '$city', '$phone','$userid')"))

{
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="images/s2.png" type="image/x-icon" />
<title>Skilacner</title>
<link rel="stylesheet" href="style.css" type="text/css" />

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            <a class="navbar-brand" href="#">Skilancer</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">about Us</a></li>
        <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="modal" role="button" data-target="#myModal">Contact us</a>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dash.php"><span class = "glyphicon glyphicon-user" ></span>Hi' <?php echo $userRow['username']; ?></a></li>
        <li>
          <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
           <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--user login-->




<br>
<br>
<br>
<nav class="nav nav-tabs navbar-inverse" id="margintop">
      <div class="container-fluid">
        <div class="container">

         
          <div class="collapse navbar-collapse" id="default_navbar">
            <ul class="nav navbar-nav">
              <li class="active"><a>Home</a></li>
        
        
          </div>

        </div>
      </div>
</nav>    
  
<div class="jumbotron">

      <div class="banner-msg">
            <div class="inner-banner">
 <div class="col-sm-3">
          <h3>Find &amp; Hire Talented Freelancers</h3></div>
                       <ul class="nav nav-pills">
  <li class="active"><a data-toggle="" href="submit.php">Hire</a></li>
  <li class="active"><a data-toggle="" href="#">Work</a></li>
  <li class="active"><a data-toggle="" href="submit.php">Post a Job (FREE)</a></li>
</ul>


              </div>
</div>

</div>
<div class="col-sm-2" style="background-color:;"></div>

<div class="col-sm-8" style="background-color:;">

<!--search box-->

<div>
<button type="button" class="btn btn-primary btn-block" data-toggle="collapse" data-target="#demo">
  Simple collapsible
</button>







<form class="form-horizontal" id="form_members" role="form" action="" method="POST">

<legend>Details</legend>
<div class="form-group">
    <label for="firstname" class="col-sm-2">Title</label>
    <div class="col-sm-10">
    	<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Title">
    </div>
<br>
<br>
<br>
    <label for="lastname" class="col-sm-2">Comapny Name(optional)</label>
    <div class="col-sm-10">
    	<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Company name(Optional)">
    </div>
<br>
<br>
<br>

<!--div class="form-group">
    <label for="gender" class="col-sm-2" >select</label>
    <div class="col-sm-10">
        <label class="radio-inline">
        <input type="radio" name="gender" id="male" value="male"> Male
        </label>
        <label class="radio-inline">
        <input type="radio" name="gender" id="female" value="female"> Female
        </label>
    </div-->
    <label for="dob" class="col-sm-2">Last date</label>
    <div class="col-sm-10">
        <input type="date" class="form-control" name="dob" id="dob" placeholder="mm/dd/yyyy">

    </div>

<br>
<br>
<br>



<!--legend>Address</legend-->

<label  for="address" class="col-sm-2">Amount (in Rupees)</label>
    <label for="address" class="col-sm-10">

    
    <div class="input-group">
      <div class="input-group-addon">₹</div>
      <input type="text" class="form-control" name="address" id="address" placeholder="Amount">
      <div class="input-group-addon">.00</div>
    </div>
  
<br>


</label>


    <label for="city" class="col-sm-2">reataurant</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" list="cities" name="city" id="city" placeholder="Dropdown and select topic">
    <datalist id="cities">
        <?php
                                                    
                                                        $query = "SELECT * FROM restaurant";
                                                        $result = mysql_query($query);
                                                        while ($rows = mysql_fetch_array($result)) {
                                                        echo "<option value=" .$rows['id']. ">" .$rows['name']. "</option>";
                                                        }
                                                        ?> </datalist>
    </div>
</div>





<!--div class="form-group">
    <label for="zipcode" class="col-sm-2">ZIP Code</label-->
    <!--div class="col-sm-4">
        <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="ZIP Code">
    </div>
    <label for="region" class="col-sm-2">Region</label>
    <div class="col-sm-4">
        <select class="form-control" name="region" id="region">
            <option>Select a Region</option>
            <option>Abruzzo</option>
            <option>Aosta</option>
            <option>Apulia</option>
            <option>Veneto</option>
        </select>
    </div>
</div>
 <label for="" class="col-sm-2">Email</label>
    <div class="col-sm-4">
        <input type="email" class="form-control" name="email" id="email" placeholder="email" >
    </div>
</div><legend>Contact Info</legend-->
              
            
        
        




	<div class="form-group">
  <label for="phone" class="col-sm-2" >Details</label>
  <textarea class="form-control" rows="5" name="phone" id="phone" placeholder="Details" ></textarea>
</div>

<br>

   
<!--div class="form-group">
    <label for="email">File input</label>
    <input type="file" name="email" id="email">
    <p class="help-block">Example block-level help text here.</p>
  </div-->
<div class="form-group">
    <div class="col-sm-offset-2">
        <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
    </div>
</div>
</form>
</div>
</option>
<br>
<br>
<br>

<!--div class="thumbnail">
         <h3 class="primaryHeading category">Which category is the best match for this job?</h3>
         <ul class="grid_list grid3x clearfix" id="categoryList">
            <li class="selected">

              <a class="thumbnail" categoryid="100" tabindex="0">
                <p class="title">Web, Software &amp; IT</p>
                <p id="100" class="subtext">98,783 Matches</p>
              </a>
            </li>   
            
            <li>
              <a class="thumbnail" categoryid="200" tabindex="0">
                <p class="title">Design, Art &amp; Multimedia</p>
                <p id="200" class="subtext">68,961 Matches</p>
              </a>
            </li>   
            
            <li>
              <a class="thumbnail" categoryid="500" tabindex="0">
                <p class="title">Writing &amp; Translation</p>
                <p id="500" class="subtext">49,961 Matches</p>
              </a>
            </li>   
            
            <li>
              <a class="thumbnail" categoryid="1200" tabindex="0">
                <p class="title">Sales &amp; Marketing</p>
                <p id="1200" class="subtext">15,283 Matches</p>
              </a>
            </li>   
            
            <li>
              <a class="thumbnail" categoryid="1300" tabindex="0">
                <p class="title">Admin Support</p>
                <p id="1300" class="subtext">30,121 Matches</p>
              </a>
            </li>   
            
            <li>
              <a class="thumbnail" categoryid="1400" tabindex="0">
                <p class="title">Management &amp; Finance</p>
                <p id="1400" class="subtext">13,273 Matches</p>
              </a>
            </li>   
            
            <li>
              <a class="thumbnail" categoryid="1500" tabindex="0">
                <p class="title">Legal</p>
                <p id="1500" class="subtext">1,581 Matches</p>
              </a>
            </li>   
            
            <li>
              <a class="thumbnail" categoryid="1700" tabindex="0">
                <p class="title">Engineering &amp; Architecture</p>
                <p id="1700" class="subtext">9,688 Matches</p>
              </a>
            </li>   
            
            <li>
              <a class="thumbnail" categoryid="1900" tabindex="0">
                <p class="title">Any Category</p>
                <p id="1900" class="subtext">281,199 Matches</p>
              </a>
            </li>   
            </ul>
        <span id="ctl00_guB_ucPostProject_ddlCat" class="selCat" style="display: none;"><select name="ctl00$guB$ucPostProject$ddlCat$ddlCat_Select" id="ctl00_guB_ucPostProject_ddlCat_ddlCat_Select" class="niceInput small">

</select><span id="ctl00_guB_ucPostProject_ddlCat_ddlCat_NameSign" style="display:none"></span><span></span></span>
    </div-->