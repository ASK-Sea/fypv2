<?php  
include "connect.php";

$sql= "SELECT * From payment WHERE id ='".$_GET['id']."'";
$result = $conn-> query($sql);
$row = mysqli_num_rows($result);
if($result-> num_rows>0){
  while($row = $result -> fetch_assoc()){

?>

<html>
<style>
table, th, td {
  border:1px black;
  border-style: dotted;
}

@media print{
  #printBtn{
    display: none;
  }

  #backBtn{
    display: none;
  }

  @page{
    size: auto;
    margin: 0;
  }
}
</style>
<body>
<h2>Receipt</h2>
<table style="width:100%">
<tr>
    <td>Receipt No</td>
    <?php
    echo "<td>".$row['id']."</td>";
    ?>
  </tr>
  <tr>
    <td>Patient Name</td>
    <?php
    echo "<td>".$row['patient_name']."</td>";
    ?>
  </tr>
  <tr>
    <td>Item-Name</td>
    <?php
    echo "<td>".$row['item_name']."</td>";
    ?>
  </tr>
  <tr>
    <td>Receipt Date</td>
    <?php
    echo "<td>".$row['r_date']."</td>";
    ?>
  </tr>
  <tr>
    <td>Additional remark</td>
    <?php
    echo "<td>".$row['a_remark']."</td>";
    ?>
  </tr>
</table>
<p>Amount:</p>
<?php
echo $row['amount']; ?>
</body>
<?php
}
}
?>
</html>
<h1>
</h1>
<h1 class="Print">
</h1>
<button id="printBtn" onclick="window.print();" class="Print">Print Me</button>
<button id="backBtn" onclick="window.location.assign('payment.php');">Back</button>

</html>

