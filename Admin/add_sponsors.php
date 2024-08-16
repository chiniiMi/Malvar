<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Partner/Sponsors</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Partner/Sponsors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">


         <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Partner/Sponsors<span>| Accounts</span></h5>
                <?php 

                       if (isset($_POST['onadd_sponsor'])){
                          onadd_sponsor($_POST);
                       }
                      
                ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data">

                 <div class="col-md-12">
                  <label for="inputName5" class="form-label">Name</label>
                  <input type="text" required name="name" class="form-control" id="inputName5">
                </div>

                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Contact Person</label>
                  <input type="text" required name="contactperson" class="form-control" id="inputName5">
                </div>

                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Company Address</label>
                  <input type="text" class="form-control" id="inputAddres5s" required name="address" placeholder="">
                </div>

                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Phone Number</label>
                  <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="inputphone" required name="contactnumber" maxlength="11" placeholder="">
                </div>

                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Longitude</label>
                  <input type="text" class="form-control" id="inputAddres5s" required name="longitude" placeholder="">
                </div>


                <div class="col-12">
                  <label for="inputAddress5" class="form-label">Latitude</label>
                  <input type="text" class="form-control" id="inputAddres5s" required name="latitude" placeholder="">
                </div>

                <div class="col-12">
                <label class="control-label"><b>Upload Image</b></label>
                <br>
                   <input  required="" type='file' name="file[]" accept="image/*">
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_sponsor">Save Account</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        

          
         

        </div><!-- End Right side columns -->

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            

           

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Sponsors <span>| Records</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Contact Person</th>
                        <th scope="col">Address</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT * FROM tbl_sponsor";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $name = $row['name'];
                        $contactperson = $row['contactperson'];
                        $address = $row['address'];
                        $contactnumber = $row['contactnumber'];
                        $longitude = $row['longitude'];
                        $latitude = $row['latitude'];
                        $file = $row['file'];

                      ?>



                      <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $contactperson; ?></td>
                        <td><span class="badge bg-success"><?php echo $address; ?></span></td>
                        <td><?php echo $contactnumber; ?></td>
                        <td><a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal<?php echo $id; ?>"> <i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger" href="php/delete_sponsor.php?id=<?php echo $id; ?>"> <i class="bi bi-trash-fill"></i></a></td>
                      </tr>
                      




                      <div class="modal fade" id="basicModal<?php echo $id; ?>" tabindex="-1">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Update Information</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="card">
                                <div class="card-body"> 
                                  <br>
                                  <br>
                              <!-- Multi Columns Form -->
                              <form class="row g-3" method="POST" action="php/edit_sponsor.php">
                                 <input type="text" required value="<?php echo $id; ?>" name="id" class="form-control" hidden>
                                 <div class="col-md-12">
                                  <label for="inputName5" class="form-label">Name</label>
                                  <input type="text" required value="<?php echo $name; ?>" name="name" class="form-control" id="inputName5">
                                </div>

                                <div class="col-md-12">
                                  <label for="inputName5" class="form-label">Contact Person</label>
                                  <input type="text" required value="<?php echo $contactperson; ?>" name="contactperson" class="form-control" id="inputName5">
                                </div>

                                <div class="col-12">
                                  <label for="inputAddress5" class="form-label">Company Address</label>
                                  <input type="text" class="form-control" value="<?php echo $address; ?>" id="inputAddres5s" required name="address" placeholder="">
                                </div>

                                <div class="col-12">
                                  <label for="inputAddress5" class="form-label">Contact Number</label>
                                  <input type="text" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57" id="inputphone" required value="<?php echo $contactnumber; ?>" name="contactnumber" maxlength="11" placeholder="">
                                </div>

                                <div class="col-12">
                                  <label for="inputAddress5" class="form-label">Longitude</label>
                                  <input type="text" class="form-control" value="<?php echo $longitude; ?>" id="inputAddres5s" required name="longitude" placeholder="">
                                </div>


                                <div class="col-12">
                                  <label for="inputAddress5" class="form-label">Latitude</label>
                                  <input type="text" class="form-control" id="inputAddres5s" required value="<?php echo $latitude; ?>" name="latitude" placeholder="">
                                </div>
                               

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="onadd_admin">Save</button>
                                </div>
                              </form><!-- End Multi Columns Form -->

                              <br>
                                </div>
                            </div>
                          </div>
                          </div>
                        </div>
                      </div><!-- End Disabled Backdrop Modal-->





                    <?php } ?>






                    </tbody>
                  </table>

                  <div class="col-md-4">
                         <a style="width:100%" class="btn btn-info" href="print_sponsor.php" target="_blank"><i class="bi bi-printer"></i> Print All Sponsors</a>
                         <br>
                    </div>

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
      Designed by <a href="">HCCP ALA-EH</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <?php include 'script.php'; ?>

</body>

</html>