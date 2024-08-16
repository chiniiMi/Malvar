<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$lrn = mysqli_real_escape_string($con,$_POST['lrn']);
$contactnumber = mysqli_real_escape_string($con,$_POST['contactnumber']);
$section = mysqli_real_escape_string($con,$_POST['section']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$yearlevel = mysqli_real_escape_string($con,$_POST['yearlevel']);
$strand = mysqli_real_escape_string($con,$_POST['strand']);


$query = "UPDATE tbl_students SET name='".$name."',
lrn='".$lrn."',
contactnumber='".$contactnumber."',
section='".$section."',
email='".$email."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("INFORMATION HAS BEEN UPDATED!"); window.location = "../add_teacher.php";</script>';
$con->close();
?>