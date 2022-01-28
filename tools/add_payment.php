<?php  
include "connect.php";
include "bar.php";

if(isset($_POST['submit'])){
  mysqli_query($conn,"INSERT INTO payment (patient_name, item_name, amount, a_remark) VALUES
   ('" .$_POST['patient_name']. "','" .$_POST['item_name']. "','" .$_POST['amount']. "','" .$_POST['a_remark']. "')");
echo "<script>window.location.assign('payment.php');</script>";  
}

?>
<!DOCTYPE html>
<html>
<head>

<title>
Add Payment
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div style="margin-left: 2%;margin: 2%">
<h2>Add Payment</h2>
<form method="post" action="add_payment.php">
    <div class="form-group">
    <label>Patient Name</label>
    <input type="" name="patient_name" class="form-control" value="">
    </div>
    <div class="form-group">
    <label>Item Name</label>
    <input type="" name="item_name" class="form-control" value="">
    </div>
    <div class="form-group">
    <label>Amount</label>
    <input type="" name="amount" class="form-control" value="">
    </div>
    <div class="form-group">
    <label>Additional Remark</label>
    <input type="" name="a_remark" class="form-control" value="">
    </div>
	<br>
  <input type="submit" class="btn btn-primary" name="submit">
	</form>

</body>
</html>