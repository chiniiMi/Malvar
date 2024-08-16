<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$itemname = mysqli_real_escape_string($con,$_POST['itemname']);
$category = mysqli_real_escape_string($con,$_POST['category']);
$initialstock = mysqli_real_escape_string($con,$_POST['initialstock']);


$query = "UPDATE tbl_inventory SET itemname='".$itemname."',
category='".$category."',
initialstock='".$initialstock."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("INFORMATION HAS BEEN UPDATED!"); window.location = "../add_items.php";</script>';
$con->close();
?>