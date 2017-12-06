<?php 
	include 'inc/header.php';

	mysql_connect ("localhost", "root", "");
	mysql_select_db("student");


	// Create connection


	$id= $roll = $stname = $stftname = $stbatch = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    
		$id= ($_POST['id']);
		$roll= ($_POST['roll']);
		$stname= ($_POST['stname']);
		$stftname= ($_POST['stftname']);
		$stbatch= ($_POST['stbatch']);
	}
	mysql_query("UPDATE student_info SET roll ='$roll', Name ='$stname', st_father ='$stftname', st_batch ='$stbatch' WHERE id= $id");




header( 'Location: index.php' ) ;

include 'inc/footer.php'; 
?>