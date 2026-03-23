<?php
include 'db.php';
$sql = "SELECT * FROM Student";
$result = mysqli_query($conn, $sql);
?>
<html>
<body>
    <h2>Student Listing</h2>
    <table border="1">
        <tr><th>StudentNo</th><th>Firstname</th><th>Lastname</th><th>Gender</th><th>ContactNo</th><th>ProgramCode</th></tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['StudentNo']; ?></td>
            <td><?php echo $row['Firstname']; ?></td>
            <td><?php echo $row['Lastname']; ?></td>
            <td><?php echo $row['Gender']; ?></td>
            <td><?php echo $row['ContactNo']; ?></td>
            <td><?php echo $row['ProgramCode']; ?></td>
        </tr>
        <?php } ?>
    </table>
    <br><a href="index.php">Back to Home</a>
</body>
</html>