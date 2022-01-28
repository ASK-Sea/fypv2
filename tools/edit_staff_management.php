<?php  
include "connect.php";
include "bar.php";

if(count($_POST)>0) {
mysqli_query($conn,"UPDATE useacc SET 
username='" . $_POST['username'] . "',
f_name='" . $_POST['f_name'] . "',
ic_number='" . $_POST['ic_number'] . "',
email='" . $_POST['email'] . "',
phone_no='" . $_POST['phone_no'] . "',
role='" . $_POST['role'] . "',
status='" . $_POST['status'] . "'
WHERE id='" . $_POST['id'] . "'");
echo "<script>alert('Successful UPDATE');</script>";
echo "<script>window.location.assign('staff_management.php');</script>";
}
$result = mysqli_query($conn,"SELECT * FROM useacc WHERE id ='" .$_GET['id']. "'");
$row= mysqli_fetch_array($result);


?>
<html>
<head>
<title>Edit Staff</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>
<body>
 
	<div style="margin-left: 2%;margin: 2%">
  <h2>Edit Staff</h2>
		<form method="post" action="edit_staff_management.php">
    <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']?>">
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
				<label>Role</label>
				<select class="form-control" id="" name="role">
        <?php
        if($row['role']==1) 
        {
          echo "<option value='1' selected>Doctor</option>";
          echo "<option value='2' >Nurse</option>";
        }
        else if($row['role']==2){
          echo "<option value='2' selected>Nurse</option>";
          echo "<option value='1' >Doctor</option>";
        }else{
          echo "<option value='2' >Nurse</option>";
          echo "<option value='1' >Doctor</option>";
        }
        ?>
        </select>
			</div>
      <div class="form-group">
				<label>Status</label>
				<select class="form-control" id="" name="status">
        <?php
        if($row['status']=='Active')
        {
        echo "<option value='Active' selected>Active</option>";
        echo "<option value='Not-Active'>Not-Active</option>";
        }
        else if($row['status']=='Not-Active')
        {
        echo "<option value='Not-Active' selected>Not-Active</option>";
        echo "<option value='Active'>Active</option>";
        }
        else{
        echo "<option value='Not-Active'>Not-Active</option>";
        echo "<option value='Active'>Active</option>";
        }
        ?>
        </select>
			</div>
			<br>
			<input type="submit" class="btn btn-primary" name="submit">
		</form>
	</div>
</body>
</html>