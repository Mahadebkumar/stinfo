<?php include('header.php'); ?>

<div class="container">

 <h2 style="text-align:center;">List of Students</h2><br><br>
  <div class="form-group">
    <form action="" method="POST">
      <input style="text-align: center"; type="text" name="dept" placeholder="Type your department">
      <input style="text-align: center"; type="number" name="roll" placeholder="Type your roll">
      <input class="btn-sm btn-primary" type="submit" name="submit" value="Search">
  </form>
  </div>
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Department</th>
        <th>Roll</th>
        <th>Reg</th>
        <th>Semister</th>
        <th>Session</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Blood</th>
        <th style="text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>
  
      <?php
        include('connection.php');
        if(isset($_POST['submit'])){
          $dept = $_POST['dept'];
          $roll = $_POST['roll'];
        }
        if(isset($_POST['submit'])){
            $sql = "SELECT * FROM st_information WHERE department='$dept' OR roll='$roll' ";
            $result = $conn->query($sql);
            $sn=0;
            if($result-> num_rows > 0){
              while($row = $result->fetch_assoc()){
              $sn = $sn+1;

              echo "<tr>";
                echo "<td>".$sn."</td>";
                echo "<td>".$row['fname'].' '.$row['lname']."</td>";
                echo "<td><img  width='50px' height='50px' src='uploads/".$row['photo']."'></td>";
                echo "<td>".$row['department']."</td>";
                echo "<td>".$row['roll']."</td>";
                echo "<td>".$row['reg']."</td>";
                echo "<td>".$row['semister']."</td>";
                echo "<td>".$row['session']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['blood']."</td>";
                echo "<td><a href='delete.php?id=".$row['id']."' class='btn-sm btn-danger'>Delete</a>|<a href='update.php?id=".$row['id']."' class='btn-sm btn-primary'>Update</a>|<a href='mark.php?id=".$row['id']."' class='btn-sm btn-success'>Marks</a>|<a href='mm.php?id=".$row['roll']."' class='btn-sm btn-success'>mm</a></td>";
              echo "</tr>";
            }
          }
        }
        else{
           $sql = "SELECT * FROM st_information";
            $result = $conn->query($sql);
            $sn=0;
            if($result-> num_rows > 0){
              while($row = $result->fetch_assoc()){
              $sn = $sn+1;

              echo "<tr>";
                echo "<td>".$sn."</td>";
                echo "<td>".$row['fname'].' '.$row['lname']."</td>";
                 echo "<td><img  width='50px' height='50px' src='uploads/".$row['photo']."'></td>";
                echo "<td>".$row['department']."</td>";
                echo "<td>".$row['roll']."</td>";
                echo "<td>".$row['reg']."</td>";
                echo "<td>".$row['semister']."</td>";
                echo "<td>".$row['session']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['blood']."</td>";
               
                echo "<td><a href='delete.php?id=".$row['id']."' class='btn-sm btn-danger'>Delete</a>|<a href='update.php?id=".$row['id']."' class='btn-sm btn-primary'>Update</a>|<a href='mark.php?id=".$row['id']."' class='btn-sm btn-success'>Marks</a>|<a href='mm.php?id=".$row['roll']."' class='btn-sm btn-success'>mm</a> </td>";
              echo "</tr>";
            }
          }
        }


      ?>

    </tbody>
  </table>
</div>
<?php include('footer.php'); ?>