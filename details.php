<?php include 'inc/header.php'; ?>
<?php 
    error_reporting(0);
   include 'connection/db.php';
 ?>

 <style type="text/css">
   
.wrapper {
    background: #ecf7ed;
    padding: 60px 60px;
    color: black;
}
.left{
    font-weight: bold;
    text-transform: capitalize;
}
.left p{
    margin:2px;
}
.mid p {
    font-weight: bold;
    text-transform: capitalize;
    margin: 2px;
    text-align: center;
    text-decoration: underline;
}
.right img {
    width: 107px;
    float: right;
}
h4 {
    background: #3485e9;
    padding: 0px 5px;
    margin: 19px 0px;
    font-size: 20px;
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

      
      
        <div class="row">
        <div class="col-md-12">
          <?php 
            if (isset($_GET['details'])) {
              $i = $_GET['details'];

              $sql2 = "SELECT * FROM studentinfo WHERE id = '$i'";
              $run2 = mysqli_query($cn,$sql2);
              $row = mysqli_fetch_array($run2);
            
            ?>
          <div class="wrapper">
            <div class="row">
              <div class="col-md-5 col-sm-5 col-xs-5">
                  <div class="left">

                      <p>Name : <?php echo $row['name']; ?></p>
                      <p>ID : <?php echo $row['student_id']; ?></p>
                      <p>Phone : <?php echo $row['phone']; ?></p>
                      <p>Email : <?php echo $row['email']; ?></p>
                  </div>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-2">
                <div class="mid">
                  <p>Resume of <?php echo $row['name']; ?></p>
                </div>
              </div>
              
              <div class="col-md-5 col-sm-5 col-xs-5">
                <div class="right">
                  <div class="imgbox">
                    <img src="images/<?php echo $row['photo']; ?>">
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <h4>About</h4>
                <p><?php echo $row['yourself']; ?></p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h4>Experience</h4>
                <p><?php echo $row['experience']; ?></p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h4>Personal Informations</h4>
                <table id="myTable" class="table table-hover table-striped">
                   <tbody>
                      <tr>
                          <td>Name  </td>
                          <td>: <?php echo $row['name']; ?> </td>
                      </tr>
                      <tr>
                          <td>ID  </td>
                          <td>: <?php echo $row['student_id']; ?> </td>
                      </tr>
                      <tr>
                          <td>Birthdate  </td>
                          <td>: <?php echo $row['birthdate']; ?> </td>
                      </tr>
                      <tr>
                          <td>Phone  </td>
                          <td>: <?php echo $row['phone']; ?> </td>
                      </tr>
                      <tr>
                          <td>Email  </td>
                          <td>: <?php echo $row['email']; ?> </td>
                      </tr>
                      <tr>
                          <td>Bloodgroup  </td>
                          <td>: <?php echo $row['bloodgroup']; ?> </td>
                      </tr>
                      <tr>
                          <td>Gender  </td>
                          <td>: <?php echo $row['gender']; ?> </td>
                      </tr>
                      <tr>
                          <td>jobstatus  </td>
                          <td>: <?php echo $row['jobstatus']; ?> </td>
                      </tr>
                      <tr>
                          <td>designation  </td>
                          <td>: <?php echo $row['designation']; ?> </td>
                      </tr>
                      <tr>
                          <td>working_platform  </td>
                          <td>: <?php echo $row['working_platform']; ?> </td>
                      </tr>
                      <tr>
                          <td>interested_sector  </td>
                          <td>: <?php echo $row['interested_sector']; ?> </td>
                      </tr>
                      
                    </tbody>
                </table>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <h4>Training Info</h4>

                <table id="myTable" class="table table-hover table-striped">
                  <thead>
                    <th>SL</th>
                    <th>Training Name</th>
                    <th>Organization</th>
                    <th>Year</th>
                  </thead>
                   <tbody>
                      <tr>
                          <td>1  </td>
                          <td>  </td>
                          <td>  </td>
                          <td>  </td>
                      </tr>
                      <tr>
                          <td>2  </td>
                          <td>  </td>
                          <td>  </td>
                          <td>  </td>
                      </tr>
                      <tr>
                          <td>3  </td>
                          <td>  </td>
                          <td>  </td>
                          <td>  </td>
                      </tr>
                      
                      
                      
                      
                      
                    </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      <?php } ?>

      </div>

      <?php include'inc/footer.php' ?>


