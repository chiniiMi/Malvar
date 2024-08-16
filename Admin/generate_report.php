<?php include 'head.php';

$datefrom = mysqli_real_escape_string($con,$_POST['datefrom']);
$dateto = mysqli_real_escape_string($con,$_POST['dateto']);
 ?>
<body >








         <!-- Right side columns -->
        <div class="col-lg-12">

            <!-- Right side columns -->
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header" style="background-color:rgb(0, 39, 76)">
                <center><h5 class="card-title" style="color:black;">ATTENDANCE INFORMATION</h5></center>
                </div>




            <div class="card-body">
             
             
                  <table class="table table-borderless">
                    <thead>
                        <tr>
                            <td>NAME</td>
                            <td>LRN/ID NUMBER</td>
                            <td>TIME IN</td>
                            <td>TIME OUT</td>
                            <td>LOGDATE</td>
                            <td>TYPE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         date_default_timezone_set("Asia/Manila"); 
                        $date = date('Y-m-d');
                        if($con->connect_error){
                            die("Connection failed" .$con->connect_error);
                        }
                           $sql ="SELECT * FROM tbl_attendance LEFT JOIN tbl_students ON tbl_attendance.lrn=tbl_students.lrn WHERE tbl_attendance.LOGDATE BETWEEN '". $datefrom."' AND '". $dateto."' AND type='Student'";
                           $query = $con->query($sql);
                           while ($row = $query->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['lrn'];?></td>
                                <td><?php echo $row['timein'];?></td>
                                <td><?php echo $row['timeout'];?></td>
                                <td><?php echo $row['LOGDATE'];?></td>
                                <td><?php echo $row['type'];?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                  </table>
           
            </div>
          </div>
        </div><!-- End Right side columns -->
         

        </div><!-- End Right side columns -->


        <section class="section dashboard">
      <div class="row">

         <div class="card-body">

                     <?php 
                      $query1="SELECT count(*) as totalstudentsmalein FROM tbl_attendance INNER JOIN tbl_students ON tbl_attendance.lrn=tbl_students.lrn WHERE tbl_attendance.STATUS='0' AND tbl_attendance.LOGDATE BETWEEN '". $datefrom."' AND '". $dateto."' AND type='Student' AND tbl_students.gender='Male'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalstudentsmalein=$row['totalstudentsmalein'];
                        } 
                        }
                        ?>


                         <?php 
                      $query1="SELECT count(*) as totalstudentsfemalein FROM tbl_attendance INNER JOIN tbl_students ON tbl_attendance.lrn=tbl_students.lrn WHERE tbl_attendance.STATUS='0' AND tbl_attendance.LOGDATE BETWEEN '". $datefrom."' AND '". $dateto."' AND type='Student' AND tbl_students.gender='Female'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalstudentsfemalein=$row['totalstudentsfemalein'];
                        } 
                        }
                        ?>


                         <?php 
                      $query1="SELECT count(*) as totalstudentsmaleout FROM tbl_attendance INNER JOIN tbl_students ON tbl_attendance.lrn=tbl_students.lrn WHERE tbl_attendance.STATUS='1' AND tbl_attendance.LOGDATE BETWEEN '". $datefrom."' AND '". $dateto."' AND type='Student' AND tbl_students.gender='Male'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalstudentsmaleout=$row['totalstudentsmaleout'];
                        } 
                        }
                        ?>


                         <?php 
                      $query1="SELECT count(*) as totalstudentsfemaleinout FROM tbl_attendance INNER JOIN tbl_students ON tbl_attendance.lrn=tbl_students.lrn WHERE tbl_attendance.STATUS='1' AND tbl_attendance.LOGDATE BETWEEN '". $datefrom."' AND '". $dateto."' AND type='Student' AND tbl_students.gender='Female'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalstudentsfemaleinout=$row['totalstudentsfemaleinout'];
                        } 
                        }
                        ?>


                         <?php 
                      $query1="SELECT count(*) as totalgrade11 FROM tbl_attendance INNER JOIN tbl_students ON tbl_attendance.lrn=tbl_students.lrn WHERE tbl_attendance.LOGDATE BETWEEN '". $datefrom."' AND '". $dateto."' AND type='Student' AND tbl_students.yearlevel='Grade 11'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalgrade11=$row['totalgrade11'];
                        } 
                        }
                        ?>


                           <?php 
                      $query1="SELECT count(*) as totalgrade12 FROM tbl_attendance INNER JOIN tbl_students ON tbl_attendance.lrn=tbl_students.lrn WHERE tbl_attendance.LOGDATE BETWEEN '". $datefrom."' AND '". $dateto."' AND type='Student' AND tbl_students.yearlevel='Grade 12'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalgrade12=$row['totalgrade12'];
                        } 
                        }
                        ?>


                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    </div>
                    <div class="ps-3">
                      <h6>Total No. of Students IN: <span class="card-title">Male: <?php echo $totalstudentsmalein; ?></span> <span class="card-title">Female: <?php echo $totalstudentsfemalein; ?></span></h6> 


                      <br>

                     <h6>Total No. of Students OUT: <span class="card-title">Male: <?php echo $totalstudentsmaleout; ?></span> <span class="card-title">Female: <?php echo $totalstudentsfemaleinout; ?></span></h6> 

                      <br>
                      <h6>Total No. of Grade 11: <span class="card-title"><?php echo $totalgrade11; ?></span> </h6>
                      <br>
                      <h6 >Total No. of Grade 12: <span class="card-title"><?php echo $totalgrade12; ?></span></h6>

                    </div>
                
                  </div>

                </div>
            
          </div>
        </section>

<script type="text/javascript"> window.print();</script>



  <?php include 'script.php'; ?>

</body>

</html>