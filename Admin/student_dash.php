<?php include 'head.php'; ?>
<body >
<?php include 's_nav.php'; ?>
<?php include 's_side.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Student Dashboard</h1>
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
                  <h5 class="card-title">Borrowed Books</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon d-flex align-items-center justify-content-center" style="
                      background-color:none;
                      " >
                      <img src="../assets/img/icons/R.png" style="
                      width:50px;
                      height:auto;
                      " alt="icon">
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
            </div>
          </section>
        </div><!-- End Customers Card -->
            

          </div>
        </div><!-- End Left side columns -->
       

      </div>
    </section>


           <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">What's New<span></span></h5>
               </div>
                <div class="card-body">
                  

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       
                        <th scope="col">Item Name</th>
                        <th scope="col">Category</th>
                        
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT A.id,A.itemname,A.category,A.file  FROM tbl_inventory A";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $itemname = $row['itemname'];
                         $category = $row['category'];
                        $file = $row['file'];
                      ?>



                      <tr>
                        <td><?php echo $itemname; ?></td>
                        <td><?php echo $category; ?></td>
                        <td>
                           </td>
                      </tr>





                    <?php } ?>






                    </tbody>
                  </table>
                </div>

              </div>
            </div><!-- End Recent Sales -->
  </main><!-- End #main -->


 <?php include 'footer.php'; ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <?php include 'script.php'; ?>

</body>

</html>