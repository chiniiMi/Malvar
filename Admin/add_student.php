<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>STUDENT MANAGEMENT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">STUDENT MANAGEMENT</li>
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
                  <h5 class="card-title" style="color:white;">Student <span>| Information</span></h5>
               </div>
            <div class="card-body">
                <?php 

                       if (isset($_POST['onadd_student'])){
                          onadd_student($_POST);
                       }
                      
                ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST">

                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Full Name</label>
                  <input type="text" value="" required name="name" class="form-control" id="inputName5">
                </div>

                  <div class="col-md-6">
                                  <label for="inputName5" class="form-label">Gender</label>
                                  <select class="form-select" name="gender">
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                          </select>
                                   </div>



                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">LRN/STUDENT NUMBER</label>
                  <input type="text" value="" required name="lrn" class="form-control" id="inputName5">
                </div>



                <div class="col-md-6">
                  <label for="inputName5" class="form-label">School Year</label>
                  <select class="form-select" name="schoolyear">
                          <option value="2022-2023">2022-2023</option>
                          <option value="2023-2024">2023-2024</option>
                          <option value="2023-2024">2024-2025</option>
                          <option value="2025-2026">2025-2026</option>
                          <option value="2026-2027">2026-2027</option>
                          <option value="2027-2028">2027-2028</option>
                          <option value="2028-2029">2028-2029</option>
                          <option value="2029-2030">2029-2030</option>
                          </select>
                </div>

                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Year Level</label>
                  <select class="form-select" name="yearlevel">
                          <option value="Grade 11">Grade 11</option>
                          <option value="Grade 12">Grade 12</option>
                          </select>
                </div>

                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Strand</label>
                  <select class="form-select" name="strand">
                          <option value="HUMSS">HUMSS</option>
                          <option value="STEM">STEM</option>
                          <option value="ABM">ABM</option>
                          <option value="AUTO">AUTO</option>
                          <option value="EIM">EIM</option>
                          <option value="ICT">ICT</option>
                          <option value="HE">HE</option>

                          </select>
                </div>


                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Contact Number</label>
                  <input type="text" required name="contactnumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" class="form-control" id="inputPassword5">
                </div>


              

                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Parent/Guardian Name</label>
                  <input type="text" value="" required name="parents" class="form-control" id="inputName5">
                </div>

                <div class="col-md-6">
                  <label for="inputPassword5" class="form-label">Parent/Guardian Contact Number</label>
                  <input type="text" required name="parentscontactnumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" class="form-control" id="inputPassword5">
                </div>

                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Section</label>
                  <select class="form-select" name="section">
                          <option value="Section 1">111</option>
                          <option value="Section 2">112</option>
                          <option value="Section 3">113</option>
                          <option value="Section 4">114</option>
                          <option value="Section 5">115</option>
                          <option value="Section 6">116</option>
                          <option value="Section 7">117</option>
                          <option value="Section 8">118</option>
                          <option value="Section 9">119</option>
                          <option value="Section 10">121</option>
                          <option value="Section 11">122</option>
                          <option value="Section 12">123</option>
                          <option value="Section 13">124</option>
                          <option value="Section 14">125</option>
                          <option value="Section 15">126</option>
                          <option value="Section 16">127</option>
                          <option value="Section 17">128</option>
                          <option value="Section 18">129</option>

                          </select>
                </div>


                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Email</label>
                  <input type="text" value=""  name="email" class="form-control" id="inputName5">
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_student">Save Account</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        

          
         

        </div><!-- End Right side columns -->

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            

           

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-header" style="background-color:rgb(0, 39, 76)">
                  <h5 class="card-title" style="color:white;">Student Information <span>| Records</span></h5>
               </div>
                <div class="card-body">
                  

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       <th scope="col">Fullname</th>
                        <th scope="col">LRN</th>
                        <th scope="col">School Year</th>
                        <th scope="col">Strand</th>
                        <th scope="col">Section</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT * FROM tbl_students WHERE type='Student'";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $name = $row['name'];
                        $gender = $row['gender'];
                        $lrn = $row['lrn'];
                        $schoolyear = $row['schoolyear'];
                        $yearlevel = $row['yearlevel'];
                        $strand = $row['strand'];
                        $contactnumber = $row['contactnumber'];
                        $parents = $row['parents'];
                        $parentscontactnumber = $row['parentscontactnumber'];
                        $section = $row['section'];
                        $email = $row['email'];
                        $file = $row['file'];
                        $username = $row['username'];
                        $password = $row['password'];
                      ?>



                      <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $lrn; ?></td>
                        <td><?php echo $schoolyear; ?></td>
                        <td><?php echo $strand; ?></td>
                        <td><?php echo $section; ?></td>
                         <td><?php echo $contactnumber; ?></td>


                        <td><a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal<?php echo $id; ?>"> <i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger" href="php/delete_student.php?id=<?php echo $id; ?>"> <i class="bi bi-trash-fill"></i></a></td>
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
                              <form class="row g-3" method="POST" action="php/edit_student.php">


                                    <input type="hidden" value="<?php echo $id;?>" required name="id" class="form-control" id="inputName5">
                                  
                                

                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Fullname</label>
                                    <input type="text" value="<?php echo $name;?>" required name="name" class="form-control" id="inputName5">
                                  </div>

                                  <div class="col-md-6">
                                  <label for="inputName5" class="form-label">Gender</label>
                                  <select class="form-select" name="gender">
                                            <option value="<?php echo $gender;?>" style="color:darkred;"><?php echo $gender;?></option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Female</option>
                                          </select>
                                   </div>


                                   <div class="col-md-12">
                                    <label for="inputName5" class="form-label">LRN/STUDENT NUMBER</label>
                                    <input type="text" value="<?php echo $lrn;?>" required name="lrn" class="form-control" id="inputName5">
                                  </div>



                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">School Year</label>
                                    <select class="form-select" name="schoolyear">
                                             <option value="<?php echo $schoolyear;?>" style="color:darkred;"><?php echo $schoolyear;?></option>
                                            <option value="2022-2023">2022-2023</option>
                                            <option value="2023-2024">2023-2024</option>
                                            </select>
                                  </div>

                                  
                                <div class="col-md-6">
                                  <label for="inputName5" class="form-label">Year Level</label>
                                  <select class="form-select" name="yearlevel">
                                            <option value="<?php echo $yearlevel;?>" style="color:darkred;"><?php echo $yearlevel;?></option>
                                          <option value="Grade 11">Grade 11</option>
                                          <option value="Grade 12">Grade 12</option>
                                          </select>
                                </div>

                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Strand</label>
                                    <select class="form-select" name="strand">
                                            <option value="<?php echo $strand;?>" style="color:darkred;"><?php echo $strand;?></option>
                                            <option value="HUMS">HUMS</option>
                                            </select>
                                  </div>


                                  <div class="col-md-12">
                                    <label for="inputPassword5" class="form-label">Contact Number</label>
                                    <input type="text" value="<?php echo $contactnumber;?>" required name="contactnumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" class="form-control" id="inputPassword5">
                                  </div>


                                   <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Parent/Guardian Name</label>
                                    <input type="text" value="<?php echo $parents;?>" required name="parents" class="form-control" id="inputName5">
                                  </div>

                                

                                  <div class="col-md-12">
                                    <label for="inputPassword5" class="form-label">Parent/Guardian Contact Number</label>
                                    <input type="text" required value="<?php echo $parentscontactnumber;?>" name="parentscontactnumber" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="11" class="form-control" id="inputPassword5">
                                  </div>

                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Section</label>
                                    <select class="form-select" name="section">
                                      <option value="<?php echo $section;?>" style="color:darkred;"><?php echo $section;?></option>
                                            <option value="Section 1">Section 1</option>
                                            </select>
                                  </div>


                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Email</label>
                                    <input type="text" value="<?php echo $email;?>"  name="email" class="form-control" id="inputName5">
                                  </div>

                                  <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Parent/Guardian Password</label>
                                    <input type="text" value="<?php echo $password;?>"  name="password" class="form-control" id="inputName5">
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