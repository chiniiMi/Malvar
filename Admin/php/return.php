<?php
	include'../connection/conn.php'; 
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$deleteinfoquery="DELETE FROM tbl_barrowing where id='$id'";
	$result = mysqli_query($con,$deleteinfoquery);
    echo '<script type="text/javascript">alert("Book has been returned!"); window.location = "../barrow_records.php";</script>';
?>