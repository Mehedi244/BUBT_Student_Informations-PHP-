<?php 
 include 'inc/adminheader.php';



 if(isset($_GET['del'])){
    $i = $_GET['del'];

    $sql = "DELETE FROM studentinfo WHERE id = '$i'";
    mysqli_query($cn, $sql);
  }

 ?>

 <style type="text/css">
   input {
    outline: none;
    margin: 0;
    border: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    width: 68% !important;
    font-size: 14px;
    font-family: inherit;
}
 </style>

     
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
          Bangladesh University of Business And Technology <br>
          <span style="font-size: 14px;text-transform: uppercase;"> Intake : 32</span>
        </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
         <img style="width: 60px;" src="images/logo.png">
        </div>
      </div>

      
      
      
      <div class="table-responsive">
        <div class="row">
        <div class="col-md-12">
          
              <table id="myTable" class="table table-hover table-striped">
                <thead>
                        <tr>
                          <th scope="col">SL</th>
                          <th scope="col">Photo</th>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Phone</th>
                          <th scope="col">View</th>
                          <th scope="col">Update</th>
                          <th scope="col">Delete</th>
                          
                          
                         
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $sql  = "SELECT * from studentinfo ORDER BY id DESC";
                            $i = 0;
                            $result = mysqli_query($cn, $sql);

                              while ($row = mysqli_fetch_array($result)) {
                              $i++;
                          ?>
                        <tr>
                          <th scope="row"><?php echo $i ?></th>
                          <td ><img style="width: 25px;" src="images/<?php echo $row['photo']; ?>"></td>
                          <td><?php echo $row['student_id']; ?></td>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['phone']; ?></td>
                          <td><a id="btn1" href="details.php?details=<?php echo $row['id']; ?>"><span data-feather="eye"></span></a></td>

                          
                            <td><a id="btn1" href="update-student-admin.php?edit=<?php echo $row['id']; ?>"><span data-feather="edit"></span></a></td>

                            <td><a id="btn1"  href="adminindex.php?del=<?php echo $row['id']; ?>"><span data-feather="trash-2"></span></a></td>
                          <?php } ?>

                          

                        </tr>
                      
                    </tbody>
                    </table>
                </div>
              </div>
            </div>



      <?php include'inc/footer.php' ?>
