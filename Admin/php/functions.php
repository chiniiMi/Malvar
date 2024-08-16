<?php
function admin_login($data){
global $con;
	session_start();
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);


	$sql = "SELECT * FROM tbl_admin WHERE username = '".$username."' AND password ='".$password."' LIMIT 1";
	$result = mysqli_query($con,$sql);
	if (!$result->num_rows == 1) {
		 echo '<script type="text/javascript">alert("Wrong username and Password"); window.location = "./index.php";</script>';
	} else {
		 			$query = "SELECT * FROM tbl_admin WHERE username = '".$username."' LIMIT 1";
        			$result = mysqli_query($con,$query);                        
			         while ($row = mysqli_fetch_array($result)) {
			          $id = $row['id']; 
			          $fullname = $row['fullname'];
			          $address = $row['address'];
			          $contactnumber = $row['contactnumber'];
			          $position = $row['position'];
			          $password = $row['password'];
			          $username = $row['username'];

			     
					  $_SESSION['id'] = $id;
					  $_SESSION['fullname'] = $fullname;
					  $_SESSION['address'] = $address;
					  $_SESSION['contactnumber'] = $contactnumber;
					  $_SESSION['position'] = $position;
					  $_SESSION['username'] = $username;
					  $_SESSION['password'] = $password;
					  $_SESSION['usertype'] = 'Admin';
					  
					  
					  
      }
    	header("location:./dashboard.php");	   
	}
										
}

function user_login($data){
global $con;
	session_start();
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);


	$sql = "SELECT * FROM tbl_students WHERE lrn = '".$username."' AND password ='".$password."' LIMIT 1";
	$result = mysqli_query($con,$sql);
	if (!$result->num_rows == 1) {
		 echo '<script type="text/javascript">alert("Wrong username and Password"); window.location = "./user_login.php";</script>';
	} else {
		 			$query = "SELECT * FROM tbl_students WHERE username = '".$username."' LIMIT 1";
        			$result = mysqli_query($con,$query);                        
			         while ($row = mysqli_fetch_array($result)) {
			          $id = $row['id']; 
			          $name = $row['name'];
			          $gender = $row['gender'];
			          $lrn = $row['lrn'];
			          $schoolyear = $row['schoolyear'];
			          $yearlevel = $row['yearlevel'];
			          $type = $row['type'];
			          
			     
					  $_SESSION['id'] = $id;
					  $_SESSION['fullname'] = $fullname;
					  $_SESSION['address'] = $address;
					  $_SESSION['contactnumber'] = $contactnumber;
					  $_SESSION['position'] = $position;
					  $_SESSION['username'] = $username;
					  $_SESSION['password'] = $password;
					  $_SESSION['usertype'] = $type;
					  
      }
    	header("location:./teacher_dash.php");	   
	}
										
}

