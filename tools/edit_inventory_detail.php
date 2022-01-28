<?php  
include "connect.php";
include "bar.php";
if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE inventory_detail SET
	item_name='" .$_POST['item_name']. "',
	type='" .$_POST['type']. "',
	a_status='" .$_POST['a_status']. "',
	a_remark='" .$_POST['a_remark']. "',
	i_price='" .$_POST['i_price']. "' WHERE id='".$_POST['id']."'");
	echo "<script>alert('Successful UPDATE');</script>";
	echo "<script>window.location.assign('inventory_detail.php?id=".$_POST['type']."');</script>";
	}
	$result = mysqli_query($conn,"SELECT * FROM inventory_detail WHERE id ='" .$_GET['id']. "'");
	$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>

<title>
 Edit Inventory Item
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
<div style="margin-left: 2%;margin: 2%">
  <h2>Edit Inventory</h2>
  <form method="post" action="edit_inventory_detail.php">
  <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']?>">
    <div class="form-group">
    <label>Item Name</label>
    <input type="" name="item_name" class="form-control" value="<?php echo $row['item_name']?>">
    </div>
	<div class="form-group">
	<label>Type</label>
	<select class="form-control" id="" name="type">
        <?php
        if($row['type']==1) 
        {
        echo "<option value='1' selected>Antidote</option>";
        echo "<option value='2' >Cream</option>";
		echo "<option value='3' >Soap</option>";
        echo "<option value='4' >Devices</option>";

        }
        else if($row['type']==2){
		echo "<option value='1' >Antidote</option>";
		echo "<option value='2' selected>Cream</option>";
		echo "<option value='3' >Soap</option>";
		echo "<option value='4' >Devices</option>";

        }else if($row['type']==3){
		echo "<option value='1' >Antidote</option>";
		echo "<option value='2' >Cream</option>";
		echo "<option value='3' selected>Soup</option>";
		echo "<option value='4' >Devices</option>";

		}else if($row['type']==4){
		echo "<option value='1' >Antidote</option>";
        echo "<option value='2' >Cream</option>";
		echo "<option value='3' >Soap</option>";
        echo "<option value='4' selected>Devices</option>";
		
		}else{
		echo "<option value='1' >Antidote</option>";
		echo "<option value='2' >Cream</option>";
		echo "<option value='3' >Soap</option>";
		echo "<option value='4' >Devices</option>";
		  }
        ?>
        </select>
	</div>
    <div class="form-group">
    <label>Status</label>
	<select class="form-control" id="" name="status">
    <option value="Available">Available</option>
    <option value="Expired">Expired</option>
	<option value="Damaged">Damaged</option>
    </select>
	</div>
	<div class="form-group">
	<label>Additional Remark</label>
	<input type="" name="a_remark" class="form-control" value="<?php echo $row['a_remark']?>">
	</div>
	<div class="form-group">
	<label>Item Price</label>
	<input type="" name="i_price" class="form-control" value="<?php echo $row['i_price']?>">
	</div>
	<br>
	<input type="submit" class="btn btn-primary" name="submit">
	</form>
	</div>
</body>
</html>