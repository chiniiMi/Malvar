<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$itemname = mysqli_real_escape_string($con,$_POST['itemname']);
$category = mysqli_real_escape_string($con,$_POST['category']);


$query = "UPDATE tbl_learning_materials SET itemname='".$itemname."',
category='".$category."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("INFORMATION HAS BEEN UPDATED!"); window.location = "../add_learning_materials.php";</script>';
$con->close();
?>