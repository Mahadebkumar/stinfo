<?php include('header.php') ?>

	<div style="width:70%; padding-left: 200px; padding-top: 40px;">
		<?php 
				include('connection.php');
				$id = $_GET['id'];
				$sql = "SELECT * FROM st_information WHERE id= '$id'";
				$result = $conn->query($sql); 
				if($result->num_rows >0){
					while($mark = $result->fetch_assoc()){
						?>
		<table class="table table-stripped">
			<h2>Student Result</h2>
			<form action="" method="POST">
				<tr>
					<th>Roll:</th>
					<td><input class="form-control" type="text" name="roll" value="<?php echo $mark['roll']; ?>"></td>
				</tr>
				<tr>
					<th>Semister:</th>
					<td><input class="form-control" type="text" name="semister" value="<?php echo $mark['semister']; ?>"></td>
				</tr>
				<
			</form>
		</table>
		<?php 
				}
			}
		 ?>
	</div>

<?php include('footer.php') ?>