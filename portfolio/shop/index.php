<?php
require_once 'class.user.php';
include_once('dbconnect.php');
session_start();
$user_home = new USER();
if($user_home->is_logged_in())
{
  $stmt = $user_home->runQuery("SELECT * FROM users WHERE userID=:uid");
  $stmt->execute(array(":uid"=>$_SESSION['userSession']));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<link rel="stylesheet" href="css/bootstrap.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" >
  <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/style.css">
  <title>VectorCampus Home</title>
  <script type="text/javascript">
      function item_added()
      {
        alert("Item added in cart !");
      }
        function item_exist()
      {
        alert("Item alredy exist in the Cart!");
      }
      </script>
</head>
<body>
<?php
include_once('navbar.php');
if(isset($_GET['msg']))
{
    if($_GET['msg']=="item_added")
    {
        ?><script type="text/javascript"> item_added();</script> <?php
    }
    else if($_GET['msg']=="item_exist")
    {
       ?><script type="text/javascript"> item_exist();</script> <?php 
    }
}
?>
<div class="container">
    <div class="row justify-content-center">
<?php
$qry="SELECT * FROM products ";
$res=mysqli_query($con,$qry);
if(mysqli_num_rows($res)==0)
{
    echo "No Products to show!";
}
else
{ 
    while($product=mysqli_fetch_assoc($res))
    {
        
        
        
        
         
        ?>     
            <div class="col-md-4 col-sm-6">
             <div class="card">
              <img class="card-img-top" src="<?php echo $product['imageurl'];?>" alt="<?php echo $product['name'];?>" height="240" width="300">
               <div class="card-block text-center bg-warning">
                  <h4 class="card-title"><?php echo $product['name'];?></h4>
                  <p class="card-text"><?php echo $product['description'];?></p>
                  <div class="clearfix padding">
                        <div class="float-left"><h4><b>Rs. <?php echo $product['price'];?></b></h4>
                        </div>

                        <form method="post" action="cart.php">
                        <input type="hidden" name="hidden_id" value="<?php echo $product['id'] ?>"> 
                        <input type="hidden" name="hidden_name" value="<?php echo $product['name'] ?>"> 
                        <input type="hidden" name="hidden_price" value="<?php echo $product['price'] ?>">
                        <input type="submit" name="add_to_cart" value="Buy Now" class="btn btn-success float-right">
                        
                        </form>
                  </div>
                 
               </div>
              </div>
           </div> 
        <?php    
    
    }
          
}
?>

</div>
</div>
</body>
</html>