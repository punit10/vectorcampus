<!DOCTYPE html>
<html>
<head>
	<title>Assignment 1 Layout 3</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/layout3.css">
</head>
<body>
<!--bootstrap navbar-->	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand margin-left" href="#">Lauout 3</a>
  
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
<div class="row">
	 <div class="col-lg-8 col-md-8 col-xs-12" style=" padding : 40px 30px; border: 0px solid red">
		<div class="row">
			<div class="col-md-12 col-lg-12 col-sm-12">
			<h1>Blog Post Title</h1>
			<h5>By <span class="spancolor">Test</span></h5>
			<hr>

			<p><span>Posted On <?php echo date("F j, Y \a\\t g:i A");?> </span></p>
			<hr>

			<div class="col-md-12 col-xs-12" align="center">
				<img src="../images/900x300.png" class="width-full" alt="post image" height="240">
			</div>
			<hr>
			</div>


			<div class="col-md-12 col-lg-12 col-sm-12">
				<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit.</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco.</p>
			</div>
		</div>

	</div>   


<div class="col-lg-4 col-md-4 col-xs-12">
			<div class="row">
			<div class="card-design" >
				<h5>Blog Search</h5>
				
					<div class="form">
						<div class="input-group">
					  <input type="text" class="form-control"  >
					  <div class="input-group-append">
					    <button class="btn" type="button">
					    <i class="fa fa-search"></i></button>
					  </div>
					  </div>
					</div>
				

			</div>	
			</div>

		<div class="row">
			<div class="card-design">
			<h5>Blog Categories</h5>
				<div class="row">
						
						<div class="col-md-6 spancolor">
							<span>Category Name</span>
							<span>Category Name</span>
							<span>Category Name</span>
							<span>Category Name</span>
						</div>
						<div class="col-md-6 spancolor">
							<span>Category Name</span>
							<span>Category Name</span>
							<span>Category Name</span>
							<span>Category Name</span>
						</div>
						
						
				
				</div>

				
			</div>
		
	    </div>

			<div class="row">
				<div class="card-design">
				<h5>Side Widget Well</h5>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris</p>	
				</div>
			</div>
		
	</div>


</div> <!-- row closed -->

<footer>
	<hr>
	<p>Copyright &copy Punit Website <?php echo date(Y); ?></p>
</footer>

</div><!-- container closed -->

		

</body>
</html>	    