<?php
include('connection.php');
$id=$_GET['id'];

$sql="DELETE FROM st_information WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-danger'>
    <strong>Success!</strong> Data has been deleted.
	</div>";
	header('location:show.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
