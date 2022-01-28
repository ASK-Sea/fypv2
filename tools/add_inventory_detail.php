<?php
include "bar.php";
include "connect.php";

if(isset($_POST['submit'])){
    mysqli_query($conn,"INSERT INTO inventory_detail (item_name,type,a_status,a_remark,i_price) VALUES
     ('" .$_POST['item_name']. "','" .$_POST['type']. "','" .$_POST['a_status']. "','" .$_POST['a_remark']. "','" .$_POST['i_price']. "')");
    echo "<script>alert('Add Succcessful');</script>";
    echo "<script>window.location.assign('inventory_detail.php?id=".$_POST['type']."');</script>";
    } 
?>


<!DOCTYPE html>
<html>
<head>

<title>
Add Inventory Item
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
 
	<div style="margin-left: 2%;margin: 2%">
  <h2>Add Inventory item</h2>
  <form method="post" action="add_inventory_detail.php">
    <div class="form-group">
    <label>Description</label>
    <input type="" name="item_name" class="form-control">
    </div>
    <div class="form-group">
    <label>Type</label>
    <select class="form-control" id="" name="type">
    <option value="1">Antidote</option>
    <option value="2">Cream</option>
    <option value="3">Soap</option>
    <option value="4">Devices</option>
    </select>
    </div>
    <div class="form-group">
    <label>Status</label>
	<select class="form-control" id="" name="a_status">
    <option value="Available">Available</option>
    <option value="Expired">Expired</option>
    <option value="Damaged">Damaged</option>
    </select>
	</div>
    <div class="form-group">
    <label>Additional Remark</label>
    <input type="" name="a_remark" class="form-control">
    </div>
    <div class="form-group">
    <label>Item Price</label>
    <input type="" name="i_price" class="form-control">
    </div>
	<br>
	<input type="submit" class="btn btn-primary" name="submit">
	</form>
	</div>
</body>
</html>