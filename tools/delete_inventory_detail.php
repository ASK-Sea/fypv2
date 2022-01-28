<?php
include 'connect.php';

if(isset($_GET['id'])){
$ID = (int)$_GET['id'];
$sql = "DELETE FROM inventory_detail WHERE id =".$ID;

if ( mysqli_query($conn, $sql)  ) {
    mysqli_close($conn);
    echo "alert('Deleted Successfully')</script>";
	echo "<script>window.location.assign('inventory.php');</script>";
    exit;
}
}
?>