<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$contactperson = mysqli_real_escape_string($con,$_POST['contactperson']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$contactnumber = mysqli_real_escape_string($con,$_POST['contactnumber']);
$longitude = mysqli_real_escape_string($con,$_POST['longitude']);
$latitude = mysqli_real_escape_string($con,$_POST['latitude']);

$query = "UPDATE tbl_sponsor SET name='".$name."',contactperson='".$contactperson."',address='".$address."',contactnumber='".$contactnumber."',longitude='".$longitude."',latitude='".$latitude."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("INFORMATION HAS BEEN UPDATED!"); window.location = "../add_sponsors.php";</script>';
$con->close();
?>