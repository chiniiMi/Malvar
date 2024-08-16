<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>ATTENDANCE MANAGEMENT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">ATTENDANCE MANAGEMENT</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Right side columns -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">ATTENDANCE</h5>
            </div>
            <div class="card-body">
             
              <!-- Multi Columns Form -->
              <form class="row g-3" action="CheckInOut.php" method="post">

                 <div class="col-md-12">
                  <label for="inputName5" class="form-label">LRN/ID NUMBER</label>
                  <input type="text" id="text" value="" onchange="myFunction()" required name="lrn" class="form-control" autofocus>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>
        </div><!-- End Right side columns -->


          <!-- Right side columns -->
        <div class="col-lg-6">
          <div class="card">
             <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">STUDENT INFORMATION</h5>
                </div>
            <div class="card-body">
             
             
                  <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                        <td>NAME</td>
                        <td>STUDENT ID</td>
                        <td>TIME IN</td>
                        <td>TIME OUT</td>
                        <td>LOGDATE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         date_default_timezone_set("Asia/Manila"); 
                        $date = date('Y-m-d');
                        if($con->connect_error){
                            die("Connection failed" .$con->connect_error);
                        }
                           $sql ="SELECT * FROM tbl_attendance LEFT JOIN tbl_students ON tbl_attendance.lrn=tbl_students.lrn WHERE LOGDATE='$date' AND type='Student'";
                           $query = $con->query($sql);
                           while ($row = $query->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['lrn'];?></td>
                                <td><?php echo $row['timein'];?></td>
                                <td><?php echo $row['timeout'];?></td>
                                <td><?php echo $row['LOGDATE'];?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                  </table>
           
            </div>
          </div>
        </div><!-- End Right side columns -->





             <!-- Right side columns -->
        <div class="col-lg-6">
          <div class="card">
               <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">TEACHER INFORMATION</h5>
                </div>
            <div class="card-body">

             
                  <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                        <td>NAME</td>
                        <td>ID NUMBER</td>
                        <td>TIME IN</td>
                        <td>TIME OUT</td>
                        <td>LOGDATE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         date_default_timezone_set("Asia/Manila"); 
                        $date = date('Y-m-d');
                        if($con->connect_error){
                            die("Connection failed" .$con->connect_error);
                        }
                           $sql ="SELECT * FROM tbl_attendance LEFT JOIN tbl_students ON tbl_attendance.lrn=tbl_students.lrn WHERE LOGDATE='$date' AND type='Teacher'";
                           $query = $con->query($sql);
                           while ($row = $query->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['lrn'];?></td>
                                <td><?php echo $row['timein'];?></td>
                                <td><?php echo $row['timeout'];?></td>
                                <td><?php echo $row['LOGDATE'];?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                  </table>
           
            </div>
          </div>
        </div><!-- End Right side columns -->


        

       
       

      </div>
    </section>

     <script>
            function myFunction() {
              var c = document.getElementById("text").value;
               document.getElementById('text').value=c;
               document.forms[0].submit();
            }
        </script>

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>BatStateU Students</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="">BatStateU Students</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <?php include 'script.php'; ?>

</body>

</html>