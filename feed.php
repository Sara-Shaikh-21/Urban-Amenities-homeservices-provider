<!DOCTYPE html>
<html>
   <head>
    <link rel="shortcut icon" type="image/png" href="imgs/favicon.png">


      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>URBAN AMENITIES</title>
      <link rel="stylesheet" href="cssmain/bootstrap.min.css">
      <link rel="stylesheet" href="cssmain/style.css">
      <link rel="stylesheet" href="cssmain/fontawesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
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
                        <a class="nav-link active" href="login_admin.php">Admin Login Form</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      
      
     
      
      <div id="contact" class="hiw_section layout_padding" style="background: #eeefef;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3>Feedback Form</h3>
                  <h4>This form is for betterment of our services</h4>
               </div>

               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="contact-form">
                     <form method="post" action=" " >
                      <strong>Name :</strong>
                        <input type="text" name="name" placeholder="Enter Full Name" required/>
                        <strong>Email :</strong>
                        <input type="email" name="email" placeholder="Enter Email with which you registered " required/>
                        <strong>Phone Number :</strong>
                        <input type="text" name="contact" placeholder="Enter Phone Number with which you registered  " minlength="10" maxlength="10" required />
                        <label><strong>Type of Service :</strong> (About which you want to give feedback)</label>

                        <select class="form-control" name="profession" id="profession" required>
                       
                        <option value="electrician" name="profession">Electrician</option>
                        <option value="plumber" name="profession">Plumber</option>
                        <option value="mobile"name="profession">Mobile Repairer</option>
                        <option value="beautician" name="profession">Beautician</option>
                        <option value="maid" name="profession">Maid</option>
                        <option value="photographer" name="profession">Photographer</option>
                        <option value="carpenter" name="profession">Carpenter</option></select>
                        <br><strong>Your valuable feedback :</strong>
                        <input type="text" placeholder="Message" name="message" required>
                        <input type="submit" name="send" value="SEND" >
                     </form>
                  </div>
                   </div>
              
               <div class="col-md-5 text_align_center">
                  <img class="img-responsive" src="imgs/feed.jpg" alt="#"  />
               </div>
            </div>

         </div>
       </div>
       
       <?php
       include "conn.php";
    function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');</script>"; 
    }
       if (isset($_POST['send'])) {
        $servername ="localhost";
        $username ="root";
        $password ="sarasaeed";
        $dbname="services";
        $message=$_POST["message"];
        $profession=$_POST["profession"];
        //name validation
        if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {  
            echo function_alert("Only alphabets and white space are allowed in name");  
            die();
        }else{
            $name =$_POST["name"];
        }
        //Email validation
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
            echo function_alert("Invalid email format");  
            die();
        }else{
            $email =$_POST["email"];
        }
        //contact number validation
        if (!preg_match ("/^[0-9]*$/", $_POST["contact"]) ) { 
            echo function_alert("Mobile number should contain only numbers");
            die();
        }else{
            $contact =$_POST["contact"];
        }
        
       
        $sql="INSERT Into feedback(names,email,contact,service,feedback) values('$name', '$email','$contact','$profession','$message')";
        $isProviderCreated=$conn->exec($sql);
        if ($isProviderCreated) {
            echo function_alert("Your Feedback is really appreciated");
        } else {
            echo function_alert("TRY AGAIN");
        }
    }
 
?>
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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="feed.php">Feedback</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Contact Info</h4>
                     <p><strong>Corporate Office Address:</strong></p>
                     <p><img src="imgs/phone_icon.png" alt="#" />+91 7210110121</p>
                     <p><strong>Customer Service:</strong></p>
                     <p><img src="imgs/location.png" alt="#" /> NIBM Road , Pune 411048 .</p>
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
            <p> URBAN AMENTIES &copy; <?= date("Y") ?>All Rights Reserved.</p>
         </div>
      </footer>


      <script src="jsmain/jquery-3.3.1.min.js"></script>
      <script src="jsmain/bootstrap.min.js"></script>
      <script>
         $(function () {
             
             'use strict';
             
             var winH = $(window).height();
             
             $('header').height(winH);  
             
             $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
             
             $('.navbar ul li a.search').on('click', function (e) {
                 e.preventDefault();
             });
             $('.navbar a.search').on('click', function () {
                 $('.navbar form').fadeToggle();
             });
             
             $('.navbar ul.navbar-nav li a').on('click', function (e) {
                 
                 var getAttr = $(this).attr('href');
                 
             });
         })
      </script>

   </body>
   
</html>