<?php
 include "conn.php";
$cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];
if(isset($_GET["id"])){
  $id=$_GET["id"];
  //echo "<pre>";
  //print_r($id);
  //echo "</pre>";
 
    $sql = "SELECT * FROM providers WHERE id='$id'";
    $statement = $conn->prepare($sql);  
    $statement->execute();  
    $provider = $statement->fetchAll();

    //$sql2="SELECT photo from providers where id=$id";
    //$query = $conn->prepare($sql2);
    //$query->execute(array(':id' => $id));

    //$query->bindColumn(1, $photo, PDO::PARAM_LOB);
    //$query->fetch(PDO::FETCH_BOUND);
    //header("Content-Type: image");
    //echo $photo;
    

 

 //echo "<pre>";
//var_export($provider);
//echo "</pre>";

}?>
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



<?php
$photo=$provider[0]['photo'];

// echo '<img src="data:image;base64,'.base64_encode($provider[0]['photo']).'>';
//($provider[0]['photo']);

?>



     <div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center">Update Your details</h3>
            </div>
            <hr>

            <form action="scripts/update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input  id="name" value="<?php echo $provider[0]['name'] ?>" name="name" type="text" class="form-control"  required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input  value="<?php echo $provider[0]['contact'] ?>"
                        id="contact" name="contact" type="text" class="form-control" placeholder="Contact"
                        minlength="10" maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Address Line 1</label>
                    <input value="<?php echo $provider[0]['adder1'] ?>"
                        id="adder1" name="adder1" type="text" class="form-control" placeholder="Enter Address line-1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Address
                        Line 2</label>
                    <input value="<?php echo $provider[0]['adder2']; ?>"
                        id="adder2" name="adder2" type="text" class="form-control" placeholder="Enter Address line-2"
                        required>
                </div>

                 <label for="">City :</label>
                    <select class="form-control" name="city" id="city" required>
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select><br>
                

                 <div class="form-group">
                    <div class="row">
                        <div class="col-2 text-center">
                            <img style=" height: 100px;"
                                src="images/<?php echo $photo; ?>">
                            <div class="text-center">Old Photo</div>
                        </div>
                        <div class="col">
                            <label for="">New Photo</label>
                            <input id="photo" name="photo" type="file" class="form-control-file"
                                placeholder="Select Photo ">
                        </div>
                    </div>
                </div>
                <div class="form-group" style="margin-top: 15px;">
                    <label for="">Description</label>
                    <input type="text" name="descr" value="<?php echo $provider[0]['descr'] ?>" id="descr" class="form-control" required>
                      
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input  value="<?php echo $provider[0]['password'] ?>"   name="password" type="password" class="form-control"
                        placeholder="Enter 6 Charectar Password" minlength="4" required>
                </div>

                <div class="form-group">
                    <label for="">Profession</label>
                    <select class="form-control" name="profession" id="profession">
                        <option value="electrician">Electrician</option>
                        <option value="plumber">Plumber</option>
                        <option value="mobile">Mobile Repairer</option>
                        <option value="beautician" name="profession">Beautician</option>
                        <option value="maid" name="profession">Maid</option>
                        <option value="photographer" name="profession">Photographer</option>
                        <option value="carpenter" name="profession">Carpenter</option></select>
                    </select>
                </div>

                <button style="margin-top: 20px;" class="btn btn-success btn-block" type="submit" name="update"
                    id="register">Update</button>
            </form>

        </div>
    </div>
</div>

