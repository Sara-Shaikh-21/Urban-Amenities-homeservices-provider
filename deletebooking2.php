<?php

include_once "scripts/helpers.php";
include "conn.php";
if (isset($_GET['id'])) {
    
    $id=$_GET['id'];
    
                $sql = "DELETE  FROM bookings WHERE id='$id'";
                $isRemoved= $conn->prepare($sql);  
                $isRemoved->execute();  
                if ($isRemoved) {
                    header('Location: bookings.php?msg=success');
                    exit();
                } else {
                    header('Location: bookings.php?msg=failed');
                    exit();
                }

                
            }
            
        
?>
