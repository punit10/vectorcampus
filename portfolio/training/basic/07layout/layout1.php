<!DOCTYPE html>
<html>
<head>
	<title>Assignment 1 Layout 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/layout1.css">
</head>
<body>
<!--bootstrap navbar-->	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand margin-left" href="#">Lauout 1</a>
  
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

<div class="Container con-padding">
	<div class="head">
		<span class="font-40">Page Heading</span> <span class="font-20">Secondary Text</span>
		<hr>
	</div>

		<?php
		for($i=0; $i<3; $i++)
		{
		?>
			<div class="row project">
				<?php 
				for($j=0; $j<3; $j++)
				{
				?>
				<div class="col-md-4 col-lg-4 col-sm-12">
					<div class="card center" >
					  <img class="card-img-top" src="../images/700x400.png" width="340" height="200" alt="image cap">
					  <div class="card-body">
					    <h4 class="card-title" >Project Name</h4>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua.</p>
					  </div>
					</div>
				</div>	
				<?php
				}
				?>			
			</div>

		<?php
		}
		?>			
	
	<footer>
		<hr>
		<p>Copyright &copy Punit Website <?php echo date(Y); ?></p>
	</footer>	
</div> <!-- Container closed -->

</body>
</html>