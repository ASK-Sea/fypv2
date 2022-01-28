<?php
include "bar.php";
include "connect.php";

if(isset($_POST['submit'])){
mysqli_query($conn,"INSERT INTO patientacc (username,f_name,ic_number,email,phone_no) VALUES
 ('" .$_POST['username']. "','" .$_POST['f_name']. "', '".$_POST['ic_number']. "',
 '" .$_POST['email']. "','" .$_POST['phone_no']. "')");
mysqli_query($conn,"INSERT INTO patient_detail(ic_number,detail) VALUES ('".$_POST['ic_number']."','".$_POST['detail']."')");

echo "<script>alert('Add Succcessful');</script>";
echo "<script>window.location.assign('patient_record.php');</script>";

} 
?>
<html>

<head>

<title>Add Patient</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
 
	<div style="margin-left: 2%;margin: 2%">
  <h2>Add Patient Record</h2>
  <form method="post" action="add_patient.php">
    <div class="form-group">
    <label>Username</label>
    <input type="" name="username" class="form-control">
    </div>
    <div class="form-group">
    <label>Full Name</label>
    <input type="" name="f_name" class="form-control">
    </div>
    <div class="form-group">
    <label>IC Number</label>
    <input type="" name="ic_number" class="form-control">
    </div>
    <div class="form-group">
    <label>Email</label>
    <input type="" name="email" class="form-control">
    </div>
    <div class="form-group">
    <label>Phone Number</label>
    <input type="" name="phone_no" class="form-control">
    </div>
    <div class="form-group">
	<label>Detail</label>
	<input type="TextField" name="detail" class="form-control">
    </div>
	<br>
	<input type="submit" class="btn btn-primary" name="submit">
	</form>
	</div>
</body>
</html>