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
    
                $sql = "DELETE  FROM providers WHERE id='$id'";
                $isRemoved= $conn->prepare($sql);  
                $isRemoved->execute();  
                if ($isRemoved) {
                    header('Location: managepro.php?msg=success');
                    exit();
                } else {
                    header('Location: managepro.php?msg=failed');
                    exit();
                }

                
            }
            
        
?>