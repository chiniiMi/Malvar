<?php include 'head.php'; ?>
<body >
<?php include 'nav.php'; ?>
<?php include 'sidebar.php'; ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>REPORTS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">REPORTS</li>
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
                  <h5 class="card-title" style="color:white;">REPORTS <span>| Information</span></h5>
            </div>
            <div class="card-body">
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" action="generate_report.php" target="_blank">
                 <div class="col-md-6">
                  <label for="inputName5" class="form-label">Date From</label>
                  <input type="date" value="" required name="datefrom" class="form-control" id="inputName5">
                </div>

                   <div class="col-md-6">
                  <label for="inputName5" class="form-label">Date To</label>
                  <input type="date" value="" required name="dateto" class="form-control" id="inputName5">
                </div>

                <div class="">
                  <button type="submit" class="btn btn-primary" name="onadd_teacher">GENERATE</button>
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