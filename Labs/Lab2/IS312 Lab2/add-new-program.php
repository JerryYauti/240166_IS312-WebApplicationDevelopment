<?php
include 'db.php';
$code = $_POST['pCode'];
$name = $_POST['pName'];
$dept = $_POST['pDept'];

$sql = "INSERT INTO Program (ProgramCode, ProgramName, Department) VALUES ('$code', '$name', '$dept')";
if (mysqli_query($conn, $sql)) {
    echo "New program added successfully! <a href='index.php'>Home</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>