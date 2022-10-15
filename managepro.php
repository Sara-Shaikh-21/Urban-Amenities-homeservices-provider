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
<?php
    include_once "scripts/checklogin.php";
     include "conn.php";
 

   

    if (!check("admin")) {
        header('Location: logout.php');
        exit();
    }

   
  $sql="SELECT * FROM providers;";
  $statement = $conn->prepare($sql);  
  $statement->execute();  
  $providers = $statement->fetchAll();
 
 



 include_once "msg/admin.php";
   
?>
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
                        <a class="nav-link" href="managefeed.php">Manage Feedbacks</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="managebook.php">All Bookings</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="admin.php">Alloted bookings</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="managepro.php">Manage providers</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Log Out</a>
                     </li>
                     
                     
                    
                  </ul>
               </div>
            </div>
         </nav>
      </div>
<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h2 class="text-center"> Providers </h2><br>
    <div class="table-responsive">
        <table class="table">
            <tr>
              <th>Photo</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>City</th>
                <th>Profession</th>
                <th>Action</th>
            </tr>

            <?php foreach($providers as $provider):?>
            <tr>

              <td><img style=" height: 100px;" src="images/<?php echo  $provider['photo'] ?>"/></td>

            <td><?php echo $provider['name']; ?></td>

            

            <td><?php echo $provider['contact']; ?></td>

            <td>
              <?php echo $provider['adder1'];echo " ".$provider['adder2']; ?>
            </td>

            <td>
              <?php echo $provider['city']; ?> 
            </td>
                
            <td>
              <?php echo $provider['profession']; ?>
            </td>

            <td>
            <a class="btn btn-danger" href="deleteprovider.php?id=<?php echo $provider['id'];?>">Remove</a>
            </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>


