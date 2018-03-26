<?php
	include('header.php');
	if(isset($_POST['submit'])){
		include('connection.php');
		include('upload.php');
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$department = $_POST['department'];
		$roll = $_POST['roll'];
		$reg = $_POST['reg'];
		$semister = $_POST['semister'];
		$session = $_POST['session'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$blood = $_POST['blood'];
		$sql = "INSERT INTO st_information(fname, lname, department, roll, reg, semister, session, email, gender, blood,photo) VALUES ('$fname', '$lname', '$department', '$roll', '$reg', '$semister', '$session', '$email', '$gender', '$blood','$photo')";

		if($conn->query($sql)===TRUE){
			echo "<div class='alert alert-success'>
			  <strong>Success!</strong> New record created successfully.
			</div>";
		}
		else{
			echo "Error".$sql.$conn->connect_error;
		}
		$conn->close();

	}
include('footer.php');

?>
