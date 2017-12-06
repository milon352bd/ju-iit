<?php include 'inc/header.php'; ?>
<form action="entry.php" method="POST">
	<table>
			<tr>
			<td>Student Roll:</td>
			<td><input type="text" name="roll" required="1"></td>
		</tr>

		<tr>
			<td>Student Name:</td>
			<td><input type="text" name="stname" required="1"></td>
		</tr>

			<tr>
			<td>Student Father Name:</td>
			<td><input type="text" name="stftname" required="1"></td>
		</tr>

		<tr>
			<td>Student Batch:</td>
			<td><input type="text" name="stbatch" required="1"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="Submit">
				<input type="reset" value="Reset"></td>
			</tr>
		
	</table>
</form>		

<?php include 'inc/footer.php'; ?>