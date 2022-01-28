<?php  
include "connect.php";
include "bar.php";

$sql1= "SELECT * From inventory_detail WHERE type ='".$_GET['id']."'";
$result1 = $conn-> query($sql1);
$rowcount = mysqli_num_rows($result1);
if($rowcount> 0){
$sql = "SELECT * From inventory LEFT JOIN inventory_detail ON inventory.id = inventory_detail.type WHERE inventory.id = '" .$_GET['id']. "'";
$result = $conn-> query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>

<title>
Inventory Detail
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>

<body>
<div style="margin-left: 2%;margin: 2%">
<h2>Inventory Detail</h2>
<a href="add_inventory_detail.php" class="btn btn-primary" role="button">Add Inventory</a>
<table class="table table-striped table-bordered" name ="myTable" id= "myTable">
  <thead>
  <tr>
    <th>Item Name</th>
    <th>Item ID</th>
    <th>Type</th>
    <th>Status</th>
    <th>Addtional Remark</th>
    <th>Item Price</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
<?php
if($result1-> num_rows>0){
  while($row = $result -> fetch_assoc()){
    ?>
    <?php
    echo"
    <tr>
    <th>".$row['item_name']."</th>
    <th>".$row['type']." - ".$row['id']."</th>
	  <th>".$row['name']."</th>
	  <th>".$row['status']."</th>
	  <th>".$row['a_remark']."</th>
    <th>".$row['i_price']."</th>"
    ?>
    <?php echo "<th>" ;?>
    <a href = "edit_inventory_detail.php?id=<?php echo $row['id']; ?>"class="btn btn-primary" role="button">Edit</a>
    <a href = "delete_inventory_detail.php?id=<?php echo $row['id']; ?>"class="btn btn-primary" role="button">Delete</a>
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