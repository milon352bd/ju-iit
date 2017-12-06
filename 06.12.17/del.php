<?php 
include 'inc/header.php';
include "inc/config.php";
$id = $_GET['id'];


$sql = "DELETE FROM student_info WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record Delect successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "<p><a href='index.php'>Go Back</a>";

include 'inc/footer.php';
?>
