<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shipping";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "INSERT INTO products(id, title, company, stock, price) VALUES (1, 'Realme 2', 'Oppo' ,50 ,175)";
	

if ($conn->query($sql) === TRUE) {
    echo "Inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>