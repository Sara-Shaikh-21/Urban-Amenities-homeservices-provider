<?php  
//define variables to empty values  
$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
$name = $_POST['name'];
$email =$_POST['email'];
$mobileno =$_POST['mobileno'];
$gender = $_POST['gender'];
$website =$_POST['website'];
$agree = $_POST['agree'];

if(true){

if(empty($name)){
    echo"<br>Name is required";
}  
else{
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
        echo"<br>Only alphabets and white space are allowed";  
    }  
}
if(empty($email)){
    echo"<br>Email is required";

}
else
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {  
        echo "<br>Invalid email format";  
    } 
}
if(empty($mobileno)){
    echo"<br>Mobile Number is required";
}
else{
    if (!preg_match ("/^[0-9]*$/", $mobileno) )   
        echo"<br>Only numeric value is allowed.";  
    
    if (strlen ($mobileno) != 10)   
           echo"<br>Mobile no must contain 10 digits.";  
       
}
if(empty($website)){
    echo"<br>Website is required";
}
else{
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))   
        echo "<br>Invalid URL";  
}
if(empty($gender)){
    echo"<br>Gender is required";
}
if(!(isset($agree)))
    echo"<br>PLZ agree to the rules and regualtions";
}

    echo"<br>Your name is : $name";
    echo"<br>Your Website is : $website";
    echo"<br>Your email is : $email";
    echo"<br>Your gender  is : $gender";
    echo"<br>Your mobileno is : $mobileno";


?>
<form>
    <input type="button" value="Go back!" class="button2" onclick="history.back()">
</form>