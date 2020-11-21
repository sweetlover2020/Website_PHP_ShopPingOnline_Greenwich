<?php 
  
$conn = ""; 
   
try { 
	$server_host = "localhost";
	$database = 'shoppingonline';
    $username = "bookadmin"; 
    $password = "admin"; 
   
    $conn = new PDO( 
        "mysql:host=$server_host; dbname=shoppingonline", 
        $username, $password
    ); 
      
   $conn->setAttribute(PDO::ATTR_ERRMODE, 
                    PDO::ERRMODE_EXCEPTION); 
} 
catch(PDOException $e) { 
    echo "Connection failed: " . $e->getMessage(); 
} 
  
?> 