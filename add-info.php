<?php
   error_reporting(0);
    $msg= "";
    $msg1 ="";
   include 'connection/db.php';
   include 'model/add-infoModel.php';
   
 ?>

<?php include 'inc/header.php'; ?>
  
     
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
          Bangladesh University of Business And Technology <br>
          <span style="font-size: 14px; text-transform: uppercase;"> Intake : 32</span>
        </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
         <img style="width: 60px;" src="images/logo.png">
        </div>
      </div>

      
      
      <h2 class="title">Add Informations</h2>
      <span id="mydiv">
        <?php 
          echo $msg;
       ?>
       </span>
       <?php echo $msg1; ?>
      <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Full ID <span class="required">*</span></label>
                <input  class="input--style-4" type="text" name="student_id" required="required">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Full Name</label>
                <input class="input--style-4" type="text" name="name">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Birthday</label>
                <input class="input--style-4" type="date" name="birthdate" data-date-format="mm/dd/yyyy">
              </div>
            </div>
        </div>
        <div  class="row">
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Phone</label>
                <input class="input--style-4" type="text" name="phone">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Email <span class="required">*</span></label>
                <input class="input--style-4" type="text" name="email" required="required">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Password <span class="required">*</span></label>
                <input class="input--style-4" type="password" name="password" required="required" placeholder="minimum 6 characters long">
              </div>
            </div>
        </div>
        <div  class="row">
            <div class="col-md-4">
              <div class="input-groupgender">
                  <label class="label">Blood Group <span class="required">*</span></label>
                    <select required="required" class="input--style-5" name="bloodgroup">
                          <option disabled="disabled" selected="selected">Choose Blood Group</option>
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
                <input class="input--style-4" type="text" name="jobstatus">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Designation</label>
                <input class="input--style-4" type="text" name="designation">
              </div>
            </div>
        </div>

        <div  class="row">
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Current Working Platform </label>
                <input class="input--style-4" type="text" name="working_platform">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Skills <span class="required">*</span></label>
                <input class="input--style-4" type="text" name="skill" required="required">
              </div>
            </div>
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Interested Sector <span class="required">*</span></label>
                <input class="input--style-4" type="text" name="interested_sector" required="required">
              </div>
            </div>
        </div>

        <div  class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label class="label" for="exampleFormControlTextarea1">Experience <span class="optional">Optional</span></label>
                <textarea name="experience" class="form-control" id="exampleFormControlTextarea1" placeholder="Write About your Working Experience, Max-50 Words"></textarea>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="input-groupgender">
                <label class="label">Gender <span class="required">*</span></label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                  <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                  <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
              </div>
            </div>
        </div>

        <div  class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label class="label" for="exampleFormControlTextarea1">Write something About yourself</label>
                <textarea name="yourself" class="form-control" id="exampleFormControlTextarea1" placeholder="Max-50 Words"></textarea>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="input-group">
                <label class="label">Photo</label>
                <input class="input--style-photo" type="file" name="photo">
              </div>
            </div>
        </div>

        <div class="p-t-15">
            <button class="btn btn--radius-2 btn--blue" type="submit" name="save">Submit</button>
        </div>
        
        </form>
        

      <?php include'inc/footer.php' ?>


