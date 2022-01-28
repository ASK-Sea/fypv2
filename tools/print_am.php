<?php  
include "connect.php";

session_start();

$thingyYouGet = $_COOKIE["item"];
$patientName = $_COOKIE["patientName"];
$amount = $_COOKIE["amount"];
$a_remark = $_COOKIE["a_remark"];

$thingYouDoubleGet = explode(",", $thingyYouGet);
echo "<script>console.log(".$thingYouDoubleGet[0].")</script>";

$thingyToDisplay = "";

// $sql= "SELECT * From inventory_detail WHERE item_name ='".$_GET['item_name']."'";
for($i = 0; $i < sizeof($thingYouDoubleGet); $i++ ){
    $sql = "SELECT * FROM inventory_detail WHERE id = ".$thingYouDoubleGet[$i]."";
    $result = $conn -> query($sql);
    $row = mysqli_num_rows($result);

    if($result-> num_rows>0){
        while($row = $result -> fetch_assoc()){
            if($i == 0){//prevent "," in first
                $thingyToDisplay = $row["item_name"];
            }
            else{
                $thingyToDisplay = $thingyToDisplay . ", " . $row["item_name"];
            }
        }
    }
}

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
    <td>Patient Name</td>
    <?php
    echo "<td>". $patientName ."</td>";
    ?>
  </tr>
  <tr>
    <td>Item-Name</td>
    <?php
    echo "<td>". $thingyToDisplay ."</td>";
    ?>
  </tr>

  <tr>
    <td>Additional remark</td>
    <?php
    echo "<td>".$a_remark."</td>";
    ?>
  </tr>
</table>
<p>Amount:</p>
<?php
echo  $amount; ?>
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
