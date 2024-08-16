<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Admin Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
           <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-12">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Students</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                      $query1="SELECT count(*) as totalstudents FROM tbl_students WHERE type='Student'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalstudents=$row['totalstudents'];
                        } 
                        }
                        ?>
                          <?php echo $totalstudents; ?></h6><span class="text-muted small pt-2 ps-1">Total Students</span>

                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End Customers Card -->

           



               <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-12">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Teachers</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-check"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                      $query1="SELECT count(*) as totalteacher FROM tbl_students WHERE type='Teacher'";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalteacher=$row['totalteacher'];
                        } 
                        }
                        ?>
                          <?php echo $totalteacher;?></h6><span class="text-muted small pt-2 ps-1">Total Teachers</span>

                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End Customers Card -->

             <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-12">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Books Available</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                      $query1="SELECT count(*) as totalbooks FROM tbl_inventory ";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalbooks=$row['totalbooks'];
                        } 
                        }
                        ?>
                          <?php echo $totalbooks;?></h6><span class="text-muted small pt-2 ps-1">Total Books</span>

                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End Customers Card -->


             <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-12">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Borrowed Books</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-book"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php 
                      $query1="SELECT count(*) as totalborrow FROM tbl_barrowing";
                      $result=mysqli_query($con,$query1);
                      if($result){
                          while($row=mysqli_fetch_assoc($result))
                        {
                              $totalborrow=$row['totalborrow'];
                        } 
                        }
                        ?>
                          <?php echo $totalborrow;?></h6><span class="text-muted small pt-2 ps-1">Total Borrowed Books</span>

                    </div>
                  </div>

                </div>
              </div>
            </div><!-- End Customers Card -->

        <!-- Left side columns -->
        <div class="col-lg-12">
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">Borrowed Records <span>| Records</span></h5>
               </div>
                <div class="card-body">
                  

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">LRN</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Section</th>
                        <th scope="col">Year Level</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Category</th>
                         <th scope="col">Days</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
<?php 
                      $query = "SELECT A.id,B.lrn,B.name,B.section,B.yearlevel,C.itemname,C.category FROM `tbl_barrowing` A
                        LEFT JOIN tbl_students B On A.lrn = B.lrn
                        LEFT JOIN tbl_inventory C ON C.id = A.bookid";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $lrn = $row['lrn'];
                        $name = $row['name'];
                        $section = $row['section'];
                        $yearlevel = $row['yearlevel'];
                        $itemname = $row['itemname'];
                        $category = $row['category'];
                      
                      ?>



                      <tr>
                        <td><?php echo $lrn; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $section; ?></td>
                        <td><?php echo $yearlevel; ?></td>
                        <td><?php echo $itemname; ?></td>
                        <td><?php echo $category; ?></td>
                         <td><?php echo '1'; ?></td>
                        <td>
                            <a class="btn btn-success"  href="php/return.php?id=<?php echo $id; ?>">Return Books</a></td>
                      </tr>
  <?php } ?>






                    </tbody>
                  </table>
                </div>

              </div>
            </div><!-- End Recent Sales -->

            

          </div>
        </div><!-- End Left side columns -->



                     

            

          </div>
        </div><!-- End Left side columns -->

       

      </div>
    </section>

  </main><!-- End #main -->


 <?php include 'footer.php'; ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <?php include 'script.php'; ?>

</body>

</html>