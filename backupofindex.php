        
        <!DOCTYPE html>
        <html>
        <head>
            <link rel="shortcut icon" type="image/png" href="imgs/favicon.png">
            <?php
        include "conn.php";
        require_once 'scripts/helpers.php'; 
        if(isset($_POST["city"]) and isset($_POST["profession"])){   
            
            $city = $_POST['city'];
            $profession = $_POST['profession'];
            
                    
            
                $sql = "SELECT name,adder1,adder2,profession FROM providers WHERE city like'$city' AND profession like'$profession'";
                $statement = $conn->prepare($sql);  
                $statement->execute();  
                $providers = $statement->fetchall();
            }

                ?>
        <?php

        $cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];
        ?>
        <head>

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

        <h2 class="text-center" style="margin-top: 20px">Home Services</h2>
        <hr>
        <div class="container" style="margin-top:20px; margin-bottom: 60px;">
        

        <form method="post" action="">
        	<div class="row">
                <div class="form-group col-5">
                    <label for="">City</label>
                    <select class="form-control" name="city" id="city">
                        <option value="none">-- Select City --</option>
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>" value="city"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group col-5">
                    <label for="">Who's Required </label>
                    <select class="form-control" name="profession" id="profession">
                        <option value="none" name="profession">-- Select Profession --</option>
                        <option value="electrician" name="profession">Electrician</option>
                        <option value="plumber" name="profession">Plumber</option>
                        <option value="beautician" name="profession">Beautician</option>
                        <option value="maid" name="profession">Maid</option>
                        <option value="mobile" name="profession">Mobile Repairer</option>
                        <option value="photographer" name="profession">Photographer</option>
                        <option value="carpenter" name="profession">Carpenter</option>
                    </select>
                </div>

                <div class="form-group col-2">
                    <label for="">Action</label>
                    <input  id="search"  class="form-control btn btn-success" type="submit" value="Search"></input>
                </div>
                <div class="table-responsive">
                    <table id="providers" class="table">
                        <thead>
                            <tr>
                                
                                <th>Name</th>
                                <th>Address</th>
                                <th>Profession</th>
                                
                                <th>Action</th></tr>
                        </thead><tbody>
                            <tr>
                    
                </tr>
            </tbody>

<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    
    <div class="table-responsive">
        <table class="table">
           
            <!---<pre>
              <?php var_export($bookings); 
              echo $bookings[0]['fname'];?>
            </pre>-->
            <?php for($i=0;$i<count($providers);$i++):?>
            <tr>
            <td><?php echo $providers[$i]['photo']; ?></td>

            
            <td><?php echo $providers[$i]['name'];?></td>

            <td>
            <?php echo $providers[$i]['adder1']." ".$providers[$i]['adder2']; ?>
            </td>
            

            <td>
              <?php echo $providers[$i]['profession']; ?> 
            </td>
                


            <td>
            <a class="btn btn-danger" href="contact.php">Book</a>
            </td>
            </tr>

            
            <?php endfor; ?>
        </table>
    </div>
</div>
        </table>
        



             

    
        </form>
        </html>
