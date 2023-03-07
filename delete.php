<?php
include "conn.php";

if(isset($_GET["id"])){
      $id=$_GET["id"];
      }
if (isset($_POST['delete'])) {
  
    $pass =$_POST["password"];
    
    
    

      $sql = "SELECT * FROM providers WHERE password = '$pass'";
      $statement = $conn->prepare($sql);  
      $statement->execute();  
      $providers = $statement->fetchAll();
      
      if(($providers[0]["password"]=="$pass")){
        $sql="delete from providers where password='$pass'";
        $statement = $conn->prepare($sql);  
        $condition=$statement->execute();
        if($condition){
           echo '<script>alert("Account deleted")</script>';
           header("Location: login.php");
        }
      }
      else{
        echo '<script>alert("Error in deleting your account ");</script>';
      }

            }
        
        
?>
<!doctype html>
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
                        <a class="nav-link" href="bookings.php?id=<?php echo $id?>">My Bookings</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="provider.php?id=<?php echo $id?>">Update Profile</a>
                     </li> 
                     <li class="nav-item">
                        <a class="nav-link active" href="reset.php?id=<?php echo $id?>">Reset Password</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="delete.php?id=<?php echo $id?>">Delete account</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Log Out</a>
                     </li>
                     
                     
                    
                  </ul>
               </div>
            </div>
         </nav>
      </div>
<div class="container" style="margin-top: 50px; width: 450px;">
    <div class="card">
       
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Delete your Account</h3>
            </div>
            <hr>
            <div class="contact-form">
            <form action=" " method="post">
                    <label for=""><strong>Enter Password : </strong></label>
                    <input  name="password" class="form-control" placeholder="Enter password for confirmation." type="password" required><br><br>
                    <input type="submit" name="delete" value="Delete Account" class="btn btn-block btn-primary">
                    
                </div>
            </form>
            

        </div>
    </div>
</div>





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
            <p> URBAN AMENTIES &copy; <?= date("Y") ?> All Rights Reserved.</p>
         </div>
      </footer>

