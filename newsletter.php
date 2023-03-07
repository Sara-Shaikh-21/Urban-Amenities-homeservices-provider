<?php 
include "conn.php";
require "scripts/helpers.php";

if(isset($_POST['subscribe'])){

	if(!empty($_POST["name"])and !empty($_POST["email"])){
			if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {  
    echo function_alert("Invalid email format");  
    }else{
    $email =$_POST["email"];
    }
   //name validation
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {  
    	echo function_alert("Only alphabets and white space are allowed in name");  
    }else{
    $name =$_POST["name"];
    }
  $sql="INSERT into newsletter (name,email) values ('$name','$email')";
  $subscribed=$conn->exec($sql);
  if($subscribed){
  	function_alert("NEWSLETTER SUBSCRIBED SUCCESSFULLY");
  	header('Location: index.html');
  }
  }
	mail($email,'Newsletter Subscription',"HELLO $name, I AM SARA, from URBAN AMENITIES ,Thanks for subscribing to our newsletter.",'From: sarasaeedshaikh21@gmail.com');
}
?>
