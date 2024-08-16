<?php 
include'../connection/conn.php';
$id = mysqli_real_escape_string($con,$_POST['id']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$gender = mysqli_real_escape_string($con,$_POST['gender']);
$lrn = mysqli_real_escape_string($con,$_POST['lrn']);
$schoolyear = mysqli_real_escape_string($con,$_POST['schoolyear']);
$yearlevel = mysqli_real_escape_string($con,$_POST['yearlevel']);
$strand = mysqli_real_escape_string($con,$_POST['strand']);
$contactnumber = mysqli_real_escape_string($con,$_POST['contactnumber']);
$parents = mysqli_real_escape_string($con,$_POST['parents']);
$parentscontactnumber = mysqli_real_escape_string($con,$_POST['parentscontactnumber']);
$section = mysqli_real_escape_string($con,$_POST['section']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);

$query = "UPDATE tbl_students SET name='".$name."',
gender='".$gender."',
lrn='".$lrn."',
schoolyear='".$schoolyear."',
yearlevel='".$yearlevel."',
strand='".$strand."',
contactnumber='".$contactnumber."',
parents='".$parents."',
parentscontactnumber='".$parentscontactnumber."',
section='".$section."',
email='".$email."',
password='".$password."' where id='$id'";
mysqli_query($con, $query);
echo '<script type="text/javascript">alert("INFORMATION HAS BEEN UPDATED!"); window.location = "../add_student.php";</script>';
$con->close();
?>