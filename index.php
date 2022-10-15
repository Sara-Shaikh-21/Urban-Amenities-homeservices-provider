        
        <html>
        <head>
            <link rel="shortcut icon" type="image/png" href="imgs/favicon.png">

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
                    <label for=""><b>City</b></label>
                    <select class="form-control" name="city" id="city">
                        <option value="none">-- Select City --</option>
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>" value="city"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group col-5">
                    <label for=""><b>Who's Required</b> </label>
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
                    <label for=""><b>Action</b></label>
                    <input  id="search"  class="form-control btn btn-success" type="submit" value="Search"></input>
                </div>
                <div class="table-responsive">
                    <table id="providers" class="table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Profession</th>                               
                                <th>Action</th></tr>
                        </thead><tbody>
                            <tr>
                    
                </tr>
            </tbody>
        </table>
        


        <?php
        include "conn.php";
        require_once 'scripts/helpers.php'; 
        if(isset($_POST["city"]) and isset($_POST["profession"])){   
            
            $city = $_POST['city'];
            $profession = $_POST['profession'];
            
                    
            
                $sql = "SELECT photo,name,adder1,adder2,profession FROM providers WHERE city like'$city' AND profession like'$profession'";
                $statement = $conn->prepare($sql);  
                $statement->execute();  
                $providers = $statement->fetchall();

                
                if($providers){
                    foreach($providers as $key) {
                        echo"<div class='table-responsive'>";
                        echo"<table id='providers' class='table'>";
                        //echo "<img src='images/".$row['image']."' >";

                        echo"<tr><td><img style='height: 50px;' src='images/".$key['photo']."'></td>";
                        echo "<td>"."$key[name]</td>"."<td>$key[adder1]"." "."$key[adder2]</td>"."<td>$key[profession]</td>"."<td><a href='contact.php' class='btn btn-primary btn-block'>Book</a></td></tr><br>";
                    }
                }else{
                    echo"NO PROVIDERS FOUND";
                }
            
        }
        ?>

    
        </form>
        </html>
