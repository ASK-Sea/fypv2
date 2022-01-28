<?php  
include "connect.php";
include "bar.php";
$sql = "SELECT * From payment";
$result = $conn-> query($sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>
Inventory
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>

<div style="margin-left: 2%;margin: 2%">
<h2>Payment</h2>
		<table class="table table-striped table-bordered" name ="myTable" id= "myTable">
  <thead>
  <tr>
    <th>Patient Name</th>
    <th>Item Name</th>
    <th>Additional Remark</th>
    <th>Amount</th>
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
    <th>".$row['patient_name']."</th>
    <th>".$row['item_name']."</th>
    <th>".$row['a_remark']."</th>
    <th>".$row['amount']."</th>"
    ?>
    <?php echo "<th>" ;?>
    <a href = "print.php?id=<?php echo $row['id']; ?>"class="btn btn-primary" role="button">Print Preview</a>
    <a href = "edit_payment.php?id=<?php echo $row['id']; ?>"class="btn btn-primary" role="button">Edit</a>
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