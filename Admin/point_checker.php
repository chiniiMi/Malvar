<?php 
include'connection/conn.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HCCP-ALAH-EH</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/HCCP-ALA EH.png" rel="icon">
  <link href="img/HCCP-ALA EH.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body >
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
           <img src="img/HCCP-ALA EH.png" alt="" height="50px">

                  <span class="d-none d-lg-block">HCCP ALA-EH</span>
      </a>
  <!--     <i class="bi bi-list toggle-sidebar-btn"></i> -->
    </div><!-- End Logo -->

   
   

  </header><!-- End Header -->

    <div class="pagetitle">
      <h1>POINT CHECKER</h1>
     
    </div><!-- End Page Title -->

      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            

           

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">POINTS CHECKER<span>| Records</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                       <th scope="col">Fullname</th>
                        <th scope="col">Membership Status</th>
                        <th scope="col">Points</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php 
                      $query = "SELECT * FROM tbl_member";
                      $read = mysqli_query($con,$query) or die(mysqli_error());
                      while ($row = mysqli_fetch_array($read)){
                        $id=$row['id'];
                        $fullname = $row['fullname'];
                        $platenumber = $row['platenumber'];
                        $yearmodel = $row['yearmodel'];
                        $contactnumber = $row['contactnumber'];
                        $membershipstatus = $row['membershipstatus'];
                        $points = $row['points'];

                        
                       
                       

                      ?>



                      <tr>
                        <td><?php echo $fullname; ?></td>
                        <td><?php echo $membershipstatus; ?></td>
                         <td><span class="badge bg-success"><?php echo $points; ?></span></td>


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

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>HCCP ALA-EH</span></strong>. All Rights Reserved
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