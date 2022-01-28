<?php
include 'connect.php';
if(isset($_GET['id'])){
    $ID = (int)$_GET['id'];
$sql = "DELETE * FROM namelist";

if( mysqli_query($conn, $sql)  ) {
    mysqli_close($conn);
    echo "alert('Deleted Successfully')</script>";
	echo "<script>window.location.assign('namelist.php');</script>";
    exit;
}
}
?>