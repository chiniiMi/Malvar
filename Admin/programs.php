<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>PROGRAMS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">PROGRAMS</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">


         <!-- Right side columns -->
        <div class="col-lg-12">

          <!-- Recent Activity -->
          <div class="card">
            <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">PROGRAMS <span>| Information</span></h5>
            </div>
            <div class="card-body">
                    <!-- Multi Columns Form -->
                    <?php 

                             if (isset($_POST['onadd_programs'])){
                                onadd_programs($_POST);
                             }
                            
                      ?>

                 <form class="row g-3" method="POST" enctype="multipart/form-data">
                  <div class="col-md-6">
                    <label for="inputName5" class="form-label">Name</label>
                    <input type="text" required name="name" placeholder="Name" class="form-control" id="inputName5">
                  </div>

                  <div class="col-md-6">
                    <label for="inputName5" class="form-label">Description</label>
                    <input type="text" required name="description" placeholder="Description" class="form-control" id="inputName5">
                  </div>

                    <div class="col-md-6">
                    <label for="inputName5" class="form-label">Programs</label>
                      <select class="form-control" name="program">
                        <option value="Academic Track">Academic Track</option>
                        <option value="Technical Vocational & Livelihood Track">Technical Vocational & Livelihood Track</option>
                      </select>


                  </div>

                    <div class="col-12">
                <label class="control-label"><b>Upload Image</b></label>
                <br>
                   <input  required="" type='file' name="file[]" accept="image/*">
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_programs">ADD</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div><!-- End Right side columns -->

       
       <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">PROGRAMS <span>| Information</span></h5>
            </div>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Program</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php 
                      $query = "SELECT * FROM tbl_programs";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $name = $row['name'];
                        $description = $row['description'];
                        $program = $row['program'];
                      ?>



                         <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><span class="badge bg-success"><?php echo $program; ?></span></td>
                        <td>
                            <a class="btn btn-danger" href="php/delete_program.php?id=<?php echo $id; ?>"> <i class="bi bi-trash-fill"></i></a></td>
                      </tr>
                      



                    <?php } ?>






                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
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