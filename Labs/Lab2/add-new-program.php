<?php
/*
Author: Jerry Yauti
Date: 20th March 2026
Unit: IS312 Web Application Development
*/

// Retrieve and store details 
$p_code = $_POST['p_code'];
$p_name = $_POST['p_name'];

// Connect to database
$conn = new mysqli("localhost", "root", "", "FRU10");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert into Program table 
$sql = "INSERT INTO Program (ProgramCode, ProgramName) VALUES ('$p_code', '$p_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully! [cite: 24]";
} else {
    echo "Error adding record. [cite: 24]";
}

$conn->close();
?>