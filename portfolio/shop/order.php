<?php
session_start();
include_once('navbar.php');
if(isset($_SESSION["shopping_cart"]))
{

			$total=0;
			$count=0;
			foreach ($_SESSION["shopping_cart"] as $key => $value)
				{   $count++;
					//echo $value["item_name"];	
				    //echo $value["item_qty"]*$value["item_price"];
				    $total=$total+ ($value["item_qty"]*$value["item_price"]);    		
				}
				$product_name = ($count<=1) ? $_SESSION["shopping_cart"][0]["item_name"] : $_SESSION["shopping_cart"][0]["item_name"]." + ".($count-1);
				$fee = ($total*0.02) + 3;
				$tax = $fee * 0.15;
				$amount_to_pay=$total + $fee + $tax;
				?>
				
		<div class="container">
		    <div class="row">
		    
		        <div class="card col-sm-12 col-lg-4">
				<b>Product Name : </b> <span><?php	echo $product_name; ?></span>
				<b>Product Price(Rs.) : </b> <span><?php	echo $total;?></span>
				<b>Bank Fee(Rs.): </b> <?php echo $tax + $fee ; ?> <small> (Rs:3+ 2% of fee+ 15% Service Tax)</small>
				<b>Total Amount (Rs.): </b> <span><?php echo $amount_to_pay;?></span>
				</div>
		    
			
				<div class="card col-sm-12 col-lg-6">

					<form action="pay.php" method="POST" accept-charset="utf-8" style="padding: 10px">
			        <input type="hidden" name="product_name" value="<?php echo $product_name; ?>"> 
			        <input type="hidden" name="product_price" value="<?php echo $amount_to_pay; ?>">
			        
			        <label for="name">Name</label>
			        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"><br>
			        <label for="phone">Your Phone No</label>
			        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone No"><br>
			        <label for="email">Your Email</label>
			        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email"><br>
			        <span class="btn btn-warning float-left" >Pay Rs. <?php echo $amount_to_pay;?> </span>
			        <input type="submit" name="pay" value="Proceed to Pay" class="btn btn-success float-right">
			        </form>
							
				</div>
			</div>
		</div>
				




<?php
}
?>