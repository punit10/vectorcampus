<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="icon" href="images/logovc.png" type="image/x-icon" />
  <title>VectorCampus Leading Web Design and Development Firm </title>

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
  
  .blueheight{
    background-color: skyblue; 
    padding: 10px 10px;
    height: 200px;
    }

   .orangeheight{
     background-color: lightgreen; 
     padding: 10px 10px;
     height: 200px;
   }  

  .rowheight{
    height: auto;
    width: 90%;
    background-color: lightgreen;
  }

  .lightgreen{
    background-color: lightgreen;
    height: 10vh;
  }
  .lightgreen.hover{
    color: red;
  }

  /* Style the tab */
  div.tab {
      overflow: hidden; 
      border: 0px solid red;
    background-color: inherit;
  }

  /* Style the buttons inside the tab */
  div.tab button {
      background-color: skyblue;
      float: center;
      width: 100%;
      border: 0px solid red;
      outline: none;
      cursor: pointer;
      padding: 10px 20px;
      transition: 0.3s;
      font-size: 18px;

  }


  /* Change background color of buttons on hover */
  div.tab button:hover {
      background-color: lightgreen;
  }

  /* Create an active/current tablink class */
  div.tab button.active {
      background-color: lightgreen;
  }

  /* Style the tab content */
  .tabcontent {
      display: none;
      padding: 6px 40px;
      border: 0px solid blue;
      border-top: none;

  }
  .img-width{
    height: 100px;
    width: 400px;
    border: 1px solid #222;
    border-radius: 10%;
  }
  
  
  }
  </style>
</head>
<body>

<?php
include('navbar.php');
?> 
  
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h3 class="header center blue-text text-darken-2">VectorCampus</h3>
        <div class="row center">
          <h5 class="header col s12 ">Taking you to the Globle world.</h5>
        </div>
        <div class="row center">
          <a href="contactus.php" id="download-button" class="btn-large waves-effect waves-light blue lighten-1">
          Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="images/background1.jpeg" alt="VectorCampus"></div>
  </div>



  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Who We Are</h4>
          <p class="left-align light">We are the Web development Company the Team Of Young minds offering the service of
         all your Bussiness needs. We build complete business solutions to our customers.
         We provide services like Web Development, Web Design, CMS Development, Digital Marketing,
         Logo Design to take up your business online a give you a instance growth in the market.</p>
        </div>
      </div>

    </div>
  </div>



<div class="row" style="padding:10px">
  <div class="col l12 s12" style="text-align: center;">
  <h3>We Give Solutions to all your business Needs </h3>
</div>
</div>

<div class="container">
  <div class="tab" style="background-color: inherit;">
  <div class="row center" >


      <div class="col l3 s12 text-center" style=" margin: 0 20px; padding: 4px;">
        <button class="tablinks" onclick="openCity(event, 'Paris')" id="defaultOpen">Web Designing</button>
      </div>
      
            <div class="col l3 s12 text-center" style=" margin: 0 20px; padding: 4px;">
      <button class="tablinks" onclick="openCity(event, 'London')" >
        Web development</button>
      </div>

      <div class="col l3 s12 text-center" style=" margin: 0 20px; padding: 4px;">
        <button class="tablinks" onclick="openCity(event, 'Delhi')">SEO</button>
      </div>

   </div>
</div>

<div id="Paris" class="tabcontent">
    <div class="row">
        <div class="col l6 hide-on-med-and-down">
          <img src="images/design.jpeg" alt="Web Design" width="400" height="300" >
        </div>


        <div class="col l6">
          <h5>Web Design</h5>
          <p>We design Fully Responsive dynamic website.
          The design you and your customers love the most. We provide functional dynamic eye catching Website
           design that helps to improve your business.</p>
        </div>

    </div>
</div>

<div id="London" class="tabcontent">
  
    <div class="row">

        <div class="col l6 hide-on-med-and-down">
          <img src="images/development.jpeg" alt="Development" width="400" height="300" >
        </div>
   
        <div class="col l6">
                  <h5>Web Development</h5>
          <p>We develop Fully Responsive dynamic website.
          We provide the fully functional dynamic user-friendly website with the payment gateway. That puts you
          in the top of the market</p>
        </div>

    </div>
</div>

<div id="Delhi" class="tabcontent">
    <div class="row">
        <div class="col l6 hide-on-med-and-down">
          <img src="images/seo.jpeg" alt="SEO" width="400" height="300" >
        </div>
        


        <div class="col l6">
          <h5>Search Engine Optoimization.</h5>
          <p>Hey, You need not to worry about traffic, you need not to waste a lots of Money for the traffic
          The Search Engine Optimization helps to put your website at the top of the Search Engine leads to
           Tons of traffic.</p>
        </div>

    </div>
</div>

</div>




  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 dark">We Can Make the Amazing Website For You.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background2.jpeg" alt="Unsplashed background img 2"></div>
  </div>




 <div class="">
    <div class="section">

<div class="row" style=" padding: 20px 10px;" >
 
    <div class="col l12"><h3 style="text-align:center; margin-bottom: 20px;">How it Works</h3></div>
 
  <div class="col l2 blueheight center">
    <h5>1. Initiate</h5>
    <p>The process starts with customer needs which he desire and expect from our team.</p>
  </div>
  <div class="col l2 orangeheight center" >
    <h5>2. Defining Requirements</h5>
    <p>Getting Proper requirement of the Customer which defines the project goals as functions and operations.</p>
  </div>
  <div class="col l2 blueheight center">
    <h5>3. Designing</h5>
    <p>Design of the project is done in details including system design, screen layout, diagrams, images etc.</p>
  </div>
  <div class="col l2 orangeheight center">
    <h5>4. Development</h5>
  <p>The coding and database management is done at this stage, with the procedure, functions and algorithms.</p>
  </div>
  <div class="col l2 blueheight center"  >
    <h5>5. Testing</h5>
    <p>Put all the phases together the errors, bugs and inoperability and quality is checked.</p>
  </div>
  <div class="col l2 orangeheight center">
    <h5>6. Delivery</h5>
    <p>After completion all the phases the product is delivered, Live your website leads to Happy Customers.</p>
  </div>
</div>


</div>
</div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Friendly</h5>

            <p class="center light">We create the website which us fully Dynamic and user Friendly.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">devices_other</i></h2>
            <h5 class="center">Responsive</h5>

            <p class="center light">The website is fully responsive in all the devices.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Tools</h5>

            <p class="center light">Usage of new technology and tools speeds up development resulting in quicker launches.</p>
          </div>
        </div>

           <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">collections</i></h2>
            <h5 class="center">Amazing Slides</h5>

            <p class="center light">An Important part of our design. Sliders provide attractive visual effects to your site.</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12  dark">We Love to Make Amazing Websites For You.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background4.jpeg" alt="Unsplashed 3"></div>
  </div>

<?php 
include('footer.php');
?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
  //for the tab onening
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

  </body>
</html>
