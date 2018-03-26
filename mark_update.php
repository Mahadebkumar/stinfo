<?php include('header.php'); ?>
	
	<?php include('connection.php');
		$id = $_GET['id'];
		$sql = "SELECT * FROM result WHERE roll = '$id'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			while($gpa = $result->fetch_assoc()){
			?>
				<div style="width: 30%; margin: auto;">
					<form action="mark_updated.php" method="POST">
					<h2 style="text-align: center; margin-top: 50px;">Result update here</h2><br>
						<table class="table table-stripped">
							<tr>
								<th>Roll:</th>
								<td><input class="form-control" type="number" name="roll" value="<?php echo $gpa['roll']; ?>"></td>
							</tr>
							<tr>
								<th>Gpa:</th>
								<td><input class="form-control" type="text" name="gpa" value="<?php echo $gpa['gpa']; ?>"></td>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<td><input class="btn btn-primary" type="submit" name="submit" value="Submit" placeholder=""></td>
							</tr>
						</table>
					</form>
				</div>
	<?php 			
			}
		}
	?>

	
<?php include('footer.php'); ?>