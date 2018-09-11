<?php 
session_start();
include_once('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout Vector Shop</title>
</head>
<body>
<div class="container" style="margin-top: 50px;">	

<?php 
	if(!empty($_SESSION["shopping_cart"]))
	{ 
		?>
			<table class="table table-hover table-info">
			  <thead>
			    <tr>
			      <th scope="col">Product Name</th>
			      <th scope="col">Price</th>
			      <th scope="col">Quantity</th>
			      <th scope="col">Amount</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
		<?php
			$total=0;
			foreach ($_SESSION["shopping_cart"] as $key => $value)
				{ ?>
					<tr>
				      <td><?php echo $value["item_name"]; ?></td>
				      <td><?php echo $value["item_price"]; ?></td>
				      <td><?php echo $value["item_qty"]; ?></td>
				      <td><?php echo $value["item_qty"]*$value["item_price"]; ?></td>
				      <td>
				        <form action ="checkout.php" method="post">  
				         <!--<a href="checkout.php?action=delete&id=<?php echo $value["item_id"];?>"> -->
				      <!--	<span class="btn btn-info">Remove</span>-->
				      <input type="hidden" name="id" value="<?php echo $value["item_id"];?>">
				      	<input type="submit" class="btn btn-info" name="remove" value="Remove">
				      	</form>
				      </a></td>
				    </tr>
				 <?php
				 $total=$total+ ($value["item_qty"]*$value["item_price"]);    		
				}
			    ?>

				<tr>
					<td colspan="3" align="center"><b>Total</b></td>
					<td colspan="2" align="left"><span class="btn btn-primary">
						<?php echo number_format($total,2); ?> </span></td>
				</tr>
				<tr>
					<td colspan="5" align="right">
						<a href="order.php">
				      	<span class="btn btn-success">Proceed</span>
				      </a>
					</td>
				</tr>

			<?php
	}
		
	else
	{ ?>
	<div class="card">
	<span class="text-danger" align="center"><h3><b>Your Cart is Empty!!</b></h3></span>
	</div>	
	<?php 
	}

if(isset($_POST["remove"]))
{
	foreach ($_SESSION["shopping_cart"] as $key => $value) 
	{
		if($value["item_id"] == $_POST["id"])
		{
			unset($_SESSION["shopping_cart"][$key]);
			?>
			<script>
			alert('Item Removed From the cart!');
			location.reload();
			</script>
			<?php
		}
	}
}		
?>   
</tbody>     
</div>
</body>
</html>