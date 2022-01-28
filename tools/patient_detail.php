<?php  
include "connect.php";
include "bar.php";
if(count($_POST)>0) {
	mysqli_query($conn,"UPDATE patientacc SET 
	username='" . $_POST['username'] . "',
	f_name='" . $_POST['f_name'] . "',
	ic_number='" . $_POST['ic_number'] . "',
	email='" . $_POST['email'] . "',
	phone_no='" . $_POST['phone_no'] . "'
	WHERE ic_number='" . $_POST['ic_number'] . "'");
	mysqli_query($conn,"UPDATE patient_detail SET
	detail='" .$_POST['detail']. "'
	WHERE ic_number='".$_POST['ic_number']."'");
	echo "<script>alert('Successful UPDATE');</script>";
	echo "<script>window.location.assign('patient_record.php');</script>";
	}
	$result = mysqli_query($conn,"SELECT * FROM patientacc LEFT JOIN patient_detail ON patientacc.ic_number=patient_detail.ic_number WHERE patientacc.ic_number ='" .$_GET['ic_number']. "'");
	$row= mysqli_fetch_array($result);
//$sql = "SELECT patientacc.username, patientacc.f_name, patientacc.ic_number, patient_detail.detail from patientacc LEFT JOIN patient_detail On patientacc.id = patientacc.id ORDER BY patient_detail.detail";
//$result = $conn-> query($sql);


?>

<!DOCTYPE html>
<html>
<head>

<title>
Patient Record Detail
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>


<body>
 
	<div style="margin-left: 2%;margin: 2%">
  <h2>Patient Record Detail</h2>
		<form method="post" action="patient_detail.php?ic_number=<?php echo $row['ic_number']?>">
			<div class="form-group">
				<label>Username</label>
				<input type="" name="username" class="form-control" value="<?php echo $row['username']?>">
			</div>
			<div class="form-group">
				<label>Full Name</label>
				<input type="" name="f_name" class="form-control" value="<?php echo $row['f_name']?>">
			</div>
			<div class="form-group">
				<label>IC Number</label>
        <input type="" name="ic_number" class="form-control" value="<?php echo $row['ic_number']?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="" name="email" class="form-control" value="<?php echo $row['email']?>">
			</div>
      <div class="form-group">
				<label>Phone Number</label>
				<input type="" name="phone_no" class="form-control" value="<?php echo $row['phone_no']?>">
			</div>
      <div class="form-group">
				<label>Detail</label>
				<input type="" name="detail" class="form-control" value="<?php echo $row['detail']?>">
        </select>
			</div>
			<br>
			<input type="submit" class="btn btn-primary" name="submit">
		</form>
	</div>
</body>