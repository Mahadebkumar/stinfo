<?php include('header.php'); ?>

<?php
	include('connection.php');

	class st_result{
		public function Sub1($mark1){
			if($mark1>=80 && $mark1<=100){
				return 5;
				}
				elseif($mark1>=70 && $mark1<=79){
					return 4;
				}
				elseif($mark1>=60 && $mark1<=69){
					return 3.5;
				}
				elseif($mark1>=50 && $mark1<=59){
					return 3;
				}
				elseif($mark1>=40 && $mark1<=49){
					return 2;
				}
				elseif($mark1>=00 && $mark1<=39){
					return "0";
				}
			else{
				return "Your value is unable.Please try again...";
			}
		}

		public function Sub2($mark2){
			if($mark2>=80 && $mark2<=100){
				return 5;
				}
				elseif($mark2>=70 && $mark2<=79){
					return 4;
				}
				elseif($mark2>=60 && $mark2<=69){
					return 3.5;
				}
				elseif($mark2>=50 && $mark2<=59){
					return 3;
				}
				elseif($mark2>=40 && $mark2<=49){
					return 2;
				}
				elseif($mark2>=00 && $mark2<=39){
					return "0";
				}
			else{
				return "Your value is unable.Please try again...";
			}
		}

		public function Sub3($mark3){
			if($mark3>=80 && $mark3<=100){
				return 5;
				}
				elseif($mark3>=70 && $mark3<=79){
					return 4;
				}
				elseif($mark3>=60 && $mark3<=69){
					return 3.5;
				}
				elseif($mark3>=50 && $mark3<=59){
					return 3;
				}
				elseif($mark3>=40 && $mark3<=49){
					return 2;
				}
				elseif($mark3>=00 && $mark3<=39){
					return "0";
				}
			else{
				return "Your value is unable.Please try again...";
			}
		}

		public function Sub4($mark4){
			if($mark4>=80 && $mark4<=100){
				return 5;
				}
				elseif($mark4>=70 && $mark4<=79){
					return 4;
				}
				elseif($mark4>=60 && $mark4<=69){
					return 3.5;
				}
				elseif($mark4>=50 && $mark4<=59){
					return 3;
				}
				elseif($mark4>=40 && $mark4<=49){
					return 2;
				}
				elseif($mark4>=00 && $mark4<=39){
					return "0";
				}
			else{
				return "Your value is unable.Please try again...";
			}
		}

		public function Sub5($mark5){
			if($mark5>=80 && $mark5<=100){
				return 5;
				}
				elseif($mark5>=70 && $mark5<=79){
					return 4;
				}
				elseif($mark5>=60 && $mark5<=69){
					return 3.5;
				}
				elseif($mark5>=50 && $mark5<=59){
					return 3;
				}
				elseif($mark5>=40 && $mark5<=49){
					return 2;
				}
				elseif($mark5>=00 && $mark5<=39){
					return "0";
				}
			else{
				return "Your value is unable.Please try again...";
			}
		}

		public function Sub6($mark6){
			if($mark6>=80 && $mark6<=100){
				return 5;
				}
				elseif($mark6>=70 && $mark6<=79){
					return 4;
				}
				elseif($mark6>=60 && $mark6<=69){
					return 3.5;
				}
				elseif($mark6>=50 && $mark6<=59){
					return 3;
				}
				elseif($mark6>=40 && $mark6<=49){
					return 2;
				}
				elseif($mark6>=00 && $mark6<=39){
					return "0";
				}
			else{
				return "Your value is unable.Please try again...";
			}
		}
	}
		$result = new st_result();
		if(isset($_POST['submit'])){
			$mark1 = $_POST['mark1'];
			$mark2 = $_POST['mark2'];
			$mark3 = $_POST['mark3'];
			$mark4 = $_POST['mark4'];
			$mark5 = $_POST['mark5'];
			$mark6 = $_POST['mark6'];
			

			$mark = $result->Sub1($mark1)."<br>";
			$mark1 = $result->Sub2($mark2)."<br>";
			$mark2 = $result->Sub3($mark3)."<br>";
			$mark3 = $result->Sub4($mark4)."<br>";
			$mark4 = $result->Sub5($mark5)."<br>";
			$mark5 = $result->Sub6($mark6)."<br>";

			$t_result = "$mark"+"$mark1"+"$mark2"+"$mark3"+"$mark4"+"$mark5";
				 if ($mark<1 || $mark1<1 || $mark2<1 || $mark3<1 || $mark4<1 || $mark5<1){
				 	return $gpa=0;
				 }
				 else{
				 	$gpa = $t_result / 6;
						echo $gpa;
				 }
		if(isset($_POST['submit'])){
			$roll = $_POST['roll'];
			$semister = $_POST['semister'];
			$mark1 = $_POST['mark1'];
			$mark2 = $_POST['mark2'];
			$mark3 = $_POST['mark3'];
			$mark4 = $_POST['mark4'];
			$mark5 = $_POST['mark5'];
			$mark6 = $_POST['mark6'];
			}
		

		$sql = "INSERT INTO result (roll, semister,mark1,mark2,mark3,mark4,mark5,mark6, gpa) VALUES ('$roll', '$semister','$mark1','$mark2','$mark3','$mark4','$mark5','$mark6','$gpa')";
			if($conn->query($sql)===TRUE){
				//header('location:marku.php');
				echo "<div class='alert alert-success'>
				  <strong>Success!</strong> New record created successfully.
				</div>";
			}
			else{
				echo "Error: " . $sql . "<br>" . $conn->connect_error;
			}
		}
	$conn->close();
?>

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
				<tr>
					<th>Sub1:</th>
					<td><input class="form-control" type="text" name="mark1" placeholder="Type your Sub1 number"></td>
				</tr>
				<tr>
					<th>Sub2:</th>
					<td><input class="form-control" type="text" name="mark2" placeholder="Type your Sub2 number"></td>
				</tr>
				<tr>
					<th>Sub3:</th>
					<td><input class="form-control" type="text" name="mark3" placeholder="Type your Sub3 number"></td>
				</tr>
				<tr>
					<th>Sub4:</th>
					<td><input class="form-control" type="text" name="mark4" placeholder="Type your Sub4 number"></td>
				</tr>
				<tr>
					<th>Sub5:</th>
					<td><input class="form-control" type="text" name="mark5" placeholder="Type your Sub5 number"></td>
				</tr>
				<tr>
					<th>Sub6:</th>
					<td><input class="form-control" type="text" name="mark6" placeholder="Type your Sub6 number"></td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td><input class="btn btn-primary" type="submit" name="submit" value="Submit"></td>
				</tr>
			</form>
		</table>
		<?php 
				}
			}
		 ?>
	</div>

<?php include('footer.php'); ?>