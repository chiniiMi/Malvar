<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

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


         <!-- Right side columns -->
        <div class="col-lg-12">
           <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
            </script>
          <!-- Recent Activity -->
          <div class="card">
            <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">Books <span>| Information</span></h5>
               </div>
            <div class="card-body">
                <?php 

                       if (isset($_POST['onadd_learning'])){
                          onadd_learning($_POST);
                       }
                      
                ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data">

                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Book Name</label>
                  <input type="text" value="" required name="itemname" class="form-control" id="inputName5">
                </div>

                  <div class="col-md-6">
                    <label for="inputName5" class="form-label">Category</label>
                    <select class="form-select" name="category">
                            <option value="Accountancy">Accountancy</option>
                            <option value="Economics">Applied Economics</option>
                            <option value="Biography">Biography</option>
                            <option value="Biology">Biology</option>
                            <option value="Arts">Communication Arts</option>
                            <option value="Entrep">Entrepreneurship</option>
                            <option value="Fili">Filipino</option>
                            <option value="Geography">Geography</option>
                            <option value="History">History</option>
                            <option value="Literature">Literature</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Math">Mathematics</option>
                            <option value="Philosophy">Philosophy</option>
                            <option value="Psychology">Psychology</option>
                            <option value="Polsci">Political Science</option>
                            <option value="Religion">Religion</option>
                            <option value="Research">Research</option>
                            <option value="Socsci">Social Science</option>
                            <option value="Scitech">Science & Technology</option>
                           
                            </select>
                     </div>
                

                 <div class="mb-3 col-md-6">
                    <label class="form-label">Upload File</label>
                    <input class="form-control custom-file-input" required type="file" id="customFile" name="profile" accept="docs/*"/>
                 </div>


               
                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_learning">Save Learning Materials</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        

          
         

        </div><!-- End Right side columns -->
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
                        <td><a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal<?php echo $id; ?>"> <i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger" href="php/delete_items.php?id=<?php echo $id; ?>"> <i class="bi bi-trash-fill"></i></a>
                            <a class="btn btn-success" download="" href="<?php echo $file;?>"> Download</a></td>
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
                              <form class="row g-3" method="POST" action="php/edit_learning.php">


                                    <input type="hidden" value="<?php echo $id;?>" required name="id" class="form-control" id="inputName5">
                                  
                                

                                   <div class="col-md-12">
                                  <label for="inputName5" class="form-label">Item Name</label>
                                  <input type="text" readonly value="<?php echo $itemname;?>" required name="itemname" class="form-control" id="inputName5">
                                </div>

                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Category</label>
                                    <select class="form-select" name="category">
                                            <option value="<?php echo $category;?>"><?php echo $category;?></option>
                                            <option value="Books">Books</option>
                                            <option value="Teaching Aids">Teaching Aids</option>
                                             <option value="IT Tools">IT Tools</option>
                                              <option value="Classromm Furnitures">Classromm Furnitures</option>
                                            </select>
                                     </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="onadd_admin">Update Information</button>
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