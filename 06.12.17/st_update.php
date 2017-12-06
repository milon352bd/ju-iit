<?php 
    include 'inc/header.php';
    $id = $_GET['id'];

    $roll = $stname = $stftname = $stbatch = "";

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
    $sql = "SELECT * FROM student_info WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
?>
        <form action="st_up_co.php" method="POST">
            <table>
                    <tr>
                        <td name=>Student ID:</td>
                        <td><input name="id" readonly value="<?php echo $row["id"]; ?> "></td>
                    </tr>

                    <tr>
                        <td>Student Roll:</td>
                        <td><input type="text" name="roll" value="<?php echo $row["roll"]; ?>"></td>
                    </tr>

                    <tr>
                        <td>Student Name:</td>
                        <td><input type="text" name="stname" value="<?php echo $row["Name"]; ?>"></td>
                    </tr>

                    <tr>
                        <td>Student Father Name:</td>
                        <td><input type="text" name="stftname" value="<?php echo $row["st_father"]; ?>"></td>
                    </tr>

                    <tr>
                        <td>Student Batch:</td>
                        <td><input type="text" name="stbatch" value="<?php echo $row["st_batch"]; ?>"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="Update">
                    </tr>
                    </table>
            </form>     
<?php
       }
?>
    </table>
<?php
} else {
    echo "0 results";
}
// update quary start..............................................................>>>


$conn->close();
?>
<a class="btn btn-primary" href="index.php">GO Back</a>
<?php include 'inc/footer.php'; ?>