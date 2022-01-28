<?php
include "bar.php";
include "connect.php";

if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE namelist SET 
    status='" .$_POST['status']. "',
    name='" .$_POST['name']. "'
    WHERE id='".$_POST['id']."'");
    echo "<script>alert('Successful UPDATE');</script>";
    echo "<script>window.location.assign('namelist.php');</script>";
    }
$result = mysqli_query($conn,"SELECT * FROM namelist WHERE id ='" .$_GET['id']. "'");
$row= mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html>
<head>

<title>
Edit Name
</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
 
	<div style="margin-left: 2%;margin: 2%">
  <h2>Edit Name</h2>
  <form method="post" action="edit_namelist.php">
  <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']?>">
    <div class="form-group">
    <label>Name</label>
    <input type="" name="name" class="form-control" value="<?php echo $row['name']?>">
    </div>
    <div class="form-group">
    <label>Status</label>
    <select class="form-control" id="" name="status">
    <?php
        if($row['status']=='Arrived')
        {
        echo "<option value='Arrived' selected>Arrived</option>";
        echo "<option value='Completed'>Completed</option>";
        }
        else if($row['status']=='Completed')
        {
        echo "<option value='Arrived' selected>Arrived</option>";
        echo "<option value='Completed'>Completed</option>";
        }
        else
        {
        echo "<option value='Arrived'>Arrived</option>";
        echo "<option value='Completed'>Completed</option>";
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