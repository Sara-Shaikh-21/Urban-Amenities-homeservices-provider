<?php

include_once "scripts/checklogin.php";
include_once "scripts/helpers.php";
include "conn.php";

if (!check("admin")) {
    header('Location: logout.php');
    exit();
}
if (isset($_GET['id'])) {
    
    $id=$_GET['id'];
    
                $sql = "DELETE  FROM bookings WHERE id='$id'";
                $isRemoved= $conn->prepare($sql);  
                $isRemoved->execute();  
                if ($isRemoved) {
                    header('Location: managebook.php?msg=success');
                    exit();
                } else {
                    header('Location: managebook.php?msg=failed');
                    exit();
                }

                
            }
            
        
?>
