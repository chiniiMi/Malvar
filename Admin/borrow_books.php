<?php include 'head.php'; ?>
<body >
<?php include 's_nav.php'; ?>
<?php include 's_side.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>BORROW BOOKS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Books</a></li>
          <li class="breadcrumb-item active">BORROWING</li>
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

                       if (isset($_POST['onadd_barrow'])){
                          onadd_barrow($_POST);
                       }
                      
                ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data">

                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">LRN</label>
                   <input class="form-control" list="lrns" id="studentlist" name="lrn" autofocus>
                      <datalist id="lrns" >
                        <?php 
                            $query = "SELECT * FROM tbl_students";
                            $read = mysqli_query($con,$query) or die(mysqli_error());
                            while ($row = mysqli_fetch_array($read)){
                              $id=$row['id'];
                              $lrn = $row['lrn'];
                              $name = $row['name'];
                            
                        ?>
                        <option value="<?php echo $lrn;?>"  data-studentname="<?php echo $name;?>"></option>
                      <?php } ?>
                      </datalist>
                </div>


                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Student Name</label>
                  <input type="text" value="" readonly required name="studentname" class="form-control" id="studentname">
                </div>


                 <script>
                  debugger;
                   $('#studentlist').on('input', function() {
                      const value = $(this).val();
                      const data_valueitemname = $('#lrns [value="' + value + '"]').data('studentname');
                      document.getElementById("studentname").value = data_valueitemname;
                    });
                 </script>


                  <script>
                  

                   function ontest(value){
                      const value1 = value;
                      const data_valuecategory = $('#books [value="' + value1 + '"]').data('category');
                       const data_valuebookid = $('#books [value="' + value1 + '"]').data('bookid');
                      document.getElementById("category").value = data_valuecategory;
                      document.getElementById("bookid").value = data_valuebookid;
                   }
                 </script>

                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Book Name</label>
                   <input class="form-control" list="books" id="booklist" onchange="ontest(this.value)"  name="bookname">
                                  <datalist id="books" >
                                    <?php 
                                        $query = "SELECT * FROM tbl_inventory";
                                        $read = mysqli_query($con,$query) or die(mysqli_error());
                                        while ($row = mysqli_fetch_array($read)){
                                          $id=$row['id'];
                                          $itemname = $row['itemname'];
                                          $category = $row['category'];
                                          $initialstock = $row['initialstock'];
                                    ?>
                                    <option value="<?php echo $itemname;?>"  data-category="<?php echo $category;?>" data-bookid="<?php echo $id;?>"></option>
                                  <?php } ?>
                                  </datalist>
                </div>


                  <div class="col-md-6">
                  <label for="inputName5" class="form-label">Category</label>
                   <input type="text" value="" required hidden name="bookid" id="bookid">
                  <input type="text" value="" required name="category" readonly class="form-control" id="category">
                </div>

                  


               
                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_barrow">Save Borrowing Data</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        

          
         

        </div><!-- End Right side columns -->
      

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