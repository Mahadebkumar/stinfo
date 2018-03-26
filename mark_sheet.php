<? include('header.php') ?>


<table class="table table-hover">
		<h2 style="text-align: center;">Show of students result</h2><br>
		<thead>
			<tr style="font-size: 24px;">
				<th>Roll</th>
				<th>CGPA</th>
				<th>Grade</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				include('connection.php');

				$sql = "SELECT * FROM result as r INNER JOIN st_information as st ON r.roll = st.roll";

				$result = $conn->query($sql); 
				if($result->num_rows >0){
					while($mark = $result->fetch_assoc()){

						echo "<tr>";
							echo "<td>".$mark['fname']." ".$mark['lname']."</td>";
							echo "<td>".$mark['roll']."</td>";
							echo "<td>".$mark['semister']."</td>";
							echo "<td>".$mark['gpa']."</td>";
							echo "<td><a href='mark_update.php?id=".$mark['roll']."' class='btn-sm btn-success'>Update</a></td>";
						echo "</tr>";
					}
				}
			?>
		</tbody>
	</table>


<? include('footer.php') ?>