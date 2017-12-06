<?php 
	include 'inc/header.php';

	$roll = $stname = $stftname = $stbatch = "";
	$rollerr = $stnameerr = $stftnameerr = $stbatchwrr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    
		$roll= ($_POST['roll']);
		$stname= ($_POST['stname']);
		$stftname= ($_POST['stftname']);
		$stbatch= ($_POST['stbatch']);
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 

	// conction complect 
	$sql = "SELECT * FROM student_info";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
?>
		<table class="table table-striped">
			<tr>
				<th>id</th>
				<th>Roll</th>
				<th>Student Name</th>
				<th>Father Name</th>
				<th>Student Batch</th>
				<th>Edit</th>
				<th>Update</th>
			</tr>
<?php
	    while($row = $result->fetch_assoc()) {
?>
		<tr>
			<td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["roll"]; ?></td>
			<td><?php echo $row["Name"]; ?></td>
			<td><?php echo $row["st_father"]; ?></td>
			<td><?php echo $row["st_batch"]; ?></td>
			<td><a href="st_update.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
			<td><a href="del.php?id=<?php echo $row["id"]; ?>">Delect</a></td>
		</tr>
<?php
	   }
?>
    </table>
<?php
} else {
    echo "0 results";
}
$conn->close();
?>
<a class="btn btn-primary" href="index.php">GO Back</a>
<?php include 'inc/footer.php'; ?>