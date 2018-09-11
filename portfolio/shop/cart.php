<?php 
session_start();
include_once('dbconnect.php');
if(isset($_POST['add_to_cart']))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_id_array= array_column($_SESSION["shopping_cart"],"item_id");
		if(!in_array($_POST["hidden_id"], $item_id_array))
		{
			$count=count($_SESSION["shopping_cart"]);
			$item_array=array(
			'item_id'     => $_POST["hidden_id"],
			'item_name'   => $_POST["hidden_name"],
			'item_price'  => $_POST["hidden_price"],
			'item_qty'    => 1
		);
		$_SESSION["shopping_cart"][$count]= $item_array;
		header('location: home.php?msg=item_added');

		}
		else
		{
			echo "<script> alert('Item already present'); </script>";
			header('location: home.php?msg=item_exist');
		}

	}
	else
	{
		$item_array=array(
			'item_id'     => $_POST["hidden_id"],
			'item_name'   => $_POST["hidden_name"],
			'item_price'  => $_POST["hidden_price"],
			'item_qty'    => 1
		);
		$_SESSION["shopping_cart"][0]= $item_array;
		header('location: home.php?msg=item_added');
	}
}

//echo '<pre>';
//print_r($_SESSION["shopping_cart"]);
//echo '<pre>';
?>