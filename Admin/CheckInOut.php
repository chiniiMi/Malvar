<?php
    session_start();
    include'connection/conn.php'; 


    if($con->connect_error){
        die("Connection failed" .$con->connect_error);
    }

    if(isset($_POST['lrn'])){
        date_default_timezone_set("Asia/Manila"); 
        $lrn =$_POST['lrn'];
		$date = date('Y-m-d');
		$time = date('h:i a');
		$status = "";
		$sql = "SELECT * FROM tbl_students WHERE lrn = '$lrn'";
		$query = $con->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find LRN number '.$lrn;
		}else{
				$row = $query->fetch_assoc();
				$id = $row['lrn'];
				$contactnumber = $row['contactnumber'];
				$sql ="SELECT * FROM tbl_attendance WHERE lrn='$id' AND LOGDATE='$date' AND STATUS='0'";
				$query=$con->query($sql);
				if($query->num_rows>0){
				$sql = "UPDATE tbl_attendance SET timeout='$time', STATUS='1' WHERE lrn='$lrn' AND LOGDATE='$date' AND STATUS='0'";
				$query=$con->query($sql);
				$_SESSION['success'] = 'Successfuly Time Out: '.$row['name'].'';
				$status = "Time-Out";


			}else{
					$sql = "INSERT INTO tbl_attendance(lrn,timein,LOGDATE,STATUS) VALUES('$lrn','$time','$date','0')";
					if($con->query($sql) ===TRUE){
					 $_SESSION['success'] = 'Successfuly Time In: '.$row['name'].'';
				$status = "Time-In";
			 }else{
			  $_SESSION['error'] = $con->error;
		   }	
		}


// COMMENT THIS FOR TEXTING..
		
		$ch=curl_init();
	    $parameters = array(
	        'apikey' => '0dcf5cacd09c4b50f31708e0fb9f7a40', //Your API KEY
	        'number' => ''.$contactnumber.'',
	        'message' => 'Hi this is from MSHS,Your Son/Daughter Has Been '.$status.' on '.$date.':'.$time.'.',
	        'sendername' => 'SEMAPHORE'
	    );
	    curl_setopt($ch,CURLOPT_URL,'https://semaphore.co/api/v4/messages');
	    curl_setopt($ch,CURLOPT_POST, 1 );
	    //Send the parameters set above with the request
	    curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($parameters));
	    // Receive response from server
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	    $output = curl_exec($ch);
	    curl_close($ch);


// COMMENT THIS FOR TEXTING..
	}

	}else{
		$_SESSION['error'] = 'Please scan your LRN number';
}
header("location: t_attendance.php");
	   
$con->close();
?>