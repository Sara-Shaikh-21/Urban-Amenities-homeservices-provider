<?php
$cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];

?>
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
                        <a class="nav-link active" href="feed.php">Feedback form</a>
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
                  <h3>Booking Online</h3>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-7">
                  <div class="contact-form">
                     <form method="post" action="">
                      <strong>First Name :</strong>
                        <input type="text" name="fname" placeholder="First Name" required/>
                        <strong>Last Name :</strong>
                        <input type="text" name="lname" placeholder="Last Name" required/>
                        <strong>Email :</strong>
                        <input type="email" name="email" placeholder="Email" required/>
                        <strong>Phone Number :</strong>
                        <input type="text" name="contact" placeholder="Phone Number" minlength="10" maxlength="10" required />
                        <label for=""><strong>City :</label></strong>
                        <select class="form-control" name="city" id="city" required>
                        <?php foreach ($cities as $city) : ?>
                        <option name="city" value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                        </select><br>
                        
                        <label for=""><strong>Address Line :</strong></label>
                        <input id="adder1" name="adder" type="text" class="form-control" placeholder="Enter your address"
                        required><br>
                        <label for=""><strong>Date :</strong></label>
                        <input id="date" name="date" type="date" class="form-control" placeholder="Enter City" required><br>
                        <label for=""><strong>Mode of Payment :</strong></label>
                        <select class="form-control" name="pay" id="pay" required>
                        <option value="Cash" name="pay"> Cash</option>
                        <option value="Online Netbanking" name="pay"> Online Netbanking</option>
                        <option value="Mobile Wallets" name="pay"> Mobile Wallets</option>
                        </select><br>

                        <label><strong>Type of Service :</strong></label>
                        <select class="form-control" name="profession" id="profession" required>
                        <option value="electrician" name="profession">Electrician</option>
                        <option value="plumber" name="profession">Plumber</option>
                        <option value="mobile"name="profession">Mobile Repairer</option>
                        <option value="beautician" name="profession">Beautician</option>
                        <option value="maid" name="profession">Maid</option>
                        <option value="photographer" name="profession">Photographer</option>
                        <option value="carpenter" name="profession">Carpenter</option></select>

                        <br><strong>Special Message :</strong>
                        <input type="text" placeholder="Message" name="query" required>
                        <input type="submit" name="send" value="SEND" >
                     </form>
                  </div>
               </div>
               <div class="col-md-5 text_align_center">
                  <img class="img-responsive" src="imgs/man_cartoon.png" alt="#" />
               </div>
            </div>
         </div>
      </div>
      <?php
      include "conn.php";
  
     include "msg/register.php"; 
     include "scripts/helpers.php"; 
     if (isset($_POST['send'])) {
       
        
      
        //fname validation
        if (!preg_match("/^[a-zA-Z]*$/",$_POST["fname"])) {  
            echo function_alert("Only alphabets and words are allowed in first name");  
            die();
        }else{
            $fname =$_POST["fname"];
        }
        //lname validation
        if (!preg_match("/^[a-zA-Z]*$/",$_POST["lname"])) {  
            echo function_alert("Only alphabets and words are allowed in last name");  
            die();
        }else{
            $lname =$_POST["lname"];
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

        //Address validation
        if (!preg_match("/[A-Za-z0-9\-\\,.]+/",$_POST["adder"])) {  
            echo function_alert("Enter proper or complete address");  
            die();
        }else{
            $adder =$_POST["adder"];
        }

        //DATE validation
        if(isset($_POST["date"])){
          $date=$_POST["date"];
        }else{
          echo function_alert("Enter date ");
          die();
        }

        $payment=$_POST["pay"];
        $profession=$_POST["profession"];
        $city=$_POST["city"];
        $query=$_POST["query"];

       
        $sql="INSERT Into bookings(fname, lname, contact, adder, dates , payment, queries,profession,city ) values('$fname','$lname','$contact','$adder','$date','$payment','$query','$profession','$city')";
        $isProviderCreated=$conn->exec($sql);
        if ($isProviderCreated) {
            echo function_alert("SUCCESSFULLY BOOKED AN APPOINTMENT");
            
        } else {
            echo function_alert("CAN NOT BOOK AN APPOINTMENT AT THE MOMENT , TRY AGAIN");
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