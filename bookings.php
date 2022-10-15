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
include "scripts/helpers.php";
    include "conn.php";

    
      $id=$_GET['id'];
    
      $sql1="SELECT city,profession from providers where id=$id";
      $statement1=$conn->prepare($sql1);
      $statement1->execute(); 
      $answers=$statement1->fetchAll();
      
      $city=$answers[0]["city"];
      $profession=$answers[0]["profession"];
          
        $sql2="SELECT * FROM bookings  where city = '$city' and profession = '$profession'  ORDER BY dates DESC";
        $statement2 = $conn->prepare($sql2);  
        $statement2->execute();  
        $bookings = $statement2->fetchAll();
        if(empty($bookings)){
          function_alert("NO BOOKINGS ARE ALLOTED TO YOU !");

        }
        //echo "<pre>Hiiii";
        //echo print_r($bookings);
        //echo "</pre>";
        //die;
    
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

<div class="container" style="margin-top: 30px; margin-bottom: 60px;">
    <h2 class="text-center"> My Bookings </h2><br>
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Date</th>
                <th>Payment Method</th>
                <th>Queries</th>
                <th>Action</th>
                <th>Download</th>
            </tr>
            <!---<pre>
              <?php var_export($bookings); 
              echo $bookings[0]['fname'];?>
            </pre>-->
            <?php for($i=0;$i<count($bookings);$i++):?>

            <tr>
            <td><?php echo $bookings[$i]['fname']." "; 
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
            <a class="btn btn-danger" href="deletebooking2.php?id=<?php echo $bookings[0]['id'] ;?>">Remove</a>
            </td>

            <td>
            <a class="btn btn-danger" href="makepdf.php?name=<?php echo $bookings[0]['fname'] ;?>">Details</a>
            </td>           
            </tr>
            <?php endfor; ?>
        </table>
    </div>
</div>

</html>
