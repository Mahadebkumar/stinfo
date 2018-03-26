<?php

	if(isset($_POST['submit'])){

		include('connection.php');
		include('upload.php');
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$department=$_POST['department'];
		$roll=$_POST['roll'];
		$reg=$_POST['reg'];
		$semister=$_POST['semister'];
		$session=$_POST['session'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$blood=$_POST['blood'];
		$id=$_POST['id'];

		$sql = "UPDATE st_information SET fname='$fname',lname='$lname',department='$department',roll='$roll',reg='$reg',semister='$semister',session='$session',email='$email',gender='$gender',blood='$blood',photo='$photo' WHERE id='$id'";

		if ($conn->query($sql) === TRUE) {
			header('location:show.php');
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->connect_error;
		}

		$conn->close();
	}

?>