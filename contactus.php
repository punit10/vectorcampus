<?php
include'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link rel="icon" href="images/logovc.png" type="image/x-icon" />
  <title>VectorCampus.com About Us </title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
   
   <style type="text/css">
     body{
   background: #24C6DC;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #514A9D, #24C6DC);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #514A9D, #24C6DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
       }
   </style>
   


</head>
<body>
  <?php
  include 'navbar.php';
  ?>
      <div class="row">
          
     
          
       <div class="col l4 push-l4 card" style="padding: 20px;">
       <form method="post">
        <h4 class="center"> Contact Us</h4>

        Name: <input name="name" id="name" type="text" required autofocus  /> <br>

         Email: <input name="email" id="email" type="text" required  /> <br>

        Phone: <input name="phone" id="phone" type="text" required  /> <br>
                
        Query: <textarea id="message" name="message" class="materialize-textarea" rows="15" cols="40" 
         required></textarea><br>
                <label for="message"></label>

          <button class="btn waves-effect waves-light blue" type="submit" name="submit">Submit !
             </button>
        
        </form>
        </div>
      </div>

<?php
 if (isset($_REQUEST['submit'])) 
  {
  
    //Email information
    $admin_email = "vectorcampus1@gmail.com";
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $subject = $phone.' || Customer Query';
    $message = $_REQUEST['message'];
    //add in database
    $qry="INSERT INTO `visitor` (`id`, `name`,`email`, `phone`, `message`) 
      VALUES ('Null','$name','$email','$phone','$message')";
      
    $run=mysqli_query($con,$qry);  
    if($run==true)
        {
          
          ?>
          <script>
          alert("Query sent Successfully.");
             window.location.href = "index.php";
          </script>
          <?php
        
            
        }
        else
        {
                      ?>
          <script>
          alert("Error in Sending Query.");
          </script>
          <?php
        
        }
        

 //send email to admin of vc
  mail($admin_email, "$subject", $message, "From:" . $email);
 
 // send acknowledge mail to the seller
 $body ="Thank you for writing to VectorCampus.com\nThis is auto generated message. Our Team Will be there With You shortly.
 \n\n$message ";
  
  $sub="Query To VectorCampus.com";
  mail($email,"$sub",$body,"From:" . $admin_email);
  
 // header('Location: index.php');
 // echo "<br>" ."Thank you for contacting us!";
 // unset($_REQUEST['submit']);
  }


  ?>
  


<?php
include 'footer.php';
?>
</body>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
   <script src="{{asset('public/js/app.js')}}"></script> 

<script type="text/javascript">
   $(document).ready(function() {
    $('select').material_select();
  });
      

      $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });

      $(document).ready(function() {
    $('input#input_text, textarea#textarea1').characterCounter();
  });
      
</script>
</html>
  