function s_login($data){
global $con;
	session_start();
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);


	$sql = "SELECT * FROM tbl_students WHERE lrn = '".$username."' AND password ='".$password."' LIMIT 1";
	$result = mysqli_query($con,$sql);
	if (!$result->num_rows == 1) {
		 echo '<script type="text/javascript">alert("Wrong username and Password"); window.location = "./student_login.php";</script>';
	} else {
		 			$query = "SELECT * FROM tbl_students WHERE username = '".$username."' LIMIT 1";
        			$result = mysqli_query($con,$query);                        
			         while ($row = mysqli_fetch_array($result)) {
			          $id = $row['id']; 
			          $name = $row['name'];
			          $gender = $row['gender'];
			          $lrn = $row['lrn'];
			          $schoolyear = $row['schoolyear'];
			          $yearlevel = $row['yearlevel'];
			          $type = $row['type'];
			          
			     
					  $_SESSION['id'] = $id;
					  $_SESSION['fullname'] = $fullname;
					  $_SESSION['address'] = $address;
					  $_SESSION['contactnumber'] = $contactnumber;
					  $_SESSION['position'] = $position;
					  $_SESSION['username'] = $username;
					  $_SESSION['password'] = $password;
					  $_SESSION['usertype'] = $type;
					  
      }
    	header("location: ./student_dash.php");	   
	}
										
}
function onadd_items($data){
global $con;
	$itemname = mysqli_real_escape_string($con,$_POST['itemname']);
	$category = mysqli_real_escape_string($con,$_POST['category']);
	$initialstock = mysqli_real_escape_string($con,$_POST['initialstock']);
	$newfilename = $_FILES['profile']['name'];
    $targetPath= "./uploads/" . md5(uniqid()). $newfilename;
    move_uploaded_file($_FILES["profile"]["tmp_name"],$targetPath);
	 $query = "SELECT * FROM tbl_inventory WHERE itemname='$itemname' AND category='$category'";
		 $result = mysqli_query($con,$query)or die(mysqli_error());
		 $num_row = mysqli_num_rows($result);

	    $row=mysqli_fetch_array($result);
	    if( $num_row>0) {

	          echo '<script type="text/javascript">alert("Item Already Exist!"); window.location = "./add_items.php";</script>';    
	    }else{       
	       $sql = "INSERT INTO tbl_inventory (itemname,category,initialstock) VALUES ('$itemname','$category','$initialstock')";
			$result = mysqli_query($con,$sql);
		   echo '<script type="text/javascript">alert("New Item Has Been Added."); window.location = "./add_items.php";</script>';     	
	    }		
}

function onadd_learning($data){
global $con;
	$itemname = mysqli_real_escape_string($con,$_POST['itemname']);
	$category = mysqli_real_escape_string($con,$_POST['category']);
	$newfilename = $_FILES['profile']['name'];
    $targetPath= "./uploads/" . md5(uniqid()). $newfilename;
    move_uploaded_file($_FILES["profile"]["tmp_name"],$targetPath);
	 $query = "SELECT * FROM tbl_learning_materials WHERE itemname='$itemname' AND category='$category'";
		 $result = mysqli_query($con,$query)or die(mysqli_error());
		 $num_row = mysqli_num_rows($result);

	    $row=mysqli_fetch_array($result);
	    if( $num_row>0) {

	          echo '<script type="text/javascript">alert("Item Already Exist!"); window.location = "./add_learning_materials.php";</script>';    
	    }else{       
	       $sql = "INSERT INTO tbl_learning_materials (itemname,category,file) VALUES ('$itemname','$category','$targetPath')";
			$result = mysqli_query($con,$sql);
		   echo '<script type="text/javascript">alert("New Item Has Been Added."); window.location = "./add_learning_materials.php";</script>';     	
	    }		
}



function onadd_student($data){
global $con;
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
	$username = mysqli_real_escape_string($con,$_POST['lrn']);
	$password = '1234';
	 $query = "SELECT * FROM tbl_students WHERE lrn='$lrn'";
		 $result = mysqli_query($con,$query)or die(mysqli_error());
		 $num_row = mysqli_num_rows($result);

	    $row=mysqli_fetch_array($result);
	    if( $num_row>0) {

	         echo '<script type="text/javascript">alert("Student Already Exist!"); window.location = "./add_student.php";</script>';    
	    }else{       
	       $sql = "INSERT INTO tbl_students (name,gender,lrn,schoolyear,yearlevel,strand,contactnumber,parents,parentscontactnumber,section,email,username,password,type) VALUES ('$name','$gender','$lrn','$schoolyear','$yearlevel','$strand','$contactnumber','$parents','$parentscontactnumber','$section','$email','$username','$password','Student')";
			$result = mysqli_query($con,$sql);
		 echo '<script type="text/javascript">alert("New Student Has Been Added."); window.location = "./add_student.php";</script>';     	
	    }		
}

