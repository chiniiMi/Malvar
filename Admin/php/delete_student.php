<?php
	include'../connection/conn.php'; 
	$id=mysqli_real_escape_string($con,$_GET['id']);
	$deleteinfoquery="DELETE FROM tbl_students where id='$id'";
	$result = mysqli_query($con,$deleteinfoquery);
    echo '<script type="text/javascript">alert("Student Has Been Removed!"); window.location = "../add_student.php";</script>';
?>