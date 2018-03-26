<?php include('header.php'); ?>

	<table class="table table-responsive">
		<h2 style="text-align: center;">Show of students result</h2><br>
		<thead>
			<tr style="font-size: 24px;">
				<th>Roll</th>
				<th>Semister</th>
				<th>Sub1</th>
				<th>Sub2</th>
				<th>Sub3</th>
				<th>Sub4</th>
				<th>Sub5</th>
				<th>Sub6</th>
				<th>GPA</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include('connection.php');

				$sql = "SELECT * FROM result";
				$result = $conn->query($sql); 
				if($result->num_rows >0){
					//$sum = 0;
					while($mark = $result->fetch_assoc()){

						echo "<tr>";
							echo "<td>".$mark['roll']."</td>";
							echo "<td>".$mark['semister']."</td>";
							echo "<td>".$mark['sub1']."</td>";
							echo "<td>".$mark['sub2']."</td>";
							echo "<td>".$mark['sub3']."</td>";
							echo "<td>".$mark['sub4']."</td>";
							echo "<td>".$mark['sub5']."</td>";
							echo "<td>".$mark['sub6']."</td>";
							echo "<td>".$mark['gpa']."</td>";
							echo "<td><a href='mark_delete.php?id=".$mark['id']."' class='btn-sm btn-danger'>Delete</a>|<a href='mark_update.php?id=".$mark['roll']."' class='btn-sm btn-success'>Update</a></td>";
						echo "</tr>";
						//$a = $mark['gpa'];
						//$sum =$sum+$a;

					}
					
				}
				
			?>
		</tbody>
	</table>




<?php include('footer.php'); ?>