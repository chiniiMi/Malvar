 

 <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="background-color:rgb(0, 39, 76)">

    <ul class="sidebar-nav" id="sidebar-nav" style="background-color:rgb(0, 39, 76)">

      <li class="nav-item" >
        <a class="nav-link " href="dashboard.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-grid" style="color:#ffb31a"></i>
          <span style="color:#ffb31a">Dashboard</span>
        </a>
      </li>


       <?php
      if($_SESSION['usertype'] =="Admin" ){
           echo ' <li class="nav-item">
        <a class="nav-link " href="add_student.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-people-fill" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Students <span class="badge bg-danger"></span></span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="add_teacher.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-person-check" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Teachers <span class="badge bg-danger"></span></span>
        </a>
      </li>
       <a class="nav-link " href="admin_add.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-plus" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Add Learning Materials<span class="badge bg-danger"></span></span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="add_items.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-plus" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Add Books<span class="badge bg-danger"></span></span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link " href="ad_borrow.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-book" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Borrowing<span class="badge bg-danger"></span></span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="reports.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-printer" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Reports<span class="badge bg-danger"></span></span>
        </a>
      </li>

      ';

      }
      ?>



     





       <?php
      if($_SESSION['usertype'] =="Teacher" ){
           echo '<li class="nav-item">
        <a class="nav-link " href="add_learning_materials.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-plus" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Add Learning Materials<span class="badge bg-danger"></span></span>
        </a>
      </li>
        <li class="nav-item">
        <a class="nav-link " target="_blank" href="t_attendance.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-building" style="color:#ffb31a"></i>
          <span style="color:#ffb31a">Attendance</span>
        </a>
      </li>';

      }
      ?>

      

      <?php
      if($_SESSION['usertype'] =="Student" || $_SESSION['usertype'] =="Teacher" ){
           echo ' <li class="nav-item">
        <a class="nav-link " href="learning_materials_records.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-files" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Learning Materials Record<span class="badge bg-danger"></span></span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link " href="barrow_records.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-files" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Barrowing Records<span class="badge bg-danger"></span></span>
        </a>
      </li>


      ';

      }
      ?>

     

       



       


      <!--   -->



      


     <!--  <li class="nav-item">
        <a class="nav-link " href="programs.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-file" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Programs <span class="badge bg-danger"></span></span>
        </a>
      </li>

        <li class="nav-item">
        <a class="nav-link " href="events.php" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-calendar" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Events <span class="badge bg-danger"></span></span>
        </a>
      </li> -->

      <!--  <li class="nav-item">
        <a class="nav-link " href="../index.php" target="_blank" style="background-color:rgb(0, 39, 76)">
          <i class="bi bi-calendar" style="color:#ffb31a"></i>
          <span style="color:#ffb31a;">Back to Home Page <span class="badge bg-danger"></span></span>
        </a>
      </li> -->

    </ul>

  </aside><!-- End Sidebar-->