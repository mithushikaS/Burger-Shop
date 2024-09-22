<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Default username for phpMyAdmin
$password = "";     // Default password for phpMyAdmin
$dbname = "Burger"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,'3307');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$burger = $_POST['burger'];

// Insert data into the database
$sql = "INSERT INTO orders (name, email, phone, address, burger) 
        VALUES ('$name', '$email', '$phone', '$address', '$burger')";

if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