function onadd_teacher($data){
global $con;
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$lrn = mysqli_real_escape_string($con,$_POST['lrn']);
	$contactnumber = mysqli_real_escape_string($con,$_POST['contactnumber']);
	$section = mysqli_real_escape_string($con,$_POST['section']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$username = mysqli_real_escape_string($con,$_POST['lrn']);
	$password = '1234';
	 $query = "SELECT * FROM tbl_students WHERE lrn='$lrn'";
		 $result = mysqli_query($con,$query)or die(mysqli_error());
		 $num_row = mysqli_num_rows($result);

	    $row=mysqli_fetch_array($result);
	    if( $num_row>0) {

	         echo '<script type="text/javascript">alert("Information Already Exist!"); window.location = "./add_teacher.php";</script>';    
	    }else{       
	       $sql = "INSERT INTO tbl_students (name,lrn,contactnumber,section,email,username,password,type) VALUES ('$name','$lrn','$contactnumber','$section','$email','$username','$password','Teacher')";
			$result = mysqli_query($con,$sql);
		 echo '<script type="text/javascript">alert("New Teacher Has Been Added."); window.location = "./add_teacher.php";</script>';     	
	    }		
}

function onadd_programs($data){
global $con;
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$description = mysqli_real_escape_string($con,$_POST['description']);
	$program = mysqli_real_escape_string($con,$_POST['program']);

	$j = 0; 
	$target_path = "./uploads/"; 
	for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
	$validextensions = array("png", "jpeg", "jpg", "PNG","JPEG","JPG","gif","GIF");
	$ext = explode('.', basename($_FILES['file']['name'][$i]));
	$file_extension = end($ext);
	$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];
	$j = $j + 1; 
	if (($_FILES["file"]["size"][$i] < 999999999999999)
	&& in_array($file_extension, $validextensions)) {
	if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
	$fname = $target_path;
	
	$sql = "INSERT INTO tbl_programs(name,description,program,file) VALUES ('$name','$description','$program','$fname')";
	$result = mysqli_query($con,$sql);
	 // echo '<script type="text/javascript">alert("New Sponsor Has Been Added."); window.location = "./add_sponsors.php";</script>';

		}
	}
}
									
}

function onadd_events($data){
global $con;
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$description = mysqli_real_escape_string($con,$_POST['description']);
	$eventdate = mysqli_real_escape_string($con,$_POST['eventdate']);

	$j = 0; 
	$target_path = "./uploads/"; 
	for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
	$validextensions = array("png", "jpeg", "jpg", "PNG","JPEG","JPG","gif","GIF");
	$ext = explode('.', basename($_FILES['file']['name'][$i]));
	$file_extension = end($ext);
	$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];
	$j = $j + 1; 
	if (($_FILES["file"]["size"][$i] < 999999999999999)
	&& in_array($file_extension, $validextensions)) {
	if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
	$fname = $target_path;
	
	$sql = "INSERT INTO tbl_events(name,description,eventdate,file) VALUES ('$name','$description','$eventdate','$fname')";
	$result = mysqli_query($con,$sql);
	 // echo '<script type="text/javascript">alert("New Sponsor Has Been Added."); window.location = "./add_sponsors.php";</script>';

		}
	}
}
									
}


function onadd_barrow($data){
global $con;
	$lrn = mysqli_real_escape_string($con,$_POST['lrn']);
	$studentname = mysqli_real_escape_string($con,$_POST['studentname']);
	$bookname = mysqli_real_escape_string($con,$_POST['bookname']);
	$bookid = mysqli_real_escape_string($con,$_POST['bookid']);
	$category = mysqli_real_escape_string($con,$_POST['category']);
	    
   $sql = "INSERT INTO tbl_barrowing (lrn,studentname,bookid,category,quantity) VALUES ('$lrn','$studentname','$bookid','$category','1')";
	$result = mysqli_query($con,$sql);
   echo '<script type="text/javascript">alert("New Record Has Been Added."); window.location = "../borrow_books.php";</script>';     	
	    	
}

?>