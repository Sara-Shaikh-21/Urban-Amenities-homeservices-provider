<!DOCTYPE html>
<html>
   <head>

    <link rel="shortcut icon" type="image/png" href="imgs/favicon.png">

      <meta charset="utf-8">
      
      <title>URBAN AMENITIES</title>
      <link rel="stylesheet" href="cssmain/bootstrap.min.css">
      <link rel="stylesheet" href="cssmain/style.css">
      <link rel="stylesheet" href="cssmain/style1.css">
      
   <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);


body { 
  font-family: 'Open Sans', 'sans-serif';
  color: 'black';
  background: 'white';
  
}

.item-1, 
.item-2, 
.item-3 ,
.item-4{
  position: absolute;
  display: block;
  top: 200px;
  height:90px;
  width: 60%;
  
  font-size: 2em;

  animation-duration: 10s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
}

.item-1{
  animation-name: anim-1;
}

.item-2{
  animation-name: anim-2;
}

.item-3{
  animation-name: anim-3;
}


@keyframes anim-1 {
  0%, 8.3% { left: -100%; opacity: 0; }
  8.3%,25% { left: 25%; opacity: 1; }
  33.33%, 100% { left: 110%; opacity: 0; }
}

@keyframes anim-2 {
  0%, 33.33% { left: -100%; opacity: 0; }
  41.63%, 58.29% { left: 25%; opacity: 1; }
  66.66%, 100% { left: 110%; opacity: 0; }
}

@keyframes anim-3 {
  0%, 66.66% { left: -100%; opacity: 0; }
  74.96%, 91.62% { left: 25%; opacity: 1; }
  100% { left: 110%; opacity: 0; }
}

   </style>   
   </head>
   <body>
    <div id="header" class="header">
         <nav class="navbar navbar-expand-lg navbar-light text-capitalize">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="imgs/logo.png" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="show-menu">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                         <a class="nav-link" href="index.html">Home</a>
                     </li>
                    
                     <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="how.php">How it Works</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="index.php">Instant Service</a>
                     </li>
                     
                    <li class="nav-item">
                        <a class="nav-link" href="review.php">What Clients Say</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                     </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="feed.php">Feedback form</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
                    <h3>Our Clients Say</h3>
      <?php
      include "conn.php";
      if(true){
       
          $sql = "SELECT names,feedback FROM feedback ";
          $statement = $conn->prepare($sql);  
          $statement->execute();  
          $provider = $statement->fetchAll();
          

          //echo'<pre>';
          //var_export($provider);
          //echo "</pre>";
        
      }
      ?>    <br><br><br><br>
	  <?php 
	  for($i=0;$i<count($provider);$i++){
		  echo"<p class='item-1'>";
		  print_r($provider[$i]['feedback']);
		  echo"<br><br>"."-";
		  print_r($provider[$i]['names']);
		  

	  
	  
	  }?>



      

<br><br><br><br><br><br><br><br><br><br>
      <footer >
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img src="imgs/logo.png" alt="#" /><br><br>
                     <p style="margin-top: 3px; font-size: 15px">URBAN AMENITIES platform helps customers book reliable home services like beauty services, massage therapy, cleaning, plumbing, carpentry, appliance repair, painting etc. We offer home maintenance, repair services, home beauty and wellness services. Thereby empowering service providers to showcase their work .</p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Navigation</h4>
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="how.php">How it works !</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Contact Info</h4>
                     <p><strong>Customer Service:</strong></p>
                     <p><img src="imgs/phone_icon.png" alt="#" />+91 7210110121</p>
                     <p><strong>Corporate Office Address:</strong></p>
                     <p><img src="imgs/location.png" alt="#" /> D1, 002 , Natasha Enclave Co-op housing society , NIBM Road , Pune 411048 .</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                     <div class="item">
                     <h4 class="text-uppercase">Follow </h4>
                     <ul>
                        <li><img src="imgs/icon1.jpg"><a href="http://localhost/homeservices/index.html"> Website</a></li>
                        <li><img src="imgs/icon2.jpg"><a href="sarassk21@gmail.com"> Gmail</a></li>
                        <li><img src="imgs/icon3.jpg"><a href="https://www.instagram.com/sara.shaikh.21/"> Instagrm</a></li>
                        <li><img src="imgs/icon4.jpg"><a href="https://www.facebook.com/sara.shaikh.21/"> Facebook</a></li>
                        <li><img src="imgs/icon5.jpg"><a href="www.youtube.in"> Youtube</a></li>
                        <li><img src="imgs/icon6.jpg"><a href="https://www.linkedin.com/in/sara-shaikh/"> LinkedIn</a></li>
                     </ul>
                  </div>

               </div>


            </div>

         </div>
         <div class="copyright text-center">
            <p> URBAN AMENITIES &copy; <?= date("Y") ?> All Rights Reserved.</p>
         </div>
      </footer>

         
      
   </body>

</html>