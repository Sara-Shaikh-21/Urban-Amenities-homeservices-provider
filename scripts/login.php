<?php
include "../conn.php";
require_once 'session.php';
require_once 'helpers.php';

if (isset($_POST['login'])) {
    $contact = test_input($_POST["contact"]);
    $pass =test_input($_POST["password"]);

    //contact number validation
  if (!preg_match ("/^[0-9]*$/", $_POST["contact"])) { 
    echo function_alert("Mobile number should contain only numbers");
    die();
  }
  elseif ((preg_match("/[0-9]/",$_POST["contact"]))!=1 ||$_POST["contact"]=="1234567890"||$_POST["contact"]=="1111111111"||$_POST["contact"]=="0000000000"||$_POST["contact"]=="1122334455"||$_POST["contact"]=="2222222222"||$contact=="3333333333"||$contact=="4444444444"||$contact=="5555555555"||$_POST["contact"]=="6666666666"||$_POST["contact"]=="7777777777"||$_POST["contact"]=="8888888888"||$_POST["contact"]=="9999999999"){
    echo function_alert("Enter valid Mobile number");
    die();
  }
  else{
    $contact =$_POST["contact"];
  }

    if ($contact == "7210110121" && $pass == "admin123") {
        $s = new stdClass();
        $s->name = "admin";
        $_SESSION['user'] = $s;
        header('Location: ../admin.php');
        exit();
    } else {
            
            
            
                $sql = "SELECT * FROM providers WHERE contact = '$contact' AND password = '$pass'";
                $statement = $conn->prepare($sql);  
                $statement->execute();  
                $providers = $statement->fetchAll();
              
                $id=$providers['0']['id'];
                
                if(($providers['0']['contact'] =="$contact") &&  ($providers['0']['password'] == "$pass")) {
                   
                    header("Location: ../provider.php?id=$id");
                    
                    exit();
                    
                }
                else{
                    header('Location: ../invalid.php');
                    exit();
                    

                }

                

                
            }
            
        }
?>
