<?php 
   
   if (isset($_POST['save'])) {

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


      if ($std==$student_id) {
         $msg1= "<div class='alert alert-warning'><strong>ID Already Exist</strong></div>";

      }
      elseif ($student_id>18192203090 || $student_id<=18192203000) {
         $msg1= "<div class='alert alert-warning'><strong>ID Invalid</strong></div>";
      }
      elseif (is_int($student_id) == false) {
         $msg1= "<div class='alert alert-warning'><strong>ID Not Must Be String</strong></div>";
      }
      elseif ($emailid == $email) {
         $msg1= "<div class='alert alert-warning'><strong>Email Is Exist</strong></div>";
      }
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
         $msg1= "<div class='alert alert-warning'><strong>Experience must not be >50 words</strong></div>";
      }
       elseif (str_word_count($yourself)>50) {
         $msg1= "<div class='alert alert-warning'><strong>Yourself must not be >50 words</strong></div>";
      }
      else{

         $sql4 = "INSERT INTO studentinfo(student_id,name,birthdate,phone,email,password,bloodgroup,jobstatus,designation,working_platform,skill,interested_sector,experience,gender,yourself,photo) value('$student_id','$name','$birthdate','$phone','$email','$password','$bloodgroup','$jobstatus','$designation','$working_platform','$skill','$interested_sector','$experience','$gender','$yourself','$photo')";
          mysqli_query($cn,$sql4);
          $msg= "<div class='alert alert-success'><strong>Data inserted success</strong></div>";


        

     }

  } 

 ?>