<?php
/*
Author: [Your Name]
Date: 20th March 2026
Unit: IS312 Web Application Development
*/

$conn = new mysqli("localhost", "root", "", "FRU10");

// Retrieve details 
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

echo "<h2>Student Listing</h2>";
echo "<table border='1'>
<tr><th>StudentNo</th><th>Firstname</th><th>Lastname</th><th>Gender</th><th>ContactNo</th><th>ProgramCode</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["StudentNo"]."</td><td>".$row["Firstname"]."</td><td>".$row["Lastname"]."</td><td>".$row["Gender"]."</td><td>".$row["ContactNo"]."</td><td>".$row["ProgramCode"]."</td></tr>";
    }
}
echo "</table>";
$conn->close();
?>