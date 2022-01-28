<?php  
include "connect.php";
include "bar.php";

if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE payment SET 
    patient_name='" .$_POST['patient_name']. "',
    item_name='" .$_POST['item_name']. "',
    amount='" .$_POST['amount']. "',
    a_remark='" .$_POST['a_remark']. "'
    WHERE id='".$_POST['id']."'");
    echo "<script>alert('Successful UPDATE');</script>";
    echo "<script>window.location.assign('payment.php');</script>";
    }
$result = mysqli_query($conn,"SELECT * FROM payment WHERE id ='" .$_GET['id']. "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>

<title>
Edit Payment
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div style="margin-left: 2%;margin: 2%">
<h2>Edit Payment</h2>
<form method="post" action="edit_payment.php">
    <div class="form-group">
    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']?>">
    <label>Patient Name</label>
    <input type="" name="patient_name" class="form-control" value="<?php echo $row['patient_name']?>">
    </div>

    <div class="form-group">
    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']?>">
    <label>Item_name</label>
    <input type="" name="item_name" class="form-control" value="<?php echo $row['item_name']?>">
    </div>
    
    <div class="form-group">
    <label>Amount</label>
    <input type="" name="amount" class="form-control" value="<?php echo $row['amount']?>">
    </div>

    <div class="form-group">
    <label>Additional Remark</label>
    <input type="" name="a_remark" class="form-control" value="<?php echo $row['a_remark']?>">
    </div>
	<br>
  <input type="submit" class="btn btn-primary" name="submit">
	</form>

</body>
</html>