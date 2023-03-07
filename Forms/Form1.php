<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>    
  

<h2>Registration Form</h2>  
<span class = "error">* required field </span>  
<br><br>  
<form method="post" action="form2.php">    
    Name:   
    <input type="text" name="name">  
     
    <br><br>  
    E-mail:   
    <input type="text" name="email">  
    
    <br><br>  
    Mobile No:   
    <input type="text" name="mobileno">  
    
    <br><br>  
    Website:   
    <input type="text" name="website">  
    
    <br><br>  
    Gender:  
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other"> Other  
     
    <br><br>  
    Agree to Terms of Service:  
    <input type="checkbox" name="agree">  
    
    <br><br>                            
    <input type="submit" name="submit" value="Submit">   
    <br><br>                             
</form>  
  

  
</body>  
</html>  