<!doctype html>
<html>
<div class="table-responsive">
        <table id="providers" class="table">
            <thead>
                <tr>
                    
                    <th>Name</th>
                    <th>Address</th>
                    <th>Profession</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan='5'>Select city and profession..</td>
                </tr>
            </tbody>
        </table>
    </div>
<?php

require_once 'helpers.php';    
    
    $city = $_POST['city'];
    $profession = $_POST['profession'];
    $servername ="localhost";
    $username ="root";
    $password ="sarasaeed";
    $dbname="services";
            
    try {
        $conn = new PDO('mysql:host=localhost;dbname=services; charset=utf8','root','sarasaeed');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM providers WHERE city like'$city' AND profession like'$profession'";
        $statement = $conn->prepare($sql);  
        $statement->execute();  
        $providers = $statement->fetchall();
        if($providers){
            foreach($providers as $key) {
                
                echo '<div class="table-responsive">';
                echo '<tr>';
                echo '<td>$key["names"]</td>'.'<td>$key->adder1</td>'.'<td>$key->profession</td'.'<td>Book<a href="booking.php?provider=></td>"';
            }
        }else{
            echo"NO PROVIDERS FOUND";
        }
    }catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
                $conn = null;
    }




?>

</html>
    
