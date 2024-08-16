<?php include 'head.php'; ?>
<body >
<?php include 's_nav.php'; ?>
<?php include 's_side.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Learning Materials</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Materials</a></li>
          <li class="breadcrumb-item active">Learning Materials</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      
        <style type="text/css">
          .badge {
            background-color: red;
            color: white;
            padding: 4px 8px;
            text-align: center;
            border-radius: 5px;
          }
        </style>
        <!-- Left side columns -->
        <div class="col-lg-12">

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">Learning Materials Information <span>| Records</span></h5>
               </div>
                <div class="card-body">
                  

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       
                        <th scope="col">Item Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT A.id,A.itemname,A.category,A.file  FROM tbl_learning_materials A";
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
                            <a class="btn btn-success" download="" href="<?php echo $file;?>"> Download</a></td>
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
    </section>

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