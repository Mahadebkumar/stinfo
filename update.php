<?php include('header.php'); ?>
<div class="container">

  <?php
      include('connection.php');
      $id=$_GET['id'];
      $sql="SELECT * FROM st_information WHERE id='$id'";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
          ?>
     <div style="width:50%; margin: auto;">
    <form action="updated.php" method="POST" enctype="multipart/form-data">
      <h2>Update Your Data</h2>
      <table class="table table-stripped">
        <tr>
          <th>Fast Name:</th>
          <td>
            <input class="form-control" type="text" name="fname" value="<?php echo $row['fname']; ?>">
          </td>
        </tr>
        <tr>
          <th>Last Name:</th>
          <td>
            <input class="form-control" type="text" name="lname" value="<?php echo $row['lname']; ?>">
          </td>
        </tr>
        <tr>
          <th>Department:</th>
          <td>
            <input class="form-control" type="text" name="department" value="<?php echo $row['department']; ?>">
          </td>
        </tr>
        <tr>
          <th>Roll:</th>
          <td>
            <input class="form-control" type="number" name="roll" value="<?php echo $row['roll']; ?>">
          </td>
        </tr>
        <tr>
          <th>Reg:</th>
          <td>
            <input class="form-control" type="text" name="reg" value="<?php echo $row['reg']; ?>">
          </td>
        </tr>
        <tr>
          <th>Semister:</th>
          <td>
            <input class="form-control" type="text" name="semister" value="<?php echo $row['semister']; ?>">
          </td>
        </tr>
        <tr>
          <th>Session:</th>
          <td>
            <input class="form-control" type="text" name="session" value="<?php echo $row['session']; ?>">
          </td>
        </tr>
        <tr>
          <th>Email:</th>
          <td>
            <input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>">
          </td>
        </tr>
        <tr>
          <th>Gender:</th>
          <td>
            <input type="radio" name="gender" value="<?php echo $row['gender']; ?>">Male
            <input type="radio" name="gender" value="<?php echo $row['gender']; ?>">Female
          </td>
        </tr>
        <tr>
          <th>Blood:</th>
          <td>
            <input style="width: 50px;" class="form-control" type="text" name="blood" value="<?php echo $row['blood']; ?>">
          </td>
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
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
        
      <?php
        }
      }

  ?>
</div>

<?php include('footer.php'); ?>