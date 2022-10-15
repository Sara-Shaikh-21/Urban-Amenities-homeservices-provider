
<!DOCTYPE HTML>  
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

<?php
$cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];
?>
<?php include_once "msg/register.php"; ?>
<?php include_once "scripts/helpers.php"; ?>

 
<div class="container" style="margin-top: 30px; max-width: 800px;margin-bottom: 60px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Register as Service Provider</h3>
            </div>
            <hr>


            <form action="scripts/register.php" method="post" name="register" id="register" enctype="multipart/form-data">
                <div class="contact-form">
                    <label for=""><strong>Full Name :</strong></label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                    <br>
            

               
                    <label for=""><strong>Email :</strong></label>
                    <input id="contact" name="email" type="text" class="form-control" placeholder="Enter Proper Email" maxlength="50" required>
                    <br>
                     
                
                
               
                    <label for=""><strong>Contact No :</strong></label>
                    <input id="contact"oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Contact Number" minlength="10"
                        maxlength="10" required>
                        <br>
                       
                      <input type="button" name="register" value="GET OTP" class="btn btn-block btn-primary">  
            

                
                    <label for=""><strong>Address Line 1 :</strong></label>
                    <input id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Adder1"
                        required><br>

                

                
                    <label for=""><strong>Address Line 2 :</strong></label>
                    <input id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Adder2 "
                        required><br>
              

                
                    <label for=""><strong>City :</label></strong>
                    <select class="form-control" name="city" id="city" required>
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select><br>
                

                
                    <label for=""><strong>Photo(Square Size) :</label></strong>
                    <input id="photo" name="photo" type="file" class="form-control-file" placeholder="Select Photo 1"
                        required><br>
                

                
                    <label for=""><strong>Add Description</label></strong>
                    <textarea name="descr" id="descr" class="form-control" cols="30" rows="5"
                        placeholder="Tell something about yourself..." required></textarea>
                    <br>

                
                    <label for="" required><strong>Gender :</strong></label><br>
                    <input type="radio" name="gender" value="male" > Male<br> 
                    <input type="radio"  name="gender" value="female" > Female<br> 
                    <input type="radio"  name="gender" value="other" > Other<br>
                    <br>                     
                


                
                    <label for=""><strong>Password :</label></strong>
                    
                    <ul style="list-style-type: square;">For a strong password :-
                      <li>1. Use atleast one lowercase letter</li>
                      <li>2. Use atleast one number</li>
                      <li>3. Use atleast one capital letter</li>
                    </ul>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Set a Password" minlength="8" required>
                    <br>
                    
   

                
                    <label for=""><strong>Profession :</strong></label>
                    <select class="form-control" name="profession" id="profession" required>
                        <option value="electrician" name="profession">Electrician</option>
                        <option value="plumber" name="profession">Plumber</option>
                        <option value="mobile" name="profession">Mobile Repairer</option>
                        <option value="beautician" name="profession">Beautician</option>
                        <option value="maid" name="profession">Maid</option>
                        <option value="photographer" name="profession">Photographer</option>
                        <option value="carpenter" name="profession">Carpenter</option></select>
                <br>

                <input type="submit" name="register" value="REGISTER" class="btn btn-block btn-primary">
                </div>

            </form>

        </div>
    </div>
</div>

s
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
            <p> URBAN AMENTIES &copy; <?= date("Y") ?>All Rights Reserved.</p>
         </div>
      </footer>
      </html>