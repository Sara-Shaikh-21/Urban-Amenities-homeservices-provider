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

  
  
  $sql="Select * from feedback ;";
  $statement = $conn->prepare($sql);  
  $statement->execute();  
  $feedbacks = $statement->fetchAll();
 




  $conn = null;
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
    <h2 class="text-center"> Feedbacks </h2><br>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Service </th>
                <th>Feedback</th>
                <th>Action</th>
                
            </tr>

            <?php foreach($feedbacks as $feedback):?>
            <tr>
            <td><?php echo $feedback['names']; ?></td>

            

            <td><?php echo $feedback['contact']; ?></td>

            <td>
              <?php echo $feedback['email']; ?>
            </td>

            <td>
              <?php echo $feedback['service']; ?> 
            </td>
                
          
            <td>
              <?php echo $feedback['feedback'] ;?> 
            </td>
            
           

            <td>
            <a class="btn btn-danger" href="deletefeed.php?id=<?php echo $feedback['id'];?>" name="delete">Remove</a>
            </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>


