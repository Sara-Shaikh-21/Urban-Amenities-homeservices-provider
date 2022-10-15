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
  $servername ="localhost";
  $username ="root";
  $password ="sarasaeed";
  $dbname="services";

   

    if (!check("admin")) {
        header('Location: logout.php');
        exit();
    }

   
  
  $sql="SELECT * FROM bookings";
  $statement = $conn->prepare($sql);  
  $statement->execute();  
  $bookings = $statement->fetchAll();
 



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
    <h2 class="text-center"> All Bookings </h2>
    <div class="table-responsive"><br>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Date</th>
                <th>Payment Method</th>
                <th>Queries</th>
                
                <th>Action</th>
                <th>Complete Details</th>
            </tr>
            <!---<pre>
              <?php var_export($bookings); 
              echo $bookings[0]['fname'];?>
            </pre>-->
            <?php for($i=0;$i<count($bookings);$i++):?>

            
            <tr>
            <td><?php echo $bookings[$i]['fname']." " ; 
            echo $bookings[$i]['lname']; ?></td>

            

            <td><?php echo $bookings[$i]['contact']; ?></td>

            <td>
              <?php echo $bookings[$i]['adder']; ?>
            </td>

            <td>
              <?php echo $bookings[$i]['dates']; ?> 
            </td>
                
            <td>
              <?php echo $bookings[$i]['payment']; ?>
            </td>

            <td>
              <?php echo $bookings[$i]['queries'] ;?> 
            </td>
            
            

            <td>
            <a class="btn btn-danger" href="deletebooking.php?id=<?php echo $bookings[0]['id'];?>">Remove</a>
            </td>

            <td>
            <a class="btn btn-danger" href="pdf.php?id=<?php echo $bookings[0]['id'];?>">View</a>
            </td>

            </tr>

            
            <?php endfor; ?>
        </table>
    </div>
</div>


