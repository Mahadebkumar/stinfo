<?php
		include('connection.php');
		if(isset($_POST['submit'])){
			$roll = $_POST['roll'];
			$gpa = $_POST['gpa'];
			$sql = "UPDATE result SET roll='$roll',gpa='$gpa' WHERE id='$id'";
			if ($conn->query($sql) === TRUE) {
				header('location:mark_show.php');
			}
			else {
			    echo "Error: " . $sql . "<br>" . $conn->connect_error;
			}

			$conn->close();
		}
?>