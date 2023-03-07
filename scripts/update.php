<?php

include "../conn.php";
include_once "helpers.php";

if (isset($_POST["update"])) {
  if(isset($_GET['id'])){

      $id=$_GET['id'];

      }

    $input = clean($_POST);

    $name = $input['name'];
    $contact = $input['contact'];
    $descr = $input['descr'];
    $adder1 = $input['adder1'];
    $adder2 = $input['adder2'];
    $city = $input['city'];
    $pass= $input['password'];
    $profession = $input['profession'];

    if($_FILES['photo']){
      $photo = $_FILES['photo'];
      $file2 = upload($photo);
      //echo'hii';
    }else{
       $sql2="SELECT photo from providers where id=$id";
       $statement2=$conn->prepare($sql2);
       $statement2->execute();
       $photoselect=$statement2->fetchAll();
       $file2=$photoselect[0]['photo'];

    }
       
    //echo "Hii";
    

    
      $sql="update providers set name='$name',contact= '$contact',descr='$descr',adder1='$adder1',adder2='$adder2',city='$city',password='$pass',photo='$file2' where id='$id'";
      $statement = $conn->prepare($sql);  
      $executed=$statement->execute();  
      
      if ($executed) {
          echo '<script>alert("Record Updated ")</script>';
          exit();
      } else {
          
          exit();
      }
 }   

 

