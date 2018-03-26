
<?php 
include('header.php'); ?>
	<div style="width:50%; margin: auto;">
		<form action="insert.php" method="POST" enctype="multipart/form-data">
			<h2 style="text-align: center;">Please Insert Your Data</h2>
			<table class="table table-stripped">
				<tr>
					<th>Fast Name:</th>
					<td>
						<input class="form-control" type="text" name="fname">
					</td>
				</tr>
				<tr>
					<th>Last Name:</th>
					<td>
						<input class="form-control" type="text" name="lname">
					</td>
				</tr>
				<tr>
					<th>Department:</th>
					<td>
						<input class="form-control" type="text" name="department">
					</td>
				</tr>
				<tr>
					<th>Roll:</th>
					<td>
						<input class="form-control" type="number" name="roll">
					</td>
				</tr>
				<tr>
					<th>Reg:</th>
					<td>
						<input class="form-control" type="text" name="reg">
					</td>
				</tr>
				<tr>
					<th>Semister:</th>
					<td>
						<input class="form-control" type="text" name="semister">
					</td>
				</tr>
				<tr>
					<th>Session:</th>
					<td>
						<input class="form-control" type="text" name="session">
					</td>
				</tr>
				<tr>
					<th>Email:</th>
					<td>
						<input class="form-control" type="email" name="email">
					</td>
				</tr>
				<tr>
					<th>Gender:</th>
					<td>
						<input type="radio" name="gender" value="Male">Male
						<input type="radio" name="gender" value="Female">Female
					</td>
				</tr>
				<tr>
					<th>Blood:</th>
					<td>
						<input style="width: 50px;" class="form-control" type="text" name="blood">
					</td>
				</tr>
				<tr>
					<th>Photo:</th>
					<td>
						<input class="form-control" type="file" name="fileToUpload">
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" class="btn-sm btn-success" name="submit" value="Submit">
						<input type="reset" class="btn-sm btn-danger" name="cancel" value="Cancel">
					</td>
				</tr>
			</table>
		</form>
	</div>
<?php include('footer.php'); ?>
