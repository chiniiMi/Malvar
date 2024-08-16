<?php include 'head.php'; ?>
<body >



<center>
  <img src="img/HCCP-ALA EH.png" alt="..." style="width:100px; height:100px; " />
  <br>
  <h3><b>HCCP ALA-EH CHAPTER</b></h3>
</center>

              <div class="card ">
                <div class="card-body">
                  <h5 class="card-title">ALL Newbie Members<span>| Records</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Fullname</th>
                        <th scope="col">Plate Number</th>
                        <th scope="col">Year Model</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Membership Status</th>
                        <th scope="col">Points</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                      $query = "SELECT * FROM tbl_member where membershipstatus='Newbie'";
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
                        <td><?php echo $platenumber; ?></td>
                        <td><?php echo $yearmodel; ?></td>
                        <td><?php echo $contactnumber; ?></td>
                        <td><?php echo $membershipstatus; ?></td>
                         <td><?php echo $points; ?></td>
                      </tr>





                    <?php } ?>






                    </tbody>
                  </table>

                </div>

              </div>



<script type="text/javascript">
    window.print();
</script>

      


</body>

</html>