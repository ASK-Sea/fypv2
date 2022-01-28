<?php
include "connect.php";
include "bar.php";
$sql = "SELECT * from useacc";
$result = $conn-> query($sql);

?>
<!DOCTYPE html>
<html>
<head>

<title>
Staff Management
</title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
</head>


<div style="margin-left: 2%;margin: 2%">
<h2>Staff Management</h2>
<a href="add_staff_management.php" class="btn btn-primary" role="button">Add New Staff</a>
		<table class="table table-striped table-bordered" name ="myTable" id= "myTable">
  <thead>
  <tr>
    <th>Username</th>
    <th>Full Name</th>
    <th>IC-Number</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Role</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
<?php
if($result-> num_rows>0){
  while($row = $result -> fetch_assoc()){
    ?>
    <?php
    echo"
    <tr>
    <th>".$row['username']."</th>
    <th>".$row['f_name']."</th>
    <th>".$row['ic_number']."</th>
    <th>".$row['email']."</th>
    <th>".$row['phone_no']."</th>"
    ?>
    <?php
    if($row['role']==1) 
        {
          echo "<th>Doctor</th>";
        }
        else if($row['role']==2)
        {
          echo "<th>Nurse</th>";
        }
    ?>
    <?php
    echo"
    <th>".$row['status']."</th>"
      ?>
    <?php echo "<th>" ;?>
    <a href = "edit_staff_management.php?id=<?php echo $row['id']; ?>"class="btn btn-primary" role="button">Edit</a>
    <?php echo "</th>" ;?>
    <?php echo "</tr>" ;?>
  
  <?php
  }
    echo "</table>";
  }
  else{
    $conn-> close();
  } 
?>
</tbody>
  </div>
  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
</body>
</html>