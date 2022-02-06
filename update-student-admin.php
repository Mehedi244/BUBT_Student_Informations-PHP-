<?php
   error_reporting(0);
    $msg= "";
    $msg1 ="";
   include 'connection/db.php';
   //include 'model/update-studentModel.php';

   session_start();
    if(isset($_GET['out'])){
      session_destroy();
      header("location: admin.php");
    }

  if(!$_SESSION['user']){
    session_destroy();
    header("location: admin.php");
  }


   if (isset($_POST['update'])) {

      $i = $_POST['id'];



      $student_id = (int)$_POST['student_id'];
      $name = $_POST['name'];
      $birthdate = $_POST['birthdate'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $bloodgroup = $_POST['bloodgroup'];
      $jobstatus = $_POST['jobstatus'];
      $designation = $_POST['designation'];
      $working_platform = $_POST['working_platform'];
      $skill = $_POST['skill'];
      $interested_sector = $_POST['interested_sector'];
      $experience = $_POST['experience'];
      $gender = $_POST['gender'];
      $yourself = $_POST['yourself'];

      // img
      $photo =$_FILES['photo']['name'];
      $photo_size =$_FILES['photo']['size'];
      $photo_type =$_FILES['photo']['type'];
      $photo_temp_loc =$_FILES['photo']['tmp_name'];
      $photo_store = "images/".$photo;
      move_uploaded_file($photo_temp_loc, $photo_store);

      $sql1 = "SELECT * FROM studentinfo WHERE student_id = '$student_id'";
      $run1 = mysqli_query($cn,$sql1);
      $row = mysqli_fetch_array($run1);
      $std=$row['student_id'];


      $sql1 = "SELECT * FROM studentinfo WHERE email = '$email'";
      $run1 = mysqli_query($cn,$sql1);
      $row2 = mysqli_fetch_array($run1);
      $emailid=$row2['email'];

      


      // if ($std==$student_id) {
        
      //       $msg1= "<div class='alert alert-warning'><strong>ID Already Exist</strong></div>";
     
      // }

      if ($student_id>18192203090 || $student_id<=18192203000) {
         $msg1= "<div class='alert alert-warning'><strong>ID Invalid</strong></div>";
      }
      elseif (is_int($student_id) == false) {
         $msg1= "<div class='alert alert-warning'><strong>ID Not Must Be String</strong></div>";
      }
      // elseif ($emailid == $email) {
      //    $msg1= "<div class='alert alert-warning'><strong>Email Is Exist</strong></div>";
      // }
      elseif (filter_var($email,FILTER_VALIDATE_EMAIL)===false) {
          $msg1= "<div class='alert alert-warning'><strong>Email Id Invalid</strong></div>";
      }
      elseif (empty($_POST['password'])) {
          $msg1= "<div class='alert alert-warning'><strong>Password Must Not be Empty</strong></div>";
      }
      elseif (strlen($password) <6) {
          $msg1= "<div class='alert alert-warning'><strong>Passwords must be at least 6 characters long</strong></div>";
      }
      elseif (str_word_count($experience)>50) {
         $msg1= "<div class='alert alert-warning'><strong>Experience must not be >300 words</strong></div>";
      }
       elseif (str_word_count($yourself)>50) {
         $msg1= "<div class='alert alert-warning'><strong>Yourself must not be >300 words</strong></div>";
      }
      else{

         $sql4 = "UPDATE studentinfo  SET student_id='$student_id',name='$name',birthdate='$birthdate',phone='$phone',email='$email',password='$password',bloodgroup='$bloodgroup',jobstatus='$jobstatus',designation='$designation',working_platform='$working_platform',skill='$skill',interested_sector='$interested_sector',experience='$experience',gender='$gender',yourself='$yourself',photo='$photo' WHERE id = '$i'";

          mysqli_query($cn,$sql4);
          $msg= "<div class='alert alert-success'><strong>Data Update success</strong></div>";



    }

  } 
 ?>

<?php include 'inc/adminheader.php'; ?>

<style type="text/css">
  #studentimg {
    width: 33px;
    margin: 0px 0px 4px 20px;
    /* float: right; */
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

      
      
      <h2 class="title">Update Informations</h2>
      <?php 

        if (isset($_GET['edit'])) {
          $i = $_GET['edit'];
          $GLOBALS['i'];

          $sql2 = "SELECT * FROM studentinfo WHERE id = '$i'";
          $run2 = mysqli_query($cn,$sql2);
          $row = mysqli_fetch_array($run2);

       ?>
      <span id="mydiv">
        <?php 
          echo $msg;
       ?>
       </span>
       <?php echo $msg1; ?>
      <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Full ID <span class="required">*</span></label>
                <input value="<?php echo $row['student_id']; ?>"  class="input--style-4" type="text" name="student_id" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Full Name</label>
                <input value="<?php echo $row['name']; ?>" class="input--style-4" type="text" name="name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Birthday</label>
                <input value="<?php echo $row['birthdate']; ?>" class="input--style-4" type="date" name="birthdate" data-date-format="mm/dd/yyyy">
              </div>
            </div>
        </div>
        <div  class="row">
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Phone</label>
                <input value="<?php echo $row['phone']; ?>" class="input--style-4" type="text" name="phone">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Email <span class="required">*</span></label>
                <input value="<?php echo $row['email']; ?>" class="input--style-4" type="text" name="email" >
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Password <span class="required">*</span></label>
                <input value="<?php echo $row['password']; ?>" class="input--style-4" type="password" name="password" required="required">
              </div>
            </div>
        </div>
        <div  class="row">
            <div class="col-md-4">
              <div class="input-groupgender">
                  <label class="label">Blood Group <span class="required">*</span></label>
                    <select required="required" class="input--style-5" name="bloodgroup">
                          <option disabled="disabled" value="<?php echo $row['bloodgroup']; ?>" selected="selected"><?php echo $row['bloodgroup']; ?></option>
                          
                          <option value="A+">A+</option>
                          <option value="A-">A-</option>
                          <option value="AB+">AB+</option>
                          <option value="AB-">AB-</option>
                          <option value="B+">B+</option>
                          <option value="B-">B-</option>
                          <option value="o+">o+</option>
                          <option value="o-">o-</option>
                    </select>
                  </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Current Job Status </label>
                <input value="<?php echo $row['jobstatus']; ?>" class="input--style-4" type="text" name="jobstatus">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Designation</label>
                <input value="<?php echo $row['designation']; ?>" class="input--style-4" type="text" name="designation">
              </div>
            </div>
        </div>

        <div  class="row">
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Current Working Platform </label>
                <input value="<?php echo $row['working_platform']; ?>" class="input--style-4" type="text" name="working_platform">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Skills <span class="required">*</span></label>
                <input value="<?php echo $row['skill']; ?>" class="input--style-4" type="text" name="skill" required="required">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Interested Sector <span class="required">*</span></label>
                <input value="<?php echo $row['interested_sector']; ?>" class="input--style-4" type="text" name="interested_sector" required="required">
              </div>
            </div>
        </div>

        <div  class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label class="label" for="exampleFormControlTextarea1">Experience <span class="optional">Optional</span></label>
                <textarea value="<?php echo $row['experience']; ?>" name="experience" class="form-control" id="exampleFormControlTextarea1" placeholder="Write About your Working Experience, Max-50 Words"><?php echo $row['experience']; ?></textarea>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="input-groupgender">
                  <label class="label">Gender: <span class="required">*</span></label>
                    <select required="required" class="input--style-5" name="gender">
                          <option disabled="disabled" value="<?php echo $row['gender']; ?>" selected="selected"><?php echo $row['gender']; ?></option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          
                    </select>
                  </div>
            </div>
        </div>

        <div  class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label class="label" for="exampleFormControlTextarea1">Write something About yourself</label>
                <textarea value="<?php echo $row['yourself']; ?>" name="yourself" class="form-control" id="exampleFormControlTextarea1" placeholder="Max-50 Words"><?php echo $row['yourself']; ?></textarea>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="input-group">
               <label class="label">Photo</label> <img id="studentimg" src="images/<?php echo $row['photo']; ?>">
                
                <input value="<?php echo $row['photo'] ?>" class="input--style-photo" type="file" name="photo">
                
              </div>
            </div>
        </div>

        <div class="p-t-15">
            <button class="btn btn--radius-2 btn--blue" type="submit" name="update">update</button>
            <a href="adminindex.php"> Goto Profile</a>
        </div>
        
        </form>
        <?php } ?>

      <?php include'inc/footer.php' ?>


