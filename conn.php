<?php 
  
  $servername ="localhost:4306";
  $username ="root";
  $password ="";
  $dbname="services";

try {
  $conn = new PDO("mysql:host=$servername;dbname=services","root","zaki@2108");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
} 
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

?>