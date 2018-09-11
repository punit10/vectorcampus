<!DOCTYPE html>
<html>
<head>
	<title>Assignment 1 Layout 2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/layout2.css">
</head>
<body>
<!--bootstrap navbar-->	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand margin-left" href="#">Lauout 2</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	
 	 <ul class="navbar-nav mr-auto">

	  <li class="nav-item active">
        <a class="nav-link" href="#">About</a>
	  </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">Services</a>
	  </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<!--end bootstrap navbar-->	
	
<div class="container">

	    <div class="jumbotron">
	    	<h1>Sample Heading</h1>
	    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	    	consequat.</p>
	    	<button class="btn btn-primary">Call to Action!</button>
	    </div>

<div class="row">
	<div class="col-md-12 padding-left-20">
		<h2> Latest Features</h2> 
	</div>

<?php for($i=1;$i<=4;$i++)
{
?>
	<div class="col-md-3 col-sm-6 col-lg-3">
					<div class="card card-style">
					  <img class="card-img-top" src="../images/800x500.png" width="250" height="150" alt="Card image cap">
					  <div class="card-body">
					    <h4 class="card-title" >Project Name</h4>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua.</p>
					    <button class="btn btn-primary float-left">Buy Now!</button>
					    <button class="btn float-right">More Info</button>
					  </div>
					</div>
				</div>	
<?php
}
?>
				
</div>
	
	<footer>
		<hr>
		<p>Copyright &copy Punit Website <?php echo date(Y); ?></p>
	</footer>	

</div>	<!-- container closed -->
</body>
</html>