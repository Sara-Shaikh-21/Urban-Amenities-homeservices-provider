<?php
 

include "../conn.php";
require_once 'session.php';

require_once 'helpers.php';

if (isset($_POST['register'])) {

  $servername ="localhost";
  $username ="root";
  
  $dbname="services";



  //name validation
  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {  
    echo function_alert("Only alphabets and white space are allowed in name");  
    die();
  }else{
    $name =$_POST["name"];
  }

  //Email validation
  if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
    echo function_alert("Invalid email format");  
    die();
  }else{
    $email =$_POST["email"];
  }

  //contact number validation
  if (!preg_match ("/^[0-9]*$/", $_POST["contact"])) { 
    echo function_alert("Mobile number should contain only numbers");
    die();
  }
  elseif ((preg_match("/[0-9]/",$_POST["contact"]))!=1 ||$_POST["contact"]=="1234567890"||$_POST["contact"]=="1111111111"||$_POST["contact"]=="0000000000"||$_POST["contact"]=="1122334455"||$_POST["contact"]=="2222222222"||$phone_number=="3333333333"||$phone_number=="4444444444"||$phone_number=="5555555555"||$_POST["contact"]=="6666666666"||$_POST["contact"]=="7777777777"||$_POST["contact"]=="8888888888"||$_POST["contact"]=="9999999999"){
    echo function_alert("Enter valid Mobile number");
    die();
  }
  else{
    $contact =$_POST["contact"];
  }

  //password validation
  $pass=$_POST["password"];
    
    if (strlen($pass) <= '8') {
      echo function_alert("<br>Your Password Must Contain At Least 8 Characters!");
      die();
    }
    elseif(!preg_match("#[0-9]+#",$pass)) {
      echo function_alert("<br>Your Password Must Contain At Least 1 Number!");
      die();
    }
    elseif(!preg_match("#[A-Z]+#",$pass)) {
      echo function_alert("<br>Your Password Must Contain At Least 1 Capital Letter!")  ;
      die();
    }
    elseif(!preg_match("#[a-z]+#",$pass)) {
      echo  function_alert("<br>Your Password Must Contain At Least 1 Lowercase Letter!");
      die();
    }
    elseif(empty($pass)) {
      echo function_alert("<br>Please Check You have Entered Or Confirmed Your Password!");
      die();
    }
    else {
      $password = $_POST["password"];
    }
  
  $add1 = $_POST["adder1"];
  $add2 = $_POST["adder2"];
  $city = $_POST["city"];
  $desc = $_POST["descr"];
 
  $profession = $_POST["profession"];
  $gender=$_POST["gender"];
  $photo = $_FILES["photo"];
  $file1 = upload($photo);


  
  
  $sql="INSERT Into providers(name,email,contact ,adder1,adder2,city,photo,descr,gender,password,profession) values('$name', '$email','$contact','$add1','$add2', '$city','$file1','$desc','$gender','$pass','$profession')";
  $isProviderCreated=$conn->exec($sql);
  
  if ($isProviderCreated) {
    echo "<br>New record created successfully";
    header('Location: ../register.php?msg=success');
  } else {
   unlink('../storage/'.$file1);
   header('Location: ../register.php?msg=failed');
  }
} 


 


?>
