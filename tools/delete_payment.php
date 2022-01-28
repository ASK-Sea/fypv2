<?php
include 'connect.php';

if(isset($_GET['id'])){
$ID = (int)$_GET['id'];
$sql = "DELETE FROM payment WHERE id =".$ID;

if ( mysqli_query($conn, $sql)  ) {
    mysqli_close($conn);
	echo "<script>window.location.assign('payment.php');</script>";
    exit;
}
}
?>