<?php
$user = 'root';
$password = '';
$database = 'barangaywebsite'; 
$servername='localhost';
$conn = mysqli_connect($servername, $user,
                $password, $database);
	
	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>