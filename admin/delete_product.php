<?php
require_once 'connectDB.php';

$conn = connectDB();
if (isset($_GET['id'])) {
    
        $id = $_GET['id'];
        
        $sql = "delete from product where proId = $id";
        
        if (mysqli_query($conn, $sql)) {
            header("Location:select_product.php");
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            exit;
        }
        
        
    }

mysqli_close($conn);
?>