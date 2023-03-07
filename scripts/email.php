
<!DOCTYPE html>
<html>
   <head>
    <link rel="shortcut icon" type="image/png" href="imgs/favicon.png">


      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>EMAIL CHECKER</title>
      
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
               
      
      
                  <div class="contact-form">
                     <form method="post" action="">
                      
                        <strong>Email :</strong>
                        <input type="email" name="email" placeholder="Email" required/>
                        
                        <input type="submit" name="check" value="CHECK THIS EMAIL" >
                     </form>
                  </div>
               </div>
              
         <?php
      
     
        //Email validation
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
            echo function_alert("Invalid email format");  
            die();
        }else{
            $email =$_POST["email"];
        }
        
        $query=$_POST["query"];

       
       
    
