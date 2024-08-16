<?php include 'head.php'; ?>
<body >



<center>
  <img src="img/HCCP-ALA EH.png" alt="..." style="width:100px; height:100px; " />
  <br>
  <h3><b>HCCP ALA-EH CHAPTER</b></h3>
</center>

              <div class="card ">
                <div class="card-body">
                  <h5 class="card-title">ALL SPONSORS<span>| Records</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Contact Person</th>
                        <th scope="col">Address</th>
                        <th scope="col">Contact Number</th>
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
                        <td><?php echo $address; ?></td>
                        <td><?php echo $contactnumber; ?></td>
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