<?php  
include "connect.php";
include "bar.php";

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
    <input type="" id="patient_name" name="patient_name" class="form-control" value="">
    </div>
    <div class="form-group">
        <label>Item Name</label>
    <select class="form-control" id="alishake" name="item_name" multiple="multiple" style="height: 300px;">
    <?php
    $sql1= "SELECT * From inventory_detail";
    $result1 = $conn-> query($sql1);
    if($result1-> num_rows>0){
    while($row1 = $result1 -> fetch_assoc()){
    echo "
    <option value = ".$row1['id']." >" .$row1['item_name']. "</option>";
  }
  echo "<script>console.log('ALIBABA', ".$row1['item_name'].")</script>";
  }
  else{
    $conn-> close();
  } 
?>

    </select>
    </div>
    <div class="form-group">
    <label>Amount</label>
    <input type="" name="amount" class="form-control" id="amount" value="">
    </div>
    <div class="form-group">
    <label>Additional Remark</label>
    <input type="" name="a_remark" class="form-control" value="" id="a_remark">
    </div>
	<br>
    <!-- href = "print_am.php?item_name=<?php echo $row1['item_name']; ?>" -->
    <a href="print_am.php" class="btn btn-primary" id="alishakeBtn" role="button">Print Preview</a>
	</form>

    <script>
        var alimama = document.getElementById("alishake");
        var patientName = document.getElementById("patient_name");
        var amount = document.getElementById("amount");
        var aRemark = document.getElementById("a_remark");
        var alibabaBtn = document.getElementById("alishakeBtn");


        alibabaBtn.addEventListener('click', () => {
            // alibabaBtn.href="print_am.php?item_name=" + alimama.value;
            var selectedThingy = [...alimama.options]
                    .filter(option => option.selected)
                    .map(option => option.value);

            
            document.cookie="item="+selectedThingy;
            document.cookie="patientName="+patientName.value;
            document.cookie="amount="+amount.value;
            document.cookie="a_remark="+aRemark.value;
            sessionStorage.setItem("item", selectedThingy);
            console.log(sessionStorage.getItem("item"));
        });

    </script>

</body>
</html>